<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita07e15645baa1cd735b2f02adf79fee3
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

        spl_autoload_register(array('ComposerAutoloaderInita07e15645baa1cd735b2f02adf79fee3', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita07e15645baa1cd735b2f02adf79fee3', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita07e15645baa1cd735b2f02adf79fee3::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
