<?php

declare(strict_types=1);

namespace CleanCodeLab\Legacy;

final class Product
{
    public function __construct(
        public int $id,
        public string $n,
        public float $p,
    ) {
    }
}
