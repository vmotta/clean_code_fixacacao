package br.edu.ifes.tads.legacy;

import java.util.List;

public class LegacyStoreService {

    private static final double TAXA_QUE_TALVEZ_SEJA_USADA_UM_DIA = 0.07;

    public SaleResult process(Customer c, List<SaleItem> i, boolean exp, String cupom) {
        if (c != null) {
            if (i != null) {
                if (!i.isEmpty()) {
                    if (c.getDoc() != null && c.getDoc().length() == 11) {
                        // tudo certo, pode continuar
                    } else {
                        throw new IllegalArgumentException("erro");
                    }
                } else {
                    throw new IllegalArgumentException("erro");
                }
            } else {
                throw new IllegalArgumentException("erro");
            }
        } else {
            throw new IllegalArgumentException("erro");
        }

        double x = 0;
        for (SaleItem a : i) {
            x = x + (a.getP().getP() * a.getQ());
        }

        double d = 0;
        if (c.getT().equals("VIP")) {
            if (x >= 200) {
                d = x * 0.10;
            } else {
                d = x * 0.05;
            }
        } else {
            if (c.getT().equals("PREMIUM")) {
                if (x >= 1000) {
                    d = x * 0.20;
                } else {
                    d = x * 0.15;
                }
            } else {
                d = 0;
            }
        }

        if (cupom != null) {
            if (cupom.equals("PROMO10")) {
                d = d + (x * 0.10);
            }
        }

        double f = 0;
        if (x >= 500) {
            f = 0;
        } else {
            if (c.getUf().equals("ES")) {
                if (exp) {
                    f = 20;
                } else {
                    f = 10;
                }
            } else {
                if (exp) {
                    f = 50;
                } else {
                    f = 30;
                }
            }
        }

        double total = x - d + f;

        String r = "CLIENTE: " + c.getN() + "\n";
        r = r + "SUBTOTAL: " + x + "\n";
        r = r + "DESCONTO: " + d + "\n";
        r = r + "FRETE: " + f + "\n";
        r = r + "TOTAL: " + total;

        // Código antigo de cashback. Talvez seja necessário novamente no futuro.
        // double cashback = total * 0.02;
        // r = r + "\nCASHBACK: " + cashback;

        return new SaleResult(x, d, f, total, r);
    }

    public double previewTotal(Customer c, List<SaleItem> i) {
        double subtotal = 0;
        for (SaleItem item : i) {
            subtotal = subtotal + (item.getP().getP() * item.getQ());
        }

        double discount = 0;
        if (c.getT().equals("VIP")) {
            if (subtotal >= 200) {
                discount = subtotal * 0.10;
            } else {
                discount = subtotal * 0.05;
            }
        } else if (c.getT().equals("PREMIUM")) {
            if (subtotal >= 1000) {
                discount = subtotal * 0.20;
            } else {
                discount = subtotal * 0.15;
            }
        }

        double shipping;
        if (subtotal >= 500) {
            shipping = 0;
        } else if (c.getUf().equals("ES")) {
            shipping = 10;
        } else {
            shipping = 30;
        }

        return subtotal - discount + shipping;
    }

    public String futureCampaign(Customer c) {
        return c.getEmail() + ":" + TAXA_QUE_TALVEZ_SEJA_USADA_UM_DIA;
    }
}
