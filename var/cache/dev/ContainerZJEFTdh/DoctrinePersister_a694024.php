<?php

namespace ContainerZJEFTdh;
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Model/PersisterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Model/Persister/DoctrinePersister.php';

class DoctrinePersister_a694024 extends \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister|null wrapped object, if the proxy is initialized
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

    public function persist($user) : void
    {
        $this->initializer48db7 && ($this->initializer48db7->__invoke($valueHolder0761d, $this, 'persist', array('user' => $user), $this->initializer48db7) || 1) && $this->valueHolder0761d = $valueHolder0761d;

        $this->valueHolder0761d->persist($user);
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

        $instance->initializer48db7 = $initializer;

        return $instance;
    }

    public function __construct($om)
    {
        static $reflection;

        if (! $this->valueHolder0761d) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');
            $this->valueHolder0761d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $this, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($this);

        }

        $this->valueHolder0761d->__construct($om);
    }

    public function & __get($name)
    {
        $this->initializer48db7 && ($this->initializer48db7->__invoke($valueHolder0761d, $this, '__get', ['name' => $name], $this->initializer48db7) || 1) && $this->valueHolder0761d = $valueHolder0761d;

        if (isset(self::$publicProperties105ee[$name])) {
            return $this->valueHolder0761d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

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
        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $this, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($this);
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

if (!\class_exists('DoctrinePersister_a694024', false)) {
    \class_alias(__NAMESPACE__.'\\DoctrinePersister_a694024', 'DoctrinePersister_a694024', false);
}
