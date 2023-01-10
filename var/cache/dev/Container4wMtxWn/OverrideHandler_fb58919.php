<?php

namespace Container4wMtxWn;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/Debug/OverrideHandler.php';

class OverrideHandler_fb58919 extends \Pimcore\Targeting\Debug\OverrideHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Targeting\Debug\OverrideHandler|null wrapped object, if the proxy is initialized
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

    public function getForm(\Symfony\Component\HttpFoundation\Request $request) : \Symfony\Component\Form\FormInterface
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'getForm', array('request' => $request), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->getForm($request);
    }

    public function handleRequest(\Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'handleRequest', array('request' => $request), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->handleRequest($request);
    }

    public function handleForm(\Symfony\Component\Form\FormInterface $form, \Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'handleForm', array('form' => $form, 'request' => $request), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->handleForm($form, $request);
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

        $instance->initializere2df8 = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Component\Form\FormFactoryInterface $formFactory, $overrideHandlers)
    {
        static $reflection;

        if (! $this->valueHolder283b2) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');
            $this->valueHolder283b2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);

        }

        $this->valueHolder283b2->__construct($formFactory, $overrideHandlers);
    }

    public function & __get($name)
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, '__get', ['name' => $name], $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        if (isset(self::$publicProperties3fbf6[$name])) {
            return $this->valueHolder283b2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

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
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);
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

if (!\class_exists('OverrideHandler_fb58919', false)) {
    \class_alias(__NAMESPACE__.'\\OverrideHandler_fb58919', 'OverrideHandler_fb58919', false);
}
