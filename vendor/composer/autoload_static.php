<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit43c1f3541def4f9ff0ada6f584a6da15
{
    public static $files = array (
        'd8d728fa37c121b1d2552a150ff9a594' => __DIR__ . '/../..' . '/app/framework/classes/custom.php',
        'db2137a4f4eef9401a1f96ee1a0dfd45' => __DIR__ . '/../..' . '/app/framework/classes/pages.php',
        'c32c256acca8c892264ba6d783c8321d' => __DIR__ . '/../..' . '/app/framework/classes/validade.php',
        'c603b92c9158b1646cd6a496de4217e1' => __DIR__ . '/../..' . '/app/framework/database/connection.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit43c1f3541def4f9ff0ada6f584a6da15::$classMap;

        }, null, ClassLoader::class);
    }
}