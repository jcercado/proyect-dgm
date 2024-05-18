<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfe01ffc17353b3922f3958e593ff2dee
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

        spl_autoload_register(array('ComposerAutoloaderInitfe01ffc17353b3922f3958e593ff2dee', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfe01ffc17353b3922f3958e593ff2dee', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfe01ffc17353b3922f3958e593ff2dee::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}