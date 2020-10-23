<?php

namespace BK\Package;

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Console\Application;
use BK\Package\Command\CreatorCommand;


class Creator
{
    public static function boot($folder)
    {
        try {
            $app = new Application('BK Creator', '0.1');
            $app->add(new CreatorCommand($folder));

            $app->run();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
