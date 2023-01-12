<?php

namespace ContainerCghYgYp;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Twig/Extension/Templating/Navigation.php';

class Navigation_62d2b4b extends \Pimcore\Twig\Extension\Templating\Navigation implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Twig\Extension\Templating\Navigation|null wrapped object, if the proxy is initialized
     */
    private $valueHolder71a9f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer91e1b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd3b1f = [
        
    ];

    public function build(array $params) : \Pimcore\Navigation\Container
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, 'build', array('params' => $params), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        return $this->valueHolder71a9f->build($params);
    }

    public function getRenderer(string $alias) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, 'getRenderer', array('alias' => $alias), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        return $this->valueHolder71a9f->getRenderer($alias);
    }

    public function render(\Pimcore\Navigation\Container $container, string $rendererName = 'menu', string $renderMethod = 'render', ... $rendererArguments)
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, 'render', array('container' => $container, 'rendererName' => $rendererName, 'renderMethod' => $renderMethod, 'rendererArguments' => $rendererArguments), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        return $this->valueHolder71a9f->render($container, $rendererName, $renderMethod, ...$rendererArguments);
    }

    public function __call($method, array $arguments = []) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        return $this->valueHolder71a9f->__call($method, $arguments);
    }

    public function setCharset(string $charset)
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, 'setCharset', array('charset' => $charset), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        return $this->valueHolder71a9f->setCharset($charset);
    }

    public function getCharset()
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, 'getCharset', array(), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        return $this->valueHolder71a9f->getCharset();
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

        $instance->initializer91e1b = $initializer;

        return $instance;
    }

    public function __construct(\Pimcore\Navigation\Builder $builder, \Psr\Container\ContainerInterface $rendererLocator)
    {
        static $reflection;

        if (! $this->valueHolder71a9f) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');
            $this->valueHolder71a9f = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($this);

        }

        $this->valueHolder71a9f->__construct($builder, $rendererLocator);
    }

    public function & __get($name)
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, '__get', ['name' => $name], $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        if (isset(self::$publicPropertiesd3b1f[$name])) {
            return $this->valueHolder71a9f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder71a9f;

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

        $targetObject = $this->valueHolder71a9f;
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
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder71a9f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder71a9f;
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
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, '__isset', array('name' => $name), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder71a9f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder71a9f;
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
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, '__unset', array('name' => $name), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder71a9f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder71a9f;
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
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, '__clone', array(), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        $this->valueHolder71a9f = clone $this->valueHolder71a9f;
    }

    public function __sleep()
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, '__sleep', array(), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        return array('valueHolder71a9f');
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
        $this->initializer91e1b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer91e1b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, 'initializeProxy', array(), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder71a9f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder71a9f;
    }
}

if (!\class_exists('Navigation_62d2b4b', false)) {
    \class_alias(__NAMESPACE__.'\\Navigation_62d2b4b', 'Navigation_62d2b4b', false);
}
