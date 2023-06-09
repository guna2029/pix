<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb99ece5e7fc828943e7a558bdc7237d4
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mpdf\\QrCode\\' => 12,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mpdf\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpdf/qrcode/src',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb99ece5e7fc828943e7a558bdc7237d4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb99ece5e7fc828943e7a558bdc7237d4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb99ece5e7fc828943e7a558bdc7237d4::$classMap;

        }, null, ClassLoader::class);
    }
}
