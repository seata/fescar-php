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
namespace Hyperf\Seata\SqlParser\Antlr\MySql\Visit;

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see MySqlParser}.
 */
interface MySqlParserVisitor extends ParseTreeVisitor
{
    /**
     * Visit a parse tree produced by {@see MySqlParser::root()}.
     *
     * @param Context\RootContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitRoot(Context\RootContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::sqlStatements()}.
     *
     * @param Context\SqlStatementsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSqlStatements(Context\SqlStatementsContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::sqlStatement()}.
     *
     * @param Context\SqlStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSqlStatement(Context\SqlStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::emptyStatement()}.
     *
     * @param Context\EmptyStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitEmptyStatement(Context\EmptyStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::ddlStatement()}.
     *
     * @param Context\DdlStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDdlStatement(Context\DdlStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::dmlStatement()}.
     *
     * @param Context\DmlStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDmlStatement(Context\DmlStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::transactionStatement()}.
     *
     * @param Context\TransactionStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTransactionStatement(Context\TransactionStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::replicationStatement()}.
     *
     * @param Context\ReplicationStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitReplicationStatement(Context\ReplicationStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::preparedStatement()}.
     *
     * @param Context\PreparedStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPreparedStatement(Context\PreparedStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::compoundStatement()}.
     *
     * @param Context\CompoundStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCompoundStatement(Context\CompoundStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::administrationStatement()}.
     *
     * @param Context\AdministrationStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAdministrationStatement(Context\AdministrationStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::utilityStatement()}.
     *
     * @param Context\UtilityStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUtilityStatement(Context\UtilityStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::createDatabase()}.
     *
     * @param Context\CreateDatabaseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCreateDatabase(Context\CreateDatabaseContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::createEvent()}.
     *
     * @param Context\CreateEventContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCreateEvent(Context\CreateEventContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::createIndex()}.
     *
     * @param Context\CreateIndexContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCreateIndex(Context\CreateIndexContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::createLogfileGroup()}.
     *
     * @param Context\CreateLogfileGroupContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCreateLogfileGroup(Context\CreateLogfileGroupContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::createProcedure()}.
     *
     * @param Context\CreateProcedureContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCreateProcedure(Context\CreateProcedureContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::createFunction()}.
     *
     * @param Context\CreateFunctionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCreateFunction(Context\CreateFunctionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::createServer()}.
     *
     * @param Context\CreateServerContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCreateServer(Context\CreateServerContext $context);

    /**
     * Visit a parse tree produced by the `copyCreateTable` labeled alternative
     * in {@see MySqlParser::createTable()}.
     *
     * @param Context\CopyCreateTableContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCopyCreateTable(Context\CopyCreateTableContext $context);

    /**
     * Visit a parse tree produced by the `queryCreateTable` labeled alternative
     * in {@see MySqlParser::createTable()}.
     *
     * @param Context\QueryCreateTableContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitQueryCreateTable(Context\QueryCreateTableContext $context);

    /**
     * Visit a parse tree produced by the `columnCreateTable` labeled alternative
     * in {@see MySqlParser::createTable()}.
     *
     * @param Context\ColumnCreateTableContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitColumnCreateTable(Context\ColumnCreateTableContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::createTablespaceInnodb()}.
     *
     * @param Context\CreateTablespaceInnodbContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCreateTablespaceInnodb(Context\CreateTablespaceInnodbContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::createTablespaceNdb()}.
     *
     * @param Context\CreateTablespaceNdbContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCreateTablespaceNdb(Context\CreateTablespaceNdbContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::createTrigger()}.
     *
     * @param Context\CreateTriggerContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCreateTrigger(Context\CreateTriggerContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::createView()}.
     *
     * @param Context\CreateViewContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCreateView(Context\CreateViewContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::createDatabaseOption()}.
     *
     * @param Context\CreateDatabaseOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCreateDatabaseOption(Context\CreateDatabaseOptionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::ownerStatement()}.
     *
     * @param Context\OwnerStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitOwnerStatement(Context\OwnerStatementContext $context);

    /**
     * Visit a parse tree produced by the `preciseSchedule` labeled alternative
     * in {@see MySqlParser::scheduleExpression()}.
     *
     * @param Context\PreciseScheduleContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPreciseSchedule(Context\PreciseScheduleContext $context);

    /**
     * Visit a parse tree produced by the `intervalSchedule` labeled alternative
     * in {@see MySqlParser::scheduleExpression()}.
     *
     * @param Context\IntervalScheduleContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitIntervalSchedule(Context\IntervalScheduleContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::timestampValue()}.
     *
     * @param Context\TimestampValueContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTimestampValue(Context\TimestampValueContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::intervalExpr()}.
     *
     * @param Context\IntervalExprContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitIntervalExpr(Context\IntervalExprContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::intervalType()}.
     *
     * @param Context\IntervalTypeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitIntervalType(Context\IntervalTypeContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::enableType()}.
     *
     * @param Context\EnableTypeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitEnableType(Context\EnableTypeContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::indexType()}.
     *
     * @param Context\IndexTypeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitIndexType(Context\IndexTypeContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::indexOption()}.
     *
     * @param Context\IndexOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitIndexOption(Context\IndexOptionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::procedureParameter()}.
     *
     * @param Context\ProcedureParameterContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitProcedureParameter(Context\ProcedureParameterContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::functionParameter()}.
     *
     * @param Context\FunctionParameterContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitFunctionParameter(Context\FunctionParameterContext $context);

    /**
     * Visit a parse tree produced by the `routineComment` labeled alternative
     * in {@see MySqlParser::routineOption()}.
     *
     * @param Context\RoutineCommentContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitRoutineComment(Context\RoutineCommentContext $context);

    /**
     * Visit a parse tree produced by the `routineLanguage` labeled alternative
     * in {@see MySqlParser::routineOption()}.
     *
     * @param Context\RoutineLanguageContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitRoutineLanguage(Context\RoutineLanguageContext $context);

    /**
     * Visit a parse tree produced by the `routineBehavior` labeled alternative
     * in {@see MySqlParser::routineOption()}.
     *
     * @param Context\RoutineBehaviorContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitRoutineBehavior(Context\RoutineBehaviorContext $context);

    /**
     * Visit a parse tree produced by the `routineData` labeled alternative
     * in {@see MySqlParser::routineOption()}.
     *
     * @param Context\RoutineDataContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitRoutineData(Context\RoutineDataContext $context);

    /**
     * Visit a parse tree produced by the `routineSecurity` labeled alternative
     * in {@see MySqlParser::routineOption()}.
     *
     * @param Context\RoutineSecurityContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitRoutineSecurity(Context\RoutineSecurityContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::serverOption()}.
     *
     * @param Context\ServerOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitServerOption(Context\ServerOptionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::createDefinitions()}.
     *
     * @param Context\CreateDefinitionsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCreateDefinitions(Context\CreateDefinitionsContext $context);

    /**
     * Visit a parse tree produced by the `columnDeclaration` labeled alternative
     * in {@see MySqlParser::createDefinition()}.
     *
     * @param Context\ColumnDeclarationContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitColumnDeclaration(Context\ColumnDeclarationContext $context);

    /**
     * Visit a parse tree produced by the `constraintDeclaration` labeled alternative
     * in {@see MySqlParser::createDefinition()}.
     *
     * @param Context\ConstraintDeclarationContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitConstraintDeclaration(Context\ConstraintDeclarationContext $context);

    /**
     * Visit a parse tree produced by the `indexDeclaration` labeled alternative
     * in {@see MySqlParser::createDefinition()}.
     *
     * @param Context\IndexDeclarationContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitIndexDeclaration(Context\IndexDeclarationContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::columnDefinition()}.
     *
     * @param Context\ColumnDefinitionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitColumnDefinition(Context\ColumnDefinitionContext $context);

    /**
     * Visit a parse tree produced by the `nullColumnConstraint` labeled alternative
     * in {@see MySqlParser::columnConstraint()}.
     *
     * @param Context\NullColumnConstraintContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitNullColumnConstraint(Context\NullColumnConstraintContext $context);

    /**
     * Visit a parse tree produced by the `defaultColumnConstraint` labeled alternative
     * in {@see MySqlParser::columnConstraint()}.
     *
     * @param Context\DefaultColumnConstraintContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDefaultColumnConstraint(Context\DefaultColumnConstraintContext $context);

    /**
     * Visit a parse tree produced by the `visibilityColumnConstraint` labeled alternative
     * in {@see MySqlParser::columnConstraint()}.
     *
     * @param Context\VisibilityColumnConstraintContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitVisibilityColumnConstraint(Context\VisibilityColumnConstraintContext $context);

    /**
     * Visit a parse tree produced by the `autoIncrementColumnConstraint` labeled alternative
     * in {@see MySqlParser::columnConstraint()}.
     *
     * @param Context\AutoIncrementColumnConstraintContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAutoIncrementColumnConstraint(Context\AutoIncrementColumnConstraintContext $context);

    /**
     * Visit a parse tree produced by the `primaryKeyColumnConstraint` labeled alternative
     * in {@see MySqlParser::columnConstraint()}.
     *
     * @param Context\PrimaryKeyColumnConstraintContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPrimaryKeyColumnConstraint(Context\PrimaryKeyColumnConstraintContext $context);

    /**
     * Visit a parse tree produced by the `uniqueKeyColumnConstraint` labeled alternative
     * in {@see MySqlParser::columnConstraint()}.
     *
     * @param Context\UniqueKeyColumnConstraintContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUniqueKeyColumnConstraint(Context\UniqueKeyColumnConstraintContext $context);

    /**
     * Visit a parse tree produced by the `commentColumnConstraint` labeled alternative
     * in {@see MySqlParser::columnConstraint()}.
     *
     * @param Context\CommentColumnConstraintContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCommentColumnConstraint(Context\CommentColumnConstraintContext $context);

    /**
     * Visit a parse tree produced by the `formatColumnConstraint` labeled alternative
     * in {@see MySqlParser::columnConstraint()}.
     *
     * @param Context\FormatColumnConstraintContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitFormatColumnConstraint(Context\FormatColumnConstraintContext $context);

    /**
     * Visit a parse tree produced by the `storageColumnConstraint` labeled alternative
     * in {@see MySqlParser::columnConstraint()}.
     *
     * @param Context\StorageColumnConstraintContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitStorageColumnConstraint(Context\StorageColumnConstraintContext $context);

    /**
     * Visit a parse tree produced by the `referenceColumnConstraint` labeled alternative
     * in {@see MySqlParser::columnConstraint()}.
     *
     * @param Context\ReferenceColumnConstraintContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitReferenceColumnConstraint(Context\ReferenceColumnConstraintContext $context);

    /**
     * Visit a parse tree produced by the `collateColumnConstraint` labeled alternative
     * in {@see MySqlParser::columnConstraint()}.
     *
     * @param Context\CollateColumnConstraintContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCollateColumnConstraint(Context\CollateColumnConstraintContext $context);

    /**
     * Visit a parse tree produced by the `generatedColumnConstraint` labeled alternative
     * in {@see MySqlParser::columnConstraint()}.
     *
     * @param Context\GeneratedColumnConstraintContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitGeneratedColumnConstraint(Context\GeneratedColumnConstraintContext $context);

    /**
     * Visit a parse tree produced by the `serialDefaultColumnConstraint` labeled alternative
     * in {@see MySqlParser::columnConstraint()}.
     *
     * @param Context\SerialDefaultColumnConstraintContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSerialDefaultColumnConstraint(Context\SerialDefaultColumnConstraintContext $context);

    /**
     * Visit a parse tree produced by the `checkColumnConstraint` labeled alternative
     * in {@see MySqlParser::columnConstraint()}.
     *
     * @param Context\CheckColumnConstraintContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCheckColumnConstraint(Context\CheckColumnConstraintContext $context);

    /**
     * Visit a parse tree produced by the `primaryKeyTableConstraint` labeled alternative
     * in {@see MySqlParser::tableConstraint()}.
     *
     * @param Context\PrimaryKeyTableConstraintContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPrimaryKeyTableConstraint(Context\PrimaryKeyTableConstraintContext $context);

    /**
     * Visit a parse tree produced by the `uniqueKeyTableConstraint` labeled alternative
     * in {@see MySqlParser::tableConstraint()}.
     *
     * @param Context\UniqueKeyTableConstraintContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUniqueKeyTableConstraint(Context\UniqueKeyTableConstraintContext $context);

    /**
     * Visit a parse tree produced by the `foreignKeyTableConstraint` labeled alternative
     * in {@see MySqlParser::tableConstraint()}.
     *
     * @param Context\ForeignKeyTableConstraintContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitForeignKeyTableConstraint(Context\ForeignKeyTableConstraintContext $context);

    /**
     * Visit a parse tree produced by the `checkTableConstraint` labeled alternative
     * in {@see MySqlParser::tableConstraint()}.
     *
     * @param Context\CheckTableConstraintContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCheckTableConstraint(Context\CheckTableConstraintContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::referenceDefinition()}.
     *
     * @param Context\ReferenceDefinitionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitReferenceDefinition(Context\ReferenceDefinitionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::referenceAction()}.
     *
     * @param Context\ReferenceActionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitReferenceAction(Context\ReferenceActionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::referenceControlType()}.
     *
     * @param Context\ReferenceControlTypeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitReferenceControlType(Context\ReferenceControlTypeContext $context);

    /**
     * Visit a parse tree produced by the `simpleIndexDeclaration` labeled alternative
     * in {@see MySqlParser::indexColumnDefinition()}.
     *
     * @param Context\SimpleIndexDeclarationContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSimpleIndexDeclaration(Context\SimpleIndexDeclarationContext $context);

    /**
     * Visit a parse tree produced by the `specialIndexDeclaration` labeled alternative
     * in {@see MySqlParser::indexColumnDefinition()}.
     *
     * @param Context\SpecialIndexDeclarationContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSpecialIndexDeclaration(Context\SpecialIndexDeclarationContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionEngine` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionEngineContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionEngine(Context\TableOptionEngineContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionAutoIncrement` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionAutoIncrementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionAutoIncrement(Context\TableOptionAutoIncrementContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionAverage` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionAverageContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionAverage(Context\TableOptionAverageContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionCharset` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionCharsetContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionCharset(Context\TableOptionCharsetContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionChecksum` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionChecksumContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionChecksum(Context\TableOptionChecksumContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionCollate` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionCollateContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionCollate(Context\TableOptionCollateContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionComment` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionCommentContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionComment(Context\TableOptionCommentContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionCompression` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionCompressionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionCompression(Context\TableOptionCompressionContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionConnection` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionConnectionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionConnection(Context\TableOptionConnectionContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionDataDirectory` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionDataDirectoryContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionDataDirectory(Context\TableOptionDataDirectoryContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionDelay` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionDelayContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionDelay(Context\TableOptionDelayContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionEncryption` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionEncryptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionEncryption(Context\TableOptionEncryptionContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionIndexDirectory` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionIndexDirectoryContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionIndexDirectory(Context\TableOptionIndexDirectoryContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionInsertMethod` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionInsertMethodContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionInsertMethod(Context\TableOptionInsertMethodContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionKeyBlockSize` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionKeyBlockSizeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionKeyBlockSize(Context\TableOptionKeyBlockSizeContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionMaxRows` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionMaxRowsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionMaxRows(Context\TableOptionMaxRowsContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionMinRows` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionMinRowsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionMinRows(Context\TableOptionMinRowsContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionPackKeys` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionPackKeysContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionPackKeys(Context\TableOptionPackKeysContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionPassword` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionPasswordContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionPassword(Context\TableOptionPasswordContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionRowFormat` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionRowFormatContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionRowFormat(Context\TableOptionRowFormatContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionRecalculation` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionRecalculationContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionRecalculation(Context\TableOptionRecalculationContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionPersistent` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionPersistentContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionPersistent(Context\TableOptionPersistentContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionSamplePage` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionSamplePageContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionSamplePage(Context\TableOptionSamplePageContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionTablespace` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionTablespaceContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionTablespace(Context\TableOptionTablespaceContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionTableType` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionTableTypeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionTableType(Context\TableOptionTableTypeContext $context);

    /**
     * Visit a parse tree produced by the `tableOptionUnion` labeled alternative
     * in {@see MySqlParser::tableOption()}.
     *
     * @param Context\TableOptionUnionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableOptionUnion(Context\TableOptionUnionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::tableType()}.
     *
     * @param Context\TableTypeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableType(Context\TableTypeContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::tablespaceStorage()}.
     *
     * @param Context\TablespaceStorageContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTablespaceStorage(Context\TablespaceStorageContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::partitionDefinitions()}.
     *
     * @param Context\PartitionDefinitionsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPartitionDefinitions(Context\PartitionDefinitionsContext $context);

    /**
     * Visit a parse tree produced by the `partitionFunctionHash` labeled alternative
     * in {@see MySqlParser::partitionFunctionDefinition()}.
     *
     * @param Context\PartitionFunctionHashContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPartitionFunctionHash(Context\PartitionFunctionHashContext $context);

    /**
     * Visit a parse tree produced by the `partitionFunctionKey` labeled alternative
     * in {@see MySqlParser::partitionFunctionDefinition()}.
     *
     * @param Context\PartitionFunctionKeyContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPartitionFunctionKey(Context\PartitionFunctionKeyContext $context);

    /**
     * Visit a parse tree produced by the `partitionFunctionRange` labeled alternative
     * in {@see MySqlParser::partitionFunctionDefinition()}.
     *
     * @param Context\PartitionFunctionRangeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPartitionFunctionRange(Context\PartitionFunctionRangeContext $context);

    /**
     * Visit a parse tree produced by the `partitionFunctionList` labeled alternative
     * in {@see MySqlParser::partitionFunctionDefinition()}.
     *
     * @param Context\PartitionFunctionListContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPartitionFunctionList(Context\PartitionFunctionListContext $context);

    /**
     * Visit a parse tree produced by the `subPartitionFunctionHash` labeled alternative
     * in {@see MySqlParser::subpartitionFunctionDefinition()}.
     *
     * @param Context\SubPartitionFunctionHashContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSubPartitionFunctionHash(Context\SubPartitionFunctionHashContext $context);

    /**
     * Visit a parse tree produced by the `subPartitionFunctionKey` labeled alternative
     * in {@see MySqlParser::subpartitionFunctionDefinition()}.
     *
     * @param Context\SubPartitionFunctionKeyContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSubPartitionFunctionKey(Context\SubPartitionFunctionKeyContext $context);

    /**
     * Visit a parse tree produced by the `partitionComparison` labeled alternative
     * in {@see MySqlParser::partitionDefinition()}.
     *
     * @param Context\PartitionComparisonContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPartitionComparison(Context\PartitionComparisonContext $context);

    /**
     * Visit a parse tree produced by the `partitionListAtom` labeled alternative
     * in {@see MySqlParser::partitionDefinition()}.
     *
     * @param Context\PartitionListAtomContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPartitionListAtom(Context\PartitionListAtomContext $context);

    /**
     * Visit a parse tree produced by the `partitionListVector` labeled alternative
     * in {@see MySqlParser::partitionDefinition()}.
     *
     * @param Context\PartitionListVectorContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPartitionListVector(Context\PartitionListVectorContext $context);

    /**
     * Visit a parse tree produced by the `partitionSimple` labeled alternative
     * in {@see MySqlParser::partitionDefinition()}.
     *
     * @param Context\PartitionSimpleContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPartitionSimple(Context\PartitionSimpleContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::partitionDefinerAtom()}.
     *
     * @param Context\PartitionDefinerAtomContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPartitionDefinerAtom(Context\PartitionDefinerAtomContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::partitionDefinerVector()}.
     *
     * @param Context\PartitionDefinerVectorContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPartitionDefinerVector(Context\PartitionDefinerVectorContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::subpartitionDefinition()}.
     *
     * @param Context\SubpartitionDefinitionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSubpartitionDefinition(Context\SubpartitionDefinitionContext $context);

    /**
     * Visit a parse tree produced by the `partitionOptionEngine` labeled alternative
     * in {@see MySqlParser::partitionOption()}.
     *
     * @param Context\PartitionOptionEngineContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPartitionOptionEngine(Context\PartitionOptionEngineContext $context);

    /**
     * Visit a parse tree produced by the `partitionOptionComment` labeled alternative
     * in {@see MySqlParser::partitionOption()}.
     *
     * @param Context\PartitionOptionCommentContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPartitionOptionComment(Context\PartitionOptionCommentContext $context);

    /**
     * Visit a parse tree produced by the `partitionOptionDataDirectory` labeled alternative
     * in {@see MySqlParser::partitionOption()}.
     *
     * @param Context\PartitionOptionDataDirectoryContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPartitionOptionDataDirectory(Context\PartitionOptionDataDirectoryContext $context);

    /**
     * Visit a parse tree produced by the `partitionOptionIndexDirectory` labeled alternative
     * in {@see MySqlParser::partitionOption()}.
     *
     * @param Context\PartitionOptionIndexDirectoryContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPartitionOptionIndexDirectory(Context\PartitionOptionIndexDirectoryContext $context);

    /**
     * Visit a parse tree produced by the `partitionOptionMaxRows` labeled alternative
     * in {@see MySqlParser::partitionOption()}.
     *
     * @param Context\PartitionOptionMaxRowsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPartitionOptionMaxRows(Context\PartitionOptionMaxRowsContext $context);

    /**
     * Visit a parse tree produced by the `partitionOptionMinRows` labeled alternative
     * in {@see MySqlParser::partitionOption()}.
     *
     * @param Context\PartitionOptionMinRowsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPartitionOptionMinRows(Context\PartitionOptionMinRowsContext $context);

    /**
     * Visit a parse tree produced by the `partitionOptionTablespace` labeled alternative
     * in {@see MySqlParser::partitionOption()}.
     *
     * @param Context\PartitionOptionTablespaceContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPartitionOptionTablespace(Context\PartitionOptionTablespaceContext $context);

    /**
     * Visit a parse tree produced by the `partitionOptionNodeGroup` labeled alternative
     * in {@see MySqlParser::partitionOption()}.
     *
     * @param Context\PartitionOptionNodeGroupContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPartitionOptionNodeGroup(Context\PartitionOptionNodeGroupContext $context);

    /**
     * Visit a parse tree produced by the `alterSimpleDatabase` labeled alternative
     * in {@see MySqlParser::alterDatabase()}.
     *
     * @param Context\AlterSimpleDatabaseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterSimpleDatabase(Context\AlterSimpleDatabaseContext $context);

    /**
     * Visit a parse tree produced by the `alterUpgradeName` labeled alternative
     * in {@see MySqlParser::alterDatabase()}.
     *
     * @param Context\AlterUpgradeNameContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterUpgradeName(Context\AlterUpgradeNameContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::alterEvent()}.
     *
     * @param Context\AlterEventContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterEvent(Context\AlterEventContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::alterFunction()}.
     *
     * @param Context\AlterFunctionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterFunction(Context\AlterFunctionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::alterInstance()}.
     *
     * @param Context\AlterInstanceContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterInstance(Context\AlterInstanceContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::alterLogfileGroup()}.
     *
     * @param Context\AlterLogfileGroupContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterLogfileGroup(Context\AlterLogfileGroupContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::alterProcedure()}.
     *
     * @param Context\AlterProcedureContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterProcedure(Context\AlterProcedureContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::alterServer()}.
     *
     * @param Context\AlterServerContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterServer(Context\AlterServerContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::alterTable()}.
     *
     * @param Context\AlterTableContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterTable(Context\AlterTableContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::alterTablespace()}.
     *
     * @param Context\AlterTablespaceContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterTablespace(Context\AlterTablespaceContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::alterView()}.
     *
     * @param Context\AlterViewContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterView(Context\AlterViewContext $context);

    /**
     * Visit a parse tree produced by the `alterByTableOption` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByTableOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByTableOption(Context\AlterByTableOptionContext $context);

    /**
     * Visit a parse tree produced by the `alterByAddColumn` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByAddColumnContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByAddColumn(Context\AlterByAddColumnContext $context);

    /**
     * Visit a parse tree produced by the `alterByAddColumns` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByAddColumnsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByAddColumns(Context\AlterByAddColumnsContext $context);

    /**
     * Visit a parse tree produced by the `alterByAddIndex` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByAddIndexContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByAddIndex(Context\AlterByAddIndexContext $context);

    /**
     * Visit a parse tree produced by the `alterByAddPrimaryKey` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByAddPrimaryKeyContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByAddPrimaryKey(Context\AlterByAddPrimaryKeyContext $context);

    /**
     * Visit a parse tree produced by the `alterByAddUniqueKey` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByAddUniqueKeyContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByAddUniqueKey(Context\AlterByAddUniqueKeyContext $context);

    /**
     * Visit a parse tree produced by the `alterByAddSpecialIndex` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByAddSpecialIndexContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByAddSpecialIndex(Context\AlterByAddSpecialIndexContext $context);

    /**
     * Visit a parse tree produced by the `alterByAddForeignKey` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByAddForeignKeyContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByAddForeignKey(Context\AlterByAddForeignKeyContext $context);

    /**
     * Visit a parse tree produced by the `alterByAddCheckTableConstraint` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByAddCheckTableConstraintContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByAddCheckTableConstraint(Context\AlterByAddCheckTableConstraintContext $context);

    /**
     * Visit a parse tree produced by the `alterBySetAlgorithm` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterBySetAlgorithmContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterBySetAlgorithm(Context\AlterBySetAlgorithmContext $context);

    /**
     * Visit a parse tree produced by the `alterByChangeDefault` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByChangeDefaultContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByChangeDefault(Context\AlterByChangeDefaultContext $context);

    /**
     * Visit a parse tree produced by the `alterByChangeColumn` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByChangeColumnContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByChangeColumn(Context\AlterByChangeColumnContext $context);

    /**
     * Visit a parse tree produced by the `alterByRenameColumn` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByRenameColumnContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByRenameColumn(Context\AlterByRenameColumnContext $context);

    /**
     * Visit a parse tree produced by the `alterByLock` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByLockContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByLock(Context\AlterByLockContext $context);

    /**
     * Visit a parse tree produced by the `alterByModifyColumn` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByModifyColumnContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByModifyColumn(Context\AlterByModifyColumnContext $context);

    /**
     * Visit a parse tree produced by the `alterByDropColumn` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByDropColumnContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByDropColumn(Context\AlterByDropColumnContext $context);

    /**
     * Visit a parse tree produced by the `alterByDropConstraintCheck` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByDropConstraintCheckContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByDropConstraintCheck(Context\AlterByDropConstraintCheckContext $context);

    /**
     * Visit a parse tree produced by the `alterByDropPrimaryKey` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByDropPrimaryKeyContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByDropPrimaryKey(Context\AlterByDropPrimaryKeyContext $context);

    /**
     * Visit a parse tree produced by the `alterByRenameIndex` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByRenameIndexContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByRenameIndex(Context\AlterByRenameIndexContext $context);

    /**
     * Visit a parse tree produced by the `alterByAlterIndexVisibility` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByAlterIndexVisibilityContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByAlterIndexVisibility(Context\AlterByAlterIndexVisibilityContext $context);

    /**
     * Visit a parse tree produced by the `alterByDropIndex` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByDropIndexContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByDropIndex(Context\AlterByDropIndexContext $context);

    /**
     * Visit a parse tree produced by the `alterByDropForeignKey` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByDropForeignKeyContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByDropForeignKey(Context\AlterByDropForeignKeyContext $context);

    /**
     * Visit a parse tree produced by the `alterByDisableKeys` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByDisableKeysContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByDisableKeys(Context\AlterByDisableKeysContext $context);

    /**
     * Visit a parse tree produced by the `alterByEnableKeys` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByEnableKeysContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByEnableKeys(Context\AlterByEnableKeysContext $context);

    /**
     * Visit a parse tree produced by the `alterByRename` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByRenameContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByRename(Context\AlterByRenameContext $context);

    /**
     * Visit a parse tree produced by the `alterByOrder` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByOrderContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByOrder(Context\AlterByOrderContext $context);

    /**
     * Visit a parse tree produced by the `alterByConvertCharset` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByConvertCharsetContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByConvertCharset(Context\AlterByConvertCharsetContext $context);

    /**
     * Visit a parse tree produced by the `alterByDefaultCharset` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByDefaultCharsetContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByDefaultCharset(Context\AlterByDefaultCharsetContext $context);

    /**
     * Visit a parse tree produced by the `alterByDiscardTablespace` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByDiscardTablespaceContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByDiscardTablespace(Context\AlterByDiscardTablespaceContext $context);

    /**
     * Visit a parse tree produced by the `alterByImportTablespace` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByImportTablespaceContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByImportTablespace(Context\AlterByImportTablespaceContext $context);

    /**
     * Visit a parse tree produced by the `alterByForce` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByForceContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByForce(Context\AlterByForceContext $context);

    /**
     * Visit a parse tree produced by the `alterByValidate` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByValidateContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByValidate(Context\AlterByValidateContext $context);

    /**
     * Visit a parse tree produced by the `alterByAddPartition` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByAddPartitionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByAddPartition(Context\AlterByAddPartitionContext $context);

    /**
     * Visit a parse tree produced by the `alterByDropPartition` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByDropPartitionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByDropPartition(Context\AlterByDropPartitionContext $context);

    /**
     * Visit a parse tree produced by the `alterByDiscardPartition` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByDiscardPartitionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByDiscardPartition(Context\AlterByDiscardPartitionContext $context);

    /**
     * Visit a parse tree produced by the `alterByImportPartition` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByImportPartitionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByImportPartition(Context\AlterByImportPartitionContext $context);

    /**
     * Visit a parse tree produced by the `alterByTruncatePartition` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByTruncatePartitionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByTruncatePartition(Context\AlterByTruncatePartitionContext $context);

    /**
     * Visit a parse tree produced by the `alterByCoalescePartition` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByCoalescePartitionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByCoalescePartition(Context\AlterByCoalescePartitionContext $context);

    /**
     * Visit a parse tree produced by the `alterByReorganizePartition` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByReorganizePartitionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByReorganizePartition(Context\AlterByReorganizePartitionContext $context);

    /**
     * Visit a parse tree produced by the `alterByExchangePartition` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByExchangePartitionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByExchangePartition(Context\AlterByExchangePartitionContext $context);

    /**
     * Visit a parse tree produced by the `alterByAnalyzePartition` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByAnalyzePartitionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByAnalyzePartition(Context\AlterByAnalyzePartitionContext $context);

    /**
     * Visit a parse tree produced by the `alterByCheckPartition` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByCheckPartitionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByCheckPartition(Context\AlterByCheckPartitionContext $context);

    /**
     * Visit a parse tree produced by the `alterByOptimizePartition` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByOptimizePartitionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByOptimizePartition(Context\AlterByOptimizePartitionContext $context);

    /**
     * Visit a parse tree produced by the `alterByRebuildPartition` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByRebuildPartitionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByRebuildPartition(Context\AlterByRebuildPartitionContext $context);

    /**
     * Visit a parse tree produced by the `alterByRepairPartition` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByRepairPartitionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByRepairPartition(Context\AlterByRepairPartitionContext $context);

    /**
     * Visit a parse tree produced by the `alterByRemovePartitioning` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByRemovePartitioningContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByRemovePartitioning(Context\AlterByRemovePartitioningContext $context);

    /**
     * Visit a parse tree produced by the `alterByUpgradePartitioning` labeled alternative
     * in {@see MySqlParser::alterSpecification()}.
     *
     * @param Context\AlterByUpgradePartitioningContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterByUpgradePartitioning(Context\AlterByUpgradePartitioningContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::dropDatabase()}.
     *
     * @param Context\DropDatabaseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDropDatabase(Context\DropDatabaseContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::dropEvent()}.
     *
     * @param Context\DropEventContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDropEvent(Context\DropEventContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::dropIndex()}.
     *
     * @param Context\DropIndexContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDropIndex(Context\DropIndexContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::dropLogfileGroup()}.
     *
     * @param Context\DropLogfileGroupContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDropLogfileGroup(Context\DropLogfileGroupContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::dropProcedure()}.
     *
     * @param Context\DropProcedureContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDropProcedure(Context\DropProcedureContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::dropFunction()}.
     *
     * @param Context\DropFunctionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDropFunction(Context\DropFunctionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::dropServer()}.
     *
     * @param Context\DropServerContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDropServer(Context\DropServerContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::dropTable()}.
     *
     * @param Context\DropTableContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDropTable(Context\DropTableContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::dropTablespace()}.
     *
     * @param Context\DropTablespaceContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDropTablespace(Context\DropTablespaceContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::dropTrigger()}.
     *
     * @param Context\DropTriggerContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDropTrigger(Context\DropTriggerContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::dropView()}.
     *
     * @param Context\DropViewContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDropView(Context\DropViewContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::renameTable()}.
     *
     * @param Context\RenameTableContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitRenameTable(Context\RenameTableContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::renameTableClause()}.
     *
     * @param Context\RenameTableClauseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitRenameTableClause(Context\RenameTableClauseContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::truncateTable()}.
     *
     * @param Context\TruncateTableContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTruncateTable(Context\TruncateTableContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::callStatement()}.
     *
     * @param Context\CallStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCallStatement(Context\CallStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::deleteStatement()}.
     *
     * @param Context\DeleteStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDeleteStatement(Context\DeleteStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::doStatement()}.
     *
     * @param Context\DoStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDoStatement(Context\DoStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::handlerStatement()}.
     *
     * @param Context\HandlerStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitHandlerStatement(Context\HandlerStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::insertStatement()}.
     *
     * @param Context\InsertStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitInsertStatement(Context\InsertStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::loadDataStatement()}.
     *
     * @param Context\LoadDataStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitLoadDataStatement(Context\LoadDataStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::loadXmlStatement()}.
     *
     * @param Context\LoadXmlStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitLoadXmlStatement(Context\LoadXmlStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::replaceStatement()}.
     *
     * @param Context\ReplaceStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitReplaceStatement(Context\ReplaceStatementContext $context);

    /**
     * Visit a parse tree produced by the `simpleSelect` labeled alternative
     * in {@see MySqlParser::selectStatement()}.
     *
     * @param Context\SimpleSelectContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSimpleSelect(Context\SimpleSelectContext $context);

    /**
     * Visit a parse tree produced by the `parenthesisSelect` labeled alternative
     * in {@see MySqlParser::selectStatement()}.
     *
     * @param Context\ParenthesisSelectContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitParenthesisSelect(Context\ParenthesisSelectContext $context);

    /**
     * Visit a parse tree produced by the `unionSelect` labeled alternative
     * in {@see MySqlParser::selectStatement()}.
     *
     * @param Context\UnionSelectContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUnionSelect(Context\UnionSelectContext $context);

    /**
     * Visit a parse tree produced by the `unionParenthesisSelect` labeled alternative
     * in {@see MySqlParser::selectStatement()}.
     *
     * @param Context\UnionParenthesisSelectContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUnionParenthesisSelect(Context\UnionParenthesisSelectContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::updateStatement()}.
     *
     * @param Context\UpdateStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUpdateStatement(Context\UpdateStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::insertStatementValue()}.
     *
     * @param Context\InsertStatementValueContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitInsertStatementValue(Context\InsertStatementValueContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::updatedElement()}.
     *
     * @param Context\UpdatedElementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUpdatedElement(Context\UpdatedElementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::assignmentField()}.
     *
     * @param Context\AssignmentFieldContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAssignmentField(Context\AssignmentFieldContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::lockClause()}.
     *
     * @param Context\LockClauseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitLockClause(Context\LockClauseContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::singleDeleteStatement()}.
     *
     * @param Context\SingleDeleteStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSingleDeleteStatement(Context\SingleDeleteStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::multipleDeleteStatement()}.
     *
     * @param Context\MultipleDeleteStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitMultipleDeleteStatement(Context\MultipleDeleteStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::handlerOpenStatement()}.
     *
     * @param Context\HandlerOpenStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitHandlerOpenStatement(Context\HandlerOpenStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::handlerReadIndexStatement()}.
     *
     * @param Context\HandlerReadIndexStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitHandlerReadIndexStatement(Context\HandlerReadIndexStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::handlerReadStatement()}.
     *
     * @param Context\HandlerReadStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitHandlerReadStatement(Context\HandlerReadStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::handlerCloseStatement()}.
     *
     * @param Context\HandlerCloseStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitHandlerCloseStatement(Context\HandlerCloseStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::singleUpdateStatement()}.
     *
     * @param Context\SingleUpdateStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSingleUpdateStatement(Context\SingleUpdateStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::multipleUpdateStatement()}.
     *
     * @param Context\MultipleUpdateStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitMultipleUpdateStatement(Context\MultipleUpdateStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::orderByClause()}.
     *
     * @param Context\OrderByClauseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitOrderByClause(Context\OrderByClauseContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::orderByExpression()}.
     *
     * @param Context\OrderByExpressionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitOrderByExpression(Context\OrderByExpressionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::tableSources()}.
     *
     * @param Context\TableSourcesContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableSources(Context\TableSourcesContext $context);

    /**
     * Visit a parse tree produced by the `tableSourceBase` labeled alternative
     * in {@see MySqlParser::tableSource()}.
     *
     * @param Context\TableSourceBaseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableSourceBase(Context\TableSourceBaseContext $context);

    /**
     * Visit a parse tree produced by the `tableSourceNested` labeled alternative
     * in {@see MySqlParser::tableSource()}.
     *
     * @param Context\TableSourceNestedContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableSourceNested(Context\TableSourceNestedContext $context);

    /**
     * Visit a parse tree produced by the `atomTableItem` labeled alternative
     * in {@see MySqlParser::tableSourceItem()}.
     *
     * @param Context\AtomTableItemContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAtomTableItem(Context\AtomTableItemContext $context);

    /**
     * Visit a parse tree produced by the `subqueryTableItem` labeled alternative
     * in {@see MySqlParser::tableSourceItem()}.
     *
     * @param Context\SubqueryTableItemContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSubqueryTableItem(Context\SubqueryTableItemContext $context);

    /**
     * Visit a parse tree produced by the `tableSourcesItem` labeled alternative
     * in {@see MySqlParser::tableSourceItem()}.
     *
     * @param Context\TableSourcesItemContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableSourcesItem(Context\TableSourcesItemContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::indexHint()}.
     *
     * @param Context\IndexHintContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitIndexHint(Context\IndexHintContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::indexHintType()}.
     *
     * @param Context\IndexHintTypeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitIndexHintType(Context\IndexHintTypeContext $context);

    /**
     * Visit a parse tree produced by the `innerJoin` labeled alternative
     * in {@see MySqlParser::joinPart()}.
     *
     * @param Context\InnerJoinContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitInnerJoin(Context\InnerJoinContext $context);

    /**
     * Visit a parse tree produced by the `straightJoin` labeled alternative
     * in {@see MySqlParser::joinPart()}.
     *
     * @param Context\StraightJoinContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitStraightJoin(Context\StraightJoinContext $context);

    /**
     * Visit a parse tree produced by the `outerJoin` labeled alternative
     * in {@see MySqlParser::joinPart()}.
     *
     * @param Context\OuterJoinContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitOuterJoin(Context\OuterJoinContext $context);

    /**
     * Visit a parse tree produced by the `naturalJoin` labeled alternative
     * in {@see MySqlParser::joinPart()}.
     *
     * @param Context\NaturalJoinContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitNaturalJoin(Context\NaturalJoinContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::queryExpression()}.
     *
     * @param Context\QueryExpressionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitQueryExpression(Context\QueryExpressionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::queryExpressionNointo()}.
     *
     * @param Context\QueryExpressionNointoContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitQueryExpressionNointo(Context\QueryExpressionNointoContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::querySpecification()}.
     *
     * @param Context\QuerySpecificationContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitQuerySpecification(Context\QuerySpecificationContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::querySpecificationNointo()}.
     *
     * @param Context\QuerySpecificationNointoContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitQuerySpecificationNointo(Context\QuerySpecificationNointoContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::unionParenthesis()}.
     *
     * @param Context\UnionParenthesisContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUnionParenthesis(Context\UnionParenthesisContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::unionStatement()}.
     *
     * @param Context\UnionStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUnionStatement(Context\UnionStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::selectSpec()}.
     *
     * @param Context\SelectSpecContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSelectSpec(Context\SelectSpecContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::selectElements()}.
     *
     * @param Context\SelectElementsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSelectElements(Context\SelectElementsContext $context);

    /**
     * Visit a parse tree produced by the `selectStarElement` labeled alternative
     * in {@see MySqlParser::selectElement()}.
     *
     * @param Context\SelectStarElementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSelectStarElement(Context\SelectStarElementContext $context);

    /**
     * Visit a parse tree produced by the `selectColumnElement` labeled alternative
     * in {@see MySqlParser::selectElement()}.
     *
     * @param Context\SelectColumnElementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSelectColumnElement(Context\SelectColumnElementContext $context);

    /**
     * Visit a parse tree produced by the `selectFunctionElement` labeled alternative
     * in {@see MySqlParser::selectElement()}.
     *
     * @param Context\SelectFunctionElementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSelectFunctionElement(Context\SelectFunctionElementContext $context);

    /**
     * Visit a parse tree produced by the `selectExpressionElement` labeled alternative
     * in {@see MySqlParser::selectElement()}.
     *
     * @param Context\SelectExpressionElementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSelectExpressionElement(Context\SelectExpressionElementContext $context);

    /**
     * Visit a parse tree produced by the `selectIntoVariables` labeled alternative
     * in {@see MySqlParser::selectIntoExpression()}.
     *
     * @param Context\SelectIntoVariablesContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSelectIntoVariables(Context\SelectIntoVariablesContext $context);

    /**
     * Visit a parse tree produced by the `selectIntoDumpFile` labeled alternative
     * in {@see MySqlParser::selectIntoExpression()}.
     *
     * @param Context\SelectIntoDumpFileContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSelectIntoDumpFile(Context\SelectIntoDumpFileContext $context);

    /**
     * Visit a parse tree produced by the `selectIntoTextFile` labeled alternative
     * in {@see MySqlParser::selectIntoExpression()}.
     *
     * @param Context\SelectIntoTextFileContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSelectIntoTextFile(Context\SelectIntoTextFileContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::selectFieldsInto()}.
     *
     * @param Context\SelectFieldsIntoContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSelectFieldsInto(Context\SelectFieldsIntoContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::selectLinesInto()}.
     *
     * @param Context\SelectLinesIntoContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSelectLinesInto(Context\SelectLinesIntoContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::fromClause()}.
     *
     * @param Context\FromClauseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitFromClause(Context\FromClauseContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::groupByClause()}.
     *
     * @param Context\GroupByClauseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitGroupByClause(Context\GroupByClauseContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::havingClause()}.
     *
     * @param Context\HavingClauseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitHavingClause(Context\HavingClauseContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::windowClause()}.
     *
     * @param Context\WindowClauseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitWindowClause(Context\WindowClauseContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::groupByItem()}.
     *
     * @param Context\GroupByItemContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitGroupByItem(Context\GroupByItemContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::limitClause()}.
     *
     * @param Context\LimitClauseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitLimitClause(Context\LimitClauseContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::limitClauseAtom()}.
     *
     * @param Context\LimitClauseAtomContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitLimitClauseAtom(Context\LimitClauseAtomContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::startTransaction()}.
     *
     * @param Context\StartTransactionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitStartTransaction(Context\StartTransactionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::beginWork()}.
     *
     * @param Context\BeginWorkContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitBeginWork(Context\BeginWorkContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::commitWork()}.
     *
     * @param Context\CommitWorkContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCommitWork(Context\CommitWorkContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::rollbackWork()}.
     *
     * @param Context\RollbackWorkContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitRollbackWork(Context\RollbackWorkContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::savepointStatement()}.
     *
     * @param Context\SavepointStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSavepointStatement(Context\SavepointStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::rollbackStatement()}.
     *
     * @param Context\RollbackStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitRollbackStatement(Context\RollbackStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::releaseStatement()}.
     *
     * @param Context\ReleaseStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitReleaseStatement(Context\ReleaseStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::lockTables()}.
     *
     * @param Context\LockTablesContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitLockTables(Context\LockTablesContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::unlockTables()}.
     *
     * @param Context\UnlockTablesContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUnlockTables(Context\UnlockTablesContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::setAutocommitStatement()}.
     *
     * @param Context\SetAutocommitStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSetAutocommitStatement(Context\SetAutocommitStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::setTransactionStatement()}.
     *
     * @param Context\SetTransactionStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSetTransactionStatement(Context\SetTransactionStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::transactionMode()}.
     *
     * @param Context\TransactionModeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTransactionMode(Context\TransactionModeContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::lockTableElement()}.
     *
     * @param Context\LockTableElementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitLockTableElement(Context\LockTableElementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::lockAction()}.
     *
     * @param Context\LockActionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitLockAction(Context\LockActionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::transactionOption()}.
     *
     * @param Context\TransactionOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTransactionOption(Context\TransactionOptionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::transactionLevel()}.
     *
     * @param Context\TransactionLevelContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTransactionLevel(Context\TransactionLevelContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::changeMaster()}.
     *
     * @param Context\ChangeMasterContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitChangeMaster(Context\ChangeMasterContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::changeReplicationFilter()}.
     *
     * @param Context\ChangeReplicationFilterContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitChangeReplicationFilter(Context\ChangeReplicationFilterContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::purgeBinaryLogs()}.
     *
     * @param Context\PurgeBinaryLogsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPurgeBinaryLogs(Context\PurgeBinaryLogsContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::resetMaster()}.
     *
     * @param Context\ResetMasterContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitResetMaster(Context\ResetMasterContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::resetSlave()}.
     *
     * @param Context\ResetSlaveContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitResetSlave(Context\ResetSlaveContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::startSlave()}.
     *
     * @param Context\StartSlaveContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitStartSlave(Context\StartSlaveContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::stopSlave()}.
     *
     * @param Context\StopSlaveContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitStopSlave(Context\StopSlaveContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::startGroupReplication()}.
     *
     * @param Context\StartGroupReplicationContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitStartGroupReplication(Context\StartGroupReplicationContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::stopGroupReplication()}.
     *
     * @param Context\StopGroupReplicationContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitStopGroupReplication(Context\StopGroupReplicationContext $context);

    /**
     * Visit a parse tree produced by the `masterStringOption` labeled alternative
     * in {@see MySqlParser::masterOption()}.
     *
     * @param Context\MasterStringOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitMasterStringOption(Context\MasterStringOptionContext $context);

    /**
     * Visit a parse tree produced by the `masterDecimalOption` labeled alternative
     * in {@see MySqlParser::masterOption()}.
     *
     * @param Context\MasterDecimalOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitMasterDecimalOption(Context\MasterDecimalOptionContext $context);

    /**
     * Visit a parse tree produced by the `masterBoolOption` labeled alternative
     * in {@see MySqlParser::masterOption()}.
     *
     * @param Context\MasterBoolOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitMasterBoolOption(Context\MasterBoolOptionContext $context);

    /**
     * Visit a parse tree produced by the `masterRealOption` labeled alternative
     * in {@see MySqlParser::masterOption()}.
     *
     * @param Context\MasterRealOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitMasterRealOption(Context\MasterRealOptionContext $context);

    /**
     * Visit a parse tree produced by the `masterUidListOption` labeled alternative
     * in {@see MySqlParser::masterOption()}.
     *
     * @param Context\MasterUidListOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitMasterUidListOption(Context\MasterUidListOptionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::stringMasterOption()}.
     *
     * @param Context\StringMasterOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitStringMasterOption(Context\StringMasterOptionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::decimalMasterOption()}.
     *
     * @param Context\DecimalMasterOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDecimalMasterOption(Context\DecimalMasterOptionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::boolMasterOption()}.
     *
     * @param Context\BoolMasterOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitBoolMasterOption(Context\BoolMasterOptionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::channelOption()}.
     *
     * @param Context\ChannelOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitChannelOption(Context\ChannelOptionContext $context);

    /**
     * Visit a parse tree produced by the `doDbReplication` labeled alternative
     * in {@see MySqlParser::replicationFilter()}.
     *
     * @param Context\DoDbReplicationContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDoDbReplication(Context\DoDbReplicationContext $context);

    /**
     * Visit a parse tree produced by the `ignoreDbReplication` labeled alternative
     * in {@see MySqlParser::replicationFilter()}.
     *
     * @param Context\IgnoreDbReplicationContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitIgnoreDbReplication(Context\IgnoreDbReplicationContext $context);

    /**
     * Visit a parse tree produced by the `doTableReplication` labeled alternative
     * in {@see MySqlParser::replicationFilter()}.
     *
     * @param Context\DoTableReplicationContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDoTableReplication(Context\DoTableReplicationContext $context);

    /**
     * Visit a parse tree produced by the `ignoreTableReplication` labeled alternative
     * in {@see MySqlParser::replicationFilter()}.
     *
     * @param Context\IgnoreTableReplicationContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitIgnoreTableReplication(Context\IgnoreTableReplicationContext $context);

    /**
     * Visit a parse tree produced by the `wildDoTableReplication` labeled alternative
     * in {@see MySqlParser::replicationFilter()}.
     *
     * @param Context\WildDoTableReplicationContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitWildDoTableReplication(Context\WildDoTableReplicationContext $context);

    /**
     * Visit a parse tree produced by the `wildIgnoreTableReplication` labeled alternative
     * in {@see MySqlParser::replicationFilter()}.
     *
     * @param Context\WildIgnoreTableReplicationContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitWildIgnoreTableReplication(Context\WildIgnoreTableReplicationContext $context);

    /**
     * Visit a parse tree produced by the `rewriteDbReplication` labeled alternative
     * in {@see MySqlParser::replicationFilter()}.
     *
     * @param Context\RewriteDbReplicationContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitRewriteDbReplication(Context\RewriteDbReplicationContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::tablePair()}.
     *
     * @param Context\TablePairContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTablePair(Context\TablePairContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::threadType()}.
     *
     * @param Context\ThreadTypeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitThreadType(Context\ThreadTypeContext $context);

    /**
     * Visit a parse tree produced by the `gtidsUntilOption` labeled alternative
     * in {@see MySqlParser::untilOption()}.
     *
     * @param Context\GtidsUntilOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitGtidsUntilOption(Context\GtidsUntilOptionContext $context);

    /**
     * Visit a parse tree produced by the `masterLogUntilOption` labeled alternative
     * in {@see MySqlParser::untilOption()}.
     *
     * @param Context\MasterLogUntilOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitMasterLogUntilOption(Context\MasterLogUntilOptionContext $context);

    /**
     * Visit a parse tree produced by the `relayLogUntilOption` labeled alternative
     * in {@see MySqlParser::untilOption()}.
     *
     * @param Context\RelayLogUntilOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitRelayLogUntilOption(Context\RelayLogUntilOptionContext $context);

    /**
     * Visit a parse tree produced by the `sqlGapsUntilOption` labeled alternative
     * in {@see MySqlParser::untilOption()}.
     *
     * @param Context\SqlGapsUntilOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSqlGapsUntilOption(Context\SqlGapsUntilOptionContext $context);

    /**
     * Visit a parse tree produced by the `userConnectionOption` labeled alternative
     * in {@see MySqlParser::connectionOption()}.
     *
     * @param Context\UserConnectionOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUserConnectionOption(Context\UserConnectionOptionContext $context);

    /**
     * Visit a parse tree produced by the `passwordConnectionOption` labeled alternative
     * in {@see MySqlParser::connectionOption()}.
     *
     * @param Context\PasswordConnectionOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPasswordConnectionOption(Context\PasswordConnectionOptionContext $context);

    /**
     * Visit a parse tree produced by the `defaultAuthConnectionOption` labeled alternative
     * in {@see MySqlParser::connectionOption()}.
     *
     * @param Context\DefaultAuthConnectionOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDefaultAuthConnectionOption(Context\DefaultAuthConnectionOptionContext $context);

    /**
     * Visit a parse tree produced by the `pluginDirConnectionOption` labeled alternative
     * in {@see MySqlParser::connectionOption()}.
     *
     * @param Context\PluginDirConnectionOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPluginDirConnectionOption(Context\PluginDirConnectionOptionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::gtuidSet()}.
     *
     * @param Context\GtuidSetContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitGtuidSet(Context\GtuidSetContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::xaStartTransaction()}.
     *
     * @param Context\XaStartTransactionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitXaStartTransaction(Context\XaStartTransactionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::xaEndTransaction()}.
     *
     * @param Context\XaEndTransactionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitXaEndTransaction(Context\XaEndTransactionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::xaPrepareStatement()}.
     *
     * @param Context\XaPrepareStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitXaPrepareStatement(Context\XaPrepareStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::xaCommitWork()}.
     *
     * @param Context\XaCommitWorkContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitXaCommitWork(Context\XaCommitWorkContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::xaRollbackWork()}.
     *
     * @param Context\XaRollbackWorkContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitXaRollbackWork(Context\XaRollbackWorkContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::xaRecoverWork()}.
     *
     * @param Context\XaRecoverWorkContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitXaRecoverWork(Context\XaRecoverWorkContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::prepareStatement()}.
     *
     * @param Context\PrepareStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPrepareStatement(Context\PrepareStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::executeStatement()}.
     *
     * @param Context\ExecuteStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitExecuteStatement(Context\ExecuteStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::deallocatePrepare()}.
     *
     * @param Context\DeallocatePrepareContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDeallocatePrepare(Context\DeallocatePrepareContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::routineBody()}.
     *
     * @param Context\RoutineBodyContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitRoutineBody(Context\RoutineBodyContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::blockStatement()}.
     *
     * @param Context\BlockStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitBlockStatement(Context\BlockStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::caseStatement()}.
     *
     * @param Context\CaseStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCaseStatement(Context\CaseStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::ifStatement()}.
     *
     * @param Context\IfStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitIfStatement(Context\IfStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::iterateStatement()}.
     *
     * @param Context\IterateStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitIterateStatement(Context\IterateStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::leaveStatement()}.
     *
     * @param Context\LeaveStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitLeaveStatement(Context\LeaveStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::loopStatement()}.
     *
     * @param Context\LoopStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitLoopStatement(Context\LoopStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::repeatStatement()}.
     *
     * @param Context\RepeatStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitRepeatStatement(Context\RepeatStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::returnStatement()}.
     *
     * @param Context\ReturnStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitReturnStatement(Context\ReturnStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::whileStatement()}.
     *
     * @param Context\WhileStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitWhileStatement(Context\WhileStatementContext $context);

    /**
     * Visit a parse tree produced by the `CloseCursor` labeled alternative
     * in {@see MySqlParser::cursorStatement()}.
     *
     * @param Context\CloseCursorContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCloseCursor(Context\CloseCursorContext $context);

    /**
     * Visit a parse tree produced by the `FetchCursor` labeled alternative
     * in {@see MySqlParser::cursorStatement()}.
     *
     * @param Context\FetchCursorContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitFetchCursor(Context\FetchCursorContext $context);

    /**
     * Visit a parse tree produced by the `OpenCursor` labeled alternative
     * in {@see MySqlParser::cursorStatement()}.
     *
     * @param Context\OpenCursorContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitOpenCursor(Context\OpenCursorContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::declareVariable()}.
     *
     * @param Context\DeclareVariableContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDeclareVariable(Context\DeclareVariableContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::declareCondition()}.
     *
     * @param Context\DeclareConditionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDeclareCondition(Context\DeclareConditionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::declareCursor()}.
     *
     * @param Context\DeclareCursorContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDeclareCursor(Context\DeclareCursorContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::declareHandler()}.
     *
     * @param Context\DeclareHandlerContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDeclareHandler(Context\DeclareHandlerContext $context);

    /**
     * Visit a parse tree produced by the `handlerConditionCode` labeled alternative
     * in {@see MySqlParser::handlerConditionValue()}.
     *
     * @param Context\HandlerConditionCodeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitHandlerConditionCode(Context\HandlerConditionCodeContext $context);

    /**
     * Visit a parse tree produced by the `handlerConditionState` labeled alternative
     * in {@see MySqlParser::handlerConditionValue()}.
     *
     * @param Context\HandlerConditionStateContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitHandlerConditionState(Context\HandlerConditionStateContext $context);

    /**
     * Visit a parse tree produced by the `handlerConditionName` labeled alternative
     * in {@see MySqlParser::handlerConditionValue()}.
     *
     * @param Context\HandlerConditionNameContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitHandlerConditionName(Context\HandlerConditionNameContext $context);

    /**
     * Visit a parse tree produced by the `handlerConditionWarning` labeled alternative
     * in {@see MySqlParser::handlerConditionValue()}.
     *
     * @param Context\HandlerConditionWarningContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitHandlerConditionWarning(Context\HandlerConditionWarningContext $context);

    /**
     * Visit a parse tree produced by the `handlerConditionNotfound` labeled alternative
     * in {@see MySqlParser::handlerConditionValue()}.
     *
     * @param Context\HandlerConditionNotfoundContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitHandlerConditionNotfound(Context\HandlerConditionNotfoundContext $context);

    /**
     * Visit a parse tree produced by the `handlerConditionException` labeled alternative
     * in {@see MySqlParser::handlerConditionValue()}.
     *
     * @param Context\HandlerConditionExceptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitHandlerConditionException(Context\HandlerConditionExceptionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::procedureSqlStatement()}.
     *
     * @param Context\ProcedureSqlStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitProcedureSqlStatement(Context\ProcedureSqlStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::caseAlternative()}.
     *
     * @param Context\CaseAlternativeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCaseAlternative(Context\CaseAlternativeContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::elifAlternative()}.
     *
     * @param Context\ElifAlternativeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitElifAlternative(Context\ElifAlternativeContext $context);

    /**
     * Visit a parse tree produced by the `alterUserMysqlV56` labeled alternative
     * in {@see MySqlParser::alterUser()}.
     *
     * @param Context\AlterUserMysqlV56Context $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterUserMysqlV56(Context\AlterUserMysqlV56Context $context);

    /**
     * Visit a parse tree produced by the `alterUserMysqlV57` labeled alternative
     * in {@see MySqlParser::alterUser()}.
     *
     * @param Context\AlterUserMysqlV57Context $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAlterUserMysqlV57(Context\AlterUserMysqlV57Context $context);

    /**
     * Visit a parse tree produced by the `createUserMysqlV56` labeled alternative
     * in {@see MySqlParser::createUser()}.
     *
     * @param Context\CreateUserMysqlV56Context $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCreateUserMysqlV56(Context\CreateUserMysqlV56Context $context);

    /**
     * Visit a parse tree produced by the `createUserMysqlV57` labeled alternative
     * in {@see MySqlParser::createUser()}.
     *
     * @param Context\CreateUserMysqlV57Context $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCreateUserMysqlV57(Context\CreateUserMysqlV57Context $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::dropUser()}.
     *
     * @param Context\DropUserContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDropUser(Context\DropUserContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::grantStatement()}.
     *
     * @param Context\GrantStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitGrantStatement(Context\GrantStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::roleOption()}.
     *
     * @param Context\RoleOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitRoleOption(Context\RoleOptionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::grantProxy()}.
     *
     * @param Context\GrantProxyContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitGrantProxy(Context\GrantProxyContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::renameUser()}.
     *
     * @param Context\RenameUserContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitRenameUser(Context\RenameUserContext $context);

    /**
     * Visit a parse tree produced by the `detailRevoke` labeled alternative
     * in {@see MySqlParser::revokeStatement()}.
     *
     * @param Context\DetailRevokeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDetailRevoke(Context\DetailRevokeContext $context);

    /**
     * Visit a parse tree produced by the `shortRevoke` labeled alternative
     * in {@see MySqlParser::revokeStatement()}.
     *
     * @param Context\ShortRevokeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShortRevoke(Context\ShortRevokeContext $context);

    /**
     * Visit a parse tree produced by the `roleRevoke` labeled alternative
     * in {@see MySqlParser::revokeStatement()}.
     *
     * @param Context\RoleRevokeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitRoleRevoke(Context\RoleRevokeContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::revokeProxy()}.
     *
     * @param Context\RevokeProxyContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitRevokeProxy(Context\RevokeProxyContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::setPasswordStatement()}.
     *
     * @param Context\SetPasswordStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSetPasswordStatement(Context\SetPasswordStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::userSpecification()}.
     *
     * @param Context\UserSpecificationContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUserSpecification(Context\UserSpecificationContext $context);

    /**
     * Visit a parse tree produced by the `passwordAuthOption` labeled alternative
     * in {@see MySqlParser::userAuthOption()}.
     *
     * @param Context\PasswordAuthOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPasswordAuthOption(Context\PasswordAuthOptionContext $context);

    /**
     * Visit a parse tree produced by the `stringAuthOption` labeled alternative
     * in {@see MySqlParser::userAuthOption()}.
     *
     * @param Context\StringAuthOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitStringAuthOption(Context\StringAuthOptionContext $context);

    /**
     * Visit a parse tree produced by the `hashAuthOption` labeled alternative
     * in {@see MySqlParser::userAuthOption()}.
     *
     * @param Context\HashAuthOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitHashAuthOption(Context\HashAuthOptionContext $context);

    /**
     * Visit a parse tree produced by the `simpleAuthOption` labeled alternative
     * in {@see MySqlParser::userAuthOption()}.
     *
     * @param Context\SimpleAuthOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSimpleAuthOption(Context\SimpleAuthOptionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::tlsOption()}.
     *
     * @param Context\TlsOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTlsOption(Context\TlsOptionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::userResourceOption()}.
     *
     * @param Context\UserResourceOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUserResourceOption(Context\UserResourceOptionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::userPasswordOption()}.
     *
     * @param Context\UserPasswordOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUserPasswordOption(Context\UserPasswordOptionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::userLockOption()}.
     *
     * @param Context\UserLockOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUserLockOption(Context\UserLockOptionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::privelegeClause()}.
     *
     * @param Context\PrivelegeClauseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPrivelegeClause(Context\PrivelegeClauseContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::privilege()}.
     *
     * @param Context\PrivilegeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPrivilege(Context\PrivilegeContext $context);

    /**
     * Visit a parse tree produced by the `currentSchemaPriviLevel` labeled alternative
     * in {@see MySqlParser::privilegeLevel()}.
     *
     * @param Context\CurrentSchemaPriviLevelContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCurrentSchemaPriviLevel(Context\CurrentSchemaPriviLevelContext $context);

    /**
     * Visit a parse tree produced by the `globalPrivLevel` labeled alternative
     * in {@see MySqlParser::privilegeLevel()}.
     *
     * @param Context\GlobalPrivLevelContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitGlobalPrivLevel(Context\GlobalPrivLevelContext $context);

    /**
     * Visit a parse tree produced by the `definiteSchemaPrivLevel` labeled alternative
     * in {@see MySqlParser::privilegeLevel()}.
     *
     * @param Context\DefiniteSchemaPrivLevelContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDefiniteSchemaPrivLevel(Context\DefiniteSchemaPrivLevelContext $context);

    /**
     * Visit a parse tree produced by the `definiteFullTablePrivLevel` labeled alternative
     * in {@see MySqlParser::privilegeLevel()}.
     *
     * @param Context\DefiniteFullTablePrivLevelContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDefiniteFullTablePrivLevel(Context\DefiniteFullTablePrivLevelContext $context);

    /**
     * Visit a parse tree produced by the `definiteFullTablePrivLevel2` labeled alternative
     * in {@see MySqlParser::privilegeLevel()}.
     *
     * @param Context\DefiniteFullTablePrivLevel2Context $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDefiniteFullTablePrivLevel2(Context\DefiniteFullTablePrivLevel2Context $context);

    /**
     * Visit a parse tree produced by the `definiteTablePrivLevel` labeled alternative
     * in {@see MySqlParser::privilegeLevel()}.
     *
     * @param Context\DefiniteTablePrivLevelContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDefiniteTablePrivLevel(Context\DefiniteTablePrivLevelContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::renameUserClause()}.
     *
     * @param Context\RenameUserClauseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitRenameUserClause(Context\RenameUserClauseContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::analyzeTable()}.
     *
     * @param Context\AnalyzeTableContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAnalyzeTable(Context\AnalyzeTableContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::checkTable()}.
     *
     * @param Context\CheckTableContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCheckTable(Context\CheckTableContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::checksumTable()}.
     *
     * @param Context\ChecksumTableContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitChecksumTable(Context\ChecksumTableContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::optimizeTable()}.
     *
     * @param Context\OptimizeTableContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitOptimizeTable(Context\OptimizeTableContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::repairTable()}.
     *
     * @param Context\RepairTableContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitRepairTable(Context\RepairTableContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::checkTableOption()}.
     *
     * @param Context\CheckTableOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCheckTableOption(Context\CheckTableOptionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::createUdfunction()}.
     *
     * @param Context\CreateUdfunctionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCreateUdfunction(Context\CreateUdfunctionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::installPlugin()}.
     *
     * @param Context\InstallPluginContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitInstallPlugin(Context\InstallPluginContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::uninstallPlugin()}.
     *
     * @param Context\UninstallPluginContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUninstallPlugin(Context\UninstallPluginContext $context);

    /**
     * Visit a parse tree produced by the `setVariable` labeled alternative
     * in {@see MySqlParser::setStatement()}.
     *
     * @param Context\SetVariableContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSetVariable(Context\SetVariableContext $context);

    /**
     * Visit a parse tree produced by the `setCharset` labeled alternative
     * in {@see MySqlParser::setStatement()}.
     *
     * @param Context\SetCharsetContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSetCharset(Context\SetCharsetContext $context);

    /**
     * Visit a parse tree produced by the `setNames` labeled alternative
     * in {@see MySqlParser::setStatement()}.
     *
     * @param Context\SetNamesContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSetNames(Context\SetNamesContext $context);

    /**
     * Visit a parse tree produced by the `setPassword` labeled alternative
     * in {@see MySqlParser::setStatement()}.
     *
     * @param Context\SetPasswordContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSetPassword(Context\SetPasswordContext $context);

    /**
     * Visit a parse tree produced by the `setTransaction` labeled alternative
     * in {@see MySqlParser::setStatement()}.
     *
     * @param Context\SetTransactionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSetTransaction(Context\SetTransactionContext $context);

    /**
     * Visit a parse tree produced by the `setAutocommit` labeled alternative
     * in {@see MySqlParser::setStatement()}.
     *
     * @param Context\SetAutocommitContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSetAutocommit(Context\SetAutocommitContext $context);

    /**
     * Visit a parse tree produced by the `setNewValueInsideTrigger` labeled alternative
     * in {@see MySqlParser::setStatement()}.
     *
     * @param Context\SetNewValueInsideTriggerContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSetNewValueInsideTrigger(Context\SetNewValueInsideTriggerContext $context);

    /**
     * Visit a parse tree produced by the `showMasterLogs` labeled alternative
     * in {@see MySqlParser::showStatement()}.
     *
     * @param Context\ShowMasterLogsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShowMasterLogs(Context\ShowMasterLogsContext $context);

    /**
     * Visit a parse tree produced by the `showLogEvents` labeled alternative
     * in {@see MySqlParser::showStatement()}.
     *
     * @param Context\ShowLogEventsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShowLogEvents(Context\ShowLogEventsContext $context);

    /**
     * Visit a parse tree produced by the `showObjectFilter` labeled alternative
     * in {@see MySqlParser::showStatement()}.
     *
     * @param Context\ShowObjectFilterContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShowObjectFilter(Context\ShowObjectFilterContext $context);

    /**
     * Visit a parse tree produced by the `showColumns` labeled alternative
     * in {@see MySqlParser::showStatement()}.
     *
     * @param Context\ShowColumnsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShowColumns(Context\ShowColumnsContext $context);

    /**
     * Visit a parse tree produced by the `showCreateDb` labeled alternative
     * in {@see MySqlParser::showStatement()}.
     *
     * @param Context\ShowCreateDbContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShowCreateDb(Context\ShowCreateDbContext $context);

    /**
     * Visit a parse tree produced by the `showCreateFullIdObject` labeled alternative
     * in {@see MySqlParser::showStatement()}.
     *
     * @param Context\ShowCreateFullIdObjectContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShowCreateFullIdObject(Context\ShowCreateFullIdObjectContext $context);

    /**
     * Visit a parse tree produced by the `showCreateUser` labeled alternative
     * in {@see MySqlParser::showStatement()}.
     *
     * @param Context\ShowCreateUserContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShowCreateUser(Context\ShowCreateUserContext $context);

    /**
     * Visit a parse tree produced by the `showEngine` labeled alternative
     * in {@see MySqlParser::showStatement()}.
     *
     * @param Context\ShowEngineContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShowEngine(Context\ShowEngineContext $context);

    /**
     * Visit a parse tree produced by the `showGlobalInfo` labeled alternative
     * in {@see MySqlParser::showStatement()}.
     *
     * @param Context\ShowGlobalInfoContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShowGlobalInfo(Context\ShowGlobalInfoContext $context);

    /**
     * Visit a parse tree produced by the `showErrors` labeled alternative
     * in {@see MySqlParser::showStatement()}.
     *
     * @param Context\ShowErrorsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShowErrors(Context\ShowErrorsContext $context);

    /**
     * Visit a parse tree produced by the `showCountErrors` labeled alternative
     * in {@see MySqlParser::showStatement()}.
     *
     * @param Context\ShowCountErrorsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShowCountErrors(Context\ShowCountErrorsContext $context);

    /**
     * Visit a parse tree produced by the `showSchemaFilter` labeled alternative
     * in {@see MySqlParser::showStatement()}.
     *
     * @param Context\ShowSchemaFilterContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShowSchemaFilter(Context\ShowSchemaFilterContext $context);

    /**
     * Visit a parse tree produced by the `showRoutine` labeled alternative
     * in {@see MySqlParser::showStatement()}.
     *
     * @param Context\ShowRoutineContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShowRoutine(Context\ShowRoutineContext $context);

    /**
     * Visit a parse tree produced by the `showGrants` labeled alternative
     * in {@see MySqlParser::showStatement()}.
     *
     * @param Context\ShowGrantsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShowGrants(Context\ShowGrantsContext $context);

    /**
     * Visit a parse tree produced by the `showIndexes` labeled alternative
     * in {@see MySqlParser::showStatement()}.
     *
     * @param Context\ShowIndexesContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShowIndexes(Context\ShowIndexesContext $context);

    /**
     * Visit a parse tree produced by the `showOpenTables` labeled alternative
     * in {@see MySqlParser::showStatement()}.
     *
     * @param Context\ShowOpenTablesContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShowOpenTables(Context\ShowOpenTablesContext $context);

    /**
     * Visit a parse tree produced by the `showProfile` labeled alternative
     * in {@see MySqlParser::showStatement()}.
     *
     * @param Context\ShowProfileContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShowProfile(Context\ShowProfileContext $context);

    /**
     * Visit a parse tree produced by the `showSlaveStatus` labeled alternative
     * in {@see MySqlParser::showStatement()}.
     *
     * @param Context\ShowSlaveStatusContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShowSlaveStatus(Context\ShowSlaveStatusContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::variableClause()}.
     *
     * @param Context\VariableClauseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitVariableClause(Context\VariableClauseContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::showCommonEntity()}.
     *
     * @param Context\ShowCommonEntityContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShowCommonEntity(Context\ShowCommonEntityContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::showFilter()}.
     *
     * @param Context\ShowFilterContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShowFilter(Context\ShowFilterContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::showGlobalInfoClause()}.
     *
     * @param Context\ShowGlobalInfoClauseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShowGlobalInfoClause(Context\ShowGlobalInfoClauseContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::showSchemaEntity()}.
     *
     * @param Context\ShowSchemaEntityContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShowSchemaEntity(Context\ShowSchemaEntityContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::showProfileType()}.
     *
     * @param Context\ShowProfileTypeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShowProfileType(Context\ShowProfileTypeContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::binlogStatement()}.
     *
     * @param Context\BinlogStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitBinlogStatement(Context\BinlogStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::cacheIndexStatement()}.
     *
     * @param Context\CacheIndexStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCacheIndexStatement(Context\CacheIndexStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::flushStatement()}.
     *
     * @param Context\FlushStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitFlushStatement(Context\FlushStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::killStatement()}.
     *
     * @param Context\KillStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitKillStatement(Context\KillStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::loadIndexIntoCache()}.
     *
     * @param Context\LoadIndexIntoCacheContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitLoadIndexIntoCache(Context\LoadIndexIntoCacheContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::resetStatement()}.
     *
     * @param Context\ResetStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitResetStatement(Context\ResetStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::shutdownStatement()}.
     *
     * @param Context\ShutdownStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitShutdownStatement(Context\ShutdownStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::tableIndexes()}.
     *
     * @param Context\TableIndexesContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableIndexes(Context\TableIndexesContext $context);

    /**
     * Visit a parse tree produced by the `simpleFlushOption` labeled alternative
     * in {@see MySqlParser::flushOption()}.
     *
     * @param Context\SimpleFlushOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSimpleFlushOption(Context\SimpleFlushOptionContext $context);

    /**
     * Visit a parse tree produced by the `channelFlushOption` labeled alternative
     * in {@see MySqlParser::flushOption()}.
     *
     * @param Context\ChannelFlushOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitChannelFlushOption(Context\ChannelFlushOptionContext $context);

    /**
     * Visit a parse tree produced by the `tableFlushOption` labeled alternative
     * in {@see MySqlParser::flushOption()}.
     *
     * @param Context\TableFlushOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableFlushOption(Context\TableFlushOptionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::flushTableOption()}.
     *
     * @param Context\FlushTableOptionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitFlushTableOption(Context\FlushTableOptionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::loadedTableIndexes()}.
     *
     * @param Context\LoadedTableIndexesContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitLoadedTableIndexes(Context\LoadedTableIndexesContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::simpleDescribeStatement()}.
     *
     * @param Context\SimpleDescribeStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSimpleDescribeStatement(Context\SimpleDescribeStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::fullDescribeStatement()}.
     *
     * @param Context\FullDescribeStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitFullDescribeStatement(Context\FullDescribeStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::helpStatement()}.
     *
     * @param Context\HelpStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitHelpStatement(Context\HelpStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::useStatement()}.
     *
     * @param Context\UseStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUseStatement(Context\UseStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::signalStatement()}.
     *
     * @param Context\SignalStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSignalStatement(Context\SignalStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::resignalStatement()}.
     *
     * @param Context\ResignalStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitResignalStatement(Context\ResignalStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::signalConditionInformation()}.
     *
     * @param Context\SignalConditionInformationContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSignalConditionInformation(Context\SignalConditionInformationContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::diagnosticsStatement()}.
     *
     * @param Context\DiagnosticsStatementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDiagnosticsStatement(Context\DiagnosticsStatementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::diagnosticsConditionInformationName()}.
     *
     * @param Context\DiagnosticsConditionInformationNameContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDiagnosticsConditionInformationName(Context\DiagnosticsConditionInformationNameContext $context);

    /**
     * Visit a parse tree produced by the `describeStatements` labeled alternative
     * in {@see MySqlParser::describeObjectClause()}.
     *
     * @param Context\DescribeStatementsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDescribeStatements(Context\DescribeStatementsContext $context);

    /**
     * Visit a parse tree produced by the `describeConnection` labeled alternative
     * in {@see MySqlParser::describeObjectClause()}.
     *
     * @param Context\DescribeConnectionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDescribeConnection(Context\DescribeConnectionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::fullId()}.
     *
     * @param Context\FullIdContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitFullId(Context\FullIdContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::tableName()}.
     *
     * @param Context\TableNameContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableName(Context\TableNameContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::fullColumnName()}.
     *
     * @param Context\FullColumnNameContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitFullColumnName(Context\FullColumnNameContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::indexColumnName()}.
     *
     * @param Context\IndexColumnNameContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitIndexColumnName(Context\IndexColumnNameContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::userName()}.
     *
     * @param Context\UserNameContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUserName(Context\UserNameContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::mysqlVariable()}.
     *
     * @param Context\MysqlVariableContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitMysqlVariable(Context\MysqlVariableContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::charsetName()}.
     *
     * @param Context\CharsetNameContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCharsetName(Context\CharsetNameContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::collationName()}.
     *
     * @param Context\CollationNameContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCollationName(Context\CollationNameContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::engineName()}.
     *
     * @param Context\EngineNameContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitEngineName(Context\EngineNameContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::uuidSet()}.
     *
     * @param Context\UuidSetContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUuidSet(Context\UuidSetContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::xid()}.
     *
     * @param Context\XidContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitXid(Context\XidContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::xuidStringId()}.
     *
     * @param Context\XuidStringIdContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitXuidStringId(Context\XuidStringIdContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::authPlugin()}.
     *
     * @param Context\AuthPluginContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAuthPlugin(Context\AuthPluginContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::uid()}.
     *
     * @param Context\UidContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUid(Context\UidContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::simpleId()}.
     *
     * @param Context\SimpleIdContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSimpleId(Context\SimpleIdContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::dottedId()}.
     *
     * @param Context\DottedIdContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDottedId(Context\DottedIdContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::decimalLiteral()}.
     *
     * @param Context\DecimalLiteralContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDecimalLiteral(Context\DecimalLiteralContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::fileSizeLiteral()}.
     *
     * @param Context\FileSizeLiteralContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitFileSizeLiteral(Context\FileSizeLiteralContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::stringLiteral()}.
     *
     * @param Context\StringLiteralContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitStringLiteral(Context\StringLiteralContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::booleanLiteral()}.
     *
     * @param Context\BooleanLiteralContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitBooleanLiteral(Context\BooleanLiteralContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::hexadecimalLiteral()}.
     *
     * @param Context\HexadecimalLiteralContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitHexadecimalLiteral(Context\HexadecimalLiteralContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::nullNotnull()}.
     *
     * @param Context\NullNotnullContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitNullNotnull(Context\NullNotnullContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::constant()}.
     *
     * @param Context\ConstantContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitConstant(Context\ConstantContext $context);

    /**
     * Visit a parse tree produced by the `stringDataType` labeled alternative
     * in {@see MySqlParser::dataType()}.
     *
     * @param Context\StringDataTypeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitStringDataType(Context\StringDataTypeContext $context);

    /**
     * Visit a parse tree produced by the `nationalStringDataType` labeled alternative
     * in {@see MySqlParser::dataType()}.
     *
     * @param Context\NationalStringDataTypeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitNationalStringDataType(Context\NationalStringDataTypeContext $context);

    /**
     * Visit a parse tree produced by the `nationalVaryingStringDataType` labeled alternative
     * in {@see MySqlParser::dataType()}.
     *
     * @param Context\NationalVaryingStringDataTypeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitNationalVaryingStringDataType(Context\NationalVaryingStringDataTypeContext $context);

    /**
     * Visit a parse tree produced by the `dimensionDataType` labeled alternative
     * in {@see MySqlParser::dataType()}.
     *
     * @param Context\DimensionDataTypeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDimensionDataType(Context\DimensionDataTypeContext $context);

    /**
     * Visit a parse tree produced by the `simpleDataType` labeled alternative
     * in {@see MySqlParser::dataType()}.
     *
     * @param Context\SimpleDataTypeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSimpleDataType(Context\SimpleDataTypeContext $context);

    /**
     * Visit a parse tree produced by the `collectionDataType` labeled alternative
     * in {@see MySqlParser::dataType()}.
     *
     * @param Context\CollectionDataTypeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCollectionDataType(Context\CollectionDataTypeContext $context);

    /**
     * Visit a parse tree produced by the `spatialDataType` labeled alternative
     * in {@see MySqlParser::dataType()}.
     *
     * @param Context\SpatialDataTypeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSpatialDataType(Context\SpatialDataTypeContext $context);

    /**
     * Visit a parse tree produced by the `longVarcharDataType` labeled alternative
     * in {@see MySqlParser::dataType()}.
     *
     * @param Context\LongVarcharDataTypeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitLongVarcharDataType(Context\LongVarcharDataTypeContext $context);

    /**
     * Visit a parse tree produced by the `longVarbinaryDataType` labeled alternative
     * in {@see MySqlParser::dataType()}.
     *
     * @param Context\LongVarbinaryDataTypeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitLongVarbinaryDataType(Context\LongVarbinaryDataTypeContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::collectionOptions()}.
     *
     * @param Context\CollectionOptionsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCollectionOptions(Context\CollectionOptionsContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::convertedDataType()}.
     *
     * @param Context\ConvertedDataTypeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitConvertedDataType(Context\ConvertedDataTypeContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::lengthOneDimension()}.
     *
     * @param Context\LengthOneDimensionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitLengthOneDimension(Context\LengthOneDimensionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::lengthTwoDimension()}.
     *
     * @param Context\LengthTwoDimensionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitLengthTwoDimension(Context\LengthTwoDimensionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::lengthTwoOptionalDimension()}.
     *
     * @param Context\LengthTwoOptionalDimensionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitLengthTwoOptionalDimension(Context\LengthTwoOptionalDimensionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::uidList()}.
     *
     * @param Context\UidListContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUidList(Context\UidListContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::tables()}.
     *
     * @param Context\TablesContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTables(Context\TablesContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::tableNames()}.
     *
     * @param Context\TableNamesContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTableNames(Context\TableNamesContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::indexColumnNames()}.
     *
     * @param Context\IndexColumnNamesContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitIndexColumnNames(Context\IndexColumnNamesContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::expressions()}.
     *
     * @param Context\ExpressionsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitExpressions(Context\ExpressionsContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::expressionsWithDefaults()}.
     *
     * @param Context\ExpressionsWithDefaultsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitExpressionsWithDefaults(Context\ExpressionsWithDefaultsContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::constants()}.
     *
     * @param Context\ConstantsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitConstants(Context\ConstantsContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::simpleStrings()}.
     *
     * @param Context\SimpleStringsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSimpleStrings(Context\SimpleStringsContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::userVariables()}.
     *
     * @param Context\UserVariablesContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUserVariables(Context\UserVariablesContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::defaultValue()}.
     *
     * @param Context\DefaultValueContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDefaultValue(Context\DefaultValueContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::currentTimestamp()}.
     *
     * @param Context\CurrentTimestampContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCurrentTimestamp(Context\CurrentTimestampContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::expressionOrDefault()}.
     *
     * @param Context\ExpressionOrDefaultContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitExpressionOrDefault(Context\ExpressionOrDefaultContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::ifExists()}.
     *
     * @param Context\IfExistsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitIfExists(Context\IfExistsContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::ifNotExists()}.
     *
     * @param Context\IfNotExistsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitIfNotExists(Context\IfNotExistsContext $context);

    /**
     * Visit a parse tree produced by the `specificFunctionCall` labeled alternative
     * in {@see MySqlParser::functionCall()}.
     *
     * @param Context\SpecificFunctionCallContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSpecificFunctionCall(Context\SpecificFunctionCallContext $context);

    /**
     * Visit a parse tree produced by the `aggregateFunctionCall` labeled alternative
     * in {@see MySqlParser::functionCall()}.
     *
     * @param Context\AggregateFunctionCallContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAggregateFunctionCall(Context\AggregateFunctionCallContext $context);

    /**
     * Visit a parse tree produced by the `nonAggregateFunctionCall` labeled alternative
     * in {@see MySqlParser::functionCall()}.
     *
     * @param Context\NonAggregateFunctionCallContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitNonAggregateFunctionCall(Context\NonAggregateFunctionCallContext $context);

    /**
     * Visit a parse tree produced by the `scalarFunctionCall` labeled alternative
     * in {@see MySqlParser::functionCall()}.
     *
     * @param Context\ScalarFunctionCallContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitScalarFunctionCall(Context\ScalarFunctionCallContext $context);

    /**
     * Visit a parse tree produced by the `udfFunctionCall` labeled alternative
     * in {@see MySqlParser::functionCall()}.
     *
     * @param Context\UdfFunctionCallContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUdfFunctionCall(Context\UdfFunctionCallContext $context);

    /**
     * Visit a parse tree produced by the `passwordFunctionCall` labeled alternative
     * in {@see MySqlParser::functionCall()}.
     *
     * @param Context\PasswordFunctionCallContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPasswordFunctionCall(Context\PasswordFunctionCallContext $context);

    /**
     * Visit a parse tree produced by the `simpleFunctionCall` labeled alternative
     * in {@see MySqlParser::specificFunction()}.
     *
     * @param Context\SimpleFunctionCallContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSimpleFunctionCall(Context\SimpleFunctionCallContext $context);

    /**
     * Visit a parse tree produced by the `dataTypeFunctionCall` labeled alternative
     * in {@see MySqlParser::specificFunction()}.
     *
     * @param Context\DataTypeFunctionCallContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDataTypeFunctionCall(Context\DataTypeFunctionCallContext $context);

    /**
     * Visit a parse tree produced by the `valuesFunctionCall` labeled alternative
     * in {@see MySqlParser::specificFunction()}.
     *
     * @param Context\ValuesFunctionCallContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitValuesFunctionCall(Context\ValuesFunctionCallContext $context);

    /**
     * Visit a parse tree produced by the `caseExpressionFunctionCall` labeled alternative
     * in {@see MySqlParser::specificFunction()}.
     *
     * @param Context\CaseExpressionFunctionCallContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCaseExpressionFunctionCall(Context\CaseExpressionFunctionCallContext $context);

    /**
     * Visit a parse tree produced by the `caseFunctionCall` labeled alternative
     * in {@see MySqlParser::specificFunction()}.
     *
     * @param Context\CaseFunctionCallContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCaseFunctionCall(Context\CaseFunctionCallContext $context);

    /**
     * Visit a parse tree produced by the `charFunctionCall` labeled alternative
     * in {@see MySqlParser::specificFunction()}.
     *
     * @param Context\CharFunctionCallContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCharFunctionCall(Context\CharFunctionCallContext $context);

    /**
     * Visit a parse tree produced by the `positionFunctionCall` labeled alternative
     * in {@see MySqlParser::specificFunction()}.
     *
     * @param Context\PositionFunctionCallContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPositionFunctionCall(Context\PositionFunctionCallContext $context);

    /**
     * Visit a parse tree produced by the `substrFunctionCall` labeled alternative
     * in {@see MySqlParser::specificFunction()}.
     *
     * @param Context\SubstrFunctionCallContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSubstrFunctionCall(Context\SubstrFunctionCallContext $context);

    /**
     * Visit a parse tree produced by the `trimFunctionCall` labeled alternative
     * in {@see MySqlParser::specificFunction()}.
     *
     * @param Context\TrimFunctionCallContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTrimFunctionCall(Context\TrimFunctionCallContext $context);

    /**
     * Visit a parse tree produced by the `weightFunctionCall` labeled alternative
     * in {@see MySqlParser::specificFunction()}.
     *
     * @param Context\WeightFunctionCallContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitWeightFunctionCall(Context\WeightFunctionCallContext $context);

    /**
     * Visit a parse tree produced by the `extractFunctionCall` labeled alternative
     * in {@see MySqlParser::specificFunction()}.
     *
     * @param Context\ExtractFunctionCallContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitExtractFunctionCall(Context\ExtractFunctionCallContext $context);

    /**
     * Visit a parse tree produced by the `getFormatFunctionCall` labeled alternative
     * in {@see MySqlParser::specificFunction()}.
     *
     * @param Context\GetFormatFunctionCallContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitGetFormatFunctionCall(Context\GetFormatFunctionCallContext $context);

    /**
     * Visit a parse tree produced by the `jsonValueFunctionCall` labeled alternative
     * in {@see MySqlParser::specificFunction()}.
     *
     * @param Context\JsonValueFunctionCallContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitJsonValueFunctionCall(Context\JsonValueFunctionCallContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::caseFuncAlternative()}.
     *
     * @param Context\CaseFuncAlternativeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCaseFuncAlternative(Context\CaseFuncAlternativeContext $context);

    /**
     * Visit a parse tree produced by the `levelWeightList` labeled alternative
     * in {@see MySqlParser::levelsInWeightString()}.
     *
     * @param Context\LevelWeightListContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitLevelWeightList(Context\LevelWeightListContext $context);

    /**
     * Visit a parse tree produced by the `levelWeightRange` labeled alternative
     * in {@see MySqlParser::levelsInWeightString()}.
     *
     * @param Context\LevelWeightRangeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitLevelWeightRange(Context\LevelWeightRangeContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::levelInWeightListElement()}.
     *
     * @param Context\LevelInWeightListElementContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitLevelInWeightListElement(Context\LevelInWeightListElementContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::aggregateWindowedFunction()}.
     *
     * @param Context\AggregateWindowedFunctionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitAggregateWindowedFunction(Context\AggregateWindowedFunctionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::nonAggregateWindowedFunction()}.
     *
     * @param Context\NonAggregateWindowedFunctionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitNonAggregateWindowedFunction(Context\NonAggregateWindowedFunctionContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::overClause()}.
     *
     * @param Context\OverClauseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitOverClause(Context\OverClauseContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::windowSpec()}.
     *
     * @param Context\WindowSpecContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitWindowSpec(Context\WindowSpecContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::windowName()}.
     *
     * @param Context\WindowNameContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitWindowName(Context\WindowNameContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::frameClause()}.
     *
     * @param Context\FrameClauseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitFrameClause(Context\FrameClauseContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::frameUnits()}.
     *
     * @param Context\FrameUnitsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitFrameUnits(Context\FrameUnitsContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::frameExtent()}.
     *
     * @param Context\FrameExtentContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitFrameExtent(Context\FrameExtentContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::frameBetween()}.
     *
     * @param Context\FrameBetweenContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitFrameBetween(Context\FrameBetweenContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::frameRange()}.
     *
     * @param Context\FrameRangeContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitFrameRange(Context\FrameRangeContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::partitionClause()}.
     *
     * @param Context\PartitionClauseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPartitionClause(Context\PartitionClauseContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::scalarFunctionName()}.
     *
     * @param Context\ScalarFunctionNameContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitScalarFunctionName(Context\ScalarFunctionNameContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::passwordFunctionClause()}.
     *
     * @param Context\PasswordFunctionClauseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPasswordFunctionClause(Context\PasswordFunctionClauseContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::functionArgs()}.
     *
     * @param Context\FunctionArgsContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitFunctionArgs(Context\FunctionArgsContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::functionArg()}.
     *
     * @param Context\FunctionArgContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitFunctionArg(Context\FunctionArgContext $context);

    /**
     * Visit a parse tree produced by the `isExpression` labeled alternative
     * in {@see MySqlParser::expression()}.
     *
     * @param Context\IsExpressionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitIsExpression(Context\IsExpressionContext $context);

    /**
     * Visit a parse tree produced by the `notExpression` labeled alternative
     * in {@see MySqlParser::expression()}.
     *
     * @param Context\NotExpressionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitNotExpression(Context\NotExpressionContext $context);

    /**
     * Visit a parse tree produced by the `logicalExpression` labeled alternative
     * in {@see MySqlParser::expression()}.
     *
     * @param Context\LogicalExpressionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitLogicalExpression(Context\LogicalExpressionContext $context);

    /**
     * Visit a parse tree produced by the `predicateExpression` labeled alternative
     * in {@see MySqlParser::expression()}.
     *
     * @param Context\PredicateExpressionContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPredicateExpression(Context\PredicateExpressionContext $context);

    /**
     * Visit a parse tree produced by the `soundsLikePredicate` labeled alternative
     * in {@see MySqlParser::predicate()}.
     *
     * @param Context\SoundsLikePredicateContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSoundsLikePredicate(Context\SoundsLikePredicateContext $context);

    /**
     * Visit a parse tree produced by the `expressionAtomPredicate` labeled alternative
     * in {@see MySqlParser::predicate()}.
     *
     * @param Context\ExpressionAtomPredicateContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitExpressionAtomPredicate(Context\ExpressionAtomPredicateContext $context);

    /**
     * Visit a parse tree produced by the `subqueryComparisonPredicate` labeled alternative
     * in {@see MySqlParser::predicate()}.
     *
     * @param Context\SubqueryComparisonPredicateContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSubqueryComparisonPredicate(Context\SubqueryComparisonPredicateContext $context);

    /**
     * Visit a parse tree produced by the `jsonMemberOfPredicate` labeled alternative
     * in {@see MySqlParser::predicate()}.
     *
     * @param Context\JsonMemberOfPredicateContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitJsonMemberOfPredicate(Context\JsonMemberOfPredicateContext $context);

    /**
     * Visit a parse tree produced by the `binaryComparisonPredicate` labeled alternative
     * in {@see MySqlParser::predicate()}.
     *
     * @param Context\BinaryComparisonPredicateContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitBinaryComparisonPredicate(Context\BinaryComparisonPredicateContext $context);

    /**
     * Visit a parse tree produced by the `inPredicate` labeled alternative
     * in {@see MySqlParser::predicate()}.
     *
     * @param Context\InPredicateContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitInPredicate(Context\InPredicateContext $context);

    /**
     * Visit a parse tree produced by the `betweenPredicate` labeled alternative
     * in {@see MySqlParser::predicate()}.
     *
     * @param Context\BetweenPredicateContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitBetweenPredicate(Context\BetweenPredicateContext $context);

    /**
     * Visit a parse tree produced by the `isNullPredicate` labeled alternative
     * in {@see MySqlParser::predicate()}.
     *
     * @param Context\IsNullPredicateContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitIsNullPredicate(Context\IsNullPredicateContext $context);

    /**
     * Visit a parse tree produced by the `likePredicate` labeled alternative
     * in {@see MySqlParser::predicate()}.
     *
     * @param Context\LikePredicateContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitLikePredicate(Context\LikePredicateContext $context);

    /**
     * Visit a parse tree produced by the `regexpPredicate` labeled alternative
     * in {@see MySqlParser::predicate()}.
     *
     * @param Context\RegexpPredicateContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitRegexpPredicate(Context\RegexpPredicateContext $context);

    /**
     * Visit a parse tree produced by the `unaryExpressionAtom` labeled alternative
     * in {@see MySqlParser::expressionAtom()}.
     *
     * @param Context\UnaryExpressionAtomContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUnaryExpressionAtom(Context\UnaryExpressionAtomContext $context);

    /**
     * Visit a parse tree produced by the `collateExpressionAtom` labeled alternative
     * in {@see MySqlParser::expressionAtom()}.
     *
     * @param Context\CollateExpressionAtomContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCollateExpressionAtom(Context\CollateExpressionAtomContext $context);

    /**
     * Visit a parse tree produced by the `mysqlVariableExpressionAtom` labeled alternative
     * in {@see MySqlParser::expressionAtom()}.
     *
     * @param Context\MysqlVariableExpressionAtomContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitMysqlVariableExpressionAtom(Context\MysqlVariableExpressionAtomContext $context);

    /**
     * Visit a parse tree produced by the `nestedExpressionAtom` labeled alternative
     * in {@see MySqlParser::expressionAtom()}.
     *
     * @param Context\NestedExpressionAtomContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitNestedExpressionAtom(Context\NestedExpressionAtomContext $context);

    /**
     * Visit a parse tree produced by the `nestedRowExpressionAtom` labeled alternative
     * in {@see MySqlParser::expressionAtom()}.
     *
     * @param Context\NestedRowExpressionAtomContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitNestedRowExpressionAtom(Context\NestedRowExpressionAtomContext $context);

    /**
     * Visit a parse tree produced by the `mathExpressionAtom` labeled alternative
     * in {@see MySqlParser::expressionAtom()}.
     *
     * @param Context\MathExpressionAtomContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitMathExpressionAtom(Context\MathExpressionAtomContext $context);

    /**
     * Visit a parse tree produced by the `existsExpressionAtom` labeled alternative
     * in {@see MySqlParser::expressionAtom()}.
     *
     * @param Context\ExistsExpressionAtomContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitExistsExpressionAtom(Context\ExistsExpressionAtomContext $context);

    /**
     * Visit a parse tree produced by the `intervalExpressionAtom` labeled alternative
     * in {@see MySqlParser::expressionAtom()}.
     *
     * @param Context\IntervalExpressionAtomContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitIntervalExpressionAtom(Context\IntervalExpressionAtomContext $context);

    /**
     * Visit a parse tree produced by the `jsonExpressionAtom` labeled alternative
     * in {@see MySqlParser::expressionAtom()}.
     *
     * @param Context\JsonExpressionAtomContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitJsonExpressionAtom(Context\JsonExpressionAtomContext $context);

    /**
     * Visit a parse tree produced by the `subqueryExpressionAtom` labeled alternative
     * in {@see MySqlParser::expressionAtom()}.
     *
     * @param Context\SubqueryExpressionAtomContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitSubqueryExpressionAtom(Context\SubqueryExpressionAtomContext $context);

    /**
     * Visit a parse tree produced by the `constantExpressionAtom` labeled alternative
     * in {@see MySqlParser::expressionAtom()}.
     *
     * @param Context\ConstantExpressionAtomContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitConstantExpressionAtom(Context\ConstantExpressionAtomContext $context);

    /**
     * Visit a parse tree produced by the `functionCallExpressionAtom` labeled alternative
     * in {@see MySqlParser::expressionAtom()}.
     *
     * @param Context\FunctionCallExpressionAtomContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitFunctionCallExpressionAtom(Context\FunctionCallExpressionAtomContext $context);

    /**
     * Visit a parse tree produced by the `binaryExpressionAtom` labeled alternative
     * in {@see MySqlParser::expressionAtom()}.
     *
     * @param Context\BinaryExpressionAtomContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitBinaryExpressionAtom(Context\BinaryExpressionAtomContext $context);

    /**
     * Visit a parse tree produced by the `fullColumnNameExpressionAtom` labeled alternative
     * in {@see MySqlParser::expressionAtom()}.
     *
     * @param Context\FullColumnNameExpressionAtomContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitFullColumnNameExpressionAtom(Context\FullColumnNameExpressionAtomContext $context);

    /**
     * Visit a parse tree produced by the `bitExpressionAtom` labeled alternative
     * in {@see MySqlParser::expressionAtom()}.
     *
     * @param Context\BitExpressionAtomContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitBitExpressionAtom(Context\BitExpressionAtomContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::unaryOperator()}.
     *
     * @param Context\UnaryOperatorContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitUnaryOperator(Context\UnaryOperatorContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::comparisonOperator()}.
     *
     * @param Context\ComparisonOperatorContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitComparisonOperator(Context\ComparisonOperatorContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::logicalOperator()}.
     *
     * @param Context\LogicalOperatorContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitLogicalOperator(Context\LogicalOperatorContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::bitOperator()}.
     *
     * @param Context\BitOperatorContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitBitOperator(Context\BitOperatorContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::mathOperator()}.
     *
     * @param Context\MathOperatorContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitMathOperator(Context\MathOperatorContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::jsonOperator()}.
     *
     * @param Context\JsonOperatorContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitJsonOperator(Context\JsonOperatorContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::charsetNameBase()}.
     *
     * @param Context\CharsetNameBaseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitCharsetNameBase(Context\CharsetNameBaseContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::transactionLevelBase()}.
     *
     * @param Context\TransactionLevelBaseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitTransactionLevelBase(Context\TransactionLevelBaseContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::privilegesBase()}.
     *
     * @param Context\PrivilegesBaseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitPrivilegesBase(Context\PrivilegesBaseContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::intervalTypeBase()}.
     *
     * @param Context\IntervalTypeBaseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitIntervalTypeBase(Context\IntervalTypeBaseContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::dataTypeBase()}.
     *
     * @param Context\DataTypeBaseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitDataTypeBase(Context\DataTypeBaseContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::keywordsCanBeId()}.
     *
     * @param Context\KeywordsCanBeIdContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitKeywordsCanBeId(Context\KeywordsCanBeIdContext $context);

    /**
     * Visit a parse tree produced by {@see MySqlParser::functionNameBase()}.
     *
     * @param Context\FunctionNameBaseContext $context the parse tree
     *
     * @return mixed the visitor result
     */
    public function visitFunctionNameBase(Context\FunctionNameBaseContext $context);
}
