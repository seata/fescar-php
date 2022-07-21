<?php

declare(strict_types=1);
/**
 * Copyright 1999-2022 Seata.io Group.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace Hyperf\Seata\SqlParser\Antlr\MySql\Parser\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

class PrivilegeContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_privilege;
    }

    public function ALL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ALL, 0);
    }

    public function PRIVILEGES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PRIVILEGES, 0);
    }

    public function ALTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ALTER, 0);
    }

    public function ROUTINE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ROUTINE, 0);
    }

    public function CREATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CREATE, 0);
    }

    public function TEMPORARY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TEMPORARY, 0);
    }

    public function TABLES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLES, 0);
    }

    public function VIEW(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VIEW, 0);
    }

    public function USER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::USER, 0);
    }

    public function TABLESPACE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLESPACE, 0);
    }

    public function ROLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ROLE, 0);
    }

    public function DELETE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DELETE, 0);
    }

    public function DROP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DROP, 0);
    }

    public function EVENT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EVENT, 0);
    }

    public function EXECUTE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EXECUTE, 0);
    }

    public function FILE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FILE, 0);
    }

    public function GRANT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GRANT, 0);
    }

    public function OPTION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OPTION, 0);
    }

    public function INDEX(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INDEX, 0);
    }

    public function INSERT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INSERT, 0);
    }

    public function LOCK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOCK, 0);
    }

    public function PROCESS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PROCESS, 0);
    }

    public function PROXY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PROXY, 0);
    }

    public function REFERENCES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REFERENCES, 0);
    }

    public function RELOAD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RELOAD, 0);
    }

    public function REPLICATION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REPLICATION, 0);
    }

    public function CLIENT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CLIENT, 0);
    }

    public function SLAVE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SLAVE, 0);
    }

    public function SELECT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SELECT, 0);
    }

    public function SHOW(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SHOW, 0);
    }

    public function DATABASES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DATABASES, 0);
    }

    public function SHUTDOWN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SHUTDOWN, 0);
    }

    public function SUPER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SUPER, 0);
    }

    public function TRIGGER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TRIGGER, 0);
    }

    public function UPDATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UPDATE, 0);
    }

    public function USAGE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::USAGE, 0);
    }

    public function APPLICATION_PASSWORD_ADMIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::APPLICATION_PASSWORD_ADMIN, 0);
    }

    public function AUDIT_ADMIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AUDIT_ADMIN, 0);
    }

    public function BACKUP_ADMIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BACKUP_ADMIN, 0);
    }

    public function BINLOG_ADMIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BINLOG_ADMIN, 0);
    }

    public function BINLOG_ENCRYPTION_ADMIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BINLOG_ENCRYPTION_ADMIN, 0);
    }

    public function CLONE_ADMIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CLONE_ADMIN, 0);
    }

    public function CONNECTION_ADMIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONNECTION_ADMIN, 0);
    }

    public function ENCRYPTION_KEY_ADMIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ENCRYPTION_KEY_ADMIN, 0);
    }

    public function FIREWALL_ADMIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FIREWALL_ADMIN, 0);
    }

    public function FIREWALL_USER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FIREWALL_USER, 0);
    }

    public function FLUSH_OPTIMIZER_COSTS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FLUSH_OPTIMIZER_COSTS, 0);
    }

    public function FLUSH_STATUS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FLUSH_STATUS, 0);
    }

    public function FLUSH_TABLES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FLUSH_TABLES, 0);
    }

    public function FLUSH_USER_RESOURCES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FLUSH_USER_RESOURCES, 0);
    }

    public function GROUP_REPLICATION_ADMIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GROUP_REPLICATION_ADMIN, 0);
    }

    public function INNODB_REDO_LOG_ARCHIVE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INNODB_REDO_LOG_ARCHIVE, 0);
    }

    public function INNODB_REDO_LOG_ENABLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INNODB_REDO_LOG_ENABLE, 0);
    }

    public function NDB_STORED_USER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NDB_STORED_USER, 0);
    }

    public function PERSIST_RO_VARIABLES_ADMIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PERSIST_RO_VARIABLES_ADMIN, 0);
    }

    public function REPLICATION_APPLIER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REPLICATION_APPLIER, 0);
    }

    public function REPLICATION_SLAVE_ADMIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REPLICATION_SLAVE_ADMIN, 0);
    }

    public function RESOURCE_GROUP_ADMIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RESOURCE_GROUP_ADMIN, 0);
    }

    public function RESOURCE_GROUP_USER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RESOURCE_GROUP_USER, 0);
    }

    public function ROLE_ADMIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ROLE_ADMIN, 0);
    }

    public function SERVICE_CONNECTION_ADMIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SERVICE_CONNECTION_ADMIN, 0);
    }

    public function SESSION_VARIABLES_ADMIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SESSION_VARIABLES_ADMIN, 0);
    }

    public function SET_USER_ID(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SET_USER_ID, 0);
    }

    public function SHOW_ROUTINE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SHOW_ROUTINE, 0);
    }

    public function SYSTEM_USER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SYSTEM_USER, 0);
    }

    public function SYSTEM_VARIABLES_ADMIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SYSTEM_VARIABLES_ADMIN, 0);
    }

    public function TABLE_ENCRYPTION_ADMIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLE_ENCRYPTION_ADMIN, 0);
    }

    public function VERSION_TOKEN_ADMIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VERSION_TOKEN_ADMIN, 0);
    }

    public function XA_RECOVER_ADMIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::XA_RECOVER_ADMIN, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterPrivilege($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitPrivilege($this);
        }
    }
}
