<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34e2f9fe7880da7579028e4122b6465b
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit34e2f9fe7880da7579028e4122b6465b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit34e2f9fe7880da7579028e4122b6465b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit34e2f9fe7880da7579028e4122b6465b::$classMap;

        }, null, ClassLoader::class);
    }
}
