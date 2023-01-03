<?php

namespace Container5ICm8iL;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Twig/Extension/Templating/Navigation.php';

class Navigation_62d2b4b extends \Pimcore\Twig\Extension\Templating\Navigation implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Twig\Extension\Templating\Navigation|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera4e4f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7bda9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2bc45 = [
        
    ];

    public function build(array $params) : \Pimcore\Navigation\Container
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'build', array('params' => $params), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return $this->valueHoldera4e4f->build($params);
    }

    public function getRenderer(string $alias) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'getRenderer', array('alias' => $alias), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return $this->valueHoldera4e4f->getRenderer($alias);
    }

    public function render(\Pimcore\Navigation\Container $container, string $rendererName = 'menu', string $renderMethod = 'render', ... $rendererArguments)
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'render', array('container' => $container, 'rendererName' => $rendererName, 'renderMethod' => $renderMethod, 'rendererArguments' => $rendererArguments), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return $this->valueHoldera4e4f->render($container, $rendererName, $renderMethod, ...$rendererArguments);
    }

    public function __call($method, array $arguments = []) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return $this->valueHoldera4e4f->__call($method, $arguments);
    }

    public function setCharset(string $charset)
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'setCharset', array('charset' => $charset), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return $this->valueHoldera4e4f->setCharset($charset);
    }

    public function getCharset()
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'getCharset', array(), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return $this->valueHoldera4e4f->getCharset();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        unset($instance->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $instance, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($instance);

        $instance->initializer7bda9 = $initializer;

        return $instance;
    }

    public function __construct(\Pimcore\Navigation\Builder $builder, \Psr\Container\ContainerInterface $rendererLocator)
    {
        static $reflection;

        if (! $this->valueHoldera4e4f) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');
            $this->valueHoldera4e4f = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($this);

        }

        $this->valueHoldera4e4f->__construct($builder, $rendererLocator);
    }

    public function & __get($name)
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, '__get', ['name' => $name], $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        if (isset(self::$publicProperties2bc45[$name])) {
            return $this->valueHoldera4e4f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4e4f;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera4e4f;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4e4f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera4e4f;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, '__isset', array('name' => $name), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4e4f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera4e4f;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, '__unset', array('name' => $name), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4e4f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera4e4f;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, '__clone', array(), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        $this->valueHoldera4e4f = clone $this->valueHoldera4e4f;
    }

    public function __sleep()
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, '__sleep', array(), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return array('valueHoldera4e4f');
    }

    public function __wakeup()
    {
        unset($this->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7bda9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7bda9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'initializeProxy', array(), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera4e4f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera4e4f;
    }
}

if (!\class_exists('Navigation_62d2b4b', false)) {
    \class_alias(__NAMESPACE__.'\\Navigation_62d2b4b', 'Navigation_62d2b4b', false);
}
