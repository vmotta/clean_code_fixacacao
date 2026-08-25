package br.edu.ifes.tads.legacy;

public class SaleResult {
    private final double subtotal;
    private final double discount;
    private final double shipping;
    private final double total;
    private final String receipt;

    public SaleResult(double subtotal, double discount, double shipping, double total, String receipt) {
        this.subtotal = subtotal;
        this.discount = discount;
        this.shipping = shipping;
        this.total = total;
        this.receipt = receipt;
    }

    public double getSubtotal() { return subtotal; }
    public double getDiscount() { return discount; }
    public double getShipping() { return shipping; }
    public double getTotal() { return total; }
    public String getReceipt() { return receipt; }
}
