<?php

namespace ContainerXi5M1x1;
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractTagAwareAdapter.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/RedisTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/RedisTagAwareAdapter.php';

class RedisTagAwareAdapter_310208a extends \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter|null wrapped object, if the proxy is initialized
     */
    private $valueHolder86d84 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd7a2e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb13b0 = [
        
    ];

    public function commit() : bool
    {
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, 'commit', array(), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        return $this->valueHolder86d84->commit();
    }

    public function deleteItems(array $keys) : bool
    {
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, 'deleteItems', array('keys' => $keys), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        return $this->valueHolder86d84->deleteItems($keys);
    }

    public function invalidateTags(array $tags)
    {
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, 'invalidateTags', array('tags' => $tags), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        return $this->valueHolder86d84->invalidateTags($tags);
    }

    public function hasItem($key)
    {
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, 'hasItem', array('key' => $key), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        return $this->valueHolder86d84->hasItem($key);
    }

    public function clear(string $prefix = '')
    {
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, 'clear', array('prefix' => $prefix), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        return $this->valueHolder86d84->clear($prefix);
    }

    public function deleteItem($key)
    {
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, 'deleteItem', array('key' => $key), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        return $this->valueHolder86d84->deleteItem($key);
    }

    public function getItem($key)
    {
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, 'getItem', array('key' => $key), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        return $this->valueHolder86d84->getItem($key);
    }

    public function getItems(array $keys = [])
    {
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, 'getItems', array('keys' => $keys), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        return $this->valueHolder86d84->getItems($keys);
    }

    public function save(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, 'save', array('item' => $item), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        return $this->valueHolder86d84->save($item);
    }

    public function saveDeferred(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, 'saveDeferred', array('item' => $item), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        return $this->valueHolder86d84->saveDeferred($item);
    }

    public function enableVersioning(bool $enable = true)
    {
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, 'enableVersioning', array('enable' => $enable), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        return $this->valueHolder86d84->enableVersioning($enable);
    }

    public function reset()
    {
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, 'reset', array(), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        return $this->valueHolder86d84->reset();
    }

    public function setLogger(\Psr\Log\LoggerInterface $logger)
    {
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, 'setLogger', array('logger' => $logger), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        return $this->valueHolder86d84->setLogger($logger);
    }

    public function setCallbackWrapper(?callable $callbackWrapper) : callable
    {
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, 'setCallbackWrapper', array('callbackWrapper' => $callbackWrapper), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        return $this->valueHolder86d84->setCallbackWrapper($callbackWrapper);
    }

    public function get(string $key, callable $callback, ?float $beta = null, ?array &$metadata = null)
    {
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, 'get', array('key' => $key, 'callback' => $callback, 'beta' => $beta, 'metadata' => $metadata), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        return $this->valueHolder86d84->get($key, $callback, $beta, $metadata);
    }

    public function delete(string $key) : bool
    {
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, 'delete', array('key' => $key), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        return $this->valueHolder86d84->delete($key);
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

        $instance->initializerd7a2e = $initializer;

        return $instance;
    }

    public function __construct($redis, string $namespace = '', int $defaultLifetime = 0, ?\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        static $reflection;

        if (! $this->valueHolder86d84) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');
            $this->valueHolder86d84 = $reflection->newInstanceWithoutConstructor();
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($this);

        }

        $this->valueHolder86d84->__construct($redis, $namespace, $defaultLifetime, $marshaller);
    }

    public function & __get($name)
    {
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, '__get', ['name' => $name], $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        if (isset(self::$publicPropertiesb13b0[$name])) {
            return $this->valueHolder86d84->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86d84;

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

        $targetObject = $this->valueHolder86d84;
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
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86d84;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder86d84;
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
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, '__isset', array('name' => $name), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86d84;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder86d84;
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
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, '__unset', array('name' => $name), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86d84;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder86d84;
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
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, '__clone', array(), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        $this->valueHolder86d84 = clone $this->valueHolder86d84;
    }

    public function __sleep()
    {
        $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, '__sleep', array(), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;

        return array('valueHolder86d84');
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
        $this->initializerd7a2e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd7a2e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd7a2e && ($this->initializerd7a2e->__invoke($valueHolder86d84, $this, 'initializeProxy', array(), $this->initializerd7a2e) || 1) && $this->valueHolder86d84 = $valueHolder86d84;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder86d84;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder86d84;
    }

    public function __destruct()
    {
        $this->initializerd7a2e || $this->valueHolder86d84->__destruct();
    }
}

if (!\class_exists('RedisTagAwareAdapter_310208a', false)) {
    \class_alias(__NAMESPACE__.'\\RedisTagAwareAdapter_310208a', 'RedisTagAwareAdapter_310208a', false);
}
