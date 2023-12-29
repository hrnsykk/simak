<?php

namespace Hrnsykk\Simak\Tests;

use Hrnsykk\Simak\Console\Commands\DataTransferObjectMakeCommand;

class InitialTest extends TestCase
{
    public function test_my_initial_test()
    {
        $this->artisan(DataTransferObjectMakeCommand::class, ['name'=> 'Test'])
            ->assertSuccessful();
    }
}