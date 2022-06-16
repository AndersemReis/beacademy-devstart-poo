<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit39453bf4ac9438838a3ff028ab584ced
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

        spl_autoload_register(array('ComposerAutoloaderInit39453bf4ac9438838a3ff028ab584ced', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit39453bf4ac9438838a3ff028ab584ced', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit39453bf4ac9438838a3ff028ab584ced::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}