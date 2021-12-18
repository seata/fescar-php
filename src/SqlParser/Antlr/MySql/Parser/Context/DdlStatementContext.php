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
    use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

    class DdlStatementContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_ddlStatement;
        }

        public function createDatabase(): ?CreateDatabaseContext
        {
            return $this->getTypedRuleContext(CreateDatabaseContext::class, 0);
        }

        public function createEvent(): ?CreateEventContext
        {
            return $this->getTypedRuleContext(CreateEventContext::class, 0);
        }

        public function createIndex(): ?CreateIndexContext
        {
            return $this->getTypedRuleContext(CreateIndexContext::class, 0);
        }

        public function createLogfileGroup(): ?CreateLogfileGroupContext
        {
            return $this->getTypedRuleContext(CreateLogfileGroupContext::class, 0);
        }

        public function createProcedure(): ?CreateProcedureContext
        {
            return $this->getTypedRuleContext(CreateProcedureContext::class, 0);
        }

        public function createFunction(): ?CreateFunctionContext
        {
            return $this->getTypedRuleContext(CreateFunctionContext::class, 0);
        }

        public function createServer(): ?CreateServerContext
        {
            return $this->getTypedRuleContext(CreateServerContext::class, 0);
        }

        public function createTable(): ?CreateTableContext
        {
            return $this->getTypedRuleContext(CreateTableContext::class, 0);
        }

        public function createTablespaceInnodb(): ?CreateTablespaceInnodbContext
        {
            return $this->getTypedRuleContext(CreateTablespaceInnodbContext::class, 0);
        }

        public function createTablespaceNdb(): ?CreateTablespaceNdbContext
        {
            return $this->getTypedRuleContext(CreateTablespaceNdbContext::class, 0);
        }

        public function createTrigger(): ?CreateTriggerContext
        {
            return $this->getTypedRuleContext(CreateTriggerContext::class, 0);
        }

        public function createView(): ?CreateViewContext
        {
            return $this->getTypedRuleContext(CreateViewContext::class, 0);
        }

        public function alterDatabase(): ?AlterDatabaseContext
        {
            return $this->getTypedRuleContext(AlterDatabaseContext::class, 0);
        }

        public function alterEvent(): ?AlterEventContext
        {
            return $this->getTypedRuleContext(AlterEventContext::class, 0);
        }

        public function alterFunction(): ?AlterFunctionContext
        {
            return $this->getTypedRuleContext(AlterFunctionContext::class, 0);
        }

        public function alterInstance(): ?AlterInstanceContext
        {
            return $this->getTypedRuleContext(AlterInstanceContext::class, 0);
        }

        public function alterLogfileGroup(): ?AlterLogfileGroupContext
        {
            return $this->getTypedRuleContext(AlterLogfileGroupContext::class, 0);
        }

        public function alterProcedure(): ?AlterProcedureContext
        {
            return $this->getTypedRuleContext(AlterProcedureContext::class, 0);
        }

        public function alterServer(): ?AlterServerContext
        {
            return $this->getTypedRuleContext(AlterServerContext::class, 0);
        }

        public function alterTable(): ?AlterTableContext
        {
            return $this->getTypedRuleContext(AlterTableContext::class, 0);
        }

        public function alterTablespace(): ?AlterTablespaceContext
        {
            return $this->getTypedRuleContext(AlterTablespaceContext::class, 0);
        }

        public function alterView(): ?AlterViewContext
        {
            return $this->getTypedRuleContext(AlterViewContext::class, 0);
        }

        public function dropDatabase(): ?DropDatabaseContext
        {
            return $this->getTypedRuleContext(DropDatabaseContext::class, 0);
        }

        public function dropEvent(): ?DropEventContext
        {
            return $this->getTypedRuleContext(DropEventContext::class, 0);
        }

        public function dropIndex(): ?DropIndexContext
        {
            return $this->getTypedRuleContext(DropIndexContext::class, 0);
        }

        public function dropLogfileGroup(): ?DropLogfileGroupContext
        {
            return $this->getTypedRuleContext(DropLogfileGroupContext::class, 0);
        }

        public function dropProcedure(): ?DropProcedureContext
        {
            return $this->getTypedRuleContext(DropProcedureContext::class, 0);
        }

        public function dropFunction(): ?DropFunctionContext
        {
            return $this->getTypedRuleContext(DropFunctionContext::class, 0);
        }

        public function dropServer(): ?DropServerContext
        {
            return $this->getTypedRuleContext(DropServerContext::class, 0);
        }

        public function dropTable(): ?DropTableContext
        {
            return $this->getTypedRuleContext(DropTableContext::class, 0);
        }

        public function dropTablespace(): ?DropTablespaceContext
        {
            return $this->getTypedRuleContext(DropTablespaceContext::class, 0);
        }

        public function dropTrigger(): ?DropTriggerContext
        {
            return $this->getTypedRuleContext(DropTriggerContext::class, 0);
        }

        public function dropView(): ?DropViewContext
        {
            return $this->getTypedRuleContext(DropViewContext::class, 0);
        }

        public function renameTable(): ?RenameTableContext
        {
            return $this->getTypedRuleContext(RenameTableContext::class, 0);
        }

        public function truncateTable(): ?TruncateTableContext
        {
            return $this->getTypedRuleContext(TruncateTableContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterDdlStatement($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitDdlStatement($this);
            }
        }
    }
