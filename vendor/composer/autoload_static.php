<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit59f9454fdcb372d6699d250abaa3a3a6
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'E' => 
        array (
            'Evolucao\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Evolucao\\' => 
        array (
            0 => __DIR__ . '/..' . '/cursoevolucao/php-classes/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit59f9454fdcb372d6699d250abaa3a3a6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit59f9454fdcb372d6699d250abaa3a3a6::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit59f9454fdcb372d6699d250abaa3a3a6::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}