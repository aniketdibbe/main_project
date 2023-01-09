<?php

namespace ContainerXJU42Hj;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/Debug/OverrideHandler.php';

class OverrideHandler_fb58919 extends \Pimcore\Targeting\Debug\OverrideHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Targeting\Debug\OverrideHandler|null wrapped object, if the proxy is initialized
     */
    private $valueHolder86d84 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd7a2e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb13b0 = [
        
    ];

    public function getForm(\Symfony\Component\HttpFoundation\Request $request) : \Symfony\Component\Form\FormInterface
    {
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, 'getForm', array('request' => $request), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        return $this->valueHolder86d84->getForm($request);
    }

    public function handleRequest(\Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, 'handleRequest', array('request' => $request), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        return $this->valueHolder86d84->handleRequest($request);
    }

    public function handleForm(\Symfony\Component\Form\FormInterface $form, \Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, 'handleForm', array('form' => $form, 'request' => $request), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        return $this->valueHolder86d84->handleForm($form, $request);
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

        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $instance, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($instance);

        $instance->initializerd7a2e = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Component\Form\FormFactoryInterface $formFactory, $overrideHandlers)
    {
        static $reflection;

        if (! $this->valueHolder86d84) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');
            $this->valueHolder86d84 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);

        }

        $this->valueHolder86d84->__construct($formFactory, $overrideHandlers);
    }

    public function & __get($name)
    {
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, '__get', ['name' => $name], $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        if (isset(self::$publicPropertiesb13b0[$name])) {
            return $this->valueHolder86d84->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86d84;

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

        $targetObject = $this->valueHolder86d84;
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
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86d84;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder86d84;
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
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, '__isset', array('name' => $name), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86d84;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder86d84;
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
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, '__unset', array('name' => $name), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86d84;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder86d84;
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
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, '__clone', array(), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        $this->valueHolder86d84 = clone $this->valueHolder86d84;
    }

    public function __sleep()
    {
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, '__sleep', array(), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        return array('valueHolder86d84');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd7a2e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd7a2e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, 'initializeProxy', array(), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder86d84;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder86d84;
    }
}

if (!\class_exists('OverrideHandler_fb58919', false)) {
    \class_alias(__NAMESPACE__.'\\OverrideHandler_fb58919', 'OverrideHandler_fb58919', false);
}
