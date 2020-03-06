<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit82a6edfe747577791f315db487fe8932
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        // 只允许引入Composer\Autoload\ClassLoader类
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        // 如果已存在自动加载类则返回(单例模式)
        if (null !== self::$loader) {
            return self::$loader;
        }
        //
        // step1: 启动: 加载ClassLoader类
        //
        // 注册自动装载静态方法loadClassLoader, 第一个参数数组可以改写为'ComposerAutoloaderInit82a6edfe747577791f315db487fe8932::loadClassLoader'
        spl_autoload_register(array('ComposerAutoloaderInit82a6edfe747577791f315db487fe8932', 'loadClassLoader'), true, true);
        // 加载ClassLoader类(将会调用静态方法loadClassLoader实现加载)并绑定到自身
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        // 销毁自动装载方法loadClassLoader
        spl_autoload_unregister(array('ComposerAutoloaderInit82a6edfe747577791f315db487fe8932', 'loadClassLoader'));

        //
        // step2: 初始化: ClassLoader静态初始化
        //

        // 判断是否允许执行静态初始化(静态初始化需要php5.6版本以上)
        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require_once __DIR__ . '/autoload_static.php';
            // 引入autoload_static进行静态初始化
            call_user_func(\Composer\Autoload\ComposerStaticInit82a6edfe747577791f315db487fe8932::getInitializer($loader));
        } else {
            // PSR0标准
            $map = require __DIR__ . '/autoload_namespaces.php';
            foreach ($map as $namespace => $path) {
                $loader->set($namespace, $path);
            }

            // PSR4标准
            $map = require __DIR__ . '/autoload_psr4.php';
            foreach ($map as $namespace => $path) {
                $loader->setPsr4($namespace, $path);
            }

            // 命名空间映射
            $classMap = require __DIR__ . '/autoload_classmap.php';
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }

        //
        // step3: 注册: 类自动加载
        //
        $loader->register(true);

        return $loader;
    }
}
