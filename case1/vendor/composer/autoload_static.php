<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit605bc78e9d8558759b3058d0b3a93111
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit605bc78e9d8558759b3058d0b3a93111::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit605bc78e9d8558759b3058d0b3a93111::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit605bc78e9d8558759b3058d0b3a93111::$classMap;

        }, null, ClassLoader::class);
    }
}
