<?php

namespace Flttgo\LaravelRobot;

use Closure;
use Illuminate\Support\Facades\Facade;
use Mitoop\Robot\Robot as IRobot;
/**
 * @method static IRobot group($group)
 * @method static sendTextMsg($title, $content, $at = [])
 * @method static sendMarkdownMsg($content, $at = [])
 * @method static IRobot extend($name, Closure $closure)
 */
class Robot extends Facade
{
    protected static function getFacadeAccessor()
    {
        return IRobot::class;
    }
}
