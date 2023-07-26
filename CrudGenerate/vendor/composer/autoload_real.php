<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd5ee7c61b30b40af3d3633d18aad7eb4
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitd5ee7c61b30b40af3d3633d18aad7eb4', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd5ee7c61b30b40af3d3633d18aad7eb4', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd5ee7c61b30b40af3d3633d18aad7eb4::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
