<?php

namespace Hrnsykk\Simak\Tests;

use Hrnsykk\Simak\Providers\SimakMainServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function getPackageProviders($app) : array
    {
        return [SimakMainServiceProvider::class];
    }
}