<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42007b88e82dc21f2ed3dbb1a9b4d9a9
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AbstractFactory\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AbstractFactory\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/AbstractFactory',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit42007b88e82dc21f2ed3dbb1a9b4d9a9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42007b88e82dc21f2ed3dbb1a9b4d9a9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit42007b88e82dc21f2ed3dbb1a9b4d9a9::$classMap;

        }, null, ClassLoader::class);
    }
}
