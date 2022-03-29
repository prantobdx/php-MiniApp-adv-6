<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2e7368e84fb6685b1c7c9cb987bbdd26
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2e7368e84fb6685b1c7c9cb987bbdd26::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2e7368e84fb6685b1c7c9cb987bbdd26::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2e7368e84fb6685b1c7c9cb987bbdd26::$classMap;

        }, null, ClassLoader::class);
    }
}
