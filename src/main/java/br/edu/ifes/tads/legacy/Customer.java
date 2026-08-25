package br.edu.ifes.tads.legacy;

public class Customer {
    private String n;
    private String t;
    private String doc;
    private String uf;
    private String email;

    public Customer(String name, String type, String cpf, String state, String email) {
        this.n = name;
        this.t = type;
        this.doc = cpf;
        this.uf = state;
        this.email = email;
    }

    public String getN() { return n; }
    public void setN(String n) { this.n = n; }
    public String getT() { return t; }
    public void setT(String t) { this.t = t; }
    public String getDoc() { return doc; }
    public void setDoc(String doc) { this.doc = doc; }
    public String getUf() { return uf; }
    public void setUf(String uf) { this.uf = uf; }
    public String getEmail() { return email; }
    public void setEmail(String email) { this.email = email; }
}
