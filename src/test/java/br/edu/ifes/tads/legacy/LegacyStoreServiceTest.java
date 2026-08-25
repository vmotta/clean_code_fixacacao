package br.edu.ifes.tads.legacy;

import org.junit.jupiter.api.Test;

import java.util.List;

import static org.junit.jupiter.api.Assertions.*;

class LegacyStoreServiceTest {

    private final LegacyStoreService service = new LegacyStoreService();

    @Test
    void normalCustomerInEsPaysNoDiscountAndStandardShipping() {
        Customer customer = customer("NORMAL", "ES");
        List<SaleItem> items = List.of(item("Teclado", 100, 2));

        SaleResult result = service.process(customer, items, false, null);

        assertAll(
                () -> assertEquals(200.0, result.getSubtotal(), 0.001),
                () -> assertEquals(0.0, result.getDiscount(), 0.001),
                () -> assertEquals(10.0, result.getShipping(), 0.001),
                () -> assertEquals(210.0, result.getTotal(), 0.001)
        );
    }

    @Test
    void vipCustomerGetsTenPercentDiscountFromTwoHundred() {
        Customer customer = customer("VIP", "ES");
        List<SaleItem> items = List.of(item("Teclado", 100, 2));

        SaleResult result = service.process(customer, items, false, null);

        assertEquals(20.0, result.getDiscount(), 0.001);
        assertEquals(190.0, result.getTotal(), 0.001);
    }

    @Test
    void vipCustomerGetsFivePercentDiscountBelowTwoHundred() {
        Customer customer = customer("VIP", "ES");
        List<SaleItem> items = List.of(item("Mouse", 100, 1));

        SaleResult result = service.process(customer, items, false, null);

        assertEquals(5.0, result.getDiscount(), 0.001);
        assertEquals(105.0, result.getTotal(), 0.001);
    }

    @Test
    void premiumCustomerOutsideEsCanUseExpressShipping() {
        Customer customer = customer("PREMIUM", "MG");
        List<SaleItem> items = List.of(item("Mouse", 100, 1));

        SaleResult result = service.process(customer, items, true, null);

        assertEquals(15.0, result.getDiscount(), 0.001);
        assertEquals(50.0, result.getShipping(), 0.001);
        assertEquals(135.0, result.getTotal(), 0.001);
    }

    @Test
    void ordersFromFiveHundredHaveFreeShipping() {
        Customer customer = customer("VIP", "MG");
        List<SaleItem> items = List.of(item("Monitor", 300, 2));

        SaleResult result = service.process(customer, items, true, null);

        assertEquals(0.0, result.getShipping(), 0.001);
        assertEquals(540.0, result.getTotal(), 0.001);
    }

    @Test
    void promo10CouponAddsTenPercentDiscount() {
        Customer customer = customer("NORMAL", "ES");
        List<SaleItem> items = List.of(item("Teclado", 100, 2));

        SaleResult result = service.process(customer, items, false, "PROMO10");

        assertEquals(20.0, result.getDiscount(), 0.001);
        assertEquals(190.0, result.getTotal(), 0.001);
    }

    @Test
    void receiptContainsEssentialInformation() {
        Customer customer = customer("NORMAL", "ES");
        List<SaleItem> items = List.of(item("Teclado", 100, 2));

        SaleResult result = service.process(customer, items, false, null);

        assertTrue(result.getReceipt().contains("CLIENTE: Ana"));
        assertTrue(result.getReceipt().contains("TOTAL: 210.0"));
    }

    @Test
    void invalidCpfIsRejected() {
        Customer customer = new Customer("Ana", "NORMAL", "123", "ES", "ana@example.com");

        IllegalArgumentException error = assertThrows(
                IllegalArgumentException.class,
                () -> service.process(customer, List.of(item("Teclado", 100, 1)), false, null)
        );

        assertEquals("erro", error.getMessage());
    }

    @Test
    void previewMatchesCheckoutWhenThereIsNoCouponOrExpressShipping() {
        Customer customer = customer("VIP", "ES");
        List<SaleItem> items = List.of(item("Teclado", 100, 2));

        double preview = service.previewTotal(customer, items);
        SaleResult result = service.process(customer, items, false, null);

        assertEquals(result.getTotal(), preview, 0.001);
    }

    private Customer customer(String type, String state) {
        return new Customer("Ana", type, "12345678901", state, "ana@example.com");
    }

    private SaleItem item(String name, double price, int quantity) {
        return new SaleItem(new Product(name, price), quantity);
    }
}
