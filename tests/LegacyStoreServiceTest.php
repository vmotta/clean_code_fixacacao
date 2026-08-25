<?php

declare(strict_types=1);

namespace CleanCodeLab\Tests;

use CleanCodeLab\Legacy\Customer;
use CleanCodeLab\Legacy\LegacyStoreService;
use CleanCodeLab\Legacy\Product;
use CleanCodeLab\Legacy\SaleItem;
use PHPUnit\Framework\TestCase;
use RuntimeException;

final class LegacyStoreServiceTest extends TestCase
{
    private LegacyStoreService $service;

    protected function setUp(): void
    {
        $this->service = new LegacyStoreService();
    }

    public function testCommonCustomerInEsPaysBasicShipping(): void
    {
        $result = $this->service->process(
            new Customer('Ana', '12345678901', 'COMUM', 'ES'),
            [new SaleItem(new Product(1, 'Teclado', 100.0), 2)],
        );

        self::assertEqualsWithDelta(200.0, $result->subtotal, 0.001);
        self::assertEqualsWithDelta(0.0, $result->discount, 0.001);
        self::assertEqualsWithDelta(10.0, $result->shipping, 0.001);
        self::assertEqualsWithDelta(210.0, $result->total, 0.001);
    }

    public function testVipCustomerReceivesTenPercentDiscount(): void
    {
        $result = $this->service->process(
            new Customer('Bruno', '12345678901', 'VIP', 'SP'),
            [new SaleItem(new Product(2, 'Monitor', 200.0), 2)],
        );

        self::assertEqualsWithDelta(40.0, $result->discount, 0.001);
        self::assertEqualsWithDelta(20.0, $result->shipping, 0.001);
        self::assertEqualsWithDelta(380.0, $result->total, 0.001);
    }

    public function testPremiumLargePurchaseReceivesTierAndVolumeDiscountWithFreeShipping(): void
    {
        $result = $this->service->process(
            new Customer('Carla', '12345678901', 'PREMIUM', 'MG'),
            [new SaleItem(new Product(3, 'Notebook', 600.0), 2)],
        );

        self::assertEqualsWithDelta(1200.0, $result->subtotal, 0.001);
        self::assertEqualsWithDelta(240.0, $result->discount, 0.001);
        self::assertEqualsWithDelta(0.0, $result->shipping, 0.001);
        self::assertEqualsWithDelta(960.0, $result->total, 0.001);
    }

    public function testClean10CouponAddsTenPercentDiscountAndRespectsThirtyPercentCap(): void
    {
        $result = $this->service->process(
            new Customer('Davi', '12345678901', 'PREMIUM', 'RJ'),
            [new SaleItem(new Product(4, 'Servidor', 600.0), 2)],
            false,
            'CLEAN10',
        );

        self::assertEqualsWithDelta(360.0, $result->discount, 0.001);
        self::assertEqualsWithDelta(840.0, $result->total, 0.001);
    }

    public function testUnknownCouponDoesNotChangeSale(): void
    {
        $result = $this->service->process(
            new Customer('Eva', '12345678901', 'COMUM', 'ES'),
            [new SaleItem(new Product(5, 'Mouse', 100.0), 1)],
            false,
            'NAO-EXISTE',
        );

        self::assertEqualsWithDelta(0.0, $result->discount, 0.001);
        self::assertEqualsWithDelta(110.0, $result->total, 0.001);
    }

    public function testExpressShippingAddsFifteenReaisBeforeFreeShippingRule(): void
    {
        $result = $this->service->process(
            new Customer('Fabio', '12345678901', 'COMUM', 'MG'),
            [new SaleItem(new Product(6, 'Cabo', 100.0), 1)],
            true,
        );

        self::assertEqualsWithDelta(35.0, $result->shipping, 0.001);
        self::assertEqualsWithDelta(135.0, $result->total, 0.001);
    }

    public function testEmptySaleThrowsLegacyGenericError(): void
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Erro');

        $this->service->process(
            new Customer('Gabi', '12345678901', 'COMUM', 'ES'),
            [],
        );
    }

    public function testInvalidQuantityThrowsLegacyGenericError(): void
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Erro');

        $this->service->process(
            new Customer('Heitor', '12345678901', 'COMUM', 'ES'),
            [new SaleItem(new Product(7, 'Adaptador', 50.0), 0)],
        );
    }

    public function testReceiptKeepsEssentialSaleInformation(): void
    {
        $result = $this->service->process(
            new Customer('Iara', '12345678901', 'VIP', 'ES'),
            [new SaleItem(new Product(8, 'Headset', 100.0), 2)],
        );

        self::assertStringContainsString('LEGACY STORE', $result->receipt);
        self::assertStringContainsString('Cliente: Iara', $result->receipt);
        self::assertStringContainsString('Subtotal: R$ 200,00', $result->receipt);
        self::assertStringContainsString('Desconto: R$ 20,00', $result->receipt);
        self::assertStringContainsString('Total: R$ 190,00', $result->receipt);
    }
}
