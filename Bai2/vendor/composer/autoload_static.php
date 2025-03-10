<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1c91e0ba24e6be7fa564e2e26408ac8b
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
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1c91e0ba24e6be7fa564e2e26408ac8b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1c91e0ba24e6be7fa564e2e26408ac8b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1c91e0ba24e6be7fa564e2e26408ac8b::$classMap;

        }, null, ClassLoader::class);
    }
}
