<?php

namespace Hyperf\Seata\Rm\DataSource\Exec;


use Hyperf\Seata\Core\Context\RootContext;
use Hyperf\Seata\Rm\DataSource\Sql\Struct\TableMeta;
use Hyperf\Seata\Rm\DataSource\Sql\Struct\TableMetaCacheFactory;
use Hyperf\Seata\Rm\PDOProxy;
use Hyperf\Seata\SqlParser\Parser\ParserInterface;
use Hyperf\Utils\ApplicationContext;
use PDO;

abstract class BaseTransactionalExecutor implements Executor
{
    protected ParserInterface $parser;

    protected PDOProxy $PDO;

    protected array $bindParamContext = [];

    protected array $bindColumnContext = [];

    protected array $bindValueContext = [];

    protected ?TableMeta $tableMeta = null;



    public function __construct(ParserInterface $parser, PDOProxy $PDO, array $bindParamContext = [], array $bindColumnContext = [], array $bindValueContext = [])
    {
        $this->parser = $parser;
        $this->PDO = $PDO;
        $this->bindColumnContext = $bindColumnContext;
        $this->bindParamContext = $bindParamContext;
        $this->bindValueContext = $bindValueContext;
    }

    protected function getTableMeta($dbType): TableMeta
    {
        if (! empty($this->tableMeta)) {
            return $this->tableMeta;
        }
        $tableMetaCache = TableMetaCacheFactory::getTableMetaCache($dbType);
        return $tableMetaCache->getTableMeta($this->PDO, $this->parser->getTableName(), $this->parser->getResourceId());
    }


//    private StatementProxy $statementProxy;
//
//    public function execute(...$args)
//    {
//        $connectionProxy = $this->statementProxy->getConnectionProxy();
//        if (RootContext::inGlobalTransaction()) {
//            $xid = RootContext::getXID();
//            $connectionProxy->bind($xid);
//        }
//
//        if (RootContext::requireGlobalLock()) {
//            $connectionProxy->setGlobalLockRequire(true);
//        } else {
//            $connectionProxy->setGlobalLockRequire(false);
//        }
//        return $this->doExecute($args);
//    }
//
//    protected abstract function doExecute(...$args);



}