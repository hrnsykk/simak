<?php

namespace Hrnsykk\Simak\Providers;

use Hrnsykk\Simak\Console\Commands\DataTransferObjectMakeCommand;
use Illuminate\Support\ServiceProvider;

final class SimakMainServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands(
                commands: [
                    DataTransferObjectMakeCommand::class,
                ],
            );

            $this->publishes([
                __DIR__.'/../../config/simak.php' => config_path('simak.php'),
            ], 'simak-config');
        }
    }
}