<?php

declare(strict_types=1);

namespace Practice\Products;

abstract class Computer {
    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $cpu;

    /**
     * @var string
     */
    public $memory;
}