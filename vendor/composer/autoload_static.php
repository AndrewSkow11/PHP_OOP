<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6d14ca48f921f55f21b89fcc864ca6ab
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6d14ca48f921f55f21b89fcc864ca6ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6d14ca48f921f55f21b89fcc864ca6ab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6d14ca48f921f55f21b89fcc864ca6ab::$classMap;

        }, null, ClassLoader::class);
    }
}
