<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe6ff779159473478a2965f71a2894a9
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Slim\\' => 5,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'K' => 
        array (
            'Kernel\\' => 7,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
            'Faker\\' => 6,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
            'Config\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Models',
        ),
        'Kernel\\' => 
        array (
            0 => __DIR__ . '/../..' . '/kernel',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Controllers',
        ),
        'Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Config',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe6ff779159473478a2965f71a2894a9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe6ff779159473478a2965f71a2894a9::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfe6ff779159473478a2965f71a2894a9::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}