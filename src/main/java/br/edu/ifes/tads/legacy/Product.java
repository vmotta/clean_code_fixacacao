package br.edu.ifes.tads.legacy;

public class Product {
    private String n;
    private double p;

    public Product(String name, double price) {
        this.n = name;
        this.p = price;
    }

    public String getN() { return n; }
    public void setN(String n) { this.n = n; }
    public double getP() { return p; }
    public void setP(double p) { this.p = p; }
}
