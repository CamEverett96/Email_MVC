<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit20865989b61df3d91069475aee5b961c
{
    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\PageController' => __DIR__ . '/../..' . '/app/Controllers/PageController.php',
        'App\\Models\\EmailModel' => __DIR__ . '/../..' . '/app/models/EmailModel.php',
        'Bramus\\Router\\Router' => __DIR__ . '/..' . '/bramus/router/src/Bramus/Router/Router.php',
        'ComposerAutoloaderInit20865989b61df3d91069475aee5b961c' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit20865989b61df3d91069475aee5b961c' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Core\\DBConnection' => __DIR__ . '/../..' . '/core/DBConnection.php',
        'Handler' => __DIR__ . '/..' . '/bramus/router/tests/RouterTest.php',
        'Hello\\HelloRouterTestController' => __DIR__ . '/..' . '/bramus/router/tests/RouterTest.php',
        'MultilangRouter' => __DIR__ . '/..' . '/bramus/router/demo-multilang/index.php',
        'RouterTest' => __DIR__ . '/..' . '/bramus/router/tests/RouterTest.php',
        'RouterTestController' => __DIR__ . '/..' . '/bramus/router/tests/RouterTest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit20865989b61df3d91069475aee5b961c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit20865989b61df3d91069475aee5b961c::$classMap;

        }, null, ClassLoader::class);
    }
}
