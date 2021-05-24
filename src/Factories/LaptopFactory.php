<?php

declare(strict_types=1);

namespace Practice\Factories;

use Practice\products\Laptop;

Class LaptopFactory implements ComputerFactory {
    public function createComputer(): array
    {
        $computers[] = new Laptop(
            'Dell',
            'XPS 13',
            'laptop',
            'Intel Core i3-1115G4',
            '8GB LPDDR4x 4267MHz',
            '52 WHr',
            '1.16kg'
        );

        $computers[] = new Laptop(
            'Dell',
            'Alienware m15 R4',
            'laptop',
            'Intel Core i9-10980HK',
            '32GB DDR4 2933MHz',
            '86 WHr',
            '2.11kg'
        );

        $computers[] = new Laptop(
            'Apple',
            'MacBook Air',
            'laptop',
            'Apple M1 chip',
            '8GB',
            '49.9 WHr',
            '1.29kg'
        );

        $computers[] = new Laptop(
            'FUJITSU',
            'LIFEBOOK A3510',
            'laptop',
            '32GB',
            '32GB',
            '45 WHr',
            '1.95kg'
        );

        return $computers;
    }
}
