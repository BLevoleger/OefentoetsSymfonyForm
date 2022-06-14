<?php

namespace Container1AalPKI;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7aa0c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbefc7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbca56 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'getConnection', array(), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'getMetadataFactory', array(), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'getExpressionBuilder', array(), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'beginTransaction', array(), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'getCache', array(), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'transactional', array('func' => $func), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'commit', array(), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->commit();
    }

    public function rollback()
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'rollback', array(), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'getClassMetadata', array('className' => $className), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'createQuery', array('dql' => $dql), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'createNamedQuery', array('name' => $name), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'createQueryBuilder', array(), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'flush', array('entity' => $entity), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'clear', array('entityName' => $entityName), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->clear($entityName);
    }

    public function close()
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'close', array(), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->close();
    }

    public function persist($entity)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'persist', array('entity' => $entity), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'remove', array('entity' => $entity), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'refresh', array('entity' => $entity), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'detach', array('entity' => $entity), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'merge', array('entity' => $entity), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'contains', array('entity' => $entity), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'getEventManager', array(), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'getConfiguration', array(), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'isOpen', array(), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'getUnitOfWork', array(), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'getProxyFactory', array(), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'initializeObject', array('obj' => $obj), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'getFilters', array(), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'isFiltersStateClean', array(), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'hasFilters', array(), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return $this->valueHolder7aa0c->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerbefc7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7aa0c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7aa0c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7aa0c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, '__get', ['name' => $name], $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        if (isset(self::$publicPropertiesbca56[$name])) {
            return $this->valueHolder7aa0c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7aa0c;

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

        $targetObject = $this->valueHolder7aa0c;
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
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7aa0c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7aa0c;
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
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, '__isset', array('name' => $name), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7aa0c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7aa0c;
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
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, '__unset', array('name' => $name), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7aa0c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7aa0c;
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
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, '__clone', array(), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        $this->valueHolder7aa0c = clone $this->valueHolder7aa0c;
    }

    public function __sleep()
    {
        $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, '__sleep', array(), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;

        return array('valueHolder7aa0c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbefc7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbefc7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbefc7 && ($this->initializerbefc7->__invoke($valueHolder7aa0c, $this, 'initializeProxy', array(), $this->initializerbefc7) || 1) && $this->valueHolder7aa0c = $valueHolder7aa0c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7aa0c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7aa0c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
