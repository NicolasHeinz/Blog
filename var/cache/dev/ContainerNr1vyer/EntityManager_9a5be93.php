<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder8e5c7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer04593 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties58d3c = [
        
    ];

    public function getConnection()
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'getConnection', array(), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'getMetadataFactory', array(), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'getExpressionBuilder', array(), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'beginTransaction', array(), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'getCache', array(), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->getCache();
    }

    public function transactional($func)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'transactional', array('func' => $func), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->transactional($func);
    }

    public function commit()
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'commit', array(), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->commit();
    }

    public function rollback()
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'rollback', array(), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'getClassMetadata', array('className' => $className), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'createQuery', array('dql' => $dql), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'createNamedQuery', array('name' => $name), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'createQueryBuilder', array(), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'flush', array('entity' => $entity), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'clear', array('entityName' => $entityName), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->clear($entityName);
    }

    public function close()
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'close', array(), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->close();
    }

    public function persist($entity)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'persist', array('entity' => $entity), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'remove', array('entity' => $entity), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'refresh', array('entity' => $entity), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'detach', array('entity' => $entity), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'merge', array('entity' => $entity), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'getRepository', array('entityName' => $entityName), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'contains', array('entity' => $entity), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'getEventManager', array(), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'getConfiguration', array(), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'isOpen', array(), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'getUnitOfWork', array(), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'getProxyFactory', array(), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'initializeObject', array('obj' => $obj), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'getFilters', array(), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'isFiltersStateClean', array(), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'hasFilters', array(), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return $this->valueHolder8e5c7->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? $reflection = new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer04593 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8e5c7) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8e5c7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8e5c7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, '__get', ['name' => $name], $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        if (isset(self::$publicProperties58d3c[$name])) {
            return $this->valueHolder8e5c7->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e5c7;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder8e5c7;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e5c7;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder8e5c7;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, '__isset', array('name' => $name), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e5c7;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder8e5c7;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, '__unset', array('name' => $name), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e5c7;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder8e5c7;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, '__clone', array(), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        $this->valueHolder8e5c7 = clone $this->valueHolder8e5c7;
    }

    public function __sleep()
    {
        $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, '__sleep', array(), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;

        return array('valueHolder8e5c7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer04593 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer04593;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer04593 && ($this->initializer04593->__invoke($valueHolder8e5c7, $this, 'initializeProxy', array(), $this->initializer04593) || 1) && $this->valueHolder8e5c7 = $valueHolder8e5c7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8e5c7;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder8e5c7;
    }


}
