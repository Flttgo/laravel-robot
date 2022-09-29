<?php

namespace Fltttgw\LaravelRobot;

use Illuminate\Support\ServiceProvider;
use Mitoop\Robot\Robot;

class RobotServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(Robot::class, static function () {

            return new Robot(config('robot', __DIR__.'/config/robot.php'));
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishConfigs();
        }
    }

    protected function publishConfigs(): void
    {
        $this->publishes([
            __DIR__.'/config/robot.php' => config_path('robot.php'),
        ], 'robot');
    }
}
