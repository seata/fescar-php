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
namespace Hyperf\Seata\SqlParser\Antlr\MySql\Visit;

use Antlr\Antlr4\Runtime\Tree\AbstractParseTreeVisitor;

/**
 * This class provides an empty implementation of {@see MySqlParserVisitor},
 * which can be extended to create a visitor which only needs to handle a subset
 * of the available methods.
 */
class MySqlParserBaseVisitor extends AbstractParseTreeVisitor implements MySqlParserVisitor
{
    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitRoot(Context\RootContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSqlStatements(Context\SqlStatementsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSqlStatement(Context\SqlStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitEmptyStatement(Context\EmptyStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDdlStatement(Context\DdlStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDmlStatement(Context\DmlStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTransactionStatement(Context\TransactionStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitReplicationStatement(Context\ReplicationStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPreparedStatement(Context\PreparedStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCompoundStatement(Context\CompoundStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAdministrationStatement(Context\AdministrationStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUtilityStatement(Context\UtilityStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCreateDatabase(Context\CreateDatabaseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCreateEvent(Context\CreateEventContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCreateIndex(Context\CreateIndexContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCreateLogfileGroup(Context\CreateLogfileGroupContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCreateProcedure(Context\CreateProcedureContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCreateFunction(Context\CreateFunctionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCreateServer(Context\CreateServerContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCopyCreateTable(Context\CopyCreateTableContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitQueryCreateTable(Context\QueryCreateTableContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitColumnCreateTable(Context\ColumnCreateTableContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCreateTablespaceInnodb(Context\CreateTablespaceInnodbContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCreateTablespaceNdb(Context\CreateTablespaceNdbContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCreateTrigger(Context\CreateTriggerContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCreateView(Context\CreateViewContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCreateDatabaseOption(Context\CreateDatabaseOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitOwnerStatement(Context\OwnerStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPreciseSchedule(Context\PreciseScheduleContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitIntervalSchedule(Context\IntervalScheduleContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTimestampValue(Context\TimestampValueContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitIntervalExpr(Context\IntervalExprContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitIntervalType(Context\IntervalTypeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitEnableType(Context\EnableTypeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitIndexType(Context\IndexTypeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitIndexOption(Context\IndexOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitProcedureParameter(Context\ProcedureParameterContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitFunctionParameter(Context\FunctionParameterContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitRoutineComment(Context\RoutineCommentContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitRoutineLanguage(Context\RoutineLanguageContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitRoutineBehavior(Context\RoutineBehaviorContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitRoutineData(Context\RoutineDataContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitRoutineSecurity(Context\RoutineSecurityContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitServerOption(Context\ServerOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCreateDefinitions(Context\CreateDefinitionsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitColumnDeclaration(Context\ColumnDeclarationContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitConstraintDeclaration(Context\ConstraintDeclarationContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitIndexDeclaration(Context\IndexDeclarationContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitColumnDefinition(Context\ColumnDefinitionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitNullColumnConstraint(Context\NullColumnConstraintContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDefaultColumnConstraint(Context\DefaultColumnConstraintContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitVisibilityColumnConstraint(Context\VisibilityColumnConstraintContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAutoIncrementColumnConstraint(Context\AutoIncrementColumnConstraintContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPrimaryKeyColumnConstraint(Context\PrimaryKeyColumnConstraintContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUniqueKeyColumnConstraint(Context\UniqueKeyColumnConstraintContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCommentColumnConstraint(Context\CommentColumnConstraintContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitFormatColumnConstraint(Context\FormatColumnConstraintContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitStorageColumnConstraint(Context\StorageColumnConstraintContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitReferenceColumnConstraint(Context\ReferenceColumnConstraintContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCollateColumnConstraint(Context\CollateColumnConstraintContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitGeneratedColumnConstraint(Context\GeneratedColumnConstraintContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSerialDefaultColumnConstraint(Context\SerialDefaultColumnConstraintContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCheckColumnConstraint(Context\CheckColumnConstraintContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPrimaryKeyTableConstraint(Context\PrimaryKeyTableConstraintContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUniqueKeyTableConstraint(Context\UniqueKeyTableConstraintContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitForeignKeyTableConstraint(Context\ForeignKeyTableConstraintContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCheckTableConstraint(Context\CheckTableConstraintContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitReferenceDefinition(Context\ReferenceDefinitionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitReferenceAction(Context\ReferenceActionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitReferenceControlType(Context\ReferenceControlTypeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSimpleIndexDeclaration(Context\SimpleIndexDeclarationContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSpecialIndexDeclaration(Context\SpecialIndexDeclarationContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionEngine(Context\TableOptionEngineContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionAutoIncrement(Context\TableOptionAutoIncrementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionAverage(Context\TableOptionAverageContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionCharset(Context\TableOptionCharsetContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionChecksum(Context\TableOptionChecksumContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionCollate(Context\TableOptionCollateContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionComment(Context\TableOptionCommentContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionCompression(Context\TableOptionCompressionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionConnection(Context\TableOptionConnectionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionDataDirectory(Context\TableOptionDataDirectoryContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionDelay(Context\TableOptionDelayContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionEncryption(Context\TableOptionEncryptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionIndexDirectory(Context\TableOptionIndexDirectoryContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionInsertMethod(Context\TableOptionInsertMethodContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionKeyBlockSize(Context\TableOptionKeyBlockSizeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionMaxRows(Context\TableOptionMaxRowsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionMinRows(Context\TableOptionMinRowsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionPackKeys(Context\TableOptionPackKeysContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionPassword(Context\TableOptionPasswordContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionRowFormat(Context\TableOptionRowFormatContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionRecalculation(Context\TableOptionRecalculationContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionPersistent(Context\TableOptionPersistentContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionSamplePage(Context\TableOptionSamplePageContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionTablespace(Context\TableOptionTablespaceContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionTableType(Context\TableOptionTableTypeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableOptionUnion(Context\TableOptionUnionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableType(Context\TableTypeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTablespaceStorage(Context\TablespaceStorageContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPartitionDefinitions(Context\PartitionDefinitionsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPartitionFunctionHash(Context\PartitionFunctionHashContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPartitionFunctionKey(Context\PartitionFunctionKeyContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPartitionFunctionRange(Context\PartitionFunctionRangeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPartitionFunctionList(Context\PartitionFunctionListContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSubPartitionFunctionHash(Context\SubPartitionFunctionHashContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSubPartitionFunctionKey(Context\SubPartitionFunctionKeyContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPartitionComparison(Context\PartitionComparisonContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPartitionListAtom(Context\PartitionListAtomContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPartitionListVector(Context\PartitionListVectorContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPartitionSimple(Context\PartitionSimpleContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPartitionDefinerAtom(Context\PartitionDefinerAtomContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPartitionDefinerVector(Context\PartitionDefinerVectorContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSubpartitionDefinition(Context\SubpartitionDefinitionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPartitionOptionEngine(Context\PartitionOptionEngineContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPartitionOptionComment(Context\PartitionOptionCommentContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPartitionOptionDataDirectory(Context\PartitionOptionDataDirectoryContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPartitionOptionIndexDirectory(Context\PartitionOptionIndexDirectoryContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPartitionOptionMaxRows(Context\PartitionOptionMaxRowsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPartitionOptionMinRows(Context\PartitionOptionMinRowsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPartitionOptionTablespace(Context\PartitionOptionTablespaceContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPartitionOptionNodeGroup(Context\PartitionOptionNodeGroupContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterSimpleDatabase(Context\AlterSimpleDatabaseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterUpgradeName(Context\AlterUpgradeNameContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterEvent(Context\AlterEventContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterFunction(Context\AlterFunctionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterInstance(Context\AlterInstanceContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterLogfileGroup(Context\AlterLogfileGroupContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterProcedure(Context\AlterProcedureContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterServer(Context\AlterServerContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterTable(Context\AlterTableContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterTablespace(Context\AlterTablespaceContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterView(Context\AlterViewContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByTableOption(Context\AlterByTableOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByAddColumn(Context\AlterByAddColumnContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByAddColumns(Context\AlterByAddColumnsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByAddIndex(Context\AlterByAddIndexContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByAddPrimaryKey(Context\AlterByAddPrimaryKeyContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByAddUniqueKey(Context\AlterByAddUniqueKeyContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByAddSpecialIndex(Context\AlterByAddSpecialIndexContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByAddForeignKey(Context\AlterByAddForeignKeyContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByAddCheckTableConstraint(Context\AlterByAddCheckTableConstraintContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterBySetAlgorithm(Context\AlterBySetAlgorithmContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByChangeDefault(Context\AlterByChangeDefaultContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByChangeColumn(Context\AlterByChangeColumnContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByRenameColumn(Context\AlterByRenameColumnContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByLock(Context\AlterByLockContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByModifyColumn(Context\AlterByModifyColumnContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByDropColumn(Context\AlterByDropColumnContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByDropConstraintCheck(Context\AlterByDropConstraintCheckContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByDropPrimaryKey(Context\AlterByDropPrimaryKeyContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByRenameIndex(Context\AlterByRenameIndexContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByAlterIndexVisibility(Context\AlterByAlterIndexVisibilityContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByDropIndex(Context\AlterByDropIndexContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByDropForeignKey(Context\AlterByDropForeignKeyContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByDisableKeys(Context\AlterByDisableKeysContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByEnableKeys(Context\AlterByEnableKeysContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByRename(Context\AlterByRenameContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByOrder(Context\AlterByOrderContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByConvertCharset(Context\AlterByConvertCharsetContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByDefaultCharset(Context\AlterByDefaultCharsetContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByDiscardTablespace(Context\AlterByDiscardTablespaceContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByImportTablespace(Context\AlterByImportTablespaceContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByForce(Context\AlterByForceContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByValidate(Context\AlterByValidateContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByAddPartition(Context\AlterByAddPartitionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByDropPartition(Context\AlterByDropPartitionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByDiscardPartition(Context\AlterByDiscardPartitionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByImportPartition(Context\AlterByImportPartitionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByTruncatePartition(Context\AlterByTruncatePartitionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByCoalescePartition(Context\AlterByCoalescePartitionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByReorganizePartition(Context\AlterByReorganizePartitionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByExchangePartition(Context\AlterByExchangePartitionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByAnalyzePartition(Context\AlterByAnalyzePartitionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByCheckPartition(Context\AlterByCheckPartitionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByOptimizePartition(Context\AlterByOptimizePartitionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByRebuildPartition(Context\AlterByRebuildPartitionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByRepairPartition(Context\AlterByRepairPartitionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByRemovePartitioning(Context\AlterByRemovePartitioningContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterByUpgradePartitioning(Context\AlterByUpgradePartitioningContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDropDatabase(Context\DropDatabaseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDropEvent(Context\DropEventContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDropIndex(Context\DropIndexContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDropLogfileGroup(Context\DropLogfileGroupContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDropProcedure(Context\DropProcedureContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDropFunction(Context\DropFunctionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDropServer(Context\DropServerContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDropTable(Context\DropTableContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDropTablespace(Context\DropTablespaceContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDropTrigger(Context\DropTriggerContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDropView(Context\DropViewContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitRenameTable(Context\RenameTableContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitRenameTableClause(Context\RenameTableClauseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTruncateTable(Context\TruncateTableContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCallStatement(Context\CallStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDeleteStatement(Context\DeleteStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDoStatement(Context\DoStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitHandlerStatement(Context\HandlerStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitInsertStatement(Context\InsertStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitLoadDataStatement(Context\LoadDataStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitLoadXmlStatement(Context\LoadXmlStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitReplaceStatement(Context\ReplaceStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSimpleSelect(Context\SimpleSelectContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitParenthesisSelect(Context\ParenthesisSelectContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUnionSelect(Context\UnionSelectContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUnionParenthesisSelect(Context\UnionParenthesisSelectContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUpdateStatement(Context\UpdateStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitInsertStatementValue(Context\InsertStatementValueContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUpdatedElement(Context\UpdatedElementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAssignmentField(Context\AssignmentFieldContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitLockClause(Context\LockClauseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSingleDeleteStatement(Context\SingleDeleteStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitMultipleDeleteStatement(Context\MultipleDeleteStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitHandlerOpenStatement(Context\HandlerOpenStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitHandlerReadIndexStatement(Context\HandlerReadIndexStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitHandlerReadStatement(Context\HandlerReadStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitHandlerCloseStatement(Context\HandlerCloseStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSingleUpdateStatement(Context\SingleUpdateStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitMultipleUpdateStatement(Context\MultipleUpdateStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitOrderByClause(Context\OrderByClauseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitOrderByExpression(Context\OrderByExpressionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableSources(Context\TableSourcesContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableSourceBase(Context\TableSourceBaseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableSourceNested(Context\TableSourceNestedContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAtomTableItem(Context\AtomTableItemContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSubqueryTableItem(Context\SubqueryTableItemContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableSourcesItem(Context\TableSourcesItemContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitIndexHint(Context\IndexHintContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitIndexHintType(Context\IndexHintTypeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitInnerJoin(Context\InnerJoinContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitStraightJoin(Context\StraightJoinContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitOuterJoin(Context\OuterJoinContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitNaturalJoin(Context\NaturalJoinContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitQueryExpression(Context\QueryExpressionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitQueryExpressionNointo(Context\QueryExpressionNointoContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitQuerySpecification(Context\QuerySpecificationContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitQuerySpecificationNointo(Context\QuerySpecificationNointoContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUnionParenthesis(Context\UnionParenthesisContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUnionStatement(Context\UnionStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSelectSpec(Context\SelectSpecContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSelectElements(Context\SelectElementsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSelectStarElement(Context\SelectStarElementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSelectColumnElement(Context\SelectColumnElementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSelectFunctionElement(Context\SelectFunctionElementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSelectExpressionElement(Context\SelectExpressionElementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSelectIntoVariables(Context\SelectIntoVariablesContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSelectIntoDumpFile(Context\SelectIntoDumpFileContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSelectIntoTextFile(Context\SelectIntoTextFileContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSelectFieldsInto(Context\SelectFieldsIntoContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSelectLinesInto(Context\SelectLinesIntoContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitFromClause(Context\FromClauseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitGroupByClause(Context\GroupByClauseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitHavingClause(Context\HavingClauseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitWindowClause(Context\WindowClauseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitGroupByItem(Context\GroupByItemContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitLimitClause(Context\LimitClauseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitLimitClauseAtom(Context\LimitClauseAtomContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitStartTransaction(Context\StartTransactionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitBeginWork(Context\BeginWorkContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCommitWork(Context\CommitWorkContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitRollbackWork(Context\RollbackWorkContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSavepointStatement(Context\SavepointStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitRollbackStatement(Context\RollbackStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitReleaseStatement(Context\ReleaseStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitLockTables(Context\LockTablesContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUnlockTables(Context\UnlockTablesContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSetAutocommitStatement(Context\SetAutocommitStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSetTransactionStatement(Context\SetTransactionStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTransactionMode(Context\TransactionModeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitLockTableElement(Context\LockTableElementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitLockAction(Context\LockActionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTransactionOption(Context\TransactionOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTransactionLevel(Context\TransactionLevelContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitChangeMaster(Context\ChangeMasterContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitChangeReplicationFilter(Context\ChangeReplicationFilterContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPurgeBinaryLogs(Context\PurgeBinaryLogsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitResetMaster(Context\ResetMasterContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitResetSlave(Context\ResetSlaveContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitStartSlave(Context\StartSlaveContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitStopSlave(Context\StopSlaveContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitStartGroupReplication(Context\StartGroupReplicationContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitStopGroupReplication(Context\StopGroupReplicationContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitMasterStringOption(Context\MasterStringOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitMasterDecimalOption(Context\MasterDecimalOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitMasterBoolOption(Context\MasterBoolOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitMasterRealOption(Context\MasterRealOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitMasterUidListOption(Context\MasterUidListOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitStringMasterOption(Context\StringMasterOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDecimalMasterOption(Context\DecimalMasterOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitBoolMasterOption(Context\BoolMasterOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitChannelOption(Context\ChannelOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDoDbReplication(Context\DoDbReplicationContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitIgnoreDbReplication(Context\IgnoreDbReplicationContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDoTableReplication(Context\DoTableReplicationContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitIgnoreTableReplication(Context\IgnoreTableReplicationContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitWildDoTableReplication(Context\WildDoTableReplicationContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitWildIgnoreTableReplication(Context\WildIgnoreTableReplicationContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitRewriteDbReplication(Context\RewriteDbReplicationContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTablePair(Context\TablePairContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitThreadType(Context\ThreadTypeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitGtidsUntilOption(Context\GtidsUntilOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitMasterLogUntilOption(Context\MasterLogUntilOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitRelayLogUntilOption(Context\RelayLogUntilOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSqlGapsUntilOption(Context\SqlGapsUntilOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUserConnectionOption(Context\UserConnectionOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPasswordConnectionOption(Context\PasswordConnectionOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDefaultAuthConnectionOption(Context\DefaultAuthConnectionOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPluginDirConnectionOption(Context\PluginDirConnectionOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitGtuidSet(Context\GtuidSetContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitXaStartTransaction(Context\XaStartTransactionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitXaEndTransaction(Context\XaEndTransactionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitXaPrepareStatement(Context\XaPrepareStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitXaCommitWork(Context\XaCommitWorkContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitXaRollbackWork(Context\XaRollbackWorkContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitXaRecoverWork(Context\XaRecoverWorkContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPrepareStatement(Context\PrepareStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitExecuteStatement(Context\ExecuteStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDeallocatePrepare(Context\DeallocatePrepareContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitRoutineBody(Context\RoutineBodyContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitBlockStatement(Context\BlockStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCaseStatement(Context\CaseStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitIfStatement(Context\IfStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitIterateStatement(Context\IterateStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitLeaveStatement(Context\LeaveStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitLoopStatement(Context\LoopStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitRepeatStatement(Context\RepeatStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitReturnStatement(Context\ReturnStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitWhileStatement(Context\WhileStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCloseCursor(Context\CloseCursorContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitFetchCursor(Context\FetchCursorContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitOpenCursor(Context\OpenCursorContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDeclareVariable(Context\DeclareVariableContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDeclareCondition(Context\DeclareConditionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDeclareCursor(Context\DeclareCursorContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDeclareHandler(Context\DeclareHandlerContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitHandlerConditionCode(Context\HandlerConditionCodeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitHandlerConditionState(Context\HandlerConditionStateContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitHandlerConditionName(Context\HandlerConditionNameContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitHandlerConditionWarning(Context\HandlerConditionWarningContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitHandlerConditionNotfound(Context\HandlerConditionNotfoundContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitHandlerConditionException(Context\HandlerConditionExceptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitProcedureSqlStatement(Context\ProcedureSqlStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCaseAlternative(Context\CaseAlternativeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitElifAlternative(Context\ElifAlternativeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterUserMysqlV56(Context\AlterUserMysqlV56Context $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAlterUserMysqlV57(Context\AlterUserMysqlV57Context $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCreateUserMysqlV56(Context\CreateUserMysqlV56Context $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCreateUserMysqlV57(Context\CreateUserMysqlV57Context $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDropUser(Context\DropUserContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitGrantStatement(Context\GrantStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitRoleOption(Context\RoleOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitGrantProxy(Context\GrantProxyContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitRenameUser(Context\RenameUserContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDetailRevoke(Context\DetailRevokeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShortRevoke(Context\ShortRevokeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitRoleRevoke(Context\RoleRevokeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitRevokeProxy(Context\RevokeProxyContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSetPasswordStatement(Context\SetPasswordStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUserSpecification(Context\UserSpecificationContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPasswordAuthOption(Context\PasswordAuthOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitStringAuthOption(Context\StringAuthOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitHashAuthOption(Context\HashAuthOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSimpleAuthOption(Context\SimpleAuthOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTlsOption(Context\TlsOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUserResourceOption(Context\UserResourceOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUserPasswordOption(Context\UserPasswordOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUserLockOption(Context\UserLockOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPrivelegeClause(Context\PrivelegeClauseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPrivilege(Context\PrivilegeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCurrentSchemaPriviLevel(Context\CurrentSchemaPriviLevelContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitGlobalPrivLevel(Context\GlobalPrivLevelContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDefiniteSchemaPrivLevel(Context\DefiniteSchemaPrivLevelContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDefiniteFullTablePrivLevel(Context\DefiniteFullTablePrivLevelContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDefiniteFullTablePrivLevel2(Context\DefiniteFullTablePrivLevel2Context $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDefiniteTablePrivLevel(Context\DefiniteTablePrivLevelContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitRenameUserClause(Context\RenameUserClauseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAnalyzeTable(Context\AnalyzeTableContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCheckTable(Context\CheckTableContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitChecksumTable(Context\ChecksumTableContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitOptimizeTable(Context\OptimizeTableContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitRepairTable(Context\RepairTableContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCheckTableOption(Context\CheckTableOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCreateUdfunction(Context\CreateUdfunctionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitInstallPlugin(Context\InstallPluginContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUninstallPlugin(Context\UninstallPluginContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSetVariable(Context\SetVariableContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSetCharset(Context\SetCharsetContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSetNames(Context\SetNamesContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSetPassword(Context\SetPasswordContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSetTransaction(Context\SetTransactionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSetAutocommit(Context\SetAutocommitContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSetNewValueInsideTrigger(Context\SetNewValueInsideTriggerContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShowMasterLogs(Context\ShowMasterLogsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShowLogEvents(Context\ShowLogEventsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShowObjectFilter(Context\ShowObjectFilterContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShowColumns(Context\ShowColumnsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShowCreateDb(Context\ShowCreateDbContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShowCreateFullIdObject(Context\ShowCreateFullIdObjectContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShowCreateUser(Context\ShowCreateUserContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShowEngine(Context\ShowEngineContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShowGlobalInfo(Context\ShowGlobalInfoContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShowErrors(Context\ShowErrorsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShowCountErrors(Context\ShowCountErrorsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShowSchemaFilter(Context\ShowSchemaFilterContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShowRoutine(Context\ShowRoutineContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShowGrants(Context\ShowGrantsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShowIndexes(Context\ShowIndexesContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShowOpenTables(Context\ShowOpenTablesContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShowProfile(Context\ShowProfileContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShowSlaveStatus(Context\ShowSlaveStatusContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitVariableClause(Context\VariableClauseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShowCommonEntity(Context\ShowCommonEntityContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShowFilter(Context\ShowFilterContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShowGlobalInfoClause(Context\ShowGlobalInfoClauseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShowSchemaEntity(Context\ShowSchemaEntityContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShowProfileType(Context\ShowProfileTypeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitBinlogStatement(Context\BinlogStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCacheIndexStatement(Context\CacheIndexStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitFlushStatement(Context\FlushStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitKillStatement(Context\KillStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitLoadIndexIntoCache(Context\LoadIndexIntoCacheContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitResetStatement(Context\ResetStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitShutdownStatement(Context\ShutdownStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableIndexes(Context\TableIndexesContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSimpleFlushOption(Context\SimpleFlushOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitChannelFlushOption(Context\ChannelFlushOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableFlushOption(Context\TableFlushOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitFlushTableOption(Context\FlushTableOptionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitLoadedTableIndexes(Context\LoadedTableIndexesContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSimpleDescribeStatement(Context\SimpleDescribeStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitFullDescribeStatement(Context\FullDescribeStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitHelpStatement(Context\HelpStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUseStatement(Context\UseStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSignalStatement(Context\SignalStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitResignalStatement(Context\ResignalStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSignalConditionInformation(Context\SignalConditionInformationContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDiagnosticsStatement(Context\DiagnosticsStatementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDiagnosticsConditionInformationName(Context\DiagnosticsConditionInformationNameContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDescribeStatements(Context\DescribeStatementsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDescribeConnection(Context\DescribeConnectionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitFullId(Context\FullIdContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableName(Context\TableNameContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitFullColumnName(Context\FullColumnNameContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitIndexColumnName(Context\IndexColumnNameContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUserName(Context\UserNameContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitMysqlVariable(Context\MysqlVariableContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCharsetName(Context\CharsetNameContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCollationName(Context\CollationNameContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitEngineName(Context\EngineNameContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUuidSet(Context\UuidSetContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitXid(Context\XidContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitXuidStringId(Context\XuidStringIdContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAuthPlugin(Context\AuthPluginContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUid(Context\UidContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSimpleId(Context\SimpleIdContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDottedId(Context\DottedIdContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDecimalLiteral(Context\DecimalLiteralContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitFileSizeLiteral(Context\FileSizeLiteralContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitStringLiteral(Context\StringLiteralContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitBooleanLiteral(Context\BooleanLiteralContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitHexadecimalLiteral(Context\HexadecimalLiteralContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitNullNotnull(Context\NullNotnullContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitConstant(Context\ConstantContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitStringDataType(Context\StringDataTypeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitNationalStringDataType(Context\NationalStringDataTypeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitNationalVaryingStringDataType(Context\NationalVaryingStringDataTypeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDimensionDataType(Context\DimensionDataTypeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSimpleDataType(Context\SimpleDataTypeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCollectionDataType(Context\CollectionDataTypeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSpatialDataType(Context\SpatialDataTypeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitLongVarcharDataType(Context\LongVarcharDataTypeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitLongVarbinaryDataType(Context\LongVarbinaryDataTypeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCollectionOptions(Context\CollectionOptionsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitConvertedDataType(Context\ConvertedDataTypeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitLengthOneDimension(Context\LengthOneDimensionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitLengthTwoDimension(Context\LengthTwoDimensionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitLengthTwoOptionalDimension(Context\LengthTwoOptionalDimensionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUidList(Context\UidListContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTables(Context\TablesContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTableNames(Context\TableNamesContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitIndexColumnNames(Context\IndexColumnNamesContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitExpressions(Context\ExpressionsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitExpressionsWithDefaults(Context\ExpressionsWithDefaultsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitConstants(Context\ConstantsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSimpleStrings(Context\SimpleStringsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUserVariables(Context\UserVariablesContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDefaultValue(Context\DefaultValueContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCurrentTimestamp(Context\CurrentTimestampContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitExpressionOrDefault(Context\ExpressionOrDefaultContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitIfExists(Context\IfExistsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitIfNotExists(Context\IfNotExistsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSpecificFunctionCall(Context\SpecificFunctionCallContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAggregateFunctionCall(Context\AggregateFunctionCallContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitNonAggregateFunctionCall(Context\NonAggregateFunctionCallContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitScalarFunctionCall(Context\ScalarFunctionCallContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUdfFunctionCall(Context\UdfFunctionCallContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPasswordFunctionCall(Context\PasswordFunctionCallContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSimpleFunctionCall(Context\SimpleFunctionCallContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDataTypeFunctionCall(Context\DataTypeFunctionCallContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitValuesFunctionCall(Context\ValuesFunctionCallContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCaseExpressionFunctionCall(Context\CaseExpressionFunctionCallContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCaseFunctionCall(Context\CaseFunctionCallContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCharFunctionCall(Context\CharFunctionCallContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPositionFunctionCall(Context\PositionFunctionCallContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSubstrFunctionCall(Context\SubstrFunctionCallContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTrimFunctionCall(Context\TrimFunctionCallContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitWeightFunctionCall(Context\WeightFunctionCallContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitExtractFunctionCall(Context\ExtractFunctionCallContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitGetFormatFunctionCall(Context\GetFormatFunctionCallContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitJsonValueFunctionCall(Context\JsonValueFunctionCallContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCaseFuncAlternative(Context\CaseFuncAlternativeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitLevelWeightList(Context\LevelWeightListContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitLevelWeightRange(Context\LevelWeightRangeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitLevelInWeightListElement(Context\LevelInWeightListElementContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitAggregateWindowedFunction(Context\AggregateWindowedFunctionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitNonAggregateWindowedFunction(Context\NonAggregateWindowedFunctionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitOverClause(Context\OverClauseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitWindowSpec(Context\WindowSpecContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitWindowName(Context\WindowNameContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitFrameClause(Context\FrameClauseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitFrameUnits(Context\FrameUnitsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitFrameExtent(Context\FrameExtentContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitFrameBetween(Context\FrameBetweenContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitFrameRange(Context\FrameRangeContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPartitionClause(Context\PartitionClauseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitScalarFunctionName(Context\ScalarFunctionNameContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPasswordFunctionClause(Context\PasswordFunctionClauseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitFunctionArgs(Context\FunctionArgsContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitFunctionArg(Context\FunctionArgContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitIsExpression(Context\IsExpressionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitNotExpression(Context\NotExpressionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitLogicalExpression(Context\LogicalExpressionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPredicateExpression(Context\PredicateExpressionContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSoundsLikePredicate(Context\SoundsLikePredicateContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitExpressionAtomPredicate(Context\ExpressionAtomPredicateContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSubqueryComparisonPredicate(Context\SubqueryComparisonPredicateContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitJsonMemberOfPredicate(Context\JsonMemberOfPredicateContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitBinaryComparisonPredicate(Context\BinaryComparisonPredicateContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitInPredicate(Context\InPredicateContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitBetweenPredicate(Context\BetweenPredicateContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitIsNullPredicate(Context\IsNullPredicateContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitLikePredicate(Context\LikePredicateContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitRegexpPredicate(Context\RegexpPredicateContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUnaryExpressionAtom(Context\UnaryExpressionAtomContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCollateExpressionAtom(Context\CollateExpressionAtomContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitMysqlVariableExpressionAtom(Context\MysqlVariableExpressionAtomContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitNestedExpressionAtom(Context\NestedExpressionAtomContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitNestedRowExpressionAtom(Context\NestedRowExpressionAtomContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitMathExpressionAtom(Context\MathExpressionAtomContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitExistsExpressionAtom(Context\ExistsExpressionAtomContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitIntervalExpressionAtom(Context\IntervalExpressionAtomContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitJsonExpressionAtom(Context\JsonExpressionAtomContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitSubqueryExpressionAtom(Context\SubqueryExpressionAtomContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitConstantExpressionAtom(Context\ConstantExpressionAtomContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitFunctionCallExpressionAtom(Context\FunctionCallExpressionAtomContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitBinaryExpressionAtom(Context\BinaryExpressionAtomContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitFullColumnNameExpressionAtom(Context\FullColumnNameExpressionAtomContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitBitExpressionAtom(Context\BitExpressionAtomContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitUnaryOperator(Context\UnaryOperatorContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitComparisonOperator(Context\ComparisonOperatorContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitLogicalOperator(Context\LogicalOperatorContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitBitOperator(Context\BitOperatorContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitMathOperator(Context\MathOperatorContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitJsonOperator(Context\JsonOperatorContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitCharsetNameBase(Context\CharsetNameBaseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitTransactionLevelBase(Context\TransactionLevelBaseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitPrivilegesBase(Context\PrivilegesBaseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitIntervalTypeBase(Context\IntervalTypeBaseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitDataTypeBase(Context\DataTypeBaseContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitKeywordsCanBeId(Context\KeywordsCanBeIdContext $context)
    {
        return $this->visitChildren($context);
    }

    /**
     * {@inheritdoc}
     *
     * The default implementation returns the result of calling
     * {@see self::visitChildren()} on `context`.
     */
    public function visitFunctionNameBase(Context\FunctionNameBaseContext $context)
    {
        return $this->visitChildren($context);
    }
}
