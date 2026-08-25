<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use CleanCodeLab\Legacy\Customer;
use CleanCodeLab\Legacy\LegacyStoreService;
use CleanCodeLab\Legacy\Product;
use CleanCodeLab\Legacy\SaleItem;

$service = new LegacyStoreService();
$result = $service->process(
    new Customer('Cliente Exemplo', '12345678901', 'VIP', 'ES'),
    [new SaleItem(new Product(1, 'Teclado', 120.0), 2)],
);

echo $result->receipt;
