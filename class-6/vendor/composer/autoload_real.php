<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite77e9a022fed0dd2b6ad1000dcfcb12c
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

        spl_autoload_register(array('ComposerAutoloaderInite77e9a022fed0dd2b6ad1000dcfcb12c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite77e9a022fed0dd2b6ad1000dcfcb12c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite77e9a022fed0dd2b6ad1000dcfcb12c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
