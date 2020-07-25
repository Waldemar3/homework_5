<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37fde96337ba4d0139e3aee686ea43bb
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit37fde96337ba4d0139e3aee686ea43bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37fde96337ba4d0139e3aee686ea43bb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}