<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitba4d69c3b31bd44059fe8597db0111f9
{
    public static $files = array (
        '038580858a341d2eea41178f3b0eeca3' => __DIR__ . '/../..' . '/Server/Config/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Server\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Server\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Server',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitba4d69c3b31bd44059fe8597db0111f9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitba4d69c3b31bd44059fe8597db0111f9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitba4d69c3b31bd44059fe8597db0111f9::$classMap;

        }, null, ClassLoader::class);
    }
}
