<?php

namespace ContainerHx6OXrd;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/Debug/OverrideHandler.php';

class OverrideHandler_fb58919 extends \Pimcore\Targeting\Debug\OverrideHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Targeting\Debug\OverrideHandler|null wrapped object, if the proxy is initialized
     */
    private $valueHolder47c1d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera7cb2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesaf385 = [
        
    ];

    public function getForm(\Symfony\Component\HttpFoundation\Request $request) : \Symfony\Component\Form\FormInterface
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'getForm', array('request' => $request), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->getForm($request);
    }

    public function handleRequest(\Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'handleRequest', array('request' => $request), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->handleRequest($request);
    }

    public function handleForm(\Symfony\Component\Form\FormInterface $form, \Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'handleForm', array('form' => $form, 'request' => $request), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->handleForm($form, $request);
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

        $instance->initializera7cb2 = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Component\Form\FormFactoryInterface $formFactory, $overrideHandlers)
    {
        static $reflection;

        if (! $this->valueHolder47c1d) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');
            $this->valueHolder47c1d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);

        }

        $this->valueHolder47c1d->__construct($formFactory, $overrideHandlers);
    }

    public function & __get($name)
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, '__get', ['name' => $name], $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        if (isset(self::$publicPropertiesaf385[$name])) {
            return $this->valueHolder47c1d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47c1d;

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

        $targetObject = $this->valueHolder47c1d;
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
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47c1d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder47c1d;
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
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, '__isset', array('name' => $name), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47c1d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder47c1d;
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
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, '__unset', array('name' => $name), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47c1d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder47c1d;
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
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, '__clone', array(), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        $this->valueHolder47c1d = clone $this->valueHolder47c1d;
    }

    public function __sleep()
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, '__sleep', array(), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return array('valueHolder47c1d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera7cb2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera7cb2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'initializeProxy', array(), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder47c1d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder47c1d;
    }
}

if (!\class_exists('OverrideHandler_fb58919', false)) {
    \class_alias(__NAMESPACE__.'\\OverrideHandler_fb58919', 'OverrideHandler_fb58919', false);
}
