<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit55bfb2f7ad4a97818dd7c694c0ba9640
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit55bfb2f7ad4a97818dd7c694c0ba9640', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit55bfb2f7ad4a97818dd7c694c0ba9640', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit55bfb2f7ad4a97818dd7c694c0ba9640::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit55bfb2f7ad4a97818dd7c694c0ba9640::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire55bfb2f7ad4a97818dd7c694c0ba9640($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire55bfb2f7ad4a97818dd7c694c0ba9640($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
