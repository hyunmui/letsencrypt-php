<?php

namespace App;

/**
 * ConsoleRunner
 * 
 * @author Martin Seon
 * @package App
 */
class ConsoleRunner
{
    public static function run($argv)
    {
        $sslGenerator = new InternalServerSslGenerator();
        $sslGenerator->generate();
    }
}

/** End of ConsoleRunner.php */
