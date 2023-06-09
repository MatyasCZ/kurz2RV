<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit75b211135689a42fb5d8ac524a408d5e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit75b211135689a42fb5d8ac524a408d5e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit75b211135689a42fb5d8ac524a408d5e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit75b211135689a42fb5d8ac524a408d5e::$classMap;

        }, null, ClassLoader::class);
    }
}
