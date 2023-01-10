<?php

namespace ContainerZJEFTdh;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/Debug/OverrideHandler.php';

class OverrideHandler_fb58919 extends \Pimcore\Targeting\Debug\OverrideHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Targeting\Debug\OverrideHandler|null wrapped object, if the proxy is initialized
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

    public function getForm(\Symfony\Component\HttpFoundation\Request $request) : \Symfony\Component\Form\FormInterface
    {
        $this->initializer48db7 && ($this->initializer48db7->__invoke($valueHolder0761d, $this, 'getForm', array('request' => $request), $this->initializer48db7) || 1) && $this->valueHolder0761d = $valueHolder0761d;

        return $this->valueHolder0761d->getForm($request);
    }

    public function handleRequest(\Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializer48db7 && ($this->initializer48db7->__invoke($valueHolder0761d, $this, 'handleRequest', array('request' => $request), $this->initializer48db7) || 1) && $this->valueHolder0761d = $valueHolder0761d;

        return $this->valueHolder0761d->handleRequest($request);
    }

    public function handleForm(\Symfony\Component\Form\FormInterface $form, \Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializer48db7 && ($this->initializer48db7->__invoke($valueHolder0761d, $this, 'handleForm', array('form' => $form, 'request' => $request), $this->initializer48db7) || 1) && $this->valueHolder0761d = $valueHolder0761d;

        return $this->valueHolder0761d->handleForm($form, $request);
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

        $instance->initializer48db7 = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Component\Form\FormFactoryInterface $formFactory, $overrideHandlers)
    {
        static $reflection;

        if (! $this->valueHolder0761d) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');
            $this->valueHolder0761d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);

        }

        $this->valueHolder0761d->__construct($formFactory, $overrideHandlers);
    }

    public function & __get($name)
    {
        $this->initializer48db7 && ($this->initializer48db7->__invoke($valueHolder0761d, $this, '__get', ['name' => $name], $this->initializer48db7) || 1) && $this->valueHolder0761d = $valueHolder0761d;

        if (isset(self::$publicProperties105ee[$name])) {
            return $this->valueHolder0761d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

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
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);
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

if (!\class_exists('OverrideHandler_fb58919', false)) {
    \class_alias(__NAMESPACE__.'\\OverrideHandler_fb58919', 'OverrideHandler_fb58919', false);
}
