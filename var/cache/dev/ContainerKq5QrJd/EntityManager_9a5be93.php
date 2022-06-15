<?php

namespace ContainerKq5QrJd;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf0f23 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4f971 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties599b0 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'getConnection', array(), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'getMetadataFactory', array(), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'getExpressionBuilder', array(), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'beginTransaction', array(), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'getCache', array(), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'transactional', array('func' => $func), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'commit', array(), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->commit();
    }

    public function rollback()
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'rollback', array(), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'getClassMetadata', array('className' => $className), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'createQuery', array('dql' => $dql), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'createNamedQuery', array('name' => $name), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'createQueryBuilder', array(), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'flush', array('entity' => $entity), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'clear', array('entityName' => $entityName), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->clear($entityName);
    }

    public function close()
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'close', array(), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->close();
    }

    public function persist($entity)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'persist', array('entity' => $entity), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'remove', array('entity' => $entity), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'refresh', array('entity' => $entity), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'detach', array('entity' => $entity), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'merge', array('entity' => $entity), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'contains', array('entity' => $entity), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'getEventManager', array(), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'getConfiguration', array(), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'isOpen', array(), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'getUnitOfWork', array(), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'getProxyFactory', array(), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'initializeObject', array('obj' => $obj), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'getFilters', array(), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'isFiltersStateClean', array(), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'hasFilters', array(), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return $this->valueHolderf0f23->hasFilters();
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

        $instance->initializer4f971 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf0f23) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf0f23 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf0f23->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, '__get', ['name' => $name], $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        if (isset(self::$publicProperties599b0[$name])) {
            return $this->valueHolderf0f23->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0f23;

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

        $targetObject = $this->valueHolderf0f23;
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
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0f23;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf0f23;
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
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, '__isset', array('name' => $name), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0f23;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf0f23;
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
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, '__unset', array('name' => $name), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0f23;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf0f23;
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
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, '__clone', array(), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        $this->valueHolderf0f23 = clone $this->valueHolderf0f23;
    }

    public function __sleep()
    {
        $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, '__sleep', array(), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;

        return array('valueHolderf0f23');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4f971 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4f971;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4f971 && ($this->initializer4f971->__invoke($valueHolderf0f23, $this, 'initializeProxy', array(), $this->initializer4f971) || 1) && $this->valueHolderf0f23 = $valueHolderf0f23;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf0f23;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf0f23;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
