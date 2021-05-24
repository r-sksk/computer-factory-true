<?php

declare(strict_types=1);

namespace Practice\Products;

class Desktop extends Computer {
    public function __construct(
        string $brand,
        string $name,
        string $type,
        string $cpu,
        string $memory
    ) {
        $this->brand = $brand;
        $this->name = $name;
        $this->type = $type;
        $this->cpu = $cpu;
        $this->memory = $memory;
    }
}