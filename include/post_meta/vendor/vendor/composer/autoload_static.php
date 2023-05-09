<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7991bedfbe4ddb0b3dfcfe67bfb91e14
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\HTMLToMarkdown\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\HTMLToMarkdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/html-to-markdown/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7991bedfbe4ddb0b3dfcfe67bfb91e14::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7991bedfbe4ddb0b3dfcfe67bfb91e14::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7991bedfbe4ddb0b3dfcfe67bfb91e14::$classMap;

        }, null, ClassLoader::class);
    }
}
