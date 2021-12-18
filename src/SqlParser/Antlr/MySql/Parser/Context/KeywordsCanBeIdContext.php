<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Hyperf\Seata\SqlParser\Antlr\MySql\Parser\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
    use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
    use Antlr\Antlr4\Runtime\Tree\TerminalNode;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

    class KeywordsCanBeIdContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_keywordsCanBeId;
        }

        public function ACCOUNT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ACCOUNT, 0);
        }

        public function ACTION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ACTION, 0);
        }

        public function AFTER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::AFTER, 0);
        }

        public function AGGREGATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::AGGREGATE, 0);
        }

        public function ALGORITHM(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ALGORITHM, 0);
        }

        public function ANY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ANY, 0);
        }

        public function AT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::AT, 0);
        }

        public function AUDIT_ADMIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::AUDIT_ADMIN, 0);
        }

        public function AUTHORS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::AUTHORS, 0);
        }

        public function AUTOCOMMIT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::AUTOCOMMIT, 0);
        }

        public function AUTOEXTEND_SIZE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::AUTOEXTEND_SIZE, 0);
        }

        public function AUTO_INCREMENT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::AUTO_INCREMENT, 0);
        }

        public function AVG(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::AVG, 0);
        }

        public function AVG_ROW_LENGTH(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::AVG_ROW_LENGTH, 0);
        }

        public function BACKUP_ADMIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BACKUP_ADMIN, 0);
        }

        public function BEGIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BEGIN, 0);
        }

        public function BINLOG(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BINLOG, 0);
        }

        public function BINLOG_ADMIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BINLOG_ADMIN, 0);
        }

        public function BINLOG_ENCRYPTION_ADMIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BINLOG_ENCRYPTION_ADMIN, 0);
        }

        public function BIT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BIT, 0);
        }

        public function BIT_AND(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BIT_AND, 0);
        }

        public function BIT_OR(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BIT_OR, 0);
        }

        public function BIT_XOR(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BIT_XOR, 0);
        }

        public function BLOCK(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BLOCK, 0);
        }

        public function BOOL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BOOL, 0);
        }

        public function BOOLEAN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BOOLEAN, 0);
        }

        public function BTREE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BTREE, 0);
        }

        public function CACHE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CACHE, 0);
        }

        public function CASCADED(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CASCADED, 0);
        }

        public function CHAIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CHAIN, 0);
        }

        public function CHANGED(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CHANGED, 0);
        }

        public function CHANNEL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CHANNEL, 0);
        }

        public function CHECKSUM(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CHECKSUM, 0);
        }

        public function PAGE_CHECKSUM(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PAGE_CHECKSUM, 0);
        }

        public function CATALOG_NAME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CATALOG_NAME, 0);
        }

        public function CIPHER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CIPHER, 0);
        }

        public function CLASS_ORIGIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CLASS_ORIGIN, 0);
        }

        public function CLIENT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CLIENT, 0);
        }

        public function CLONE_ADMIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CLONE_ADMIN, 0);
        }

        public function CLOSE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CLOSE, 0);
        }

        public function COALESCE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COALESCE, 0);
        }

        public function CODE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CODE, 0);
        }

        public function COLUMNS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COLUMNS, 0);
        }

        public function COLUMN_FORMAT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COLUMN_FORMAT, 0);
        }

        public function COLUMN_NAME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COLUMN_NAME, 0);
        }

        public function COMMENT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COMMENT, 0);
        }

        public function COMMIT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COMMIT, 0);
        }

        public function COMPACT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COMPACT, 0);
        }

        public function COMPLETION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COMPLETION, 0);
        }

        public function COMPRESSED(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COMPRESSED, 0);
        }

        public function COMPRESSION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COMPRESSION, 0);
        }

        public function CONCURRENT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CONCURRENT, 0);
        }

        public function CONNECT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CONNECT, 0);
        }

        public function CONNECTION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CONNECTION, 0);
        }

        public function CONNECTION_ADMIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CONNECTION_ADMIN, 0);
        }

        public function CONSISTENT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CONSISTENT, 0);
        }

        public function CONSTRAINT_CATALOG(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CONSTRAINT_CATALOG, 0);
        }

        public function CONSTRAINT_NAME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CONSTRAINT_NAME, 0);
        }

        public function CONSTRAINT_SCHEMA(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CONSTRAINT_SCHEMA, 0);
        }

        public function CONTAINS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CONTAINS, 0);
        }

        public function CONTEXT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CONTEXT, 0);
        }

        public function CONTRIBUTORS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CONTRIBUTORS, 0);
        }

        public function COPY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COPY, 0);
        }

        public function COUNT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COUNT, 0);
        }

        public function CPU(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CPU, 0);
        }

        public function CURRENT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CURRENT, 0);
        }

        public function CURSOR_NAME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CURSOR_NAME, 0);
        }

        public function DATA(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DATA, 0);
        }

        public function DATAFILE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DATAFILE, 0);
        }

        public function DEALLOCATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DEALLOCATE, 0);
        }

        public function DEFAULT_AUTH(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DEFAULT_AUTH, 0);
        }

        public function DEFINER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DEFINER, 0);
        }

        public function DELAY_KEY_WRITE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DELAY_KEY_WRITE, 0);
        }

        public function DES_KEY_FILE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DES_KEY_FILE, 0);
        }

        public function DIAGNOSTICS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DIAGNOSTICS, 0);
        }

        public function DIRECTORY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DIRECTORY, 0);
        }

        public function DISABLE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DISABLE, 0);
        }

        public function DISCARD(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DISCARD, 0);
        }

        public function DISK(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DISK, 0);
        }

        public function DO(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DO, 0);
        }

        public function DUMPFILE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DUMPFILE, 0);
        }

        public function DUPLICATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DUPLICATE, 0);
        }

        public function DYNAMIC(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DYNAMIC, 0);
        }

        public function ENABLE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ENABLE, 0);
        }

        public function ENCRYPTION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ENCRYPTION, 0);
        }

        public function ENCRYPTION_KEY_ADMIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ENCRYPTION_KEY_ADMIN, 0);
        }

        public function END(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::END, 0);
        }

        public function ENDS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ENDS, 0);
        }

        public function ENGINE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ENGINE, 0);
        }

        public function ENGINES(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ENGINES, 0);
        }

        public function ERROR(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ERROR, 0);
        }

        public function ERRORS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ERRORS, 0);
        }

        public function ESCAPE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ESCAPE, 0);
        }

        public function EUR(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EUR, 0);
        }

        public function EVEN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EVEN, 0);
        }

        public function EVENT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EVENT, 0);
        }

        public function EVENTS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EVENTS, 0);
        }

        public function EVERY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EVERY, 0);
        }

        public function EXCEPT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EXCEPT, 0);
        }

        public function EXCHANGE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EXCHANGE, 0);
        }

        public function EXCLUSIVE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EXCLUSIVE, 0);
        }

        public function EXPIRE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EXPIRE, 0);
        }

        public function EXPORT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EXPORT, 0);
        }

        public function EXTENDED(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EXTENDED, 0);
        }

        public function EXTENT_SIZE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EXTENT_SIZE, 0);
        }

        public function FAST(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FAST, 0);
        }

        public function FAULTS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FAULTS, 0);
        }

        public function FIELDS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FIELDS, 0);
        }

        public function FILE_BLOCK_SIZE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FILE_BLOCK_SIZE, 0);
        }

        public function FILTER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FILTER, 0);
        }

        public function FIREWALL_ADMIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FIREWALL_ADMIN, 0);
        }

        public function FIREWALL_USER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FIREWALL_USER, 0);
        }

        public function FIRST(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FIRST, 0);
        }

        public function FIXED(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FIXED, 0);
        }

        public function FLUSH(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FLUSH, 0);
        }

        public function FOLLOWS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FOLLOWS, 0);
        }

        public function FOUND(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FOUND, 0);
        }

        public function FULL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FULL, 0);
        }

        public function FUNCTION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FUNCTION, 0);
        }

        public function GENERAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::GENERAL, 0);
        }

        public function GLOBAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::GLOBAL, 0);
        }

        public function GRANTS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::GRANTS, 0);
        }

        public function GROUP(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::GROUP, 0);
        }

        public function GROUP_CONCAT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::GROUP_CONCAT, 0);
        }

        public function GROUP_REPLICATION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::GROUP_REPLICATION, 0);
        }

        public function GROUP_REPLICATION_ADMIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::GROUP_REPLICATION_ADMIN, 0);
        }

        public function HANDLER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::HANDLER, 0);
        }

        public function HASH(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::HASH, 0);
        }

        public function HELP(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::HELP, 0);
        }

        public function HOST(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::HOST, 0);
        }

        public function HOSTS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::HOSTS, 0);
        }

        public function IDENTIFIED(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::IDENTIFIED, 0);
        }

        public function IGNORE_SERVER_IDS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::IGNORE_SERVER_IDS, 0);
        }

        public function IMPORT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::IMPORT, 0);
        }

        public function INDEXES(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INDEXES, 0);
        }

        public function INITIAL_SIZE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INITIAL_SIZE, 0);
        }

        public function INNODB_REDO_LOG_ARCHIVE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INNODB_REDO_LOG_ARCHIVE, 0);
        }

        public function INPLACE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INPLACE, 0);
        }

        public function INSERT_METHOD(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INSERT_METHOD, 0);
        }

        public function INSTALL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INSTALL, 0);
        }

        public function INSTANCE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INSTANCE, 0);
        }

        public function INTERNAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INTERNAL, 0);
        }

        public function INVOKER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INVOKER, 0);
        }

        public function IO(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::IO, 0);
        }

        public function IO_THREAD(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::IO_THREAD, 0);
        }

        public function IPC(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::IPC, 0);
        }

        public function ISO(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ISO, 0);
        }

        public function ISOLATION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ISOLATION, 0);
        }

        public function ISSUER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ISSUER, 0);
        }

        public function JIS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::JIS, 0);
        }

        public function JSON(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::JSON, 0);
        }

        public function KEY_BLOCK_SIZE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::KEY_BLOCK_SIZE, 0);
        }

        public function LANGUAGE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LANGUAGE, 0);
        }

        public function LAST(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LAST, 0);
        }

        public function LEAVES(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LEAVES, 0);
        }

        public function LESS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LESS, 0);
        }

        public function LEVEL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LEVEL, 0);
        }

        public function LIST(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LIST, 0);
        }

        public function LOCAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LOCAL, 0);
        }

        public function LOGFILE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LOGFILE, 0);
        }

        public function LOGS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LOGS, 0);
        }

        public function MASTER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER, 0);
        }

        public function MASTER_AUTO_POSITION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_AUTO_POSITION, 0);
        }

        public function MASTER_CONNECT_RETRY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_CONNECT_RETRY, 0);
        }

        public function MASTER_DELAY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_DELAY, 0);
        }

        public function MASTER_HEARTBEAT_PERIOD(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_HEARTBEAT_PERIOD, 0);
        }

        public function MASTER_HOST(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_HOST, 0);
        }

        public function MASTER_LOG_FILE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_LOG_FILE, 0);
        }

        public function MASTER_LOG_POS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_LOG_POS, 0);
        }

        public function MASTER_PASSWORD(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_PASSWORD, 0);
        }

        public function MASTER_PORT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_PORT, 0);
        }

        public function MASTER_RETRY_COUNT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_RETRY_COUNT, 0);
        }

        public function MASTER_SSL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_SSL, 0);
        }

        public function MASTER_SSL_CA(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_SSL_CA, 0);
        }

        public function MASTER_SSL_CAPATH(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_SSL_CAPATH, 0);
        }

        public function MASTER_SSL_CERT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_SSL_CERT, 0);
        }

        public function MASTER_SSL_CIPHER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_SSL_CIPHER, 0);
        }

        public function MASTER_SSL_CRL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_SSL_CRL, 0);
        }

        public function MASTER_SSL_CRLPATH(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_SSL_CRLPATH, 0);
        }

        public function MASTER_SSL_KEY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_SSL_KEY, 0);
        }

        public function MASTER_TLS_VERSION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_TLS_VERSION, 0);
        }

        public function MASTER_USER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_USER, 0);
        }

        public function MAX_CONNECTIONS_PER_HOUR(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MAX_CONNECTIONS_PER_HOUR, 0);
        }

        public function MAX_QUERIES_PER_HOUR(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MAX_QUERIES_PER_HOUR, 0);
        }

        public function MAX(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MAX, 0);
        }

        public function MAX_ROWS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MAX_ROWS, 0);
        }

        public function MAX_SIZE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MAX_SIZE, 0);
        }

        public function MAX_UPDATES_PER_HOUR(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MAX_UPDATES_PER_HOUR, 0);
        }

        public function MAX_USER_CONNECTIONS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MAX_USER_CONNECTIONS, 0);
        }

        public function MEDIUM(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MEDIUM, 0);
        }

        public function MEMBER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MEMBER, 0);
        }

        public function MEMORY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MEMORY, 0);
        }

        public function MERGE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MERGE, 0);
        }

        public function MESSAGE_TEXT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MESSAGE_TEXT, 0);
        }

        public function MID(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MID, 0);
        }

        public function MIGRATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MIGRATE, 0);
        }

        public function MIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MIN, 0);
        }

        public function MIN_ROWS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MIN_ROWS, 0);
        }

        public function MODE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MODE, 0);
        }

        public function MODIFY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MODIFY, 0);
        }

        public function MUTEX(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MUTEX, 0);
        }

        public function MYSQL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MYSQL, 0);
        }

        public function MYSQL_ERRNO(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MYSQL_ERRNO, 0);
        }

        public function NAME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NAME, 0);
        }

        public function NAMES(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NAMES, 0);
        }

        public function NCHAR(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NCHAR, 0);
        }

        public function NDB_STORED_USER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NDB_STORED_USER, 0);
        }

        public function NEVER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NEVER, 0);
        }

        public function NEXT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NEXT, 0);
        }

        public function NO(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NO, 0);
        }

        public function NODEGROUP(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NODEGROUP, 0);
        }

        public function NONE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NONE, 0);
        }

        public function NUMBER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NUMBER, 0);
        }

        public function OFFLINE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::OFFLINE, 0);
        }

        public function ODBC(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ODBC, 0);
        }

        public function OFFSET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::OFFSET, 0);
        }

        public function OF(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::OF, 0);
        }

        public function OJ(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::OJ, 0);
        }

        public function OLD_PASSWORD(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::OLD_PASSWORD, 0);
        }

        public function ONE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ONE, 0);
        }

        public function ONLINE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ONLINE, 0);
        }

        public function ONLY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ONLY, 0);
        }

        public function OPEN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::OPEN, 0);
        }

        public function OPTIMIZER_COSTS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::OPTIMIZER_COSTS, 0);
        }

        public function OPTIONAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::OPTIONAL, 0);
        }

        public function OPTIONS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::OPTIONS, 0);
        }

        public function ORDER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ORDER, 0);
        }

        public function OWNER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::OWNER, 0);
        }

        public function PACK_KEYS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PACK_KEYS, 0);
        }

        public function PAGE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PAGE, 0);
        }

        public function PARSER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PARSER, 0);
        }

        public function PARTIAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PARTIAL, 0);
        }

        public function PARTITIONING(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PARTITIONING, 0);
        }

        public function PARTITIONS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PARTITIONS, 0);
        }

        public function PASSWORD(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PASSWORD, 0);
        }

        public function PERSIST_RO_VARIABLES_ADMIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PERSIST_RO_VARIABLES_ADMIN, 0);
        }

        public function PHASE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PHASE, 0);
        }

        public function PLUGINS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PLUGINS, 0);
        }

        public function PLUGIN_DIR(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PLUGIN_DIR, 0);
        }

        public function PLUGIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PLUGIN, 0);
        }

        public function PORT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PORT, 0);
        }

        public function PRECEDES(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PRECEDES, 0);
        }

        public function PREPARE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PREPARE, 0);
        }

        public function PRESERVE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PRESERVE, 0);
        }

        public function PREV(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PREV, 0);
        }

        public function PROCESSLIST(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PROCESSLIST, 0);
        }

        public function PROFILE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PROFILE, 0);
        }

        public function PROFILES(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PROFILES, 0);
        }

        public function PROXY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PROXY, 0);
        }

        public function QUERY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::QUERY, 0);
        }

        public function QUICK(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::QUICK, 0);
        }

        public function REBUILD(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REBUILD, 0);
        }

        public function RECOVER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RECOVER, 0);
        }

        public function REDO_BUFFER_SIZE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REDO_BUFFER_SIZE, 0);
        }

        public function REDUNDANT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REDUNDANT, 0);
        }

        public function RELAY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RELAY, 0);
        }

        public function RELAYLOG(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RELAYLOG, 0);
        }

        public function RELAY_LOG_FILE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RELAY_LOG_FILE, 0);
        }

        public function RELAY_LOG_POS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RELAY_LOG_POS, 0);
        }

        public function REMOVE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REMOVE, 0);
        }

        public function REORGANIZE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REORGANIZE, 0);
        }

        public function REPAIR(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REPAIR, 0);
        }

        public function REPLICATE_DO_DB(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REPLICATE_DO_DB, 0);
        }

        public function REPLICATE_DO_TABLE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REPLICATE_DO_TABLE, 0);
        }

        public function REPLICATE_IGNORE_DB(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REPLICATE_IGNORE_DB, 0);
        }

        public function REPLICATE_IGNORE_TABLE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REPLICATE_IGNORE_TABLE, 0);
        }

        public function REPLICATE_REWRITE_DB(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REPLICATE_REWRITE_DB, 0);
        }

        public function REPLICATE_WILD_DO_TABLE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REPLICATE_WILD_DO_TABLE, 0);
        }

        public function REPLICATE_WILD_IGNORE_TABLE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REPLICATE_WILD_IGNORE_TABLE, 0);
        }

        public function REPLICATION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REPLICATION, 0);
        }

        public function REPLICATION_APPLIER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REPLICATION_APPLIER, 0);
        }

        public function REPLICATION_SLAVE_ADMIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REPLICATION_SLAVE_ADMIN, 0);
        }

        public function RESET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RESET, 0);
        }

        public function RESOURCE_GROUP_ADMIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RESOURCE_GROUP_ADMIN, 0);
        }

        public function RESOURCE_GROUP_USER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RESOURCE_GROUP_USER, 0);
        }

        public function RESUME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RESUME, 0);
        }

        public function RETURNED_SQLSTATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RETURNED_SQLSTATE, 0);
        }

        public function RETURNS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RETURNS, 0);
        }

        public function ROLE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ROLE, 0);
        }

        public function ROLE_ADMIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ROLE_ADMIN, 0);
        }

        public function ROLLBACK(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ROLLBACK, 0);
        }

        public function ROLLUP(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ROLLUP, 0);
        }

        public function ROTATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ROTATE, 0);
        }

        public function ROW(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ROW, 0);
        }

        public function ROWS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ROWS, 0);
        }

        public function ROW_FORMAT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ROW_FORMAT, 0);
        }

        public function SAVEPOINT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SAVEPOINT, 0);
        }

        public function SCHEDULE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SCHEDULE, 0);
        }

        public function SCHEMA_NAME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SCHEMA_NAME, 0);
        }

        public function SECURITY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SECURITY, 0);
        }

        public function SERIAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SERIAL, 0);
        }

        public function SERVER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SERVER, 0);
        }

        public function SESSION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SESSION, 0);
        }

        public function SESSION_VARIABLES_ADMIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SESSION_VARIABLES_ADMIN, 0);
        }

        public function SET_USER_ID(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SET_USER_ID, 0);
        }

        public function SHARE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SHARE, 0);
        }

        public function SHARED(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SHARED, 0);
        }

        public function SHOW_ROUTINE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SHOW_ROUTINE, 0);
        }

        public function SIGNED(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SIGNED, 0);
        }

        public function SIMPLE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SIMPLE, 0);
        }

        public function SLAVE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SLAVE, 0);
        }

        public function SLOW(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SLOW, 0);
        }

        public function SNAPSHOT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SNAPSHOT, 0);
        }

        public function SOCKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SOCKET, 0);
        }

        public function SOME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SOME, 0);
        }

        public function SONAME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SONAME, 0);
        }

        public function SOUNDS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SOUNDS, 0);
        }

        public function SOURCE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SOURCE, 0);
        }

        public function SQL_AFTER_GTIDS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SQL_AFTER_GTIDS, 0);
        }

        public function SQL_AFTER_MTS_GAPS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SQL_AFTER_MTS_GAPS, 0);
        }

        public function SQL_BEFORE_GTIDS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SQL_BEFORE_GTIDS, 0);
        }

        public function SQL_BUFFER_RESULT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SQL_BUFFER_RESULT, 0);
        }

        public function SQL_CACHE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SQL_CACHE, 0);
        }

        public function SQL_NO_CACHE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SQL_NO_CACHE, 0);
        }

        public function SQL_THREAD(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SQL_THREAD, 0);
        }

        public function STACKED(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STACKED, 0);
        }

        public function START(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::START, 0);
        }

        public function STARTS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STARTS, 0);
        }

        public function STATS_AUTO_RECALC(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STATS_AUTO_RECALC, 0);
        }

        public function STATS_PERSISTENT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STATS_PERSISTENT, 0);
        }

        public function STATS_SAMPLE_PAGES(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STATS_SAMPLE_PAGES, 0);
        }

        public function STATUS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STATUS, 0);
        }

        public function STD(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STD, 0);
        }

        public function STDDEV(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STDDEV, 0);
        }

        public function STDDEV_POP(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STDDEV_POP, 0);
        }

        public function STDDEV_SAMP(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STDDEV_SAMP, 0);
        }

        public function STOP(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STOP, 0);
        }

        public function STORAGE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STORAGE, 0);
        }

        public function STRING(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STRING, 0);
        }

        public function SUBCLASS_ORIGIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SUBCLASS_ORIGIN, 0);
        }

        public function SUBJECT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SUBJECT, 0);
        }

        public function SUBPARTITION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SUBPARTITION, 0);
        }

        public function SUBPARTITIONS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SUBPARTITIONS, 0);
        }

        public function SUM(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SUM, 0);
        }

        public function SUSPEND(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SUSPEND, 0);
        }

        public function SWAPS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SWAPS, 0);
        }

        public function SWITCHES(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SWITCHES, 0);
        }

        public function SYSTEM_VARIABLES_ADMIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SYSTEM_VARIABLES_ADMIN, 0);
        }

        public function TABLE_NAME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TABLE_NAME, 0);
        }

        public function TABLESPACE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TABLESPACE, 0);
        }

        public function TABLE_ENCRYPTION_ADMIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TABLE_ENCRYPTION_ADMIN, 0);
        }

        public function TEMPORARY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TEMPORARY, 0);
        }

        public function TEMPTABLE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TEMPTABLE, 0);
        }

        public function THAN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::THAN, 0);
        }

        public function TRADITIONAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TRADITIONAL, 0);
        }

        public function TRANSACTION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TRANSACTION, 0);
        }

        public function TRANSACTIONAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TRANSACTIONAL, 0);
        }

        public function TRIGGERS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TRIGGERS, 0);
        }

        public function TRUNCATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TRUNCATE, 0);
        }

        public function UNDEFINED(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::UNDEFINED, 0);
        }

        public function UNDOFILE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::UNDOFILE, 0);
        }

        public function UNDO_BUFFER_SIZE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::UNDO_BUFFER_SIZE, 0);
        }

        public function UNINSTALL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::UNINSTALL, 0);
        }

        public function UNKNOWN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::UNKNOWN, 0);
        }

        public function UNTIL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::UNTIL, 0);
        }

        public function UPGRADE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::UPGRADE, 0);
        }

        public function USA(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::USA, 0);
        }

        public function USER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::USER, 0);
        }

        public function USE_FRM(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::USE_FRM, 0);
        }

        public function USER_RESOURCES(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::USER_RESOURCES, 0);
        }

        public function VALIDATION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::VALIDATION, 0);
        }

        public function VALUE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::VALUE, 0);
        }

        public function VAR_POP(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::VAR_POP, 0);
        }

        public function VAR_SAMP(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::VAR_SAMP, 0);
        }

        public function VARIABLES(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::VARIABLES, 0);
        }

        public function VARIANCE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::VARIANCE, 0);
        }

        public function VERSION_TOKEN_ADMIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::VERSION_TOKEN_ADMIN, 0);
        }

        public function VIEW(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::VIEW, 0);
        }

        public function WAIT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::WAIT, 0);
        }

        public function WARNINGS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::WARNINGS, 0);
        }

        public function WITHOUT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::WITHOUT, 0);
        }

        public function WORK(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::WORK, 0);
        }

        public function WRAPPER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::WRAPPER, 0);
        }

        public function X509(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::X509, 0);
        }

        public function XA(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::XA, 0);
        }

        public function XA_RECOVER_ADMIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::XA_RECOVER_ADMIN, 0);
        }

        public function XML(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::XML, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterKeywordsCanBeId($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitKeywordsCanBeId($this);
            }
        }
    }
