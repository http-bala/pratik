<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcbd55967310742d18e8fc7e16e4426fe
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'B' => 
        array (
            'Betacom\\Pratik\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Betacom\\Pratik\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcbd55967310742d18e8fc7e16e4426fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcbd55967310742d18e8fc7e16e4426fe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcbd55967310742d18e8fc7e16e4426fe::$classMap;

        }, null, ClassLoader::class);
    }
}
