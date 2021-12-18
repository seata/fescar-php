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

    class AdministrationStatementContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_administrationStatement;
        }

        public function alterUser(): ?AlterUserContext
        {
            return $this->getTypedRuleContext(AlterUserContext::class, 0);
        }

        public function createUser(): ?CreateUserContext
        {
            return $this->getTypedRuleContext(CreateUserContext::class, 0);
        }

        public function dropUser(): ?DropUserContext
        {
            return $this->getTypedRuleContext(DropUserContext::class, 0);
        }

        public function grantStatement(): ?GrantStatementContext
        {
            return $this->getTypedRuleContext(GrantStatementContext::class, 0);
        }

        public function grantProxy(): ?GrantProxyContext
        {
            return $this->getTypedRuleContext(GrantProxyContext::class, 0);
        }

        public function renameUser(): ?RenameUserContext
        {
            return $this->getTypedRuleContext(RenameUserContext::class, 0);
        }

        public function revokeStatement(): ?RevokeStatementContext
        {
            return $this->getTypedRuleContext(RevokeStatementContext::class, 0);
        }

        public function revokeProxy(): ?RevokeProxyContext
        {
            return $this->getTypedRuleContext(RevokeProxyContext::class, 0);
        }

        public function analyzeTable(): ?AnalyzeTableContext
        {
            return $this->getTypedRuleContext(AnalyzeTableContext::class, 0);
        }

        public function checkTable(): ?CheckTableContext
        {
            return $this->getTypedRuleContext(CheckTableContext::class, 0);
        }

        public function checksumTable(): ?ChecksumTableContext
        {
            return $this->getTypedRuleContext(ChecksumTableContext::class, 0);
        }

        public function optimizeTable(): ?OptimizeTableContext
        {
            return $this->getTypedRuleContext(OptimizeTableContext::class, 0);
        }

        public function repairTable(): ?RepairTableContext
        {
            return $this->getTypedRuleContext(RepairTableContext::class, 0);
        }

        public function createUdfunction(): ?CreateUdfunctionContext
        {
            return $this->getTypedRuleContext(CreateUdfunctionContext::class, 0);
        }

        public function installPlugin(): ?InstallPluginContext
        {
            return $this->getTypedRuleContext(InstallPluginContext::class, 0);
        }

        public function uninstallPlugin(): ?UninstallPluginContext
        {
            return $this->getTypedRuleContext(UninstallPluginContext::class, 0);
        }

        public function setStatement(): ?SetStatementContext
        {
            return $this->getTypedRuleContext(SetStatementContext::class, 0);
        }

        public function showStatement(): ?ShowStatementContext
        {
            return $this->getTypedRuleContext(ShowStatementContext::class, 0);
        }

        public function binlogStatement(): ?BinlogStatementContext
        {
            return $this->getTypedRuleContext(BinlogStatementContext::class, 0);
        }

        public function cacheIndexStatement(): ?CacheIndexStatementContext
        {
            return $this->getTypedRuleContext(CacheIndexStatementContext::class, 0);
        }

        public function flushStatement(): ?FlushStatementContext
        {
            return $this->getTypedRuleContext(FlushStatementContext::class, 0);
        }

        public function killStatement(): ?KillStatementContext
        {
            return $this->getTypedRuleContext(KillStatementContext::class, 0);
        }

        public function loadIndexIntoCache(): ?LoadIndexIntoCacheContext
        {
            return $this->getTypedRuleContext(LoadIndexIntoCacheContext::class, 0);
        }

        public function resetStatement(): ?ResetStatementContext
        {
            return $this->getTypedRuleContext(ResetStatementContext::class, 0);
        }

        public function shutdownStatement(): ?ShutdownStatementContext
        {
            return $this->getTypedRuleContext(ShutdownStatementContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterAdministrationStatement($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitAdministrationStatement($this);
            }
        }
    }
