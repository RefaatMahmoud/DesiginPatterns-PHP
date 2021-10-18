<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef092dcda0b8671859b26da3425ef2ce
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Creational\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Creational\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Creational',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef092dcda0b8671859b26da3425ef2ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef092dcda0b8671859b26da3425ef2ce::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}