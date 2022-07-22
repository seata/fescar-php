<?php

declare(strict_types=1);
/**
 * Copyright 2019-2022 Seata.io Group.
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
namespace Hyperf\Seata\SqlParser\Antlr\MySql\Listener;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ErrorNode;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\Context;

/**
 * This class provides an empty implementation of {@see MySqlParserListener},
 * which can be extended to create a listener which only needs to handle a subset
 * of the available methods.
 */
class MySqlParserBaseListener implements MySqlParserListener
{
    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterRoot(Context\RootContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitRoot(Context\RootContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSqlStatements(Context\SqlStatementsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSqlStatements(Context\SqlStatementsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSqlStatement(Context\SqlStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSqlStatement(Context\SqlStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterEmptyStatement(Context\EmptyStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitEmptyStatement(Context\EmptyStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDdlStatement(Context\DdlStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDdlStatement(Context\DdlStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDmlStatement(Context\DmlStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDmlStatement(Context\DmlStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTransactionStatement(Context\TransactionStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTransactionStatement(Context\TransactionStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterReplicationStatement(Context\ReplicationStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitReplicationStatement(Context\ReplicationStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPreparedStatement(Context\PreparedStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPreparedStatement(Context\PreparedStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCompoundStatement(Context\CompoundStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCompoundStatement(Context\CompoundStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAdministrationStatement(Context\AdministrationStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAdministrationStatement(Context\AdministrationStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUtilityStatement(Context\UtilityStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUtilityStatement(Context\UtilityStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCreateDatabase(Context\CreateDatabaseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCreateDatabase(Context\CreateDatabaseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCreateEvent(Context\CreateEventContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCreateEvent(Context\CreateEventContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCreateIndex(Context\CreateIndexContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCreateIndex(Context\CreateIndexContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCreateLogfileGroup(Context\CreateLogfileGroupContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCreateLogfileGroup(Context\CreateLogfileGroupContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCreateProcedure(Context\CreateProcedureContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCreateProcedure(Context\CreateProcedureContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCreateFunction(Context\CreateFunctionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCreateFunction(Context\CreateFunctionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCreateServer(Context\CreateServerContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCreateServer(Context\CreateServerContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCopyCreateTable(Context\CopyCreateTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCopyCreateTable(Context\CopyCreateTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterQueryCreateTable(Context\QueryCreateTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitQueryCreateTable(Context\QueryCreateTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterColumnCreateTable(Context\ColumnCreateTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitColumnCreateTable(Context\ColumnCreateTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCreateTablespaceInnodb(Context\CreateTablespaceInnodbContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCreateTablespaceInnodb(Context\CreateTablespaceInnodbContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCreateTablespaceNdb(Context\CreateTablespaceNdbContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCreateTablespaceNdb(Context\CreateTablespaceNdbContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCreateTrigger(Context\CreateTriggerContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCreateTrigger(Context\CreateTriggerContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCreateView(Context\CreateViewContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCreateView(Context\CreateViewContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCreateDatabaseOption(Context\CreateDatabaseOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCreateDatabaseOption(Context\CreateDatabaseOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterOwnerStatement(Context\OwnerStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitOwnerStatement(Context\OwnerStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPreciseSchedule(Context\PreciseScheduleContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPreciseSchedule(Context\PreciseScheduleContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterIntervalSchedule(Context\IntervalScheduleContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitIntervalSchedule(Context\IntervalScheduleContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTimestampValue(Context\TimestampValueContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTimestampValue(Context\TimestampValueContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterIntervalExpr(Context\IntervalExprContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitIntervalExpr(Context\IntervalExprContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterIntervalType(Context\IntervalTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitIntervalType(Context\IntervalTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterEnableType(Context\EnableTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitEnableType(Context\EnableTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterIndexType(Context\IndexTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitIndexType(Context\IndexTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterIndexOption(Context\IndexOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitIndexOption(Context\IndexOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterProcedureParameter(Context\ProcedureParameterContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitProcedureParameter(Context\ProcedureParameterContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterFunctionParameter(Context\FunctionParameterContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitFunctionParameter(Context\FunctionParameterContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterRoutineComment(Context\RoutineCommentContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitRoutineComment(Context\RoutineCommentContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterRoutineLanguage(Context\RoutineLanguageContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitRoutineLanguage(Context\RoutineLanguageContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterRoutineBehavior(Context\RoutineBehaviorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitRoutineBehavior(Context\RoutineBehaviorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterRoutineData(Context\RoutineDataContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitRoutineData(Context\RoutineDataContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterRoutineSecurity(Context\RoutineSecurityContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitRoutineSecurity(Context\RoutineSecurityContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterServerOption(Context\ServerOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitServerOption(Context\ServerOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCreateDefinitions(Context\CreateDefinitionsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCreateDefinitions(Context\CreateDefinitionsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterColumnDeclaration(Context\ColumnDeclarationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitColumnDeclaration(Context\ColumnDeclarationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterConstraintDeclaration(Context\ConstraintDeclarationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitConstraintDeclaration(Context\ConstraintDeclarationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterIndexDeclaration(Context\IndexDeclarationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitIndexDeclaration(Context\IndexDeclarationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterColumnDefinition(Context\ColumnDefinitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitColumnDefinition(Context\ColumnDefinitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterNullColumnConstraint(Context\NullColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitNullColumnConstraint(Context\NullColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDefaultColumnConstraint(Context\DefaultColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDefaultColumnConstraint(Context\DefaultColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterVisibilityColumnConstraint(Context\VisibilityColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitVisibilityColumnConstraint(Context\VisibilityColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAutoIncrementColumnConstraint(Context\AutoIncrementColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAutoIncrementColumnConstraint(Context\AutoIncrementColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPrimaryKeyColumnConstraint(Context\PrimaryKeyColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPrimaryKeyColumnConstraint(Context\PrimaryKeyColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUniqueKeyColumnConstraint(Context\UniqueKeyColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUniqueKeyColumnConstraint(Context\UniqueKeyColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCommentColumnConstraint(Context\CommentColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCommentColumnConstraint(Context\CommentColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterFormatColumnConstraint(Context\FormatColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitFormatColumnConstraint(Context\FormatColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterStorageColumnConstraint(Context\StorageColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitStorageColumnConstraint(Context\StorageColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterReferenceColumnConstraint(Context\ReferenceColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitReferenceColumnConstraint(Context\ReferenceColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCollateColumnConstraint(Context\CollateColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCollateColumnConstraint(Context\CollateColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterGeneratedColumnConstraint(Context\GeneratedColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitGeneratedColumnConstraint(Context\GeneratedColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSerialDefaultColumnConstraint(Context\SerialDefaultColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSerialDefaultColumnConstraint(Context\SerialDefaultColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCheckColumnConstraint(Context\CheckColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCheckColumnConstraint(Context\CheckColumnConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPrimaryKeyTableConstraint(Context\PrimaryKeyTableConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPrimaryKeyTableConstraint(Context\PrimaryKeyTableConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUniqueKeyTableConstraint(Context\UniqueKeyTableConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUniqueKeyTableConstraint(Context\UniqueKeyTableConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterForeignKeyTableConstraint(Context\ForeignKeyTableConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitForeignKeyTableConstraint(Context\ForeignKeyTableConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCheckTableConstraint(Context\CheckTableConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCheckTableConstraint(Context\CheckTableConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterReferenceDefinition(Context\ReferenceDefinitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitReferenceDefinition(Context\ReferenceDefinitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterReferenceAction(Context\ReferenceActionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitReferenceAction(Context\ReferenceActionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterReferenceControlType(Context\ReferenceControlTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitReferenceControlType(Context\ReferenceControlTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSimpleIndexDeclaration(Context\SimpleIndexDeclarationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSimpleIndexDeclaration(Context\SimpleIndexDeclarationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSpecialIndexDeclaration(Context\SpecialIndexDeclarationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSpecialIndexDeclaration(Context\SpecialIndexDeclarationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionEngine(Context\TableOptionEngineContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionEngine(Context\TableOptionEngineContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionAutoIncrement(Context\TableOptionAutoIncrementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionAutoIncrement(Context\TableOptionAutoIncrementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionAverage(Context\TableOptionAverageContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionAverage(Context\TableOptionAverageContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionCharset(Context\TableOptionCharsetContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionCharset(Context\TableOptionCharsetContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionChecksum(Context\TableOptionChecksumContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionChecksum(Context\TableOptionChecksumContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionCollate(Context\TableOptionCollateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionCollate(Context\TableOptionCollateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionComment(Context\TableOptionCommentContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionComment(Context\TableOptionCommentContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionCompression(Context\TableOptionCompressionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionCompression(Context\TableOptionCompressionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionConnection(Context\TableOptionConnectionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionConnection(Context\TableOptionConnectionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionDataDirectory(Context\TableOptionDataDirectoryContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionDataDirectory(Context\TableOptionDataDirectoryContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionDelay(Context\TableOptionDelayContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionDelay(Context\TableOptionDelayContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionEncryption(Context\TableOptionEncryptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionEncryption(Context\TableOptionEncryptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionIndexDirectory(Context\TableOptionIndexDirectoryContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionIndexDirectory(Context\TableOptionIndexDirectoryContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionInsertMethod(Context\TableOptionInsertMethodContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionInsertMethod(Context\TableOptionInsertMethodContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionKeyBlockSize(Context\TableOptionKeyBlockSizeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionKeyBlockSize(Context\TableOptionKeyBlockSizeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionMaxRows(Context\TableOptionMaxRowsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionMaxRows(Context\TableOptionMaxRowsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionMinRows(Context\TableOptionMinRowsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionMinRows(Context\TableOptionMinRowsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionPackKeys(Context\TableOptionPackKeysContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionPackKeys(Context\TableOptionPackKeysContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionPassword(Context\TableOptionPasswordContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionPassword(Context\TableOptionPasswordContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionRowFormat(Context\TableOptionRowFormatContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionRowFormat(Context\TableOptionRowFormatContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionRecalculation(Context\TableOptionRecalculationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionRecalculation(Context\TableOptionRecalculationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionPersistent(Context\TableOptionPersistentContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionPersistent(Context\TableOptionPersistentContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionSamplePage(Context\TableOptionSamplePageContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionSamplePage(Context\TableOptionSamplePageContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionTablespace(Context\TableOptionTablespaceContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionTablespace(Context\TableOptionTablespaceContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionTableType(Context\TableOptionTableTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionTableType(Context\TableOptionTableTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableOptionUnion(Context\TableOptionUnionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableOptionUnion(Context\TableOptionUnionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableType(Context\TableTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableType(Context\TableTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTablespaceStorage(Context\TablespaceStorageContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTablespaceStorage(Context\TablespaceStorageContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPartitionDefinitions(Context\PartitionDefinitionsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPartitionDefinitions(Context\PartitionDefinitionsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPartitionFunctionHash(Context\PartitionFunctionHashContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPartitionFunctionHash(Context\PartitionFunctionHashContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPartitionFunctionKey(Context\PartitionFunctionKeyContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPartitionFunctionKey(Context\PartitionFunctionKeyContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPartitionFunctionRange(Context\PartitionFunctionRangeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPartitionFunctionRange(Context\PartitionFunctionRangeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPartitionFunctionList(Context\PartitionFunctionListContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPartitionFunctionList(Context\PartitionFunctionListContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSubPartitionFunctionHash(Context\SubPartitionFunctionHashContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSubPartitionFunctionHash(Context\SubPartitionFunctionHashContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSubPartitionFunctionKey(Context\SubPartitionFunctionKeyContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSubPartitionFunctionKey(Context\SubPartitionFunctionKeyContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPartitionComparison(Context\PartitionComparisonContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPartitionComparison(Context\PartitionComparisonContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPartitionListAtom(Context\PartitionListAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPartitionListAtom(Context\PartitionListAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPartitionListVector(Context\PartitionListVectorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPartitionListVector(Context\PartitionListVectorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPartitionSimple(Context\PartitionSimpleContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPartitionSimple(Context\PartitionSimpleContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPartitionDefinerAtom(Context\PartitionDefinerAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPartitionDefinerAtom(Context\PartitionDefinerAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPartitionDefinerVector(Context\PartitionDefinerVectorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPartitionDefinerVector(Context\PartitionDefinerVectorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSubpartitionDefinition(Context\SubpartitionDefinitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSubpartitionDefinition(Context\SubpartitionDefinitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPartitionOptionEngine(Context\PartitionOptionEngineContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPartitionOptionEngine(Context\PartitionOptionEngineContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPartitionOptionComment(Context\PartitionOptionCommentContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPartitionOptionComment(Context\PartitionOptionCommentContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPartitionOptionDataDirectory(Context\PartitionOptionDataDirectoryContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPartitionOptionDataDirectory(Context\PartitionOptionDataDirectoryContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPartitionOptionIndexDirectory(Context\PartitionOptionIndexDirectoryContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPartitionOptionIndexDirectory(Context\PartitionOptionIndexDirectoryContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPartitionOptionMaxRows(Context\PartitionOptionMaxRowsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPartitionOptionMaxRows(Context\PartitionOptionMaxRowsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPartitionOptionMinRows(Context\PartitionOptionMinRowsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPartitionOptionMinRows(Context\PartitionOptionMinRowsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPartitionOptionTablespace(Context\PartitionOptionTablespaceContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPartitionOptionTablespace(Context\PartitionOptionTablespaceContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPartitionOptionNodeGroup(Context\PartitionOptionNodeGroupContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPartitionOptionNodeGroup(Context\PartitionOptionNodeGroupContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterSimpleDatabase(Context\AlterSimpleDatabaseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterSimpleDatabase(Context\AlterSimpleDatabaseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterUpgradeName(Context\AlterUpgradeNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterUpgradeName(Context\AlterUpgradeNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterEvent(Context\AlterEventContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterEvent(Context\AlterEventContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterFunction(Context\AlterFunctionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterFunction(Context\AlterFunctionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterInstance(Context\AlterInstanceContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterInstance(Context\AlterInstanceContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterLogfileGroup(Context\AlterLogfileGroupContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterLogfileGroup(Context\AlterLogfileGroupContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterProcedure(Context\AlterProcedureContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterProcedure(Context\AlterProcedureContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterServer(Context\AlterServerContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterServer(Context\AlterServerContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterTable(Context\AlterTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterTable(Context\AlterTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterTablespace(Context\AlterTablespaceContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterTablespace(Context\AlterTablespaceContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterView(Context\AlterViewContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterView(Context\AlterViewContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByTableOption(Context\AlterByTableOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByTableOption(Context\AlterByTableOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByAddColumn(Context\AlterByAddColumnContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByAddColumn(Context\AlterByAddColumnContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByAddColumns(Context\AlterByAddColumnsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByAddColumns(Context\AlterByAddColumnsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByAddIndex(Context\AlterByAddIndexContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByAddIndex(Context\AlterByAddIndexContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByAddPrimaryKey(Context\AlterByAddPrimaryKeyContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByAddPrimaryKey(Context\AlterByAddPrimaryKeyContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByAddUniqueKey(Context\AlterByAddUniqueKeyContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByAddUniqueKey(Context\AlterByAddUniqueKeyContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByAddSpecialIndex(Context\AlterByAddSpecialIndexContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByAddSpecialIndex(Context\AlterByAddSpecialIndexContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByAddForeignKey(Context\AlterByAddForeignKeyContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByAddForeignKey(Context\AlterByAddForeignKeyContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByAddCheckTableConstraint(Context\AlterByAddCheckTableConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByAddCheckTableConstraint(Context\AlterByAddCheckTableConstraintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterBySetAlgorithm(Context\AlterBySetAlgorithmContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterBySetAlgorithm(Context\AlterBySetAlgorithmContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByChangeDefault(Context\AlterByChangeDefaultContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByChangeDefault(Context\AlterByChangeDefaultContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByChangeColumn(Context\AlterByChangeColumnContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByChangeColumn(Context\AlterByChangeColumnContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByRenameColumn(Context\AlterByRenameColumnContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByRenameColumn(Context\AlterByRenameColumnContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByLock(Context\AlterByLockContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByLock(Context\AlterByLockContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByModifyColumn(Context\AlterByModifyColumnContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByModifyColumn(Context\AlterByModifyColumnContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByDropColumn(Context\AlterByDropColumnContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByDropColumn(Context\AlterByDropColumnContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByDropConstraintCheck(Context\AlterByDropConstraintCheckContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByDropConstraintCheck(Context\AlterByDropConstraintCheckContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByDropPrimaryKey(Context\AlterByDropPrimaryKeyContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByDropPrimaryKey(Context\AlterByDropPrimaryKeyContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByRenameIndex(Context\AlterByRenameIndexContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByRenameIndex(Context\AlterByRenameIndexContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByAlterIndexVisibility(Context\AlterByAlterIndexVisibilityContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByAlterIndexVisibility(Context\AlterByAlterIndexVisibilityContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByDropIndex(Context\AlterByDropIndexContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByDropIndex(Context\AlterByDropIndexContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByDropForeignKey(Context\AlterByDropForeignKeyContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByDropForeignKey(Context\AlterByDropForeignKeyContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByDisableKeys(Context\AlterByDisableKeysContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByDisableKeys(Context\AlterByDisableKeysContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByEnableKeys(Context\AlterByEnableKeysContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByEnableKeys(Context\AlterByEnableKeysContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByRename(Context\AlterByRenameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByRename(Context\AlterByRenameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByOrder(Context\AlterByOrderContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByOrder(Context\AlterByOrderContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByConvertCharset(Context\AlterByConvertCharsetContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByConvertCharset(Context\AlterByConvertCharsetContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByDefaultCharset(Context\AlterByDefaultCharsetContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByDefaultCharset(Context\AlterByDefaultCharsetContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByDiscardTablespace(Context\AlterByDiscardTablespaceContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByDiscardTablespace(Context\AlterByDiscardTablespaceContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByImportTablespace(Context\AlterByImportTablespaceContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByImportTablespace(Context\AlterByImportTablespaceContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByForce(Context\AlterByForceContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByForce(Context\AlterByForceContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByValidate(Context\AlterByValidateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByValidate(Context\AlterByValidateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByAddPartition(Context\AlterByAddPartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByAddPartition(Context\AlterByAddPartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByDropPartition(Context\AlterByDropPartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByDropPartition(Context\AlterByDropPartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByDiscardPartition(Context\AlterByDiscardPartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByDiscardPartition(Context\AlterByDiscardPartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByImportPartition(Context\AlterByImportPartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByImportPartition(Context\AlterByImportPartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByTruncatePartition(Context\AlterByTruncatePartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByTruncatePartition(Context\AlterByTruncatePartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByCoalescePartition(Context\AlterByCoalescePartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByCoalescePartition(Context\AlterByCoalescePartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByReorganizePartition(Context\AlterByReorganizePartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByReorganizePartition(Context\AlterByReorganizePartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByExchangePartition(Context\AlterByExchangePartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByExchangePartition(Context\AlterByExchangePartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByAnalyzePartition(Context\AlterByAnalyzePartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByAnalyzePartition(Context\AlterByAnalyzePartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByCheckPartition(Context\AlterByCheckPartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByCheckPartition(Context\AlterByCheckPartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByOptimizePartition(Context\AlterByOptimizePartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByOptimizePartition(Context\AlterByOptimizePartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByRebuildPartition(Context\AlterByRebuildPartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByRebuildPartition(Context\AlterByRebuildPartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByRepairPartition(Context\AlterByRepairPartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByRepairPartition(Context\AlterByRepairPartitionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByRemovePartitioning(Context\AlterByRemovePartitioningContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByRemovePartitioning(Context\AlterByRemovePartitioningContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterByUpgradePartitioning(Context\AlterByUpgradePartitioningContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterByUpgradePartitioning(Context\AlterByUpgradePartitioningContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDropDatabase(Context\DropDatabaseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDropDatabase(Context\DropDatabaseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDropEvent(Context\DropEventContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDropEvent(Context\DropEventContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDropIndex(Context\DropIndexContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDropIndex(Context\DropIndexContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDropLogfileGroup(Context\DropLogfileGroupContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDropLogfileGroup(Context\DropLogfileGroupContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDropProcedure(Context\DropProcedureContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDropProcedure(Context\DropProcedureContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDropFunction(Context\DropFunctionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDropFunction(Context\DropFunctionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDropServer(Context\DropServerContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDropServer(Context\DropServerContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDropTable(Context\DropTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDropTable(Context\DropTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDropTablespace(Context\DropTablespaceContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDropTablespace(Context\DropTablespaceContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDropTrigger(Context\DropTriggerContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDropTrigger(Context\DropTriggerContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDropView(Context\DropViewContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDropView(Context\DropViewContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterRenameTable(Context\RenameTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitRenameTable(Context\RenameTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterRenameTableClause(Context\RenameTableClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitRenameTableClause(Context\RenameTableClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTruncateTable(Context\TruncateTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTruncateTable(Context\TruncateTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCallStatement(Context\CallStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCallStatement(Context\CallStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDeleteStatement(Context\DeleteStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDeleteStatement(Context\DeleteStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDoStatement(Context\DoStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDoStatement(Context\DoStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterHandlerStatement(Context\HandlerStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitHandlerStatement(Context\HandlerStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterInsertStatement(Context\InsertStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitInsertStatement(Context\InsertStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterLoadDataStatement(Context\LoadDataStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitLoadDataStatement(Context\LoadDataStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterLoadXmlStatement(Context\LoadXmlStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitLoadXmlStatement(Context\LoadXmlStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterReplaceStatement(Context\ReplaceStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitReplaceStatement(Context\ReplaceStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSimpleSelect(Context\SimpleSelectContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSimpleSelect(Context\SimpleSelectContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterParenthesisSelect(Context\ParenthesisSelectContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitParenthesisSelect(Context\ParenthesisSelectContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUnionSelect(Context\UnionSelectContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUnionSelect(Context\UnionSelectContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUnionParenthesisSelect(Context\UnionParenthesisSelectContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUnionParenthesisSelect(Context\UnionParenthesisSelectContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUpdateStatement(Context\UpdateStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUpdateStatement(Context\UpdateStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterInsertStatementValue(Context\InsertStatementValueContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitInsertStatementValue(Context\InsertStatementValueContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUpdatedElement(Context\UpdatedElementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUpdatedElement(Context\UpdatedElementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAssignmentField(Context\AssignmentFieldContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAssignmentField(Context\AssignmentFieldContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterLockClause(Context\LockClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitLockClause(Context\LockClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSingleDeleteStatement(Context\SingleDeleteStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSingleDeleteStatement(Context\SingleDeleteStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterMultipleDeleteStatement(Context\MultipleDeleteStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitMultipleDeleteStatement(Context\MultipleDeleteStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterHandlerOpenStatement(Context\HandlerOpenStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitHandlerOpenStatement(Context\HandlerOpenStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterHandlerReadIndexStatement(Context\HandlerReadIndexStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitHandlerReadIndexStatement(Context\HandlerReadIndexStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterHandlerReadStatement(Context\HandlerReadStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitHandlerReadStatement(Context\HandlerReadStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterHandlerCloseStatement(Context\HandlerCloseStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitHandlerCloseStatement(Context\HandlerCloseStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSingleUpdateStatement(Context\SingleUpdateStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSingleUpdateStatement(Context\SingleUpdateStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterMultipleUpdateStatement(Context\MultipleUpdateStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitMultipleUpdateStatement(Context\MultipleUpdateStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterOrderByClause(Context\OrderByClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitOrderByClause(Context\OrderByClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterOrderByExpression(Context\OrderByExpressionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitOrderByExpression(Context\OrderByExpressionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableSources(Context\TableSourcesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableSources(Context\TableSourcesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableSourceBase(Context\TableSourceBaseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableSourceBase(Context\TableSourceBaseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableSourceNested(Context\TableSourceNestedContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableSourceNested(Context\TableSourceNestedContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAtomTableItem(Context\AtomTableItemContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAtomTableItem(Context\AtomTableItemContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSubqueryTableItem(Context\SubqueryTableItemContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSubqueryTableItem(Context\SubqueryTableItemContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableSourcesItem(Context\TableSourcesItemContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableSourcesItem(Context\TableSourcesItemContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterIndexHint(Context\IndexHintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitIndexHint(Context\IndexHintContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterIndexHintType(Context\IndexHintTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitIndexHintType(Context\IndexHintTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterInnerJoin(Context\InnerJoinContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitInnerJoin(Context\InnerJoinContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterStraightJoin(Context\StraightJoinContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitStraightJoin(Context\StraightJoinContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterOuterJoin(Context\OuterJoinContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitOuterJoin(Context\OuterJoinContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterNaturalJoin(Context\NaturalJoinContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitNaturalJoin(Context\NaturalJoinContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterQueryExpression(Context\QueryExpressionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitQueryExpression(Context\QueryExpressionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterQueryExpressionNointo(Context\QueryExpressionNointoContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitQueryExpressionNointo(Context\QueryExpressionNointoContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterQuerySpecification(Context\QuerySpecificationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitQuerySpecification(Context\QuerySpecificationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterQuerySpecificationNointo(Context\QuerySpecificationNointoContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitQuerySpecificationNointo(Context\QuerySpecificationNointoContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUnionParenthesis(Context\UnionParenthesisContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUnionParenthesis(Context\UnionParenthesisContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUnionStatement(Context\UnionStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUnionStatement(Context\UnionStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSelectSpec(Context\SelectSpecContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSelectSpec(Context\SelectSpecContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSelectElements(Context\SelectElementsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSelectElements(Context\SelectElementsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSelectStarElement(Context\SelectStarElementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSelectStarElement(Context\SelectStarElementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSelectColumnElement(Context\SelectColumnElementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSelectColumnElement(Context\SelectColumnElementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSelectFunctionElement(Context\SelectFunctionElementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSelectFunctionElement(Context\SelectFunctionElementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSelectExpressionElement(Context\SelectExpressionElementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSelectExpressionElement(Context\SelectExpressionElementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSelectIntoVariables(Context\SelectIntoVariablesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSelectIntoVariables(Context\SelectIntoVariablesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSelectIntoDumpFile(Context\SelectIntoDumpFileContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSelectIntoDumpFile(Context\SelectIntoDumpFileContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSelectIntoTextFile(Context\SelectIntoTextFileContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSelectIntoTextFile(Context\SelectIntoTextFileContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSelectFieldsInto(Context\SelectFieldsIntoContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSelectFieldsInto(Context\SelectFieldsIntoContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSelectLinesInto(Context\SelectLinesIntoContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSelectLinesInto(Context\SelectLinesIntoContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterFromClause(Context\FromClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitFromClause(Context\FromClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterGroupByClause(Context\GroupByClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitGroupByClause(Context\GroupByClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterHavingClause(Context\HavingClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitHavingClause(Context\HavingClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterWindowClause(Context\WindowClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitWindowClause(Context\WindowClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterGroupByItem(Context\GroupByItemContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitGroupByItem(Context\GroupByItemContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterLimitClause(Context\LimitClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitLimitClause(Context\LimitClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterLimitClauseAtom(Context\LimitClauseAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitLimitClauseAtom(Context\LimitClauseAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterStartTransaction(Context\StartTransactionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitStartTransaction(Context\StartTransactionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterBeginWork(Context\BeginWorkContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitBeginWork(Context\BeginWorkContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCommitWork(Context\CommitWorkContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCommitWork(Context\CommitWorkContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterRollbackWork(Context\RollbackWorkContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitRollbackWork(Context\RollbackWorkContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSavepointStatement(Context\SavepointStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSavepointStatement(Context\SavepointStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterRollbackStatement(Context\RollbackStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitRollbackStatement(Context\RollbackStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterReleaseStatement(Context\ReleaseStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitReleaseStatement(Context\ReleaseStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterLockTables(Context\LockTablesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitLockTables(Context\LockTablesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUnlockTables(Context\UnlockTablesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUnlockTables(Context\UnlockTablesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSetAutocommitStatement(Context\SetAutocommitStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSetAutocommitStatement(Context\SetAutocommitStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSetTransactionStatement(Context\SetTransactionStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSetTransactionStatement(Context\SetTransactionStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTransactionMode(Context\TransactionModeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTransactionMode(Context\TransactionModeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterLockTableElement(Context\LockTableElementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitLockTableElement(Context\LockTableElementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterLockAction(Context\LockActionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitLockAction(Context\LockActionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTransactionOption(Context\TransactionOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTransactionOption(Context\TransactionOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTransactionLevel(Context\TransactionLevelContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTransactionLevel(Context\TransactionLevelContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterChangeMaster(Context\ChangeMasterContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitChangeMaster(Context\ChangeMasterContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterChangeReplicationFilter(Context\ChangeReplicationFilterContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitChangeReplicationFilter(Context\ChangeReplicationFilterContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPurgeBinaryLogs(Context\PurgeBinaryLogsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPurgeBinaryLogs(Context\PurgeBinaryLogsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterResetMaster(Context\ResetMasterContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitResetMaster(Context\ResetMasterContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterResetSlave(Context\ResetSlaveContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitResetSlave(Context\ResetSlaveContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterStartSlave(Context\StartSlaveContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitStartSlave(Context\StartSlaveContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterStopSlave(Context\StopSlaveContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitStopSlave(Context\StopSlaveContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterStartGroupReplication(Context\StartGroupReplicationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitStartGroupReplication(Context\StartGroupReplicationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterStopGroupReplication(Context\StopGroupReplicationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitStopGroupReplication(Context\StopGroupReplicationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterMasterStringOption(Context\MasterStringOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitMasterStringOption(Context\MasterStringOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterMasterDecimalOption(Context\MasterDecimalOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitMasterDecimalOption(Context\MasterDecimalOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterMasterBoolOption(Context\MasterBoolOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitMasterBoolOption(Context\MasterBoolOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterMasterRealOption(Context\MasterRealOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitMasterRealOption(Context\MasterRealOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterMasterUidListOption(Context\MasterUidListOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitMasterUidListOption(Context\MasterUidListOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterStringMasterOption(Context\StringMasterOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitStringMasterOption(Context\StringMasterOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDecimalMasterOption(Context\DecimalMasterOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDecimalMasterOption(Context\DecimalMasterOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterBoolMasterOption(Context\BoolMasterOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitBoolMasterOption(Context\BoolMasterOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterChannelOption(Context\ChannelOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitChannelOption(Context\ChannelOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDoDbReplication(Context\DoDbReplicationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDoDbReplication(Context\DoDbReplicationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterIgnoreDbReplication(Context\IgnoreDbReplicationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitIgnoreDbReplication(Context\IgnoreDbReplicationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDoTableReplication(Context\DoTableReplicationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDoTableReplication(Context\DoTableReplicationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterIgnoreTableReplication(Context\IgnoreTableReplicationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitIgnoreTableReplication(Context\IgnoreTableReplicationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterWildDoTableReplication(Context\WildDoTableReplicationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitWildDoTableReplication(Context\WildDoTableReplicationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterWildIgnoreTableReplication(Context\WildIgnoreTableReplicationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitWildIgnoreTableReplication(Context\WildIgnoreTableReplicationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterRewriteDbReplication(Context\RewriteDbReplicationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitRewriteDbReplication(Context\RewriteDbReplicationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTablePair(Context\TablePairContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTablePair(Context\TablePairContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterThreadType(Context\ThreadTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitThreadType(Context\ThreadTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterGtidsUntilOption(Context\GtidsUntilOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitGtidsUntilOption(Context\GtidsUntilOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterMasterLogUntilOption(Context\MasterLogUntilOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitMasterLogUntilOption(Context\MasterLogUntilOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterRelayLogUntilOption(Context\RelayLogUntilOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitRelayLogUntilOption(Context\RelayLogUntilOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSqlGapsUntilOption(Context\SqlGapsUntilOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSqlGapsUntilOption(Context\SqlGapsUntilOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUserConnectionOption(Context\UserConnectionOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUserConnectionOption(Context\UserConnectionOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPasswordConnectionOption(Context\PasswordConnectionOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPasswordConnectionOption(Context\PasswordConnectionOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDefaultAuthConnectionOption(Context\DefaultAuthConnectionOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDefaultAuthConnectionOption(Context\DefaultAuthConnectionOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPluginDirConnectionOption(Context\PluginDirConnectionOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPluginDirConnectionOption(Context\PluginDirConnectionOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterGtuidSet(Context\GtuidSetContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitGtuidSet(Context\GtuidSetContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterXaStartTransaction(Context\XaStartTransactionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitXaStartTransaction(Context\XaStartTransactionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterXaEndTransaction(Context\XaEndTransactionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitXaEndTransaction(Context\XaEndTransactionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterXaPrepareStatement(Context\XaPrepareStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitXaPrepareStatement(Context\XaPrepareStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterXaCommitWork(Context\XaCommitWorkContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitXaCommitWork(Context\XaCommitWorkContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterXaRollbackWork(Context\XaRollbackWorkContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitXaRollbackWork(Context\XaRollbackWorkContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterXaRecoverWork(Context\XaRecoverWorkContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitXaRecoverWork(Context\XaRecoverWorkContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPrepareStatement(Context\PrepareStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPrepareStatement(Context\PrepareStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterExecuteStatement(Context\ExecuteStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitExecuteStatement(Context\ExecuteStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDeallocatePrepare(Context\DeallocatePrepareContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDeallocatePrepare(Context\DeallocatePrepareContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterRoutineBody(Context\RoutineBodyContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitRoutineBody(Context\RoutineBodyContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterBlockStatement(Context\BlockStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitBlockStatement(Context\BlockStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCaseStatement(Context\CaseStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCaseStatement(Context\CaseStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterIfStatement(Context\IfStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitIfStatement(Context\IfStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterIterateStatement(Context\IterateStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitIterateStatement(Context\IterateStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterLeaveStatement(Context\LeaveStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitLeaveStatement(Context\LeaveStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterLoopStatement(Context\LoopStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitLoopStatement(Context\LoopStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterRepeatStatement(Context\RepeatStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitRepeatStatement(Context\RepeatStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterReturnStatement(Context\ReturnStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitReturnStatement(Context\ReturnStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterWhileStatement(Context\WhileStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitWhileStatement(Context\WhileStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCloseCursor(Context\CloseCursorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCloseCursor(Context\CloseCursorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterFetchCursor(Context\FetchCursorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitFetchCursor(Context\FetchCursorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterOpenCursor(Context\OpenCursorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitOpenCursor(Context\OpenCursorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDeclareVariable(Context\DeclareVariableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDeclareVariable(Context\DeclareVariableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDeclareCondition(Context\DeclareConditionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDeclareCondition(Context\DeclareConditionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDeclareCursor(Context\DeclareCursorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDeclareCursor(Context\DeclareCursorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDeclareHandler(Context\DeclareHandlerContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDeclareHandler(Context\DeclareHandlerContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterHandlerConditionCode(Context\HandlerConditionCodeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitHandlerConditionCode(Context\HandlerConditionCodeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterHandlerConditionState(Context\HandlerConditionStateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitHandlerConditionState(Context\HandlerConditionStateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterHandlerConditionName(Context\HandlerConditionNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitHandlerConditionName(Context\HandlerConditionNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterHandlerConditionWarning(Context\HandlerConditionWarningContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitHandlerConditionWarning(Context\HandlerConditionWarningContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterHandlerConditionNotfound(Context\HandlerConditionNotfoundContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitHandlerConditionNotfound(Context\HandlerConditionNotfoundContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterHandlerConditionException(Context\HandlerConditionExceptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitHandlerConditionException(Context\HandlerConditionExceptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterProcedureSqlStatement(Context\ProcedureSqlStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitProcedureSqlStatement(Context\ProcedureSqlStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCaseAlternative(Context\CaseAlternativeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCaseAlternative(Context\CaseAlternativeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterElifAlternative(Context\ElifAlternativeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitElifAlternative(Context\ElifAlternativeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterUserMysqlV56(Context\AlterUserMysqlV56Context $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterUserMysqlV56(Context\AlterUserMysqlV56Context $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAlterUserMysqlV57(Context\AlterUserMysqlV57Context $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAlterUserMysqlV57(Context\AlterUserMysqlV57Context $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCreateUserMysqlV56(Context\CreateUserMysqlV56Context $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCreateUserMysqlV56(Context\CreateUserMysqlV56Context $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCreateUserMysqlV57(Context\CreateUserMysqlV57Context $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCreateUserMysqlV57(Context\CreateUserMysqlV57Context $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDropUser(Context\DropUserContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDropUser(Context\DropUserContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterGrantStatement(Context\GrantStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitGrantStatement(Context\GrantStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterRoleOption(Context\RoleOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitRoleOption(Context\RoleOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterGrantProxy(Context\GrantProxyContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitGrantProxy(Context\GrantProxyContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterRenameUser(Context\RenameUserContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitRenameUser(Context\RenameUserContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDetailRevoke(Context\DetailRevokeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDetailRevoke(Context\DetailRevokeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShortRevoke(Context\ShortRevokeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShortRevoke(Context\ShortRevokeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterRoleRevoke(Context\RoleRevokeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitRoleRevoke(Context\RoleRevokeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterRevokeProxy(Context\RevokeProxyContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitRevokeProxy(Context\RevokeProxyContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSetPasswordStatement(Context\SetPasswordStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSetPasswordStatement(Context\SetPasswordStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUserSpecification(Context\UserSpecificationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUserSpecification(Context\UserSpecificationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPasswordAuthOption(Context\PasswordAuthOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPasswordAuthOption(Context\PasswordAuthOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterStringAuthOption(Context\StringAuthOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitStringAuthOption(Context\StringAuthOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterHashAuthOption(Context\HashAuthOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitHashAuthOption(Context\HashAuthOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSimpleAuthOption(Context\SimpleAuthOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSimpleAuthOption(Context\SimpleAuthOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTlsOption(Context\TlsOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTlsOption(Context\TlsOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUserResourceOption(Context\UserResourceOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUserResourceOption(Context\UserResourceOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUserPasswordOption(Context\UserPasswordOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUserPasswordOption(Context\UserPasswordOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUserLockOption(Context\UserLockOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUserLockOption(Context\UserLockOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPrivelegeClause(Context\PrivelegeClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPrivelegeClause(Context\PrivelegeClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPrivilege(Context\PrivilegeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPrivilege(Context\PrivilegeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCurrentSchemaPriviLevel(Context\CurrentSchemaPriviLevelContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCurrentSchemaPriviLevel(Context\CurrentSchemaPriviLevelContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterGlobalPrivLevel(Context\GlobalPrivLevelContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitGlobalPrivLevel(Context\GlobalPrivLevelContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDefiniteSchemaPrivLevel(Context\DefiniteSchemaPrivLevelContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDefiniteSchemaPrivLevel(Context\DefiniteSchemaPrivLevelContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDefiniteFullTablePrivLevel(Context\DefiniteFullTablePrivLevelContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDefiniteFullTablePrivLevel(Context\DefiniteFullTablePrivLevelContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDefiniteFullTablePrivLevel2(Context\DefiniteFullTablePrivLevel2Context $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDefiniteFullTablePrivLevel2(Context\DefiniteFullTablePrivLevel2Context $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDefiniteTablePrivLevel(Context\DefiniteTablePrivLevelContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDefiniteTablePrivLevel(Context\DefiniteTablePrivLevelContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterRenameUserClause(Context\RenameUserClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitRenameUserClause(Context\RenameUserClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAnalyzeTable(Context\AnalyzeTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAnalyzeTable(Context\AnalyzeTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCheckTable(Context\CheckTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCheckTable(Context\CheckTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterChecksumTable(Context\ChecksumTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitChecksumTable(Context\ChecksumTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterOptimizeTable(Context\OptimizeTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitOptimizeTable(Context\OptimizeTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterRepairTable(Context\RepairTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitRepairTable(Context\RepairTableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCheckTableOption(Context\CheckTableOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCheckTableOption(Context\CheckTableOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCreateUdfunction(Context\CreateUdfunctionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCreateUdfunction(Context\CreateUdfunctionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterInstallPlugin(Context\InstallPluginContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitInstallPlugin(Context\InstallPluginContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUninstallPlugin(Context\UninstallPluginContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUninstallPlugin(Context\UninstallPluginContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSetVariable(Context\SetVariableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSetVariable(Context\SetVariableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSetCharset(Context\SetCharsetContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSetCharset(Context\SetCharsetContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSetNames(Context\SetNamesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSetNames(Context\SetNamesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSetPassword(Context\SetPasswordContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSetPassword(Context\SetPasswordContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSetTransaction(Context\SetTransactionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSetTransaction(Context\SetTransactionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSetAutocommit(Context\SetAutocommitContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSetAutocommit(Context\SetAutocommitContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSetNewValueInsideTrigger(Context\SetNewValueInsideTriggerContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSetNewValueInsideTrigger(Context\SetNewValueInsideTriggerContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShowMasterLogs(Context\ShowMasterLogsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShowMasterLogs(Context\ShowMasterLogsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShowLogEvents(Context\ShowLogEventsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShowLogEvents(Context\ShowLogEventsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShowObjectFilter(Context\ShowObjectFilterContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShowObjectFilter(Context\ShowObjectFilterContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShowColumns(Context\ShowColumnsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShowColumns(Context\ShowColumnsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShowCreateDb(Context\ShowCreateDbContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShowCreateDb(Context\ShowCreateDbContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShowCreateFullIdObject(Context\ShowCreateFullIdObjectContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShowCreateFullIdObject(Context\ShowCreateFullIdObjectContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShowCreateUser(Context\ShowCreateUserContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShowCreateUser(Context\ShowCreateUserContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShowEngine(Context\ShowEngineContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShowEngine(Context\ShowEngineContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShowGlobalInfo(Context\ShowGlobalInfoContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShowGlobalInfo(Context\ShowGlobalInfoContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShowErrors(Context\ShowErrorsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShowErrors(Context\ShowErrorsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShowCountErrors(Context\ShowCountErrorsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShowCountErrors(Context\ShowCountErrorsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShowSchemaFilter(Context\ShowSchemaFilterContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShowSchemaFilter(Context\ShowSchemaFilterContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShowRoutine(Context\ShowRoutineContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShowRoutine(Context\ShowRoutineContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShowGrants(Context\ShowGrantsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShowGrants(Context\ShowGrantsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShowIndexes(Context\ShowIndexesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShowIndexes(Context\ShowIndexesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShowOpenTables(Context\ShowOpenTablesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShowOpenTables(Context\ShowOpenTablesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShowProfile(Context\ShowProfileContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShowProfile(Context\ShowProfileContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShowSlaveStatus(Context\ShowSlaveStatusContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShowSlaveStatus(Context\ShowSlaveStatusContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterVariableClause(Context\VariableClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitVariableClause(Context\VariableClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShowCommonEntity(Context\ShowCommonEntityContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShowCommonEntity(Context\ShowCommonEntityContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShowFilter(Context\ShowFilterContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShowFilter(Context\ShowFilterContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShowGlobalInfoClause(Context\ShowGlobalInfoClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShowGlobalInfoClause(Context\ShowGlobalInfoClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShowSchemaEntity(Context\ShowSchemaEntityContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShowSchemaEntity(Context\ShowSchemaEntityContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShowProfileType(Context\ShowProfileTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShowProfileType(Context\ShowProfileTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterBinlogStatement(Context\BinlogStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitBinlogStatement(Context\BinlogStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCacheIndexStatement(Context\CacheIndexStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCacheIndexStatement(Context\CacheIndexStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterFlushStatement(Context\FlushStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitFlushStatement(Context\FlushStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterKillStatement(Context\KillStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitKillStatement(Context\KillStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterLoadIndexIntoCache(Context\LoadIndexIntoCacheContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitLoadIndexIntoCache(Context\LoadIndexIntoCacheContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterResetStatement(Context\ResetStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitResetStatement(Context\ResetStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterShutdownStatement(Context\ShutdownStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitShutdownStatement(Context\ShutdownStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableIndexes(Context\TableIndexesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableIndexes(Context\TableIndexesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSimpleFlushOption(Context\SimpleFlushOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSimpleFlushOption(Context\SimpleFlushOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterChannelFlushOption(Context\ChannelFlushOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitChannelFlushOption(Context\ChannelFlushOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableFlushOption(Context\TableFlushOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableFlushOption(Context\TableFlushOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterFlushTableOption(Context\FlushTableOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitFlushTableOption(Context\FlushTableOptionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterLoadedTableIndexes(Context\LoadedTableIndexesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitLoadedTableIndexes(Context\LoadedTableIndexesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSimpleDescribeStatement(Context\SimpleDescribeStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSimpleDescribeStatement(Context\SimpleDescribeStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterFullDescribeStatement(Context\FullDescribeStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitFullDescribeStatement(Context\FullDescribeStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterHelpStatement(Context\HelpStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitHelpStatement(Context\HelpStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUseStatement(Context\UseStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUseStatement(Context\UseStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSignalStatement(Context\SignalStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSignalStatement(Context\SignalStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterResignalStatement(Context\ResignalStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitResignalStatement(Context\ResignalStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSignalConditionInformation(Context\SignalConditionInformationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSignalConditionInformation(Context\SignalConditionInformationContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDiagnosticsStatement(Context\DiagnosticsStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDiagnosticsStatement(Context\DiagnosticsStatementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDiagnosticsConditionInformationName(Context\DiagnosticsConditionInformationNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDiagnosticsConditionInformationName(Context\DiagnosticsConditionInformationNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDescribeStatements(Context\DescribeStatementsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDescribeStatements(Context\DescribeStatementsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDescribeConnection(Context\DescribeConnectionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDescribeConnection(Context\DescribeConnectionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterFullId(Context\FullIdContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitFullId(Context\FullIdContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableName(Context\TableNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableName(Context\TableNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterFullColumnName(Context\FullColumnNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitFullColumnName(Context\FullColumnNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterIndexColumnName(Context\IndexColumnNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitIndexColumnName(Context\IndexColumnNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUserName(Context\UserNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUserName(Context\UserNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterMysqlVariable(Context\MysqlVariableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitMysqlVariable(Context\MysqlVariableContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCharsetName(Context\CharsetNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCharsetName(Context\CharsetNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCollationName(Context\CollationNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCollationName(Context\CollationNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterEngineName(Context\EngineNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitEngineName(Context\EngineNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUuidSet(Context\UuidSetContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUuidSet(Context\UuidSetContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterXid(Context\XidContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitXid(Context\XidContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterXuidStringId(Context\XuidStringIdContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitXuidStringId(Context\XuidStringIdContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAuthPlugin(Context\AuthPluginContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAuthPlugin(Context\AuthPluginContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUid(Context\UidContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUid(Context\UidContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSimpleId(Context\SimpleIdContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSimpleId(Context\SimpleIdContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDottedId(Context\DottedIdContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDottedId(Context\DottedIdContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDecimalLiteral(Context\DecimalLiteralContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDecimalLiteral(Context\DecimalLiteralContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterFileSizeLiteral(Context\FileSizeLiteralContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitFileSizeLiteral(Context\FileSizeLiteralContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterStringLiteral(Context\StringLiteralContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitStringLiteral(Context\StringLiteralContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterBooleanLiteral(Context\BooleanLiteralContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitBooleanLiteral(Context\BooleanLiteralContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterHexadecimalLiteral(Context\HexadecimalLiteralContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitHexadecimalLiteral(Context\HexadecimalLiteralContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterNullNotnull(Context\NullNotnullContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitNullNotnull(Context\NullNotnullContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterConstant(Context\ConstantContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitConstant(Context\ConstantContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterStringDataType(Context\StringDataTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitStringDataType(Context\StringDataTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterNationalStringDataType(Context\NationalStringDataTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitNationalStringDataType(Context\NationalStringDataTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterNationalVaryingStringDataType(Context\NationalVaryingStringDataTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitNationalVaryingStringDataType(Context\NationalVaryingStringDataTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDimensionDataType(Context\DimensionDataTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDimensionDataType(Context\DimensionDataTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSimpleDataType(Context\SimpleDataTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSimpleDataType(Context\SimpleDataTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCollectionDataType(Context\CollectionDataTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCollectionDataType(Context\CollectionDataTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSpatialDataType(Context\SpatialDataTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSpatialDataType(Context\SpatialDataTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterLongVarcharDataType(Context\LongVarcharDataTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitLongVarcharDataType(Context\LongVarcharDataTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterLongVarbinaryDataType(Context\LongVarbinaryDataTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitLongVarbinaryDataType(Context\LongVarbinaryDataTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCollectionOptions(Context\CollectionOptionsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCollectionOptions(Context\CollectionOptionsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterConvertedDataType(Context\ConvertedDataTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitConvertedDataType(Context\ConvertedDataTypeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterLengthOneDimension(Context\LengthOneDimensionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitLengthOneDimension(Context\LengthOneDimensionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterLengthTwoDimension(Context\LengthTwoDimensionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitLengthTwoDimension(Context\LengthTwoDimensionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterLengthTwoOptionalDimension(Context\LengthTwoOptionalDimensionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitLengthTwoOptionalDimension(Context\LengthTwoOptionalDimensionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUidList(Context\UidListContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUidList(Context\UidListContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTables(Context\TablesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTables(Context\TablesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTableNames(Context\TableNamesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTableNames(Context\TableNamesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterIndexColumnNames(Context\IndexColumnNamesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitIndexColumnNames(Context\IndexColumnNamesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterExpressions(Context\ExpressionsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitExpressions(Context\ExpressionsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterExpressionsWithDefaults(Context\ExpressionsWithDefaultsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitExpressionsWithDefaults(Context\ExpressionsWithDefaultsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterConstants(Context\ConstantsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitConstants(Context\ConstantsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSimpleStrings(Context\SimpleStringsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSimpleStrings(Context\SimpleStringsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUserVariables(Context\UserVariablesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUserVariables(Context\UserVariablesContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDefaultValue(Context\DefaultValueContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDefaultValue(Context\DefaultValueContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCurrentTimestamp(Context\CurrentTimestampContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCurrentTimestamp(Context\CurrentTimestampContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterExpressionOrDefault(Context\ExpressionOrDefaultContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitExpressionOrDefault(Context\ExpressionOrDefaultContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterIfExists(Context\IfExistsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitIfExists(Context\IfExistsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterIfNotExists(Context\IfNotExistsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitIfNotExists(Context\IfNotExistsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSpecificFunctionCall(Context\SpecificFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSpecificFunctionCall(Context\SpecificFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAggregateFunctionCall(Context\AggregateFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAggregateFunctionCall(Context\AggregateFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterNonAggregateFunctionCall(Context\NonAggregateFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitNonAggregateFunctionCall(Context\NonAggregateFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterScalarFunctionCall(Context\ScalarFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitScalarFunctionCall(Context\ScalarFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUdfFunctionCall(Context\UdfFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUdfFunctionCall(Context\UdfFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPasswordFunctionCall(Context\PasswordFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPasswordFunctionCall(Context\PasswordFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSimpleFunctionCall(Context\SimpleFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSimpleFunctionCall(Context\SimpleFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDataTypeFunctionCall(Context\DataTypeFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDataTypeFunctionCall(Context\DataTypeFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterValuesFunctionCall(Context\ValuesFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitValuesFunctionCall(Context\ValuesFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCaseExpressionFunctionCall(Context\CaseExpressionFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCaseExpressionFunctionCall(Context\CaseExpressionFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCaseFunctionCall(Context\CaseFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCaseFunctionCall(Context\CaseFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCharFunctionCall(Context\CharFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCharFunctionCall(Context\CharFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPositionFunctionCall(Context\PositionFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPositionFunctionCall(Context\PositionFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSubstrFunctionCall(Context\SubstrFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSubstrFunctionCall(Context\SubstrFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTrimFunctionCall(Context\TrimFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTrimFunctionCall(Context\TrimFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterWeightFunctionCall(Context\WeightFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitWeightFunctionCall(Context\WeightFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterExtractFunctionCall(Context\ExtractFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitExtractFunctionCall(Context\ExtractFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterGetFormatFunctionCall(Context\GetFormatFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitGetFormatFunctionCall(Context\GetFormatFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterJsonValueFunctionCall(Context\JsonValueFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitJsonValueFunctionCall(Context\JsonValueFunctionCallContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCaseFuncAlternative(Context\CaseFuncAlternativeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCaseFuncAlternative(Context\CaseFuncAlternativeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterLevelWeightList(Context\LevelWeightListContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitLevelWeightList(Context\LevelWeightListContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterLevelWeightRange(Context\LevelWeightRangeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitLevelWeightRange(Context\LevelWeightRangeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterLevelInWeightListElement(Context\LevelInWeightListElementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitLevelInWeightListElement(Context\LevelInWeightListElementContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterAggregateWindowedFunction(Context\AggregateWindowedFunctionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitAggregateWindowedFunction(Context\AggregateWindowedFunctionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterNonAggregateWindowedFunction(Context\NonAggregateWindowedFunctionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitNonAggregateWindowedFunction(Context\NonAggregateWindowedFunctionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterOverClause(Context\OverClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitOverClause(Context\OverClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterWindowSpec(Context\WindowSpecContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitWindowSpec(Context\WindowSpecContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterWindowName(Context\WindowNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitWindowName(Context\WindowNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterFrameClause(Context\FrameClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitFrameClause(Context\FrameClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterFrameUnits(Context\FrameUnitsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitFrameUnits(Context\FrameUnitsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterFrameExtent(Context\FrameExtentContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitFrameExtent(Context\FrameExtentContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterFrameBetween(Context\FrameBetweenContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitFrameBetween(Context\FrameBetweenContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterFrameRange(Context\FrameRangeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitFrameRange(Context\FrameRangeContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPartitionClause(Context\PartitionClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPartitionClause(Context\PartitionClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterScalarFunctionName(Context\ScalarFunctionNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitScalarFunctionName(Context\ScalarFunctionNameContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPasswordFunctionClause(Context\PasswordFunctionClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPasswordFunctionClause(Context\PasswordFunctionClauseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterFunctionArgs(Context\FunctionArgsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitFunctionArgs(Context\FunctionArgsContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterFunctionArg(Context\FunctionArgContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitFunctionArg(Context\FunctionArgContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterIsExpression(Context\IsExpressionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitIsExpression(Context\IsExpressionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterNotExpression(Context\NotExpressionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitNotExpression(Context\NotExpressionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterLogicalExpression(Context\LogicalExpressionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitLogicalExpression(Context\LogicalExpressionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPredicateExpression(Context\PredicateExpressionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPredicateExpression(Context\PredicateExpressionContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSoundsLikePredicate(Context\SoundsLikePredicateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSoundsLikePredicate(Context\SoundsLikePredicateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterExpressionAtomPredicate(Context\ExpressionAtomPredicateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitExpressionAtomPredicate(Context\ExpressionAtomPredicateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSubqueryComparisonPredicate(Context\SubqueryComparisonPredicateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSubqueryComparisonPredicate(Context\SubqueryComparisonPredicateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterJsonMemberOfPredicate(Context\JsonMemberOfPredicateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitJsonMemberOfPredicate(Context\JsonMemberOfPredicateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterBinaryComparisonPredicate(Context\BinaryComparisonPredicateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitBinaryComparisonPredicate(Context\BinaryComparisonPredicateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterInPredicate(Context\InPredicateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitInPredicate(Context\InPredicateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterBetweenPredicate(Context\BetweenPredicateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitBetweenPredicate(Context\BetweenPredicateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterIsNullPredicate(Context\IsNullPredicateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitIsNullPredicate(Context\IsNullPredicateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterLikePredicate(Context\LikePredicateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitLikePredicate(Context\LikePredicateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterRegexpPredicate(Context\RegexpPredicateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitRegexpPredicate(Context\RegexpPredicateContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUnaryExpressionAtom(Context\UnaryExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUnaryExpressionAtom(Context\UnaryExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCollateExpressionAtom(Context\CollateExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCollateExpressionAtom(Context\CollateExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterMysqlVariableExpressionAtom(Context\MysqlVariableExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitMysqlVariableExpressionAtom(Context\MysqlVariableExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterNestedExpressionAtom(Context\NestedExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitNestedExpressionAtom(Context\NestedExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterNestedRowExpressionAtom(Context\NestedRowExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitNestedRowExpressionAtom(Context\NestedRowExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterMathExpressionAtom(Context\MathExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitMathExpressionAtom(Context\MathExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterExistsExpressionAtom(Context\ExistsExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitExistsExpressionAtom(Context\ExistsExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterIntervalExpressionAtom(Context\IntervalExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitIntervalExpressionAtom(Context\IntervalExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterJsonExpressionAtom(Context\JsonExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitJsonExpressionAtom(Context\JsonExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterSubqueryExpressionAtom(Context\SubqueryExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitSubqueryExpressionAtom(Context\SubqueryExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterConstantExpressionAtom(Context\ConstantExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitConstantExpressionAtom(Context\ConstantExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterFunctionCallExpressionAtom(Context\FunctionCallExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitFunctionCallExpressionAtom(Context\FunctionCallExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterBinaryExpressionAtom(Context\BinaryExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitBinaryExpressionAtom(Context\BinaryExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterFullColumnNameExpressionAtom(Context\FullColumnNameExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitFullColumnNameExpressionAtom(Context\FullColumnNameExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterBitExpressionAtom(Context\BitExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitBitExpressionAtom(Context\BitExpressionAtomContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterUnaryOperator(Context\UnaryOperatorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitUnaryOperator(Context\UnaryOperatorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterComparisonOperator(Context\ComparisonOperatorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitComparisonOperator(Context\ComparisonOperatorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterLogicalOperator(Context\LogicalOperatorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitLogicalOperator(Context\LogicalOperatorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterBitOperator(Context\BitOperatorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitBitOperator(Context\BitOperatorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterMathOperator(Context\MathOperatorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitMathOperator(Context\MathOperatorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterJsonOperator(Context\JsonOperatorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitJsonOperator(Context\JsonOperatorContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterCharsetNameBase(Context\CharsetNameBaseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitCharsetNameBase(Context\CharsetNameBaseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterTransactionLevelBase(Context\TransactionLevelBaseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitTransactionLevelBase(Context\TransactionLevelBaseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterPrivilegesBase(Context\PrivilegesBaseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitPrivilegesBase(Context\PrivilegesBaseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterIntervalTypeBase(Context\IntervalTypeBaseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitIntervalTypeBase(Context\IntervalTypeBaseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterDataTypeBase(Context\DataTypeBaseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitDataTypeBase(Context\DataTypeBaseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterKeywordsCanBeId(Context\KeywordsCanBeIdContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitKeywordsCanBeId(Context\KeywordsCanBeIdContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterFunctionNameBase(Context\FunctionNameBaseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitFunctionNameBase(Context\FunctionNameBaseContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function enterEveryRule(ParserRuleContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function exitEveryRule(ParserRuleContext $context): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function visitTerminal(TerminalNode $node): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation does nothing.
     */
    public function visitErrorNode(ErrorNode $node): void
    {
    }
}
