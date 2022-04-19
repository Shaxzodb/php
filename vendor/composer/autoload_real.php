<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd6e06ff07b8c8e51f20d4c943c9f80ae
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

        spl_autoload_register(array('ComposerAutoloaderInitd6e06ff07b8c8e51f20d4c943c9f80ae', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd6e06ff07b8c8e51f20d4c943c9f80ae', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd6e06ff07b8c8e51f20d4c943c9f80ae::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
