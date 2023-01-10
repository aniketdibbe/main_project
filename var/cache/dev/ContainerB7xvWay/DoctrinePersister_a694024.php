<?php

namespace ContainerB7xvWay;
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Model/PersisterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Model/Persister/DoctrinePersister.php';

class DoctrinePersister_a694024 extends \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister|null wrapped object, if the proxy is initialized
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

    public function persist($user) : void
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, 'persist', array('user' => $user), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        $this->valueHolder71a9f->persist($user);
return;
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

        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $instance, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($instance);

        $instance->initializer91e1b = $initializer;

        return $instance;
    }

    public function __construct($om)
    {
        static $reflection;

        if (! $this->valueHolder71a9f) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');
            $this->valueHolder71a9f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $this, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($this);

        }

        $this->valueHolder71a9f->__construct($om);
    }

    public function & __get($name)
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, '__get', ['name' => $name], $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        if (isset(self::$publicPropertiesd3b1f[$name])) {
            return $this->valueHolder71a9f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

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
        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $this, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($this);
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

if (!\class_exists('DoctrinePersister_a694024', false)) {
    \class_alias(__NAMESPACE__.'\\DoctrinePersister_a694024', 'DoctrinePersister_a694024', false);
}
