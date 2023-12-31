<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48218d2cbe2265809afe1e6b891d019a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Picqer\\Barcode\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Picqer\\Barcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/picqer/php-barcode-generator/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit48218d2cbe2265809afe1e6b891d019a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit48218d2cbe2265809afe1e6b891d019a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit48218d2cbe2265809afe1e6b891d019a::$classMap;

        }, null, ClassLoader::class);
    }
}
