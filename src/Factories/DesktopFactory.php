<?php

declare(strict_types=1);

namespace Practice\Factories;

use Practice\products\Desktop;

class DesktopFactory implements ComputerFactory {
    public function createComputer(): array
    {
        return new Desktop();
    }
}