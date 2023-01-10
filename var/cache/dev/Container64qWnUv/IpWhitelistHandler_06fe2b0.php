<?php

namespace Container64qWnUv;
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/AuthenticationHandlerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/IpWhitelistHandler.php';

class IpWhitelistHandler_06fe2b0 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\IpWhitelistHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\IpWhitelistHandler|null wrapped object, if the proxy is initialized
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

    public function beginTwoFactorAuthentication(\Scheb\TwoFactorBundle\Security\TwoFactor\AuthenticationContextInterface $context) : \Symfony\Component\Security\Core\Authentication\Token\TokenInterface
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'beginTwoFactorAuthentication', array('context' => $context), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->beginTwoFactorAuthentication($context);
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

        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\IpWhitelistHandler $instance) {
            unset($instance->authenticationHandler, $instance->ipWhitelistProvider);
        }, $instance, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\IpWhitelistHandler')->__invoke($instance);

        $instance->initializera7cb2 = $initializer;

        return $instance;
    }

    public function __construct(\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticationHandlerInterface $authenticationHandler, \Scheb\TwoFactorBundle\Security\TwoFactor\IpWhitelist\IpWhitelistProviderInterface $ipWhitelistProvider)
    {
        static $reflection;

        if (! $this->valueHolder47c1d) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\IpWhitelistHandler');
            $this->valueHolder47c1d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\IpWhitelistHandler $instance) {
            unset($instance->authenticationHandler, $instance->ipWhitelistProvider);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\IpWhitelistHandler')->__invoke($this);

        }

        $this->valueHolder47c1d->__construct($authenticationHandler, $ipWhitelistProvider);
    }

    public function & __get($name)
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, '__get', ['name' => $name], $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        if (isset(self::$publicPropertiesaf385[$name])) {
            return $this->valueHolder47c1d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\IpWhitelistHandler');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\IpWhitelistHandler');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\IpWhitelistHandler');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\IpWhitelistHandler');

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
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\IpWhitelistHandler $instance) {
            unset($instance->authenticationHandler, $instance->ipWhitelistProvider);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\IpWhitelistHandler')->__invoke($this);
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

if (!\class_exists('IpWhitelistHandler_06fe2b0', false)) {
    \class_alias(__NAMESPACE__.'\\IpWhitelistHandler_06fe2b0', 'IpWhitelistHandler_06fe2b0', false);
}
