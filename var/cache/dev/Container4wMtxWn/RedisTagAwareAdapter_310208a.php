<?php

namespace Container4wMtxWn;
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractTagAwareAdapter.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/RedisTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/RedisTagAwareAdapter.php';

class RedisTagAwareAdapter_310208a extends \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter|null wrapped object, if the proxy is initialized
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

    public function commit() : bool
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'commit', array(), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->commit();
    }

    public function deleteItems(array $keys) : bool
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'deleteItems', array('keys' => $keys), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->deleteItems($keys);
    }

    public function invalidateTags(array $tags)
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'invalidateTags', array('tags' => $tags), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->invalidateTags($tags);
    }

    public function hasItem($key)
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'hasItem', array('key' => $key), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->hasItem($key);
    }

    public function clear(string $prefix = '')
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'clear', array('prefix' => $prefix), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->clear($prefix);
    }

    public function deleteItem($key)
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'deleteItem', array('key' => $key), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->deleteItem($key);
    }

    public function getItem($key)
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'getItem', array('key' => $key), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->getItem($key);
    }

    public function getItems(array $keys = [])
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'getItems', array('keys' => $keys), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->getItems($keys);
    }

    public function save(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'save', array('item' => $item), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->save($item);
    }

    public function saveDeferred(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'saveDeferred', array('item' => $item), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->saveDeferred($item);
    }

    public function enableVersioning(bool $enable = true)
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'enableVersioning', array('enable' => $enable), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->enableVersioning($enable);
    }

    public function reset()
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'reset', array(), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->reset();
    }

    public function setLogger(\Psr\Log\LoggerInterface $logger)
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'setLogger', array('logger' => $logger), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->setLogger($logger);
    }

    public function setCallbackWrapper(?callable $callbackWrapper) : callable
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'setCallbackWrapper', array('callbackWrapper' => $callbackWrapper), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->setCallbackWrapper($callbackWrapper);
    }

    public function get(string $key, callable $callback, ?float $beta = null, ?array &$metadata = null)
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'get', array('key' => $key, 'callback' => $callback, 'beta' => $beta, 'metadata' => $metadata), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->get($key, $callback, $beta, $metadata);
    }

    public function delete(string $key) : bool
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, 'delete', array('key' => $key), $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        return $this->valueHolder283b2->delete($key);
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

        $instance->initializere2df8 = $initializer;

        return $instance;
    }

    public function __construct($redis, string $namespace = '', int $defaultLifetime = 0, ?\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        static $reflection;

        if (! $this->valueHolder283b2) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');
            $this->valueHolder283b2 = $reflection->newInstanceWithoutConstructor();
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($this);

        }

        $this->valueHolder283b2->__construct($redis, $namespace, $defaultLifetime, $marshaller);
    }

    public function & __get($name)
    {
        $this->initializere2df8 && ($this->initializere2df8->__invoke($valueHolder283b2, $this, '__get', ['name' => $name], $this->initializere2df8) || 1) && $this->valueHolder283b2 = $valueHolder283b2;

        if (isset(self::$publicProperties3fbf6[$name])) {
            return $this->valueHolder283b2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

    public function __destruct()
    {
        $this->initializere2df8 || $this->valueHolder283b2->__destruct();
    }
}

if (!\class_exists('RedisTagAwareAdapter_310208a', false)) {
    \class_alias(__NAMESPACE__.'\\RedisTagAwareAdapter_310208a', 'RedisTagAwareAdapter_310208a', false);
}
