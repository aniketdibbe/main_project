<?php

namespace Container5ICm8iL;
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractTagAwareAdapter.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/RedisTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/RedisTagAwareAdapter.php';

class RedisTagAwareAdapter_310208a extends \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter|null wrapped object, if the proxy is initialized
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

    public function commit() : bool
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'commit', array(), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return $this->valueHoldera4e4f->commit();
    }

    public function deleteItems(array $keys) : bool
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'deleteItems', array('keys' => $keys), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return $this->valueHoldera4e4f->deleteItems($keys);
    }

    public function invalidateTags(array $tags)
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'invalidateTags', array('tags' => $tags), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return $this->valueHoldera4e4f->invalidateTags($tags);
    }

    public function hasItem($key)
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'hasItem', array('key' => $key), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return $this->valueHoldera4e4f->hasItem($key);
    }

    public function clear(string $prefix = '')
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'clear', array('prefix' => $prefix), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return $this->valueHoldera4e4f->clear($prefix);
    }

    public function deleteItem($key)
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'deleteItem', array('key' => $key), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return $this->valueHoldera4e4f->deleteItem($key);
    }

    public function getItem($key)
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'getItem', array('key' => $key), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return $this->valueHoldera4e4f->getItem($key);
    }

    public function getItems(array $keys = [])
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'getItems', array('keys' => $keys), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return $this->valueHoldera4e4f->getItems($keys);
    }

    public function save(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'save', array('item' => $item), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return $this->valueHoldera4e4f->save($item);
    }

    public function saveDeferred(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'saveDeferred', array('item' => $item), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return $this->valueHoldera4e4f->saveDeferred($item);
    }

    public function enableVersioning(bool $enable = true)
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'enableVersioning', array('enable' => $enable), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return $this->valueHoldera4e4f->enableVersioning($enable);
    }

    public function reset()
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'reset', array(), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return $this->valueHoldera4e4f->reset();
    }

    public function setLogger(\Psr\Log\LoggerInterface $logger)
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'setLogger', array('logger' => $logger), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return $this->valueHoldera4e4f->setLogger($logger);
    }

    public function setCallbackWrapper(?callable $callbackWrapper) : callable
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'setCallbackWrapper', array('callbackWrapper' => $callbackWrapper), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return $this->valueHoldera4e4f->setCallbackWrapper($callbackWrapper);
    }

    public function get(string $key, callable $callback, ?float $beta = null, ?array &$metadata = null)
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'get', array('key' => $key, 'callback' => $callback, 'beta' => $beta, 'metadata' => $metadata), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return $this->valueHoldera4e4f->get($key, $callback, $beta, $metadata);
    }

    public function delete(string $key) : bool
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, 'delete', array('key' => $key), $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        return $this->valueHoldera4e4f->delete($key);
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

        $instance->initializer7bda9 = $initializer;

        return $instance;
    }

    public function __construct($redis, string $namespace = '', int $defaultLifetime = 0, ?\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        static $reflection;

        if (! $this->valueHoldera4e4f) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');
            $this->valueHoldera4e4f = $reflection->newInstanceWithoutConstructor();
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($this);

        }

        $this->valueHoldera4e4f->__construct($redis, $namespace, $defaultLifetime, $marshaller);
    }

    public function & __get($name)
    {
        $this->initializer7bda9 && ($this->initializer7bda9->__invoke($valueHoldera4e4f, $this, '__get', ['name' => $name], $this->initializer7bda9) || 1) && $this->valueHoldera4e4f = $valueHoldera4e4f;

        if (isset(self::$publicProperties2bc45[$name])) {
            return $this->valueHoldera4e4f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

    public function __destruct()
    {
        $this->initializer7bda9 || $this->valueHoldera4e4f->__destruct();
    }
}

if (!\class_exists('RedisTagAwareAdapter_310208a', false)) {
    \class_alias(__NAMESPACE__.'\\RedisTagAwareAdapter_310208a', 'RedisTagAwareAdapter_310208a', false);
}
