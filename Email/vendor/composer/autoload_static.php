<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4487b74c133b66b068b19fe8dd808898
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4487b74c133b66b068b19fe8dd808898::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4487b74c133b66b068b19fe8dd808898::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
