package br.edu.ifes.tads.legacy;

public class SaleItem {
    private Product p;
    private int q;

    public SaleItem(Product product, int quantity) {
        this.p = product;
        this.q = quantity;
    }

    public Product getP() { return p; }
    public void setP(Product p) { this.p = p; }
    public int getQ() { return q; }
    public void setQ(int q) { this.q = q; }
}
