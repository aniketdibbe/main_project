<?php

namespace Container4wMtxWn;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Twig/Extension/Templating/Navigation.php';

class Navigation_62d2b4b extends \Pimcore\Twig\Extension\Templating\Navigation implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Twig\Extension\Templating\Navigation|null wrapped object, if the proxy is initialized
     */
    private $valueHolder283b2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere2df8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3fbf6 = [
        
    ];

    public function build(array $params) : \Pimcore\Navigation\Container
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'build', array('params' => $params), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->build($params);
    }

    public function getRenderer(string $alias) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'getRenderer', array('alias' => $alias), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->getRenderer($alias);
    }

    public function render(\Pimcore\Navigation\Container $container, string $rendererName = 'menu', string $renderMethod = 'render', ... $rendererArguments)
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'render', array('container' => $container, 'rendererName' => $rendererName, 'renderMethod' => $renderMethod, 'rendererArguments' => $rendererArguments), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->render($container, $rendererName, $renderMethod, ...$rendererArguments);
    }

    public function __call($method, array $arguments = []) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->__call($method, $arguments);
    }

    public function setCharset(string $charset)
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'setCharset', array('charset' => $charset), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->setCharset($charset);
    }

    public function getCharset()
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'getCharset', array(), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->getCharset();
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

        $instance->initializere2df8 = $initializer;

        return $instance;
    }

    public function __construct(\Pimcore\Navigation\Builder $builder, \Psr\Container\ContainerInterface $rendererLocator)
    {
        static $reflection;

        if (! $this->valueHolder283b2) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');
            $this->valueHolder283b2 = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($this);

        }

        $this->valueHolder283b2->__construct($builder, $rendererLocator);
    }

    public function & __get($name)
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, '__get', ['name' => $name], $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        if (isset(self::$publicProperties3fbf6[$name])) {
            return $this->valueHolder283b2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder283b2;

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

        $targetObject = $this->valueHolder283b2;
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
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder283b2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder283b2;
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
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, '__isset', array('name' => $name), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder283b2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder283b2;
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
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, '__unset', array('name' => $name), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder283b2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder283b2;
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
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, '__clone', array(), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        $this->valueHolder283b2 = clone $this->valueHolder283b2;
    }

    public function __sleep()
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, '__sleep', array(), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return array('valueHolder283b2');
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
        $this->initializere2df8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere2df8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'initializeProxy', array(), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder283b2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder283b2;
    }
}

if (!\class_exists('Navigation_62d2b4b', false)) {
    \class_alias(__NAMESPACE__.'\\Navigation_62d2b4b', 'Navigation_62d2b4b', false);
}
