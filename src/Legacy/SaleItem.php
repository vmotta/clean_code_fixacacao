<?php

declare(strict_types=1);

namespace CleanCodeLab\Legacy;

final class SaleItem
{
    public function __construct(
        public Product $p,
        public int $q,
    ) {
    }
}
