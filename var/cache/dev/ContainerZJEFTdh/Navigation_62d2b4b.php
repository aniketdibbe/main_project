<?php

namespace ContainerZJEFTdh;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Twig/Extension/Templating/Navigation.php';

class Navigation_62d2b4b extends \Pimcore\Twig\Extension\Templating\Navigation implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Twig\Extension\Templating\Navigation|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0761d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer48db7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties105ee = [
        
    ];

    public function build(array $params) : \Pimcore\Navigation\Container
    {
        $this->initializer48db7 && ($this->initializer48db7->__invoke($valueHolder0761d, $this, 'build', array('params' => $params), $this->initializer48db7) || 1) && $this->valueHolder0761d = $valueHolder0761d;

        return $this->valueHolder0761d->build($params);
    }

    public function getRenderer(string $alias) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializer48db7 && ($this->initializer48db7->__invoke($valueHolder0761d, $this, 'getRenderer', array('alias' => $alias), $this->initializer48db7) || 1) && $this->valueHolder0761d = $valueHolder0761d;

        return $this->valueHolder0761d->getRenderer($alias);
    }

    public function render(\Pimcore\Navigation\Container $container, string $rendererName = 'menu', string $renderMethod = 'render', ... $rendererArguments)
    {
        $this->initializer48db7 && ($this->initializer48db7->__invoke($valueHolder0761d, $this, 'render', array('container' => $container, 'rendererName' => $rendererName, 'renderMethod' => $renderMethod, 'rendererArguments' => $rendererArguments), $this->initializer48db7) || 1) && $this->valueHolder0761d = $valueHolder0761d;

        return $this->valueHolder0761d->render($container, $rendererName, $renderMethod, ...$rendererArguments);
    }

    public function __call($method, array $arguments = []) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializer48db7 && ($this->initializer48db7->__invoke($valueHolder0761d, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer48db7) || 1) && $this->valueHolder0761d = $valueHolder0761d;

        return $this->valueHolder0761d->__call($method, $arguments);
    }

    public function setCharset(string $charset)
    {
        $this->initializer48db7 && ($this->initializer48db7->__invoke($valueHolder0761d, $this, 'setCharset', array('charset' => $charset), $this->initializer48db7) || 1) && $this->valueHolder0761d = $valueHolder0761d;

        return $this->valueHolder0761d->setCharset($charset);
    }

    public function getCharset()
    {
        $this->initializer48db7 && ($this->initializer48db7->__invoke($valueHolder0761d, $this, 'getCharset', array(), $this->initializer48db7) || 1) && $this->valueHolder0761d = $valueHolder0761d;

        return $this->valueHolder0761d->getCharset();
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

        $instance->initializer48db7 = $initializer;

        return $instance;
    }

    public function __construct(\Pimcore\Navigation\Builder $builder, \Psr\Container\ContainerInterface $rendererLocator)
    {
        static $reflection;

        if (! $this->valueHolder0761d) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');
            $this->valueHolder0761d = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($this);

        }

        $this->valueHolder0761d->__construct($builder, $rendererLocator);
    }

    public function & __get($name)
    {
        $this->initializer48db7 && ($this->initializer48db7->__invoke($valueHolder0761d, $this, '__get', ['name' => $name], $this->initializer48db7) || 1) && $this->valueHolder0761d = $valueHolder0761d;

        if (isset(self::$publicProperties105ee[$name])) {
            return $this->valueHolder0761d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0761d;

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

        $targetObject = $this->valueHolder0761d;
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
        $this->initializer48db7 && ($this->initializer48db7->__invoke($valueHolder0761d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer48db7) || 1) && $this->valueHolder0761d = $valueHolder0761d;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0761d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0761d;
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
        $this->initializer48db7 && ($this->initializer48db7->__invoke($valueHolder0761d, $this, '__isset', array('name' => $name), $this->initializer48db7) || 1) && $this->valueHolder0761d = $valueHolder0761d;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0761d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0761d;
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
        $this->initializer48db7 && ($this->initializer48db7->__invoke($valueHolder0761d, $this, '__unset', array('name' => $name), $this->initializer48db7) || 1) && $this->valueHolder0761d = $valueHolder0761d;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0761d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0761d;
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
        $this->initializer48db7 && ($this->initializer48db7->__invoke($valueHolder0761d, $this, '__clone', array(), $this->initializer48db7) || 1) && $this->valueHolder0761d = $valueHolder0761d;

        $this->valueHolder0761d = clone $this->valueHolder0761d;
    }

    public function __sleep()
    {
        $this->initializer48db7 && ($this->initializer48db7->__invoke($valueHolder0761d, $this, '__sleep', array(), $this->initializer48db7) || 1) && $this->valueHolder0761d = $valueHolder0761d;

        return array('valueHolder0761d');
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
        $this->initializer48db7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer48db7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer48db7 && ($this->initializer48db7->__invoke($valueHolder0761d, $this, 'initializeProxy', array(), $this->initializer48db7) || 1) && $this->valueHolder0761d = $valueHolder0761d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0761d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0761d;
    }
}

if (!\class_exists('Navigation_62d2b4b', false)) {
    \class_alias(__NAMESPACE__.'\\Navigation_62d2b4b', 'Navigation_62d2b4b', false);
}
