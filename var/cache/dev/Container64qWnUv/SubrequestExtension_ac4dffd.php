<?php

namespace Container64qWnUv;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Twig/Extension/SubrequestExtension.php';

class SubrequestExtension_ac4dffd extends \Pimcore\Twig\Extension\SubrequestExtension implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Twig\Extension\SubrequestExtension|null wrapped object, if the proxy is initialized
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

    public function getFunctions() : array
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'getFunctions', array(), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->getFunctions();
    }

    public function getTokenParsers()
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'getTokenParsers', array(), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->getTokenParsers();
    }

    public function getNodeVisitors()
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'getNodeVisitors', array(), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->getNodeVisitors();
    }

    public function getFilters()
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'getFilters', array(), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->getFilters();
    }

    public function getTests()
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'getTests', array(), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->getTests();
    }

    public function getOperators()
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'getOperators', array(), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->getOperators();
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

        unset($instance->incHelper);

        $instance->initializera7cb2 = $initializer;

        return $instance;
    }

    public function __construct(\Pimcore\Twig\Extension\Templating\Inc $incHelper)
    {
        static $reflection;

        if (! $this->valueHolder47c1d) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');
            $this->valueHolder47c1d = $reflection->newInstanceWithoutConstructor();
        unset($this->incHelper);

        }

        $this->valueHolder47c1d->__construct($incHelper);
    }

    public function & __get($name)
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, '__get', ['name' => $name], $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        if (isset(self::$publicPropertiesaf385[$name])) {
            return $this->valueHolder47c1d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

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
        unset($this->incHelper);
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

if (!\class_exists('SubrequestExtension_ac4dffd', false)) {
    \class_alias(__NAMESPACE__.'\\SubrequestExtension_ac4dffd', 'SubrequestExtension_ac4dffd', false);
}
