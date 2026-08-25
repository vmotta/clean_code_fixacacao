<?php

declare(strict_types=1);

namespace CleanCodeLab\Legacy;

final class SaleResult
{
    public function __construct(
        public float $subtotal,
        public float $discount,
        public float $shipping,
        public float $total,
        public string $receipt,
    ) {
    }
}
