<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit43ff32d72537376d0cd85129e58ec592
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

        spl_autoload_register(array('ComposerAutoloaderInit43ff32d72537376d0cd85129e58ec592', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit43ff32d72537376d0cd85129e58ec592', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit43ff32d72537376d0cd85129e58ec592::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
