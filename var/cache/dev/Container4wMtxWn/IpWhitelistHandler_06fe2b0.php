<?php

namespace Container4wMtxWn;
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/AuthenticationHandlerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/IpWhitelistHandler.php';

class IpWhitelistHandler_06fe2b0 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\IpWhitelistHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\IpWhitelistHandler|null wrapped object, if the proxy is initialized
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

    public function beginTwoFactorAuthentication(\Scheb\TwoFactorBundle\Security\TwoFactor\AuthenticationContextInterface $context) : \Symfony\Component\Security\Core\Authentication\Token\TokenInterface
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'beginTwoFactorAuthentication', array('context' => $context), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->beginTwoFactorAuthentication($context);
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

        $instance->initializere2df8 = $initializer;

        return $instance;
    }

    public function __construct(\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticationHandlerInterface $authenticationHandler, \Scheb\TwoFactorBundle\Security\TwoFactor\IpWhitelist\IpWhitelistProviderInterface $ipWhitelistProvider)
    {
        static $reflection;

        if (! $this->valueHolder283b2) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\IpWhitelistHandler');
            $this->valueHolder283b2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\IpWhitelistHandler $instance) {
            unset($instance->authenticationHandler, $instance->ipWhitelistProvider);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\IpWhitelistHandler')->__invoke($this);

        }

        $this->valueHolder283b2->__construct($authenticationHandler, $ipWhitelistProvider);
    }

    public function & __get($name)
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, '__get', ['name' => $name], $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        if (isset(self::$publicProperties3fbf6[$name])) {
            return $this->valueHolder283b2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\IpWhitelistHandler');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\IpWhitelistHandler');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\IpWhitelistHandler');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\IpWhitelistHandler');

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
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\IpWhitelistHandler $instance) {
            unset($instance->authenticationHandler, $instance->ipWhitelistProvider);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\IpWhitelistHandler')->__invoke($this);
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

if (!\class_exists('IpWhitelistHandler_06fe2b0', false)) {
    \class_alias(__NAMESPACE__.'\\IpWhitelistHandler_06fe2b0', 'IpWhitelistHandler_06fe2b0', false);
}
