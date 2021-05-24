<?php

declare(strict_types=1);

namespace Practice\Products;

class Laptop extends Computer {
    /**
     * @var string
     */
    public $battery;

    /**
     * @var  string
     */
    public $weight;

    public function __construct(
        string $brand,
        string $name,
        string $type,
        string $cpu,
        string $memory,
        string $battery,
        string $weight
    ) {
        $this->brand = $brand;
        $this->name = $name;
        $this->type = $type;
        $this->cpu = $cpu;
        $this->memory = $memory;
        $this->battery = $battery;
        $this->weight = $weight;
    }
}