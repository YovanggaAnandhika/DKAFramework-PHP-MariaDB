<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4bed8dee4f67b67a27bd766994dd0ff9
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dkaframework\\Mariadb\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dkaframework\\Mariadb\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4bed8dee4f67b67a27bd766994dd0ff9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4bed8dee4f67b67a27bd766994dd0ff9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4bed8dee4f67b67a27bd766994dd0ff9::$classMap;

        }, null, ClassLoader::class);
    }
}
