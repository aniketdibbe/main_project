<?php

namespace ContainerB1NiP9l;
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractTagAwareAdapter.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/RedisTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/RedisTagAwareAdapter.php';

class RedisTagAwareAdapter_310208a extends \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter|null wrapped object, if the proxy is initialized
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

    public function commit() : bool
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, 'commit', array(), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        return $this->valueHolder71a9f->commit();
    }

    public function deleteItems(array $keys) : bool
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, 'deleteItems', array('keys' => $keys), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        return $this->valueHolder71a9f->deleteItems($keys);
    }

    public function invalidateTags(array $tags)
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, 'invalidateTags', array('tags' => $tags), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        return $this->valueHolder71a9f->invalidateTags($tags);
    }

    public function hasItem($key)
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, 'hasItem', array('key' => $key), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        return $this->valueHolder71a9f->hasItem($key);
    }

    public function clear(string $prefix = '')
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, 'clear', array('prefix' => $prefix), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        return $this->valueHolder71a9f->clear($prefix);
    }

    public function deleteItem($key)
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, 'deleteItem', array('key' => $key), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        return $this->valueHolder71a9f->deleteItem($key);
    }

    public function getItem($key)
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, 'getItem', array('key' => $key), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        return $this->valueHolder71a9f->getItem($key);
    }

    public function getItems(array $keys = [])
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, 'getItems', array('keys' => $keys), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        return $this->valueHolder71a9f->getItems($keys);
    }

    public function save(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, 'save', array('item' => $item), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        return $this->valueHolder71a9f->save($item);
    }

    public function saveDeferred(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, 'saveDeferred', array('item' => $item), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        return $this->valueHolder71a9f->saveDeferred($item);
    }

    public function enableVersioning(bool $enable = true)
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, 'enableVersioning', array('enable' => $enable), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        return $this->valueHolder71a9f->enableVersioning($enable);
    }

    public function reset()
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, 'reset', array(), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        return $this->valueHolder71a9f->reset();
    }

    public function setLogger(\Psr\Log\LoggerInterface $logger)
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, 'setLogger', array('logger' => $logger), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        return $this->valueHolder71a9f->setLogger($logger);
    }

    public function setCallbackWrapper(?callable $callbackWrapper) : callable
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, 'setCallbackWrapper', array('callbackWrapper' => $callbackWrapper), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        return $this->valueHolder71a9f->setCallbackWrapper($callbackWrapper);
    }

    public function get(string $key, callable $callback, ?float $beta = null, ?array &$metadata = null)
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, 'get', array('key' => $key, 'callback' => $callback, 'beta' => $beta, 'metadata' => $metadata), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        return $this->valueHolder71a9f->get($key, $callback, $beta, $metadata);
    }

    public function delete(string $key) : bool
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, 'delete', array('key' => $key), $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        return $this->valueHolder71a9f->delete($key);
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

        $instance->initializer91e1b = $initializer;

        return $instance;
    }

    public function __construct($redis, string $namespace = '', int $defaultLifetime = 0, ?\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        static $reflection;

        if (! $this->valueHolder71a9f) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');
            $this->valueHolder71a9f = $reflection->newInstanceWithoutConstructor();
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($this);

        }

        $this->valueHolder71a9f->__construct($redis, $namespace, $defaultLifetime, $marshaller);
    }

    public function & __get($name)
    {
        $this->initializer91e1b && ($this->initializer91e1b->__invoke($valueHolder71a9f, $this, '__get', ['name' => $name], $this->initializer91e1b) || 1) && $this->valueHolder71a9f = $valueHolder71a9f;

        if (isset(self::$publicPropertiesd3b1f[$name])) {
            return $this->valueHolder71a9f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

    public function __destruct()
    {
        $this->initializer91e1b || $this->valueHolder71a9f->__destruct();
    }
}

if (!\class_exists('RedisTagAwareAdapter_310208a', false)) {
    \class_alias(__NAMESPACE__.'\\RedisTagAwareAdapter_310208a', 'RedisTagAwareAdapter_310208a', false);
}
