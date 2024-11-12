<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit840ece511ae2abd2d9211a085c011015
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Ilali\\Web\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ilali\\Web\\' => 
        array (
            0 => __DIR__ . '/../web' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/vendor' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit840ece511ae2abd2d9211a085c011015::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit840ece511ae2abd2d9211a085c011015::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit840ece511ae2abd2d9211a085c011015::$classMap;

        }, null, ClassLoader::class);
    }
}