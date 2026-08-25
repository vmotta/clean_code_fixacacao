<?php

declare(strict_types=1);

namespace CleanCodeLab\Legacy;

final class Customer
{
    public function __construct(
        public string $n,
        public string $cpf,
        public string $t,
        public string $uf,
    ) {
    }
}
