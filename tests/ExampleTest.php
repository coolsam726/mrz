<?php

namespace Savannabits\Mrz\Tests;

use Orchestra\Testbench\TestCase;
use Savannabits\Mrz\MrzServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [MrzServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
