<?php

namespace Container5ICm8iL;
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Provider/TwoFactorFormRendererInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Provider/DefaultTwoFactorFormRenderer.php';

class DefaultTwoFactorFormRenderer_892ae3f extends \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\DefaultTwoFactorFormRenderer implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\DefaultTwoFactorFormRenderer|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera4e4f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7bda9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2bc45 = [
        
    ];

    public function renderForm(\Symfony\Component\HttpFoundation\Request $request, array $templateVars) : \Symfony\Component\HttpFoundation\Response
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'renderForm', array('request' => $request, 'templateVars' => $templateVars), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return $this->valueHoldera4e4f->renderForm($request, $templateVars);
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

        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Provider\DefaultTwoFactorFormRenderer $instance) {
            unset($instance->twigEnvironment, $instance->template, $instance->templateVars);
        }, $instance, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\DefaultTwoFactorFormRenderer')->__invoke($instance);

        $instance->initializer7bda9 = $initializer;

        return $instance;
    }

    public function __construct(\Twig\Environment $twigRenderer, string $template, array $templateVars = [])
    {
        static $reflection;

        if (! $this->valueHoldera4e4f) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\DefaultTwoFactorFormRenderer');
            $this->valueHoldera4e4f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Provider\DefaultTwoFactorFormRenderer $instance) {
            unset($instance->twigEnvironment, $instance->template, $instance->templateVars);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\DefaultTwoFactorFormRenderer')->__invoke($this);

        }

        $this->valueHoldera4e4f->__construct($twigRenderer, $template, $templateVars);
    }

    public function & __get($name)
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, '__get', ['name' => $name], $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        if (isset(self::$publicProperties2bc45[$name])) {
            return $this->valueHoldera4e4f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\DefaultTwoFactorFormRenderer');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4e4f;

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

        $targetObject = $this->valueHoldera4e4f;
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
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\DefaultTwoFactorFormRenderer');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4e4f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera4e4f;
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
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, '__isset', array('name' => $name), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\DefaultTwoFactorFormRenderer');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4e4f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera4e4f;
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
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, '__unset', array('name' => $name), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\DefaultTwoFactorFormRenderer');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4e4f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera4e4f;
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
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, '__clone', array(), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        $this->valueHoldera4e4f = clone $this->valueHoldera4e4f;
    }

    public function __sleep()
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, '__sleep', array(), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return array('valueHoldera4e4f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Provider\DefaultTwoFactorFormRenderer $instance) {
            unset($instance->twigEnvironment, $instance->template, $instance->templateVars);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\DefaultTwoFactorFormRenderer')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7bda9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7bda9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'initializeProxy', array(), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera4e4f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera4e4f;
    }
}

if (!\class_exists('DefaultTwoFactorFormRenderer_892ae3f', false)) {
    \class_alias(__NAMESPACE__.'\\DefaultTwoFactorFormRenderer_892ae3f', 'DefaultTwoFactorFormRenderer_892ae3f', false);
}
