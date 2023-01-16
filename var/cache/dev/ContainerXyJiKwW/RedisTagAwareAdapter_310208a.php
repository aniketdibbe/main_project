<?php

namespace ContainerXyJiKwW;
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractTagAwareAdapter.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/RedisTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/RedisTagAwareAdapter.php';

class RedisTagAwareAdapter_310208a extends \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter|null wrapped object, if the proxy is initialized
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

    public function commit() : bool
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'commit', array(), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->commit();
    }

    public function deleteItems(array $keys) : bool
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'deleteItems', array('keys' => $keys), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->deleteItems($keys);
    }

    public function invalidateTags(array $tags)
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'invalidateTags', array('tags' => $tags), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->invalidateTags($tags);
    }

    public function hasItem($key)
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'hasItem', array('key' => $key), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->hasItem($key);
    }

    public function clear(string $prefix = '')
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'clear', array('prefix' => $prefix), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->clear($prefix);
    }

    public function deleteItem($key)
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'deleteItem', array('key' => $key), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->deleteItem($key);
    }

    public function getItem($key)
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'getItem', array('key' => $key), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->getItem($key);
    }

    public function getItems(array $keys = [])
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'getItems', array('keys' => $keys), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->getItems($keys);
    }

    public function save(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'save', array('item' => $item), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->save($item);
    }

    public function saveDeferred(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'saveDeferred', array('item' => $item), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->saveDeferred($item);
    }

    public function enableVersioning(bool $enable = true)
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'enableVersioning', array('enable' => $enable), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->enableVersioning($enable);
    }

    public function reset()
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'reset', array(), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->reset();
    }

    public function setLogger(\Psr\Log\LoggerInterface $logger)
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'setLogger', array('logger' => $logger), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->setLogger($logger);
    }

    public function setCallbackWrapper(?callable $callbackWrapper) : callable
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'setCallbackWrapper', array('callbackWrapper' => $callbackWrapper), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->setCallbackWrapper($callbackWrapper);
    }

    public function get(string $key, callable $callback, ?float $beta = null, ?array &$metadata = null)
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'get', array('key' => $key, 'callback' => $callback, 'beta' => $beta, 'metadata' => $metadata), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->get($key, $callback, $beta, $metadata);
    }

    public function delete(string $key) : bool
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, 'delete', array('key' => $key), $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        return $this->valueHolder47c1d->delete($key);
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

        unset($instance->maxIdLength, $instance->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $instance, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($instance);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $instance, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($instance);

        $instance->initializera7cb2 = $initializer;

        return $instance;
    }

    public function __construct($redis, string $namespace = '', int $defaultLifetime = 0, ?\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        static $reflection;

        if (! $this->valueHolder47c1d) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');
            $this->valueHolder47c1d = $reflection->newInstanceWithoutConstructor();
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($this);

        }

        $this->valueHolder47c1d->__construct($redis, $namespace, $defaultLifetime, $marshaller);
    }

    public function & __get($name)
    {
        $this->initializera7cb2 && ($this->initializera7cb2->__invoke($valueHolder47c1d, $this, '__get', ['name' => $name], $this->initializera7cb2) || 1) && $this->valueHolder47c1d = $valueHolder47c1d;

        if (isset(self::$publicPropertiesaf385[$name])) {
            return $this->valueHolder47c1d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($this);
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

    public function __destruct()
    {
        $this->initializera7cb2 || $this->valueHolder47c1d->__destruct();
    }
}

if (!\class_exists('RedisTagAwareAdapter_310208a', false)) {
    \class_alias(__NAMESPACE__.'\\RedisTagAwareAdapter_310208a', 'RedisTagAwareAdapter_310208a', false);
}
