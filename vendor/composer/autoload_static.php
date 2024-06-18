<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit722216232bb439e3e8f18604b1ed9dc9
{
    public static $files = array (
        '9467ee09f6d86374e4e8e391d17ee888' => __DIR__ . '/../..' . '/src/helpers/view.php',
        'e02c45b67a3588ffda7b6d962cb0274a' => __DIR__ . '/../..' . '/src/helpers/url.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Php\\Boilerplate\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Php\\Boilerplate\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit722216232bb439e3e8f18604b1ed9dc9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit722216232bb439e3e8f18604b1ed9dc9::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit722216232bb439e3e8f18604b1ed9dc9::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit722216232bb439e3e8f18604b1ed9dc9::$classMap;

        }, null, ClassLoader::class);
    }
}
