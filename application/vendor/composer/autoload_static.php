<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7639635a123dbf6d7ee6975d4dae4523
{
    public static $files = array (
        '6124b4c8570aa390c21fafd04a26c69f' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/deep_copy.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'setasign\\Fpdi\\' => 14,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Paynl\\' => 6,
        ),
        'M' => 
        array (
            'Mpdf\\' => 5,
        ),
        'D' => 
        array (
            'DeepCopy\\' => 9,
        ),
        'C' => 
        array (
            'Curl\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'setasign\\Fpdi\\' => 
        array (
            0 => __DIR__ . '/..' . '/setasign/fpdi/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Paynl\\' => 
        array (
            0 => __DIR__ . '/..' . '/paynl/sdk/src',
        ),
        'Mpdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpdf/mpdf/src',
        ),
        'DeepCopy\\' => 
        array (
            0 => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy',
        ),
        'Curl\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7639635a123dbf6d7ee6975d4dae4523::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7639635a123dbf6d7ee6975d4dae4523::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7639635a123dbf6d7ee6975d4dae4523::$classMap;

        }, null, ClassLoader::class);
    }
}
