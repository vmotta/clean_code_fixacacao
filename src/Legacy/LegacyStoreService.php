<?php

declare(strict_types=1);

namespace CleanCodeLab\Legacy;

use RuntimeException;

final class LegacyStoreService
{
    /**
     * O código desta classe é propositalmente problemático.
     * Ele é o objeto de estudo do laboratório. Não "corrija tudo" antes das lições.
     *
     * @param array<int, SaleItem> $it
     */
    public function process(Customer $c, array $it, bool $exp = false, ?string $cup = null): SaleResult
    {
        // valida os dados para não dar problema depois
        if ($c->n === '' || strlen(preg_replace('/\D/', '', $c->cpf) ?? '') !== 11) {
            throw new RuntimeException('Erro');
        } else {
            if (count($it) === 0) {
                throw new RuntimeException('Erro');
            }
        }

        $s = 0.0;
        foreach ($it as $i) {
            if (!$i instanceof SaleItem || $i->q <= 0 || $i->p->p < 0) {
                throw new RuntimeException('Erro');
            }
            $s += $i->p->p * $i->q;
        }

        $d = 0.0;
        if ($c->t === 'VIP') {
            $d = $s * 0.10;
        } else {
            if ($c->t === 'PREMIUM') {
                $d = $s * 0.15;
            } else {
                if ($c->t === 'COMUM') {
                    $d = 0.0;
                } else {
                    throw new RuntimeException('Erro');
                }
            }
        }

        if ($s >= 1000) {
            $d = $d + ($s * 0.05);
        }

        if ($cup !== null) {
            if ($cup === 'CLEAN10') {
                $d = $d + ($s * 0.10);
            } else {
                if ($cup === '') {
                    $cup = null;
                }
            }
        }

        if ($d > $s * 0.30) {
            $d = $s * 0.30;
        }

        $f = 0.0;
        if ($c->uf === 'ES') {
            $f = 10.0;
            if ($exp === true) {
                $f = $f + 15.0;
            }
        } else {
            if ($c->uf === 'MG' || $c->uf === 'RJ' || $c->uf === 'SP') {
                $f = 20.0;
                if ($exp === true) {
                    $f = $f + 15.0;
                }
            } else {
                $f = 40.0;
                if ($exp === true) {
                    $f = $f + 15.0;
                }
            }
        }

        if (($s - $d) >= 500) {
            $f = 0.0;
        }

        $tot = $s - $d + $f;

        // recibo da venda
        $r = "LEGACY STORE\n";
        $r .= 'Cliente: ' . $c->n . "\n";
        $r .= 'Tipo: ' . $c->t . "\n";
        $r .= 'Subtotal: R$ ' . number_format($s, 2, ',', '.') . "\n";
        $r .= 'Desconto: R$ ' . number_format($d, 2, ',', '.') . "\n";
        $r .= 'Frete: R$ ' . number_format($f, 2, ',', '.') . "\n";
        $r .= 'Total: R$ ' . number_format($tot, 2, ',', '.') . "\n";

        $futureTax = 0.0; // talvez seja usado quando a loja crescer

        return new SaleResult($s, $d, $f, $tot, $r);
    }

    private function futureLoyaltyPoints(float $total): int
    {
        return (int) floor($total / 10);
    }
}
