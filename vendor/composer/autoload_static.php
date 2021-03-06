<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0aa958f6a2ea29dc155f943feec81b9a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0aa958f6a2ea29dc155f943feec81b9a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0aa958f6a2ea29dc155f943feec81b9a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0aa958f6a2ea29dc155f943feec81b9a::$classMap;

        }, null, ClassLoader::class);
    }
}
