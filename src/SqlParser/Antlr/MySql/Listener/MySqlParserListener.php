<?php

/*
 * Generated from ./MySqlParser.g4 by ANTLR 4.9
 */
namespace Hyperf\Seata\SqlParser\Antlr\MySql\Listener;

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\Context;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see MySqlParser}.
 */
interface MySqlParserListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see MySqlParser::root()}.
	 * @param $context The parse tree.
	 */
	public function enterRoot(Context\RootContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::root()}.
	 * @param $context The parse tree.
	 */
	public function exitRoot(Context\RootContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::sqlStatements()}.
	 * @param $context The parse tree.
	 */
	public function enterSqlStatements(Context\SqlStatementsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::sqlStatements()}.
	 * @param $context The parse tree.
	 */
	public function exitSqlStatements(Context\SqlStatementsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::sqlStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterSqlStatement(Context\SqlStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::sqlStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitSqlStatement(Context\SqlStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::emptyStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterEmptyStatement(Context\EmptyStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::emptyStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitEmptyStatement(Context\EmptyStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::ddlStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterDdlStatement(Context\DdlStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::ddlStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitDdlStatement(Context\DdlStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::dmlStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterDmlStatement(Context\DmlStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::dmlStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitDmlStatement(Context\DmlStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::transactionStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterTransactionStatement(Context\TransactionStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::transactionStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitTransactionStatement(Context\TransactionStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::replicationStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterReplicationStatement(Context\ReplicationStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::replicationStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitReplicationStatement(Context\ReplicationStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::preparedStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterPreparedStatement(Context\PreparedStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::preparedStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitPreparedStatement(Context\PreparedStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::compoundStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterCompoundStatement(Context\CompoundStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::compoundStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitCompoundStatement(Context\CompoundStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::administrationStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterAdministrationStatement(Context\AdministrationStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::administrationStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitAdministrationStatement(Context\AdministrationStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::utilityStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterUtilityStatement(Context\UtilityStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::utilityStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitUtilityStatement(Context\UtilityStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::createDatabase()}.
	 * @param $context The parse tree.
	 */
	public function enterCreateDatabase(Context\CreateDatabaseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::createDatabase()}.
	 * @param $context The parse tree.
	 */
	public function exitCreateDatabase(Context\CreateDatabaseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::createEvent()}.
	 * @param $context The parse tree.
	 */
	public function enterCreateEvent(Context\CreateEventContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::createEvent()}.
	 * @param $context The parse tree.
	 */
	public function exitCreateEvent(Context\CreateEventContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::createIndex()}.
	 * @param $context The parse tree.
	 */
	public function enterCreateIndex(Context\CreateIndexContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::createIndex()}.
	 * @param $context The parse tree.
	 */
	public function exitCreateIndex(Context\CreateIndexContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::createLogfileGroup()}.
	 * @param $context The parse tree.
	 */
	public function enterCreateLogfileGroup(Context\CreateLogfileGroupContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::createLogfileGroup()}.
	 * @param $context The parse tree.
	 */
	public function exitCreateLogfileGroup(Context\CreateLogfileGroupContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::createProcedure()}.
	 * @param $context The parse tree.
	 */
	public function enterCreateProcedure(Context\CreateProcedureContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::createProcedure()}.
	 * @param $context The parse tree.
	 */
	public function exitCreateProcedure(Context\CreateProcedureContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::createFunction()}.
	 * @param $context The parse tree.
	 */
	public function enterCreateFunction(Context\CreateFunctionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::createFunction()}.
	 * @param $context The parse tree.
	 */
	public function exitCreateFunction(Context\CreateFunctionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::createServer()}.
	 * @param $context The parse tree.
	 */
	public function enterCreateServer(Context\CreateServerContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::createServer()}.
	 * @param $context The parse tree.
	 */
	public function exitCreateServer(Context\CreateServerContext $context) : void;
	/**
	 * Enter a parse tree produced by the `copyCreateTable`
	 * labeled alternative in {@see MySqlParser::createTable()}.
	 * @param $context The parse tree.
	 */
	public function enterCopyCreateTable(Context\CopyCreateTableContext $context) : void;
	/**
	 * Exit a parse tree produced by the `copyCreateTable` labeled alternative
	 * in {@see MySqlParser::createTable()}.
	 * @param $context The parse tree.
	 */
	public function exitCopyCreateTable(Context\CopyCreateTableContext $context) : void;
	/**
	 * Enter a parse tree produced by the `queryCreateTable`
	 * labeled alternative in {@see MySqlParser::createTable()}.
	 * @param $context The parse tree.
	 */
	public function enterQueryCreateTable(Context\QueryCreateTableContext $context) : void;
	/**
	 * Exit a parse tree produced by the `queryCreateTable` labeled alternative
	 * in {@see MySqlParser::createTable()}.
	 * @param $context The parse tree.
	 */
	public function exitQueryCreateTable(Context\QueryCreateTableContext $context) : void;
	/**
	 * Enter a parse tree produced by the `columnCreateTable`
	 * labeled alternative in {@see MySqlParser::createTable()}.
	 * @param $context The parse tree.
	 */
	public function enterColumnCreateTable(Context\ColumnCreateTableContext $context) : void;
	/**
	 * Exit a parse tree produced by the `columnCreateTable` labeled alternative
	 * in {@see MySqlParser::createTable()}.
	 * @param $context The parse tree.
	 */
	public function exitColumnCreateTable(Context\ColumnCreateTableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::createTablespaceInnodb()}.
	 * @param $context The parse tree.
	 */
	public function enterCreateTablespaceInnodb(Context\CreateTablespaceInnodbContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::createTablespaceInnodb()}.
	 * @param $context The parse tree.
	 */
	public function exitCreateTablespaceInnodb(Context\CreateTablespaceInnodbContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::createTablespaceNdb()}.
	 * @param $context The parse tree.
	 */
	public function enterCreateTablespaceNdb(Context\CreateTablespaceNdbContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::createTablespaceNdb()}.
	 * @param $context The parse tree.
	 */
	public function exitCreateTablespaceNdb(Context\CreateTablespaceNdbContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::createTrigger()}.
	 * @param $context The parse tree.
	 */
	public function enterCreateTrigger(Context\CreateTriggerContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::createTrigger()}.
	 * @param $context The parse tree.
	 */
	public function exitCreateTrigger(Context\CreateTriggerContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::createView()}.
	 * @param $context The parse tree.
	 */
	public function enterCreateView(Context\CreateViewContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::createView()}.
	 * @param $context The parse tree.
	 */
	public function exitCreateView(Context\CreateViewContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::createDatabaseOption()}.
	 * @param $context The parse tree.
	 */
	public function enterCreateDatabaseOption(Context\CreateDatabaseOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::createDatabaseOption()}.
	 * @param $context The parse tree.
	 */
	public function exitCreateDatabaseOption(Context\CreateDatabaseOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::ownerStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterOwnerStatement(Context\OwnerStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::ownerStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitOwnerStatement(Context\OwnerStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by the `preciseSchedule`
	 * labeled alternative in {@see MySqlParser::scheduleExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterPreciseSchedule(Context\PreciseScheduleContext $context) : void;
	/**
	 * Exit a parse tree produced by the `preciseSchedule` labeled alternative
	 * in {@see MySqlParser::scheduleExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitPreciseSchedule(Context\PreciseScheduleContext $context) : void;
	/**
	 * Enter a parse tree produced by the `intervalSchedule`
	 * labeled alternative in {@see MySqlParser::scheduleExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterIntervalSchedule(Context\IntervalScheduleContext $context) : void;
	/**
	 * Exit a parse tree produced by the `intervalSchedule` labeled alternative
	 * in {@see MySqlParser::scheduleExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitIntervalSchedule(Context\IntervalScheduleContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::timestampValue()}.
	 * @param $context The parse tree.
	 */
	public function enterTimestampValue(Context\TimestampValueContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::timestampValue()}.
	 * @param $context The parse tree.
	 */
	public function exitTimestampValue(Context\TimestampValueContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::intervalExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterIntervalExpr(Context\IntervalExprContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::intervalExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitIntervalExpr(Context\IntervalExprContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::intervalType()}.
	 * @param $context The parse tree.
	 */
	public function enterIntervalType(Context\IntervalTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::intervalType()}.
	 * @param $context The parse tree.
	 */
	public function exitIntervalType(Context\IntervalTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::enableType()}.
	 * @param $context The parse tree.
	 */
	public function enterEnableType(Context\EnableTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::enableType()}.
	 * @param $context The parse tree.
	 */
	public function exitEnableType(Context\EnableTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::indexType()}.
	 * @param $context The parse tree.
	 */
	public function enterIndexType(Context\IndexTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::indexType()}.
	 * @param $context The parse tree.
	 */
	public function exitIndexType(Context\IndexTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::indexOption()}.
	 * @param $context The parse tree.
	 */
	public function enterIndexOption(Context\IndexOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::indexOption()}.
	 * @param $context The parse tree.
	 */
	public function exitIndexOption(Context\IndexOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::procedureParameter()}.
	 * @param $context The parse tree.
	 */
	public function enterProcedureParameter(Context\ProcedureParameterContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::procedureParameter()}.
	 * @param $context The parse tree.
	 */
	public function exitProcedureParameter(Context\ProcedureParameterContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::functionParameter()}.
	 * @param $context The parse tree.
	 */
	public function enterFunctionParameter(Context\FunctionParameterContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::functionParameter()}.
	 * @param $context The parse tree.
	 */
	public function exitFunctionParameter(Context\FunctionParameterContext $context) : void;
	/**
	 * Enter a parse tree produced by the `routineComment`
	 * labeled alternative in {@see MySqlParser::routineOption()}.
	 * @param $context The parse tree.
	 */
	public function enterRoutineComment(Context\RoutineCommentContext $context) : void;
	/**
	 * Exit a parse tree produced by the `routineComment` labeled alternative
	 * in {@see MySqlParser::routineOption()}.
	 * @param $context The parse tree.
	 */
	public function exitRoutineComment(Context\RoutineCommentContext $context) : void;
	/**
	 * Enter a parse tree produced by the `routineLanguage`
	 * labeled alternative in {@see MySqlParser::routineOption()}.
	 * @param $context The parse tree.
	 */
	public function enterRoutineLanguage(Context\RoutineLanguageContext $context) : void;
	/**
	 * Exit a parse tree produced by the `routineLanguage` labeled alternative
	 * in {@see MySqlParser::routineOption()}.
	 * @param $context The parse tree.
	 */
	public function exitRoutineLanguage(Context\RoutineLanguageContext $context) : void;
	/**
	 * Enter a parse tree produced by the `routineBehavior`
	 * labeled alternative in {@see MySqlParser::routineOption()}.
	 * @param $context The parse tree.
	 */
	public function enterRoutineBehavior(Context\RoutineBehaviorContext $context) : void;
	/**
	 * Exit a parse tree produced by the `routineBehavior` labeled alternative
	 * in {@see MySqlParser::routineOption()}.
	 * @param $context The parse tree.
	 */
	public function exitRoutineBehavior(Context\RoutineBehaviorContext $context) : void;
	/**
	 * Enter a parse tree produced by the `routineData`
	 * labeled alternative in {@see MySqlParser::routineOption()}.
	 * @param $context The parse tree.
	 */
	public function enterRoutineData(Context\RoutineDataContext $context) : void;
	/**
	 * Exit a parse tree produced by the `routineData` labeled alternative
	 * in {@see MySqlParser::routineOption()}.
	 * @param $context The parse tree.
	 */
	public function exitRoutineData(Context\RoutineDataContext $context) : void;
	/**
	 * Enter a parse tree produced by the `routineSecurity`
	 * labeled alternative in {@see MySqlParser::routineOption()}.
	 * @param $context The parse tree.
	 */
	public function enterRoutineSecurity(Context\RoutineSecurityContext $context) : void;
	/**
	 * Exit a parse tree produced by the `routineSecurity` labeled alternative
	 * in {@see MySqlParser::routineOption()}.
	 * @param $context The parse tree.
	 */
	public function exitRoutineSecurity(Context\RoutineSecurityContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::serverOption()}.
	 * @param $context The parse tree.
	 */
	public function enterServerOption(Context\ServerOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::serverOption()}.
	 * @param $context The parse tree.
	 */
	public function exitServerOption(Context\ServerOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::createDefinitions()}.
	 * @param $context The parse tree.
	 */
	public function enterCreateDefinitions(Context\CreateDefinitionsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::createDefinitions()}.
	 * @param $context The parse tree.
	 */
	public function exitCreateDefinitions(Context\CreateDefinitionsContext $context) : void;
	/**
	 * Enter a parse tree produced by the `columnDeclaration`
	 * labeled alternative in {@see MySqlParser::createDefinition()}.
	 * @param $context The parse tree.
	 */
	public function enterColumnDeclaration(Context\ColumnDeclarationContext $context) : void;
	/**
	 * Exit a parse tree produced by the `columnDeclaration` labeled alternative
	 * in {@see MySqlParser::createDefinition()}.
	 * @param $context The parse tree.
	 */
	public function exitColumnDeclaration(Context\ColumnDeclarationContext $context) : void;
	/**
	 * Enter a parse tree produced by the `constraintDeclaration`
	 * labeled alternative in {@see MySqlParser::createDefinition()}.
	 * @param $context The parse tree.
	 */
	public function enterConstraintDeclaration(Context\ConstraintDeclarationContext $context) : void;
	/**
	 * Exit a parse tree produced by the `constraintDeclaration` labeled alternative
	 * in {@see MySqlParser::createDefinition()}.
	 * @param $context The parse tree.
	 */
	public function exitConstraintDeclaration(Context\ConstraintDeclarationContext $context) : void;
	/**
	 * Enter a parse tree produced by the `indexDeclaration`
	 * labeled alternative in {@see MySqlParser::createDefinition()}.
	 * @param $context The parse tree.
	 */
	public function enterIndexDeclaration(Context\IndexDeclarationContext $context) : void;
	/**
	 * Exit a parse tree produced by the `indexDeclaration` labeled alternative
	 * in {@see MySqlParser::createDefinition()}.
	 * @param $context The parse tree.
	 */
	public function exitIndexDeclaration(Context\IndexDeclarationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::columnDefinition()}.
	 * @param $context The parse tree.
	 */
	public function enterColumnDefinition(Context\ColumnDefinitionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::columnDefinition()}.
	 * @param $context The parse tree.
	 */
	public function exitColumnDefinition(Context\ColumnDefinitionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `nullColumnConstraint`
	 * labeled alternative in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function enterNullColumnConstraint(Context\NullColumnConstraintContext $context) : void;
	/**
	 * Exit a parse tree produced by the `nullColumnConstraint` labeled alternative
	 * in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function exitNullColumnConstraint(Context\NullColumnConstraintContext $context) : void;
	/**
	 * Enter a parse tree produced by the `defaultColumnConstraint`
	 * labeled alternative in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function enterDefaultColumnConstraint(Context\DefaultColumnConstraintContext $context) : void;
	/**
	 * Exit a parse tree produced by the `defaultColumnConstraint` labeled alternative
	 * in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function exitDefaultColumnConstraint(Context\DefaultColumnConstraintContext $context) : void;
	/**
	 * Enter a parse tree produced by the `visibilityColumnConstraint`
	 * labeled alternative in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function enterVisibilityColumnConstraint(Context\VisibilityColumnConstraintContext $context) : void;
	/**
	 * Exit a parse tree produced by the `visibilityColumnConstraint` labeled alternative
	 * in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function exitVisibilityColumnConstraint(Context\VisibilityColumnConstraintContext $context) : void;
	/**
	 * Enter a parse tree produced by the `autoIncrementColumnConstraint`
	 * labeled alternative in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function enterAutoIncrementColumnConstraint(Context\AutoIncrementColumnConstraintContext $context) : void;
	/**
	 * Exit a parse tree produced by the `autoIncrementColumnConstraint` labeled alternative
	 * in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function exitAutoIncrementColumnConstraint(Context\AutoIncrementColumnConstraintContext $context) : void;
	/**
	 * Enter a parse tree produced by the `primaryKeyColumnConstraint`
	 * labeled alternative in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function enterPrimaryKeyColumnConstraint(Context\PrimaryKeyColumnConstraintContext $context) : void;
	/**
	 * Exit a parse tree produced by the `primaryKeyColumnConstraint` labeled alternative
	 * in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function exitPrimaryKeyColumnConstraint(Context\PrimaryKeyColumnConstraintContext $context) : void;
	/**
	 * Enter a parse tree produced by the `uniqueKeyColumnConstraint`
	 * labeled alternative in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function enterUniqueKeyColumnConstraint(Context\UniqueKeyColumnConstraintContext $context) : void;
	/**
	 * Exit a parse tree produced by the `uniqueKeyColumnConstraint` labeled alternative
	 * in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function exitUniqueKeyColumnConstraint(Context\UniqueKeyColumnConstraintContext $context) : void;
	/**
	 * Enter a parse tree produced by the `commentColumnConstraint`
	 * labeled alternative in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function enterCommentColumnConstraint(Context\CommentColumnConstraintContext $context) : void;
	/**
	 * Exit a parse tree produced by the `commentColumnConstraint` labeled alternative
	 * in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function exitCommentColumnConstraint(Context\CommentColumnConstraintContext $context) : void;
	/**
	 * Enter a parse tree produced by the `formatColumnConstraint`
	 * labeled alternative in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function enterFormatColumnConstraint(Context\FormatColumnConstraintContext $context) : void;
	/**
	 * Exit a parse tree produced by the `formatColumnConstraint` labeled alternative
	 * in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function exitFormatColumnConstraint(Context\FormatColumnConstraintContext $context) : void;
	/**
	 * Enter a parse tree produced by the `storageColumnConstraint`
	 * labeled alternative in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function enterStorageColumnConstraint(Context\StorageColumnConstraintContext $context) : void;
	/**
	 * Exit a parse tree produced by the `storageColumnConstraint` labeled alternative
	 * in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function exitStorageColumnConstraint(Context\StorageColumnConstraintContext $context) : void;
	/**
	 * Enter a parse tree produced by the `referenceColumnConstraint`
	 * labeled alternative in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function enterReferenceColumnConstraint(Context\ReferenceColumnConstraintContext $context) : void;
	/**
	 * Exit a parse tree produced by the `referenceColumnConstraint` labeled alternative
	 * in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function exitReferenceColumnConstraint(Context\ReferenceColumnConstraintContext $context) : void;
	/**
	 * Enter a parse tree produced by the `collateColumnConstraint`
	 * labeled alternative in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function enterCollateColumnConstraint(Context\CollateColumnConstraintContext $context) : void;
	/**
	 * Exit a parse tree produced by the `collateColumnConstraint` labeled alternative
	 * in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function exitCollateColumnConstraint(Context\CollateColumnConstraintContext $context) : void;
	/**
	 * Enter a parse tree produced by the `generatedColumnConstraint`
	 * labeled alternative in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function enterGeneratedColumnConstraint(Context\GeneratedColumnConstraintContext $context) : void;
	/**
	 * Exit a parse tree produced by the `generatedColumnConstraint` labeled alternative
	 * in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function exitGeneratedColumnConstraint(Context\GeneratedColumnConstraintContext $context) : void;
	/**
	 * Enter a parse tree produced by the `serialDefaultColumnConstraint`
	 * labeled alternative in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function enterSerialDefaultColumnConstraint(Context\SerialDefaultColumnConstraintContext $context) : void;
	/**
	 * Exit a parse tree produced by the `serialDefaultColumnConstraint` labeled alternative
	 * in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function exitSerialDefaultColumnConstraint(Context\SerialDefaultColumnConstraintContext $context) : void;
	/**
	 * Enter a parse tree produced by the `checkColumnConstraint`
	 * labeled alternative in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function enterCheckColumnConstraint(Context\CheckColumnConstraintContext $context) : void;
	/**
	 * Exit a parse tree produced by the `checkColumnConstraint` labeled alternative
	 * in {@see MySqlParser::columnConstraint()}.
	 * @param $context The parse tree.
	 */
	public function exitCheckColumnConstraint(Context\CheckColumnConstraintContext $context) : void;
	/**
	 * Enter a parse tree produced by the `primaryKeyTableConstraint`
	 * labeled alternative in {@see MySqlParser::tableConstraint()}.
	 * @param $context The parse tree.
	 */
	public function enterPrimaryKeyTableConstraint(Context\PrimaryKeyTableConstraintContext $context) : void;
	/**
	 * Exit a parse tree produced by the `primaryKeyTableConstraint` labeled alternative
	 * in {@see MySqlParser::tableConstraint()}.
	 * @param $context The parse tree.
	 */
	public function exitPrimaryKeyTableConstraint(Context\PrimaryKeyTableConstraintContext $context) : void;
	/**
	 * Enter a parse tree produced by the `uniqueKeyTableConstraint`
	 * labeled alternative in {@see MySqlParser::tableConstraint()}.
	 * @param $context The parse tree.
	 */
	public function enterUniqueKeyTableConstraint(Context\UniqueKeyTableConstraintContext $context) : void;
	/**
	 * Exit a parse tree produced by the `uniqueKeyTableConstraint` labeled alternative
	 * in {@see MySqlParser::tableConstraint()}.
	 * @param $context The parse tree.
	 */
	public function exitUniqueKeyTableConstraint(Context\UniqueKeyTableConstraintContext $context) : void;
	/**
	 * Enter a parse tree produced by the `foreignKeyTableConstraint`
	 * labeled alternative in {@see MySqlParser::tableConstraint()}.
	 * @param $context The parse tree.
	 */
	public function enterForeignKeyTableConstraint(Context\ForeignKeyTableConstraintContext $context) : void;
	/**
	 * Exit a parse tree produced by the `foreignKeyTableConstraint` labeled alternative
	 * in {@see MySqlParser::tableConstraint()}.
	 * @param $context The parse tree.
	 */
	public function exitForeignKeyTableConstraint(Context\ForeignKeyTableConstraintContext $context) : void;
	/**
	 * Enter a parse tree produced by the `checkTableConstraint`
	 * labeled alternative in {@see MySqlParser::tableConstraint()}.
	 * @param $context The parse tree.
	 */
	public function enterCheckTableConstraint(Context\CheckTableConstraintContext $context) : void;
	/**
	 * Exit a parse tree produced by the `checkTableConstraint` labeled alternative
	 * in {@see MySqlParser::tableConstraint()}.
	 * @param $context The parse tree.
	 */
	public function exitCheckTableConstraint(Context\CheckTableConstraintContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::referenceDefinition()}.
	 * @param $context The parse tree.
	 */
	public function enterReferenceDefinition(Context\ReferenceDefinitionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::referenceDefinition()}.
	 * @param $context The parse tree.
	 */
	public function exitReferenceDefinition(Context\ReferenceDefinitionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::referenceAction()}.
	 * @param $context The parse tree.
	 */
	public function enterReferenceAction(Context\ReferenceActionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::referenceAction()}.
	 * @param $context The parse tree.
	 */
	public function exitReferenceAction(Context\ReferenceActionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::referenceControlType()}.
	 * @param $context The parse tree.
	 */
	public function enterReferenceControlType(Context\ReferenceControlTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::referenceControlType()}.
	 * @param $context The parse tree.
	 */
	public function exitReferenceControlType(Context\ReferenceControlTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by the `simpleIndexDeclaration`
	 * labeled alternative in {@see MySqlParser::indexColumnDefinition()}.
	 * @param $context The parse tree.
	 */
	public function enterSimpleIndexDeclaration(Context\SimpleIndexDeclarationContext $context) : void;
	/**
	 * Exit a parse tree produced by the `simpleIndexDeclaration` labeled alternative
	 * in {@see MySqlParser::indexColumnDefinition()}.
	 * @param $context The parse tree.
	 */
	public function exitSimpleIndexDeclaration(Context\SimpleIndexDeclarationContext $context) : void;
	/**
	 * Enter a parse tree produced by the `specialIndexDeclaration`
	 * labeled alternative in {@see MySqlParser::indexColumnDefinition()}.
	 * @param $context The parse tree.
	 */
	public function enterSpecialIndexDeclaration(Context\SpecialIndexDeclarationContext $context) : void;
	/**
	 * Exit a parse tree produced by the `specialIndexDeclaration` labeled alternative
	 * in {@see MySqlParser::indexColumnDefinition()}.
	 * @param $context The parse tree.
	 */
	public function exitSpecialIndexDeclaration(Context\SpecialIndexDeclarationContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionEngine`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionEngine(Context\TableOptionEngineContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionEngine` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionEngine(Context\TableOptionEngineContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionAutoIncrement`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionAutoIncrement(Context\TableOptionAutoIncrementContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionAutoIncrement` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionAutoIncrement(Context\TableOptionAutoIncrementContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionAverage`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionAverage(Context\TableOptionAverageContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionAverage` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionAverage(Context\TableOptionAverageContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionCharset`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionCharset(Context\TableOptionCharsetContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionCharset` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionCharset(Context\TableOptionCharsetContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionChecksum`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionChecksum(Context\TableOptionChecksumContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionChecksum` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionChecksum(Context\TableOptionChecksumContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionCollate`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionCollate(Context\TableOptionCollateContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionCollate` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionCollate(Context\TableOptionCollateContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionComment`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionComment(Context\TableOptionCommentContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionComment` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionComment(Context\TableOptionCommentContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionCompression`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionCompression(Context\TableOptionCompressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionCompression` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionCompression(Context\TableOptionCompressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionConnection`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionConnection(Context\TableOptionConnectionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionConnection` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionConnection(Context\TableOptionConnectionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionDataDirectory`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionDataDirectory(Context\TableOptionDataDirectoryContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionDataDirectory` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionDataDirectory(Context\TableOptionDataDirectoryContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionDelay`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionDelay(Context\TableOptionDelayContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionDelay` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionDelay(Context\TableOptionDelayContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionEncryption`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionEncryption(Context\TableOptionEncryptionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionEncryption` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionEncryption(Context\TableOptionEncryptionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionIndexDirectory`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionIndexDirectory(Context\TableOptionIndexDirectoryContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionIndexDirectory` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionIndexDirectory(Context\TableOptionIndexDirectoryContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionInsertMethod`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionInsertMethod(Context\TableOptionInsertMethodContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionInsertMethod` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionInsertMethod(Context\TableOptionInsertMethodContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionKeyBlockSize`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionKeyBlockSize(Context\TableOptionKeyBlockSizeContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionKeyBlockSize` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionKeyBlockSize(Context\TableOptionKeyBlockSizeContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionMaxRows`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionMaxRows(Context\TableOptionMaxRowsContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionMaxRows` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionMaxRows(Context\TableOptionMaxRowsContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionMinRows`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionMinRows(Context\TableOptionMinRowsContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionMinRows` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionMinRows(Context\TableOptionMinRowsContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionPackKeys`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionPackKeys(Context\TableOptionPackKeysContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionPackKeys` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionPackKeys(Context\TableOptionPackKeysContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionPassword`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionPassword(Context\TableOptionPasswordContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionPassword` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionPassword(Context\TableOptionPasswordContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionRowFormat`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionRowFormat(Context\TableOptionRowFormatContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionRowFormat` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionRowFormat(Context\TableOptionRowFormatContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionRecalculation`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionRecalculation(Context\TableOptionRecalculationContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionRecalculation` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionRecalculation(Context\TableOptionRecalculationContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionPersistent`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionPersistent(Context\TableOptionPersistentContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionPersistent` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionPersistent(Context\TableOptionPersistentContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionSamplePage`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionSamplePage(Context\TableOptionSamplePageContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionSamplePage` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionSamplePage(Context\TableOptionSamplePageContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionTablespace`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionTablespace(Context\TableOptionTablespaceContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionTablespace` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionTablespace(Context\TableOptionTablespaceContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionTableType`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionTableType(Context\TableOptionTableTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionTableType` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionTableType(Context\TableOptionTableTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableOptionUnion`
	 * labeled alternative in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableOptionUnion(Context\TableOptionUnionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableOptionUnion` labeled alternative
	 * in {@see MySqlParser::tableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableOptionUnion(Context\TableOptionUnionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::tableType()}.
	 * @param $context The parse tree.
	 */
	public function enterTableType(Context\TableTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::tableType()}.
	 * @param $context The parse tree.
	 */
	public function exitTableType(Context\TableTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::tablespaceStorage()}.
	 * @param $context The parse tree.
	 */
	public function enterTablespaceStorage(Context\TablespaceStorageContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::tablespaceStorage()}.
	 * @param $context The parse tree.
	 */
	public function exitTablespaceStorage(Context\TablespaceStorageContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::partitionDefinitions()}.
	 * @param $context The parse tree.
	 */
	public function enterPartitionDefinitions(Context\PartitionDefinitionsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::partitionDefinitions()}.
	 * @param $context The parse tree.
	 */
	public function exitPartitionDefinitions(Context\PartitionDefinitionsContext $context) : void;
	/**
	 * Enter a parse tree produced by the `partitionFunctionHash`
	 * labeled alternative in {@see MySqlParser::partitionFunctionDefinition()}.
	 * @param $context The parse tree.
	 */
	public function enterPartitionFunctionHash(Context\PartitionFunctionHashContext $context) : void;
	/**
	 * Exit a parse tree produced by the `partitionFunctionHash` labeled alternative
	 * in {@see MySqlParser::partitionFunctionDefinition()}.
	 * @param $context The parse tree.
	 */
	public function exitPartitionFunctionHash(Context\PartitionFunctionHashContext $context) : void;
	/**
	 * Enter a parse tree produced by the `partitionFunctionKey`
	 * labeled alternative in {@see MySqlParser::partitionFunctionDefinition()}.
	 * @param $context The parse tree.
	 */
	public function enterPartitionFunctionKey(Context\PartitionFunctionKeyContext $context) : void;
	/**
	 * Exit a parse tree produced by the `partitionFunctionKey` labeled alternative
	 * in {@see MySqlParser::partitionFunctionDefinition()}.
	 * @param $context The parse tree.
	 */
	public function exitPartitionFunctionKey(Context\PartitionFunctionKeyContext $context) : void;
	/**
	 * Enter a parse tree produced by the `partitionFunctionRange`
	 * labeled alternative in {@see MySqlParser::partitionFunctionDefinition()}.
	 * @param $context The parse tree.
	 */
	public function enterPartitionFunctionRange(Context\PartitionFunctionRangeContext $context) : void;
	/**
	 * Exit a parse tree produced by the `partitionFunctionRange` labeled alternative
	 * in {@see MySqlParser::partitionFunctionDefinition()}.
	 * @param $context The parse tree.
	 */
	public function exitPartitionFunctionRange(Context\PartitionFunctionRangeContext $context) : void;
	/**
	 * Enter a parse tree produced by the `partitionFunctionList`
	 * labeled alternative in {@see MySqlParser::partitionFunctionDefinition()}.
	 * @param $context The parse tree.
	 */
	public function enterPartitionFunctionList(Context\PartitionFunctionListContext $context) : void;
	/**
	 * Exit a parse tree produced by the `partitionFunctionList` labeled alternative
	 * in {@see MySqlParser::partitionFunctionDefinition()}.
	 * @param $context The parse tree.
	 */
	public function exitPartitionFunctionList(Context\PartitionFunctionListContext $context) : void;
	/**
	 * Enter a parse tree produced by the `subPartitionFunctionHash`
	 * labeled alternative in {@see MySqlParser::subpartitionFunctionDefinition()}.
	 * @param $context The parse tree.
	 */
	public function enterSubPartitionFunctionHash(Context\SubPartitionFunctionHashContext $context) : void;
	/**
	 * Exit a parse tree produced by the `subPartitionFunctionHash` labeled alternative
	 * in {@see MySqlParser::subpartitionFunctionDefinition()}.
	 * @param $context The parse tree.
	 */
	public function exitSubPartitionFunctionHash(Context\SubPartitionFunctionHashContext $context) : void;
	/**
	 * Enter a parse tree produced by the `subPartitionFunctionKey`
	 * labeled alternative in {@see MySqlParser::subpartitionFunctionDefinition()}.
	 * @param $context The parse tree.
	 */
	public function enterSubPartitionFunctionKey(Context\SubPartitionFunctionKeyContext $context) : void;
	/**
	 * Exit a parse tree produced by the `subPartitionFunctionKey` labeled alternative
	 * in {@see MySqlParser::subpartitionFunctionDefinition()}.
	 * @param $context The parse tree.
	 */
	public function exitSubPartitionFunctionKey(Context\SubPartitionFunctionKeyContext $context) : void;
	/**
	 * Enter a parse tree produced by the `partitionComparison`
	 * labeled alternative in {@see MySqlParser::partitionDefinition()}.
	 * @param $context The parse tree.
	 */
	public function enterPartitionComparison(Context\PartitionComparisonContext $context) : void;
	/**
	 * Exit a parse tree produced by the `partitionComparison` labeled alternative
	 * in {@see MySqlParser::partitionDefinition()}.
	 * @param $context The parse tree.
	 */
	public function exitPartitionComparison(Context\PartitionComparisonContext $context) : void;
	/**
	 * Enter a parse tree produced by the `partitionListAtom`
	 * labeled alternative in {@see MySqlParser::partitionDefinition()}.
	 * @param $context The parse tree.
	 */
	public function enterPartitionListAtom(Context\PartitionListAtomContext $context) : void;
	/**
	 * Exit a parse tree produced by the `partitionListAtom` labeled alternative
	 * in {@see MySqlParser::partitionDefinition()}.
	 * @param $context The parse tree.
	 */
	public function exitPartitionListAtom(Context\PartitionListAtomContext $context) : void;
	/**
	 * Enter a parse tree produced by the `partitionListVector`
	 * labeled alternative in {@see MySqlParser::partitionDefinition()}.
	 * @param $context The parse tree.
	 */
	public function enterPartitionListVector(Context\PartitionListVectorContext $context) : void;
	/**
	 * Exit a parse tree produced by the `partitionListVector` labeled alternative
	 * in {@see MySqlParser::partitionDefinition()}.
	 * @param $context The parse tree.
	 */
	public function exitPartitionListVector(Context\PartitionListVectorContext $context) : void;
	/**
	 * Enter a parse tree produced by the `partitionSimple`
	 * labeled alternative in {@see MySqlParser::partitionDefinition()}.
	 * @param $context The parse tree.
	 */
	public function enterPartitionSimple(Context\PartitionSimpleContext $context) : void;
	/**
	 * Exit a parse tree produced by the `partitionSimple` labeled alternative
	 * in {@see MySqlParser::partitionDefinition()}.
	 * @param $context The parse tree.
	 */
	public function exitPartitionSimple(Context\PartitionSimpleContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::partitionDefinerAtom()}.
	 * @param $context The parse tree.
	 */
	public function enterPartitionDefinerAtom(Context\PartitionDefinerAtomContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::partitionDefinerAtom()}.
	 * @param $context The parse tree.
	 */
	public function exitPartitionDefinerAtom(Context\PartitionDefinerAtomContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::partitionDefinerVector()}.
	 * @param $context The parse tree.
	 */
	public function enterPartitionDefinerVector(Context\PartitionDefinerVectorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::partitionDefinerVector()}.
	 * @param $context The parse tree.
	 */
	public function exitPartitionDefinerVector(Context\PartitionDefinerVectorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::subpartitionDefinition()}.
	 * @param $context The parse tree.
	 */
	public function enterSubpartitionDefinition(Context\SubpartitionDefinitionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::subpartitionDefinition()}.
	 * @param $context The parse tree.
	 */
	public function exitSubpartitionDefinition(Context\SubpartitionDefinitionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `partitionOptionEngine`
	 * labeled alternative in {@see MySqlParser::partitionOption()}.
	 * @param $context The parse tree.
	 */
	public function enterPartitionOptionEngine(Context\PartitionOptionEngineContext $context) : void;
	/**
	 * Exit a parse tree produced by the `partitionOptionEngine` labeled alternative
	 * in {@see MySqlParser::partitionOption()}.
	 * @param $context The parse tree.
	 */
	public function exitPartitionOptionEngine(Context\PartitionOptionEngineContext $context) : void;
	/**
	 * Enter a parse tree produced by the `partitionOptionComment`
	 * labeled alternative in {@see MySqlParser::partitionOption()}.
	 * @param $context The parse tree.
	 */
	public function enterPartitionOptionComment(Context\PartitionOptionCommentContext $context) : void;
	/**
	 * Exit a parse tree produced by the `partitionOptionComment` labeled alternative
	 * in {@see MySqlParser::partitionOption()}.
	 * @param $context The parse tree.
	 */
	public function exitPartitionOptionComment(Context\PartitionOptionCommentContext $context) : void;
	/**
	 * Enter a parse tree produced by the `partitionOptionDataDirectory`
	 * labeled alternative in {@see MySqlParser::partitionOption()}.
	 * @param $context The parse tree.
	 */
	public function enterPartitionOptionDataDirectory(Context\PartitionOptionDataDirectoryContext $context) : void;
	/**
	 * Exit a parse tree produced by the `partitionOptionDataDirectory` labeled alternative
	 * in {@see MySqlParser::partitionOption()}.
	 * @param $context The parse tree.
	 */
	public function exitPartitionOptionDataDirectory(Context\PartitionOptionDataDirectoryContext $context) : void;
	/**
	 * Enter a parse tree produced by the `partitionOptionIndexDirectory`
	 * labeled alternative in {@see MySqlParser::partitionOption()}.
	 * @param $context The parse tree.
	 */
	public function enterPartitionOptionIndexDirectory(Context\PartitionOptionIndexDirectoryContext $context) : void;
	/**
	 * Exit a parse tree produced by the `partitionOptionIndexDirectory` labeled alternative
	 * in {@see MySqlParser::partitionOption()}.
	 * @param $context The parse tree.
	 */
	public function exitPartitionOptionIndexDirectory(Context\PartitionOptionIndexDirectoryContext $context) : void;
	/**
	 * Enter a parse tree produced by the `partitionOptionMaxRows`
	 * labeled alternative in {@see MySqlParser::partitionOption()}.
	 * @param $context The parse tree.
	 */
	public function enterPartitionOptionMaxRows(Context\PartitionOptionMaxRowsContext $context) : void;
	/**
	 * Exit a parse tree produced by the `partitionOptionMaxRows` labeled alternative
	 * in {@see MySqlParser::partitionOption()}.
	 * @param $context The parse tree.
	 */
	public function exitPartitionOptionMaxRows(Context\PartitionOptionMaxRowsContext $context) : void;
	/**
	 * Enter a parse tree produced by the `partitionOptionMinRows`
	 * labeled alternative in {@see MySqlParser::partitionOption()}.
	 * @param $context The parse tree.
	 */
	public function enterPartitionOptionMinRows(Context\PartitionOptionMinRowsContext $context) : void;
	/**
	 * Exit a parse tree produced by the `partitionOptionMinRows` labeled alternative
	 * in {@see MySqlParser::partitionOption()}.
	 * @param $context The parse tree.
	 */
	public function exitPartitionOptionMinRows(Context\PartitionOptionMinRowsContext $context) : void;
	/**
	 * Enter a parse tree produced by the `partitionOptionTablespace`
	 * labeled alternative in {@see MySqlParser::partitionOption()}.
	 * @param $context The parse tree.
	 */
	public function enterPartitionOptionTablespace(Context\PartitionOptionTablespaceContext $context) : void;
	/**
	 * Exit a parse tree produced by the `partitionOptionTablespace` labeled alternative
	 * in {@see MySqlParser::partitionOption()}.
	 * @param $context The parse tree.
	 */
	public function exitPartitionOptionTablespace(Context\PartitionOptionTablespaceContext $context) : void;
	/**
	 * Enter a parse tree produced by the `partitionOptionNodeGroup`
	 * labeled alternative in {@see MySqlParser::partitionOption()}.
	 * @param $context The parse tree.
	 */
	public function enterPartitionOptionNodeGroup(Context\PartitionOptionNodeGroupContext $context) : void;
	/**
	 * Exit a parse tree produced by the `partitionOptionNodeGroup` labeled alternative
	 * in {@see MySqlParser::partitionOption()}.
	 * @param $context The parse tree.
	 */
	public function exitPartitionOptionNodeGroup(Context\PartitionOptionNodeGroupContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterSimpleDatabase`
	 * labeled alternative in {@see MySqlParser::alterDatabase()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterSimpleDatabase(Context\AlterSimpleDatabaseContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterSimpleDatabase` labeled alternative
	 * in {@see MySqlParser::alterDatabase()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterSimpleDatabase(Context\AlterSimpleDatabaseContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterUpgradeName`
	 * labeled alternative in {@see MySqlParser::alterDatabase()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterUpgradeName(Context\AlterUpgradeNameContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterUpgradeName` labeled alternative
	 * in {@see MySqlParser::alterDatabase()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterUpgradeName(Context\AlterUpgradeNameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::alterEvent()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterEvent(Context\AlterEventContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::alterEvent()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterEvent(Context\AlterEventContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::alterFunction()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterFunction(Context\AlterFunctionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::alterFunction()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterFunction(Context\AlterFunctionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::alterInstance()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterInstance(Context\AlterInstanceContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::alterInstance()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterInstance(Context\AlterInstanceContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::alterLogfileGroup()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterLogfileGroup(Context\AlterLogfileGroupContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::alterLogfileGroup()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterLogfileGroup(Context\AlterLogfileGroupContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::alterProcedure()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterProcedure(Context\AlterProcedureContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::alterProcedure()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterProcedure(Context\AlterProcedureContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::alterServer()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterServer(Context\AlterServerContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::alterServer()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterServer(Context\AlterServerContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::alterTable()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterTable(Context\AlterTableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::alterTable()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterTable(Context\AlterTableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::alterTablespace()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterTablespace(Context\AlterTablespaceContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::alterTablespace()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterTablespace(Context\AlterTablespaceContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::alterView()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterView(Context\AlterViewContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::alterView()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterView(Context\AlterViewContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByTableOption`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByTableOption(Context\AlterByTableOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByTableOption` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByTableOption(Context\AlterByTableOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByAddColumn`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByAddColumn(Context\AlterByAddColumnContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByAddColumn` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByAddColumn(Context\AlterByAddColumnContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByAddColumns`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByAddColumns(Context\AlterByAddColumnsContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByAddColumns` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByAddColumns(Context\AlterByAddColumnsContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByAddIndex`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByAddIndex(Context\AlterByAddIndexContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByAddIndex` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByAddIndex(Context\AlterByAddIndexContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByAddPrimaryKey`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByAddPrimaryKey(Context\AlterByAddPrimaryKeyContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByAddPrimaryKey` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByAddPrimaryKey(Context\AlterByAddPrimaryKeyContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByAddUniqueKey`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByAddUniqueKey(Context\AlterByAddUniqueKeyContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByAddUniqueKey` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByAddUniqueKey(Context\AlterByAddUniqueKeyContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByAddSpecialIndex`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByAddSpecialIndex(Context\AlterByAddSpecialIndexContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByAddSpecialIndex` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByAddSpecialIndex(Context\AlterByAddSpecialIndexContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByAddForeignKey`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByAddForeignKey(Context\AlterByAddForeignKeyContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByAddForeignKey` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByAddForeignKey(Context\AlterByAddForeignKeyContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByAddCheckTableConstraint`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByAddCheckTableConstraint(Context\AlterByAddCheckTableConstraintContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByAddCheckTableConstraint` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByAddCheckTableConstraint(Context\AlterByAddCheckTableConstraintContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterBySetAlgorithm`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterBySetAlgorithm(Context\AlterBySetAlgorithmContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterBySetAlgorithm` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterBySetAlgorithm(Context\AlterBySetAlgorithmContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByChangeDefault`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByChangeDefault(Context\AlterByChangeDefaultContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByChangeDefault` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByChangeDefault(Context\AlterByChangeDefaultContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByChangeColumn`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByChangeColumn(Context\AlterByChangeColumnContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByChangeColumn` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByChangeColumn(Context\AlterByChangeColumnContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByRenameColumn`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByRenameColumn(Context\AlterByRenameColumnContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByRenameColumn` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByRenameColumn(Context\AlterByRenameColumnContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByLock`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByLock(Context\AlterByLockContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByLock` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByLock(Context\AlterByLockContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByModifyColumn`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByModifyColumn(Context\AlterByModifyColumnContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByModifyColumn` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByModifyColumn(Context\AlterByModifyColumnContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByDropColumn`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByDropColumn(Context\AlterByDropColumnContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByDropColumn` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByDropColumn(Context\AlterByDropColumnContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByDropConstraintCheck`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByDropConstraintCheck(Context\AlterByDropConstraintCheckContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByDropConstraintCheck` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByDropConstraintCheck(Context\AlterByDropConstraintCheckContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByDropPrimaryKey`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByDropPrimaryKey(Context\AlterByDropPrimaryKeyContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByDropPrimaryKey` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByDropPrimaryKey(Context\AlterByDropPrimaryKeyContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByRenameIndex`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByRenameIndex(Context\AlterByRenameIndexContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByRenameIndex` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByRenameIndex(Context\AlterByRenameIndexContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByAlterIndexVisibility`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByAlterIndexVisibility(Context\AlterByAlterIndexVisibilityContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByAlterIndexVisibility` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByAlterIndexVisibility(Context\AlterByAlterIndexVisibilityContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByDropIndex`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByDropIndex(Context\AlterByDropIndexContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByDropIndex` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByDropIndex(Context\AlterByDropIndexContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByDropForeignKey`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByDropForeignKey(Context\AlterByDropForeignKeyContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByDropForeignKey` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByDropForeignKey(Context\AlterByDropForeignKeyContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByDisableKeys`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByDisableKeys(Context\AlterByDisableKeysContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByDisableKeys` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByDisableKeys(Context\AlterByDisableKeysContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByEnableKeys`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByEnableKeys(Context\AlterByEnableKeysContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByEnableKeys` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByEnableKeys(Context\AlterByEnableKeysContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByRename`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByRename(Context\AlterByRenameContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByRename` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByRename(Context\AlterByRenameContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByOrder`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByOrder(Context\AlterByOrderContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByOrder` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByOrder(Context\AlterByOrderContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByConvertCharset`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByConvertCharset(Context\AlterByConvertCharsetContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByConvertCharset` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByConvertCharset(Context\AlterByConvertCharsetContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByDefaultCharset`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByDefaultCharset(Context\AlterByDefaultCharsetContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByDefaultCharset` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByDefaultCharset(Context\AlterByDefaultCharsetContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByDiscardTablespace`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByDiscardTablespace(Context\AlterByDiscardTablespaceContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByDiscardTablespace` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByDiscardTablespace(Context\AlterByDiscardTablespaceContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByImportTablespace`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByImportTablespace(Context\AlterByImportTablespaceContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByImportTablespace` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByImportTablespace(Context\AlterByImportTablespaceContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByForce`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByForce(Context\AlterByForceContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByForce` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByForce(Context\AlterByForceContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByValidate`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByValidate(Context\AlterByValidateContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByValidate` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByValidate(Context\AlterByValidateContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByAddPartition`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByAddPartition(Context\AlterByAddPartitionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByAddPartition` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByAddPartition(Context\AlterByAddPartitionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByDropPartition`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByDropPartition(Context\AlterByDropPartitionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByDropPartition` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByDropPartition(Context\AlterByDropPartitionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByDiscardPartition`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByDiscardPartition(Context\AlterByDiscardPartitionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByDiscardPartition` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByDiscardPartition(Context\AlterByDiscardPartitionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByImportPartition`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByImportPartition(Context\AlterByImportPartitionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByImportPartition` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByImportPartition(Context\AlterByImportPartitionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByTruncatePartition`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByTruncatePartition(Context\AlterByTruncatePartitionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByTruncatePartition` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByTruncatePartition(Context\AlterByTruncatePartitionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByCoalescePartition`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByCoalescePartition(Context\AlterByCoalescePartitionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByCoalescePartition` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByCoalescePartition(Context\AlterByCoalescePartitionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByReorganizePartition`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByReorganizePartition(Context\AlterByReorganizePartitionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByReorganizePartition` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByReorganizePartition(Context\AlterByReorganizePartitionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByExchangePartition`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByExchangePartition(Context\AlterByExchangePartitionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByExchangePartition` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByExchangePartition(Context\AlterByExchangePartitionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByAnalyzePartition`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByAnalyzePartition(Context\AlterByAnalyzePartitionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByAnalyzePartition` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByAnalyzePartition(Context\AlterByAnalyzePartitionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByCheckPartition`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByCheckPartition(Context\AlterByCheckPartitionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByCheckPartition` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByCheckPartition(Context\AlterByCheckPartitionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByOptimizePartition`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByOptimizePartition(Context\AlterByOptimizePartitionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByOptimizePartition` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByOptimizePartition(Context\AlterByOptimizePartitionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByRebuildPartition`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByRebuildPartition(Context\AlterByRebuildPartitionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByRebuildPartition` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByRebuildPartition(Context\AlterByRebuildPartitionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByRepairPartition`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByRepairPartition(Context\AlterByRepairPartitionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByRepairPartition` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByRepairPartition(Context\AlterByRepairPartitionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByRemovePartitioning`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByRemovePartitioning(Context\AlterByRemovePartitioningContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByRemovePartitioning` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByRemovePartitioning(Context\AlterByRemovePartitioningContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterByUpgradePartitioning`
	 * labeled alternative in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterByUpgradePartitioning(Context\AlterByUpgradePartitioningContext $context) : void;
	/**
	 * Exit a parse tree produced by the `alterByUpgradePartitioning` labeled alternative
	 * in {@see MySqlParser::alterSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterByUpgradePartitioning(Context\AlterByUpgradePartitioningContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::dropDatabase()}.
	 * @param $context The parse tree.
	 */
	public function enterDropDatabase(Context\DropDatabaseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::dropDatabase()}.
	 * @param $context The parse tree.
	 */
	public function exitDropDatabase(Context\DropDatabaseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::dropEvent()}.
	 * @param $context The parse tree.
	 */
	public function enterDropEvent(Context\DropEventContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::dropEvent()}.
	 * @param $context The parse tree.
	 */
	public function exitDropEvent(Context\DropEventContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::dropIndex()}.
	 * @param $context The parse tree.
	 */
	public function enterDropIndex(Context\DropIndexContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::dropIndex()}.
	 * @param $context The parse tree.
	 */
	public function exitDropIndex(Context\DropIndexContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::dropLogfileGroup()}.
	 * @param $context The parse tree.
	 */
	public function enterDropLogfileGroup(Context\DropLogfileGroupContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::dropLogfileGroup()}.
	 * @param $context The parse tree.
	 */
	public function exitDropLogfileGroup(Context\DropLogfileGroupContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::dropProcedure()}.
	 * @param $context The parse tree.
	 */
	public function enterDropProcedure(Context\DropProcedureContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::dropProcedure()}.
	 * @param $context The parse tree.
	 */
	public function exitDropProcedure(Context\DropProcedureContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::dropFunction()}.
	 * @param $context The parse tree.
	 */
	public function enterDropFunction(Context\DropFunctionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::dropFunction()}.
	 * @param $context The parse tree.
	 */
	public function exitDropFunction(Context\DropFunctionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::dropServer()}.
	 * @param $context The parse tree.
	 */
	public function enterDropServer(Context\DropServerContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::dropServer()}.
	 * @param $context The parse tree.
	 */
	public function exitDropServer(Context\DropServerContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::dropTable()}.
	 * @param $context The parse tree.
	 */
	public function enterDropTable(Context\DropTableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::dropTable()}.
	 * @param $context The parse tree.
	 */
	public function exitDropTable(Context\DropTableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::dropTablespace()}.
	 * @param $context The parse tree.
	 */
	public function enterDropTablespace(Context\DropTablespaceContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::dropTablespace()}.
	 * @param $context The parse tree.
	 */
	public function exitDropTablespace(Context\DropTablespaceContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::dropTrigger()}.
	 * @param $context The parse tree.
	 */
	public function enterDropTrigger(Context\DropTriggerContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::dropTrigger()}.
	 * @param $context The parse tree.
	 */
	public function exitDropTrigger(Context\DropTriggerContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::dropView()}.
	 * @param $context The parse tree.
	 */
	public function enterDropView(Context\DropViewContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::dropView()}.
	 * @param $context The parse tree.
	 */
	public function exitDropView(Context\DropViewContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::renameTable()}.
	 * @param $context The parse tree.
	 */
	public function enterRenameTable(Context\RenameTableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::renameTable()}.
	 * @param $context The parse tree.
	 */
	public function exitRenameTable(Context\RenameTableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::renameTableClause()}.
	 * @param $context The parse tree.
	 */
	public function enterRenameTableClause(Context\RenameTableClauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::renameTableClause()}.
	 * @param $context The parse tree.
	 */
	public function exitRenameTableClause(Context\RenameTableClauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::truncateTable()}.
	 * @param $context The parse tree.
	 */
	public function enterTruncateTable(Context\TruncateTableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::truncateTable()}.
	 * @param $context The parse tree.
	 */
	public function exitTruncateTable(Context\TruncateTableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::callStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterCallStatement(Context\CallStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::callStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitCallStatement(Context\CallStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::deleteStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterDeleteStatement(Context\DeleteStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::deleteStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitDeleteStatement(Context\DeleteStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::doStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterDoStatement(Context\DoStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::doStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitDoStatement(Context\DoStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::handlerStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterHandlerStatement(Context\HandlerStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::handlerStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitHandlerStatement(Context\HandlerStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::insertStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterInsertStatement(Context\InsertStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::insertStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitInsertStatement(Context\InsertStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::loadDataStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterLoadDataStatement(Context\LoadDataStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::loadDataStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitLoadDataStatement(Context\LoadDataStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::loadXmlStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterLoadXmlStatement(Context\LoadXmlStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::loadXmlStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitLoadXmlStatement(Context\LoadXmlStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::replaceStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterReplaceStatement(Context\ReplaceStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::replaceStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitReplaceStatement(Context\ReplaceStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by the `simpleSelect`
	 * labeled alternative in {@see MySqlParser::selectStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterSimpleSelect(Context\SimpleSelectContext $context) : void;
	/**
	 * Exit a parse tree produced by the `simpleSelect` labeled alternative
	 * in {@see MySqlParser::selectStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitSimpleSelect(Context\SimpleSelectContext $context) : void;
	/**
	 * Enter a parse tree produced by the `parenthesisSelect`
	 * labeled alternative in {@see MySqlParser::selectStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterParenthesisSelect(Context\ParenthesisSelectContext $context) : void;
	/**
	 * Exit a parse tree produced by the `parenthesisSelect` labeled alternative
	 * in {@see MySqlParser::selectStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitParenthesisSelect(Context\ParenthesisSelectContext $context) : void;
	/**
	 * Enter a parse tree produced by the `unionSelect`
	 * labeled alternative in {@see MySqlParser::selectStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterUnionSelect(Context\UnionSelectContext $context) : void;
	/**
	 * Exit a parse tree produced by the `unionSelect` labeled alternative
	 * in {@see MySqlParser::selectStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitUnionSelect(Context\UnionSelectContext $context) : void;
	/**
	 * Enter a parse tree produced by the `unionParenthesisSelect`
	 * labeled alternative in {@see MySqlParser::selectStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterUnionParenthesisSelect(Context\UnionParenthesisSelectContext $context) : void;
	/**
	 * Exit a parse tree produced by the `unionParenthesisSelect` labeled alternative
	 * in {@see MySqlParser::selectStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitUnionParenthesisSelect(Context\UnionParenthesisSelectContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::updateStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterUpdateStatement(Context\UpdateStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::updateStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitUpdateStatement(Context\UpdateStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::insertStatementValue()}.
	 * @param $context The parse tree.
	 */
	public function enterInsertStatementValue(Context\InsertStatementValueContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::insertStatementValue()}.
	 * @param $context The parse tree.
	 */
	public function exitInsertStatementValue(Context\InsertStatementValueContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::updatedElement()}.
	 * @param $context The parse tree.
	 */
	public function enterUpdatedElement(Context\UpdatedElementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::updatedElement()}.
	 * @param $context The parse tree.
	 */
	public function exitUpdatedElement(Context\UpdatedElementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::assignmentField()}.
	 * @param $context The parse tree.
	 */
	public function enterAssignmentField(Context\AssignmentFieldContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::assignmentField()}.
	 * @param $context The parse tree.
	 */
	public function exitAssignmentField(Context\AssignmentFieldContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::lockClause()}.
	 * @param $context The parse tree.
	 */
	public function enterLockClause(Context\LockClauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::lockClause()}.
	 * @param $context The parse tree.
	 */
	public function exitLockClause(Context\LockClauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::singleDeleteStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterSingleDeleteStatement(Context\SingleDeleteStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::singleDeleteStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitSingleDeleteStatement(Context\SingleDeleteStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::multipleDeleteStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterMultipleDeleteStatement(Context\MultipleDeleteStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::multipleDeleteStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitMultipleDeleteStatement(Context\MultipleDeleteStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::handlerOpenStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterHandlerOpenStatement(Context\HandlerOpenStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::handlerOpenStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitHandlerOpenStatement(Context\HandlerOpenStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::handlerReadIndexStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterHandlerReadIndexStatement(Context\HandlerReadIndexStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::handlerReadIndexStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitHandlerReadIndexStatement(Context\HandlerReadIndexStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::handlerReadStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterHandlerReadStatement(Context\HandlerReadStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::handlerReadStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitHandlerReadStatement(Context\HandlerReadStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::handlerCloseStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterHandlerCloseStatement(Context\HandlerCloseStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::handlerCloseStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitHandlerCloseStatement(Context\HandlerCloseStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::singleUpdateStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterSingleUpdateStatement(Context\SingleUpdateStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::singleUpdateStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitSingleUpdateStatement(Context\SingleUpdateStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::multipleUpdateStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterMultipleUpdateStatement(Context\MultipleUpdateStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::multipleUpdateStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitMultipleUpdateStatement(Context\MultipleUpdateStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::orderByClause()}.
	 * @param $context The parse tree.
	 */
	public function enterOrderByClause(Context\OrderByClauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::orderByClause()}.
	 * @param $context The parse tree.
	 */
	public function exitOrderByClause(Context\OrderByClauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::orderByExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterOrderByExpression(Context\OrderByExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::orderByExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitOrderByExpression(Context\OrderByExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::tableSources()}.
	 * @param $context The parse tree.
	 */
	public function enterTableSources(Context\TableSourcesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::tableSources()}.
	 * @param $context The parse tree.
	 */
	public function exitTableSources(Context\TableSourcesContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableSourceBase`
	 * labeled alternative in {@see MySqlParser::tableSource()}.
	 * @param $context The parse tree.
	 */
	public function enterTableSourceBase(Context\TableSourceBaseContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableSourceBase` labeled alternative
	 * in {@see MySqlParser::tableSource()}.
	 * @param $context The parse tree.
	 */
	public function exitTableSourceBase(Context\TableSourceBaseContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableSourceNested`
	 * labeled alternative in {@see MySqlParser::tableSource()}.
	 * @param $context The parse tree.
	 */
	public function enterTableSourceNested(Context\TableSourceNestedContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableSourceNested` labeled alternative
	 * in {@see MySqlParser::tableSource()}.
	 * @param $context The parse tree.
	 */
	public function exitTableSourceNested(Context\TableSourceNestedContext $context) : void;
	/**
	 * Enter a parse tree produced by the `atomTableItem`
	 * labeled alternative in {@see MySqlParser::tableSourceItem()}.
	 * @param $context The parse tree.
	 */
	public function enterAtomTableItem(Context\AtomTableItemContext $context) : void;
	/**
	 * Exit a parse tree produced by the `atomTableItem` labeled alternative
	 * in {@see MySqlParser::tableSourceItem()}.
	 * @param $context The parse tree.
	 */
	public function exitAtomTableItem(Context\AtomTableItemContext $context) : void;
	/**
	 * Enter a parse tree produced by the `subqueryTableItem`
	 * labeled alternative in {@see MySqlParser::tableSourceItem()}.
	 * @param $context The parse tree.
	 */
	public function enterSubqueryTableItem(Context\SubqueryTableItemContext $context) : void;
	/**
	 * Exit a parse tree produced by the `subqueryTableItem` labeled alternative
	 * in {@see MySqlParser::tableSourceItem()}.
	 * @param $context The parse tree.
	 */
	public function exitSubqueryTableItem(Context\SubqueryTableItemContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableSourcesItem`
	 * labeled alternative in {@see MySqlParser::tableSourceItem()}.
	 * @param $context The parse tree.
	 */
	public function enterTableSourcesItem(Context\TableSourcesItemContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableSourcesItem` labeled alternative
	 * in {@see MySqlParser::tableSourceItem()}.
	 * @param $context The parse tree.
	 */
	public function exitTableSourcesItem(Context\TableSourcesItemContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::indexHint()}.
	 * @param $context The parse tree.
	 */
	public function enterIndexHint(Context\IndexHintContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::indexHint()}.
	 * @param $context The parse tree.
	 */
	public function exitIndexHint(Context\IndexHintContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::indexHintType()}.
	 * @param $context The parse tree.
	 */
	public function enterIndexHintType(Context\IndexHintTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::indexHintType()}.
	 * @param $context The parse tree.
	 */
	public function exitIndexHintType(Context\IndexHintTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by the `innerJoin`
	 * labeled alternative in {@see MySqlParser::joinPart()}.
	 * @param $context The parse tree.
	 */
	public function enterInnerJoin(Context\InnerJoinContext $context) : void;
	/**
	 * Exit a parse tree produced by the `innerJoin` labeled alternative
	 * in {@see MySqlParser::joinPart()}.
	 * @param $context The parse tree.
	 */
	public function exitInnerJoin(Context\InnerJoinContext $context) : void;
	/**
	 * Enter a parse tree produced by the `straightJoin`
	 * labeled alternative in {@see MySqlParser::joinPart()}.
	 * @param $context The parse tree.
	 */
	public function enterStraightJoin(Context\StraightJoinContext $context) : void;
	/**
	 * Exit a parse tree produced by the `straightJoin` labeled alternative
	 * in {@see MySqlParser::joinPart()}.
	 * @param $context The parse tree.
	 */
	public function exitStraightJoin(Context\StraightJoinContext $context) : void;
	/**
	 * Enter a parse tree produced by the `outerJoin`
	 * labeled alternative in {@see MySqlParser::joinPart()}.
	 * @param $context The parse tree.
	 */
	public function enterOuterJoin(Context\OuterJoinContext $context) : void;
	/**
	 * Exit a parse tree produced by the `outerJoin` labeled alternative
	 * in {@see MySqlParser::joinPart()}.
	 * @param $context The parse tree.
	 */
	public function exitOuterJoin(Context\OuterJoinContext $context) : void;
	/**
	 * Enter a parse tree produced by the `naturalJoin`
	 * labeled alternative in {@see MySqlParser::joinPart()}.
	 * @param $context The parse tree.
	 */
	public function enterNaturalJoin(Context\NaturalJoinContext $context) : void;
	/**
	 * Exit a parse tree produced by the `naturalJoin` labeled alternative
	 * in {@see MySqlParser::joinPart()}.
	 * @param $context The parse tree.
	 */
	public function exitNaturalJoin(Context\NaturalJoinContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::queryExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterQueryExpression(Context\QueryExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::queryExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitQueryExpression(Context\QueryExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::queryExpressionNointo()}.
	 * @param $context The parse tree.
	 */
	public function enterQueryExpressionNointo(Context\QueryExpressionNointoContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::queryExpressionNointo()}.
	 * @param $context The parse tree.
	 */
	public function exitQueryExpressionNointo(Context\QueryExpressionNointoContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::querySpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterQuerySpecification(Context\QuerySpecificationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::querySpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitQuerySpecification(Context\QuerySpecificationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::querySpecificationNointo()}.
	 * @param $context The parse tree.
	 */
	public function enterQuerySpecificationNointo(Context\QuerySpecificationNointoContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::querySpecificationNointo()}.
	 * @param $context The parse tree.
	 */
	public function exitQuerySpecificationNointo(Context\QuerySpecificationNointoContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::unionParenthesis()}.
	 * @param $context The parse tree.
	 */
	public function enterUnionParenthesis(Context\UnionParenthesisContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::unionParenthesis()}.
	 * @param $context The parse tree.
	 */
	public function exitUnionParenthesis(Context\UnionParenthesisContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::unionStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterUnionStatement(Context\UnionStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::unionStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitUnionStatement(Context\UnionStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::selectSpec()}.
	 * @param $context The parse tree.
	 */
	public function enterSelectSpec(Context\SelectSpecContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::selectSpec()}.
	 * @param $context The parse tree.
	 */
	public function exitSelectSpec(Context\SelectSpecContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::selectElements()}.
	 * @param $context The parse tree.
	 */
	public function enterSelectElements(Context\SelectElementsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::selectElements()}.
	 * @param $context The parse tree.
	 */
	public function exitSelectElements(Context\SelectElementsContext $context) : void;
	/**
	 * Enter a parse tree produced by the `selectStarElement`
	 * labeled alternative in {@see MySqlParser::selectElement()}.
	 * @param $context The parse tree.
	 */
	public function enterSelectStarElement(Context\SelectStarElementContext $context) : void;
	/**
	 * Exit a parse tree produced by the `selectStarElement` labeled alternative
	 * in {@see MySqlParser::selectElement()}.
	 * @param $context The parse tree.
	 */
	public function exitSelectStarElement(Context\SelectStarElementContext $context) : void;
	/**
	 * Enter a parse tree produced by the `selectColumnElement`
	 * labeled alternative in {@see MySqlParser::selectElement()}.
	 * @param $context The parse tree.
	 */
	public function enterSelectColumnElement(Context\SelectColumnElementContext $context) : void;
	/**
	 * Exit a parse tree produced by the `selectColumnElement` labeled alternative
	 * in {@see MySqlParser::selectElement()}.
	 * @param $context The parse tree.
	 */
	public function exitSelectColumnElement(Context\SelectColumnElementContext $context) : void;
	/**
	 * Enter a parse tree produced by the `selectFunctionElement`
	 * labeled alternative in {@see MySqlParser::selectElement()}.
	 * @param $context The parse tree.
	 */
	public function enterSelectFunctionElement(Context\SelectFunctionElementContext $context) : void;
	/**
	 * Exit a parse tree produced by the `selectFunctionElement` labeled alternative
	 * in {@see MySqlParser::selectElement()}.
	 * @param $context The parse tree.
	 */
	public function exitSelectFunctionElement(Context\SelectFunctionElementContext $context) : void;
	/**
	 * Enter a parse tree produced by the `selectExpressionElement`
	 * labeled alternative in {@see MySqlParser::selectElement()}.
	 * @param $context The parse tree.
	 */
	public function enterSelectExpressionElement(Context\SelectExpressionElementContext $context) : void;
	/**
	 * Exit a parse tree produced by the `selectExpressionElement` labeled alternative
	 * in {@see MySqlParser::selectElement()}.
	 * @param $context The parse tree.
	 */
	public function exitSelectExpressionElement(Context\SelectExpressionElementContext $context) : void;
	/**
	 * Enter a parse tree produced by the `selectIntoVariables`
	 * labeled alternative in {@see MySqlParser::selectIntoExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterSelectIntoVariables(Context\SelectIntoVariablesContext $context) : void;
	/**
	 * Exit a parse tree produced by the `selectIntoVariables` labeled alternative
	 * in {@see MySqlParser::selectIntoExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitSelectIntoVariables(Context\SelectIntoVariablesContext $context) : void;
	/**
	 * Enter a parse tree produced by the `selectIntoDumpFile`
	 * labeled alternative in {@see MySqlParser::selectIntoExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterSelectIntoDumpFile(Context\SelectIntoDumpFileContext $context) : void;
	/**
	 * Exit a parse tree produced by the `selectIntoDumpFile` labeled alternative
	 * in {@see MySqlParser::selectIntoExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitSelectIntoDumpFile(Context\SelectIntoDumpFileContext $context) : void;
	/**
	 * Enter a parse tree produced by the `selectIntoTextFile`
	 * labeled alternative in {@see MySqlParser::selectIntoExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterSelectIntoTextFile(Context\SelectIntoTextFileContext $context) : void;
	/**
	 * Exit a parse tree produced by the `selectIntoTextFile` labeled alternative
	 * in {@see MySqlParser::selectIntoExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitSelectIntoTextFile(Context\SelectIntoTextFileContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::selectFieldsInto()}.
	 * @param $context The parse tree.
	 */
	public function enterSelectFieldsInto(Context\SelectFieldsIntoContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::selectFieldsInto()}.
	 * @param $context The parse tree.
	 */
	public function exitSelectFieldsInto(Context\SelectFieldsIntoContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::selectLinesInto()}.
	 * @param $context The parse tree.
	 */
	public function enterSelectLinesInto(Context\SelectLinesIntoContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::selectLinesInto()}.
	 * @param $context The parse tree.
	 */
	public function exitSelectLinesInto(Context\SelectLinesIntoContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::fromClause()}.
	 * @param $context The parse tree.
	 */
	public function enterFromClause(Context\FromClauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::fromClause()}.
	 * @param $context The parse tree.
	 */
	public function exitFromClause(Context\FromClauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::groupByClause()}.
	 * @param $context The parse tree.
	 */
	public function enterGroupByClause(Context\GroupByClauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::groupByClause()}.
	 * @param $context The parse tree.
	 */
	public function exitGroupByClause(Context\GroupByClauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::havingClause()}.
	 * @param $context The parse tree.
	 */
	public function enterHavingClause(Context\HavingClauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::havingClause()}.
	 * @param $context The parse tree.
	 */
	public function exitHavingClause(Context\HavingClauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::windowClause()}.
	 * @param $context The parse tree.
	 */
	public function enterWindowClause(Context\WindowClauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::windowClause()}.
	 * @param $context The parse tree.
	 */
	public function exitWindowClause(Context\WindowClauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::groupByItem()}.
	 * @param $context The parse tree.
	 */
	public function enterGroupByItem(Context\GroupByItemContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::groupByItem()}.
	 * @param $context The parse tree.
	 */
	public function exitGroupByItem(Context\GroupByItemContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::limitClause()}.
	 * @param $context The parse tree.
	 */
	public function enterLimitClause(Context\LimitClauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::limitClause()}.
	 * @param $context The parse tree.
	 */
	public function exitLimitClause(Context\LimitClauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::limitClauseAtom()}.
	 * @param $context The parse tree.
	 */
	public function enterLimitClauseAtom(Context\LimitClauseAtomContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::limitClauseAtom()}.
	 * @param $context The parse tree.
	 */
	public function exitLimitClauseAtom(Context\LimitClauseAtomContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::startTransaction()}.
	 * @param $context The parse tree.
	 */
	public function enterStartTransaction(Context\StartTransactionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::startTransaction()}.
	 * @param $context The parse tree.
	 */
	public function exitStartTransaction(Context\StartTransactionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::beginWork()}.
	 * @param $context The parse tree.
	 */
	public function enterBeginWork(Context\BeginWorkContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::beginWork()}.
	 * @param $context The parse tree.
	 */
	public function exitBeginWork(Context\BeginWorkContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::commitWork()}.
	 * @param $context The parse tree.
	 */
	public function enterCommitWork(Context\CommitWorkContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::commitWork()}.
	 * @param $context The parse tree.
	 */
	public function exitCommitWork(Context\CommitWorkContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::rollbackWork()}.
	 * @param $context The parse tree.
	 */
	public function enterRollbackWork(Context\RollbackWorkContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::rollbackWork()}.
	 * @param $context The parse tree.
	 */
	public function exitRollbackWork(Context\RollbackWorkContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::savepointStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterSavepointStatement(Context\SavepointStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::savepointStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitSavepointStatement(Context\SavepointStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::rollbackStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterRollbackStatement(Context\RollbackStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::rollbackStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitRollbackStatement(Context\RollbackStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::releaseStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterReleaseStatement(Context\ReleaseStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::releaseStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitReleaseStatement(Context\ReleaseStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::lockTables()}.
	 * @param $context The parse tree.
	 */
	public function enterLockTables(Context\LockTablesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::lockTables()}.
	 * @param $context The parse tree.
	 */
	public function exitLockTables(Context\LockTablesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::unlockTables()}.
	 * @param $context The parse tree.
	 */
	public function enterUnlockTables(Context\UnlockTablesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::unlockTables()}.
	 * @param $context The parse tree.
	 */
	public function exitUnlockTables(Context\UnlockTablesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::setAutocommitStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterSetAutocommitStatement(Context\SetAutocommitStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::setAutocommitStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitSetAutocommitStatement(Context\SetAutocommitStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::setTransactionStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterSetTransactionStatement(Context\SetTransactionStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::setTransactionStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitSetTransactionStatement(Context\SetTransactionStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::transactionMode()}.
	 * @param $context The parse tree.
	 */
	public function enterTransactionMode(Context\TransactionModeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::transactionMode()}.
	 * @param $context The parse tree.
	 */
	public function exitTransactionMode(Context\TransactionModeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::lockTableElement()}.
	 * @param $context The parse tree.
	 */
	public function enterLockTableElement(Context\LockTableElementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::lockTableElement()}.
	 * @param $context The parse tree.
	 */
	public function exitLockTableElement(Context\LockTableElementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::lockAction()}.
	 * @param $context The parse tree.
	 */
	public function enterLockAction(Context\LockActionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::lockAction()}.
	 * @param $context The parse tree.
	 */
	public function exitLockAction(Context\LockActionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::transactionOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTransactionOption(Context\TransactionOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::transactionOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTransactionOption(Context\TransactionOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::transactionLevel()}.
	 * @param $context The parse tree.
	 */
	public function enterTransactionLevel(Context\TransactionLevelContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::transactionLevel()}.
	 * @param $context The parse tree.
	 */
	public function exitTransactionLevel(Context\TransactionLevelContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::changeMaster()}.
	 * @param $context The parse tree.
	 */
	public function enterChangeMaster(Context\ChangeMasterContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::changeMaster()}.
	 * @param $context The parse tree.
	 */
	public function exitChangeMaster(Context\ChangeMasterContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::changeReplicationFilter()}.
	 * @param $context The parse tree.
	 */
	public function enterChangeReplicationFilter(Context\ChangeReplicationFilterContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::changeReplicationFilter()}.
	 * @param $context The parse tree.
	 */
	public function exitChangeReplicationFilter(Context\ChangeReplicationFilterContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::purgeBinaryLogs()}.
	 * @param $context The parse tree.
	 */
	public function enterPurgeBinaryLogs(Context\PurgeBinaryLogsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::purgeBinaryLogs()}.
	 * @param $context The parse tree.
	 */
	public function exitPurgeBinaryLogs(Context\PurgeBinaryLogsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::resetMaster()}.
	 * @param $context The parse tree.
	 */
	public function enterResetMaster(Context\ResetMasterContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::resetMaster()}.
	 * @param $context The parse tree.
	 */
	public function exitResetMaster(Context\ResetMasterContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::resetSlave()}.
	 * @param $context The parse tree.
	 */
	public function enterResetSlave(Context\ResetSlaveContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::resetSlave()}.
	 * @param $context The parse tree.
	 */
	public function exitResetSlave(Context\ResetSlaveContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::startSlave()}.
	 * @param $context The parse tree.
	 */
	public function enterStartSlave(Context\StartSlaveContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::startSlave()}.
	 * @param $context The parse tree.
	 */
	public function exitStartSlave(Context\StartSlaveContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::stopSlave()}.
	 * @param $context The parse tree.
	 */
	public function enterStopSlave(Context\StopSlaveContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::stopSlave()}.
	 * @param $context The parse tree.
	 */
	public function exitStopSlave(Context\StopSlaveContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::startGroupReplication()}.
	 * @param $context The parse tree.
	 */
	public function enterStartGroupReplication(Context\StartGroupReplicationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::startGroupReplication()}.
	 * @param $context The parse tree.
	 */
	public function exitStartGroupReplication(Context\StartGroupReplicationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::stopGroupReplication()}.
	 * @param $context The parse tree.
	 */
	public function enterStopGroupReplication(Context\StopGroupReplicationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::stopGroupReplication()}.
	 * @param $context The parse tree.
	 */
	public function exitStopGroupReplication(Context\StopGroupReplicationContext $context) : void;
	/**
	 * Enter a parse tree produced by the `masterStringOption`
	 * labeled alternative in {@see MySqlParser::masterOption()}.
	 * @param $context The parse tree.
	 */
	public function enterMasterStringOption(Context\MasterStringOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `masterStringOption` labeled alternative
	 * in {@see MySqlParser::masterOption()}.
	 * @param $context The parse tree.
	 */
	public function exitMasterStringOption(Context\MasterStringOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `masterDecimalOption`
	 * labeled alternative in {@see MySqlParser::masterOption()}.
	 * @param $context The parse tree.
	 */
	public function enterMasterDecimalOption(Context\MasterDecimalOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `masterDecimalOption` labeled alternative
	 * in {@see MySqlParser::masterOption()}.
	 * @param $context The parse tree.
	 */
	public function exitMasterDecimalOption(Context\MasterDecimalOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `masterBoolOption`
	 * labeled alternative in {@see MySqlParser::masterOption()}.
	 * @param $context The parse tree.
	 */
	public function enterMasterBoolOption(Context\MasterBoolOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `masterBoolOption` labeled alternative
	 * in {@see MySqlParser::masterOption()}.
	 * @param $context The parse tree.
	 */
	public function exitMasterBoolOption(Context\MasterBoolOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `masterRealOption`
	 * labeled alternative in {@see MySqlParser::masterOption()}.
	 * @param $context The parse tree.
	 */
	public function enterMasterRealOption(Context\MasterRealOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `masterRealOption` labeled alternative
	 * in {@see MySqlParser::masterOption()}.
	 * @param $context The parse tree.
	 */
	public function exitMasterRealOption(Context\MasterRealOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `masterUidListOption`
	 * labeled alternative in {@see MySqlParser::masterOption()}.
	 * @param $context The parse tree.
	 */
	public function enterMasterUidListOption(Context\MasterUidListOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `masterUidListOption` labeled alternative
	 * in {@see MySqlParser::masterOption()}.
	 * @param $context The parse tree.
	 */
	public function exitMasterUidListOption(Context\MasterUidListOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::stringMasterOption()}.
	 * @param $context The parse tree.
	 */
	public function enterStringMasterOption(Context\StringMasterOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::stringMasterOption()}.
	 * @param $context The parse tree.
	 */
	public function exitStringMasterOption(Context\StringMasterOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::decimalMasterOption()}.
	 * @param $context The parse tree.
	 */
	public function enterDecimalMasterOption(Context\DecimalMasterOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::decimalMasterOption()}.
	 * @param $context The parse tree.
	 */
	public function exitDecimalMasterOption(Context\DecimalMasterOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::boolMasterOption()}.
	 * @param $context The parse tree.
	 */
	public function enterBoolMasterOption(Context\BoolMasterOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::boolMasterOption()}.
	 * @param $context The parse tree.
	 */
	public function exitBoolMasterOption(Context\BoolMasterOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::channelOption()}.
	 * @param $context The parse tree.
	 */
	public function enterChannelOption(Context\ChannelOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::channelOption()}.
	 * @param $context The parse tree.
	 */
	public function exitChannelOption(Context\ChannelOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `doDbReplication`
	 * labeled alternative in {@see MySqlParser::replicationFilter()}.
	 * @param $context The parse tree.
	 */
	public function enterDoDbReplication(Context\DoDbReplicationContext $context) : void;
	/**
	 * Exit a parse tree produced by the `doDbReplication` labeled alternative
	 * in {@see MySqlParser::replicationFilter()}.
	 * @param $context The parse tree.
	 */
	public function exitDoDbReplication(Context\DoDbReplicationContext $context) : void;
	/**
	 * Enter a parse tree produced by the `ignoreDbReplication`
	 * labeled alternative in {@see MySqlParser::replicationFilter()}.
	 * @param $context The parse tree.
	 */
	public function enterIgnoreDbReplication(Context\IgnoreDbReplicationContext $context) : void;
	/**
	 * Exit a parse tree produced by the `ignoreDbReplication` labeled alternative
	 * in {@see MySqlParser::replicationFilter()}.
	 * @param $context The parse tree.
	 */
	public function exitIgnoreDbReplication(Context\IgnoreDbReplicationContext $context) : void;
	/**
	 * Enter a parse tree produced by the `doTableReplication`
	 * labeled alternative in {@see MySqlParser::replicationFilter()}.
	 * @param $context The parse tree.
	 */
	public function enterDoTableReplication(Context\DoTableReplicationContext $context) : void;
	/**
	 * Exit a parse tree produced by the `doTableReplication` labeled alternative
	 * in {@see MySqlParser::replicationFilter()}.
	 * @param $context The parse tree.
	 */
	public function exitDoTableReplication(Context\DoTableReplicationContext $context) : void;
	/**
	 * Enter a parse tree produced by the `ignoreTableReplication`
	 * labeled alternative in {@see MySqlParser::replicationFilter()}.
	 * @param $context The parse tree.
	 */
	public function enterIgnoreTableReplication(Context\IgnoreTableReplicationContext $context) : void;
	/**
	 * Exit a parse tree produced by the `ignoreTableReplication` labeled alternative
	 * in {@see MySqlParser::replicationFilter()}.
	 * @param $context The parse tree.
	 */
	public function exitIgnoreTableReplication(Context\IgnoreTableReplicationContext $context) : void;
	/**
	 * Enter a parse tree produced by the `wildDoTableReplication`
	 * labeled alternative in {@see MySqlParser::replicationFilter()}.
	 * @param $context The parse tree.
	 */
	public function enterWildDoTableReplication(Context\WildDoTableReplicationContext $context) : void;
	/**
	 * Exit a parse tree produced by the `wildDoTableReplication` labeled alternative
	 * in {@see MySqlParser::replicationFilter()}.
	 * @param $context The parse tree.
	 */
	public function exitWildDoTableReplication(Context\WildDoTableReplicationContext $context) : void;
	/**
	 * Enter a parse tree produced by the `wildIgnoreTableReplication`
	 * labeled alternative in {@see MySqlParser::replicationFilter()}.
	 * @param $context The parse tree.
	 */
	public function enterWildIgnoreTableReplication(Context\WildIgnoreTableReplicationContext $context) : void;
	/**
	 * Exit a parse tree produced by the `wildIgnoreTableReplication` labeled alternative
	 * in {@see MySqlParser::replicationFilter()}.
	 * @param $context The parse tree.
	 */
	public function exitWildIgnoreTableReplication(Context\WildIgnoreTableReplicationContext $context) : void;
	/**
	 * Enter a parse tree produced by the `rewriteDbReplication`
	 * labeled alternative in {@see MySqlParser::replicationFilter()}.
	 * @param $context The parse tree.
	 */
	public function enterRewriteDbReplication(Context\RewriteDbReplicationContext $context) : void;
	/**
	 * Exit a parse tree produced by the `rewriteDbReplication` labeled alternative
	 * in {@see MySqlParser::replicationFilter()}.
	 * @param $context The parse tree.
	 */
	public function exitRewriteDbReplication(Context\RewriteDbReplicationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::tablePair()}.
	 * @param $context The parse tree.
	 */
	public function enterTablePair(Context\TablePairContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::tablePair()}.
	 * @param $context The parse tree.
	 */
	public function exitTablePair(Context\TablePairContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::threadType()}.
	 * @param $context The parse tree.
	 */
	public function enterThreadType(Context\ThreadTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::threadType()}.
	 * @param $context The parse tree.
	 */
	public function exitThreadType(Context\ThreadTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by the `gtidsUntilOption`
	 * labeled alternative in {@see MySqlParser::untilOption()}.
	 * @param $context The parse tree.
	 */
	public function enterGtidsUntilOption(Context\GtidsUntilOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `gtidsUntilOption` labeled alternative
	 * in {@see MySqlParser::untilOption()}.
	 * @param $context The parse tree.
	 */
	public function exitGtidsUntilOption(Context\GtidsUntilOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `masterLogUntilOption`
	 * labeled alternative in {@see MySqlParser::untilOption()}.
	 * @param $context The parse tree.
	 */
	public function enterMasterLogUntilOption(Context\MasterLogUntilOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `masterLogUntilOption` labeled alternative
	 * in {@see MySqlParser::untilOption()}.
	 * @param $context The parse tree.
	 */
	public function exitMasterLogUntilOption(Context\MasterLogUntilOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `relayLogUntilOption`
	 * labeled alternative in {@see MySqlParser::untilOption()}.
	 * @param $context The parse tree.
	 */
	public function enterRelayLogUntilOption(Context\RelayLogUntilOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `relayLogUntilOption` labeled alternative
	 * in {@see MySqlParser::untilOption()}.
	 * @param $context The parse tree.
	 */
	public function exitRelayLogUntilOption(Context\RelayLogUntilOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `sqlGapsUntilOption`
	 * labeled alternative in {@see MySqlParser::untilOption()}.
	 * @param $context The parse tree.
	 */
	public function enterSqlGapsUntilOption(Context\SqlGapsUntilOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `sqlGapsUntilOption` labeled alternative
	 * in {@see MySqlParser::untilOption()}.
	 * @param $context The parse tree.
	 */
	public function exitSqlGapsUntilOption(Context\SqlGapsUntilOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `userConnectionOption`
	 * labeled alternative in {@see MySqlParser::connectionOption()}.
	 * @param $context The parse tree.
	 */
	public function enterUserConnectionOption(Context\UserConnectionOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `userConnectionOption` labeled alternative
	 * in {@see MySqlParser::connectionOption()}.
	 * @param $context The parse tree.
	 */
	public function exitUserConnectionOption(Context\UserConnectionOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `passwordConnectionOption`
	 * labeled alternative in {@see MySqlParser::connectionOption()}.
	 * @param $context The parse tree.
	 */
	public function enterPasswordConnectionOption(Context\PasswordConnectionOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `passwordConnectionOption` labeled alternative
	 * in {@see MySqlParser::connectionOption()}.
	 * @param $context The parse tree.
	 */
	public function exitPasswordConnectionOption(Context\PasswordConnectionOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `defaultAuthConnectionOption`
	 * labeled alternative in {@see MySqlParser::connectionOption()}.
	 * @param $context The parse tree.
	 */
	public function enterDefaultAuthConnectionOption(Context\DefaultAuthConnectionOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `defaultAuthConnectionOption` labeled alternative
	 * in {@see MySqlParser::connectionOption()}.
	 * @param $context The parse tree.
	 */
	public function exitDefaultAuthConnectionOption(Context\DefaultAuthConnectionOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `pluginDirConnectionOption`
	 * labeled alternative in {@see MySqlParser::connectionOption()}.
	 * @param $context The parse tree.
	 */
	public function enterPluginDirConnectionOption(Context\PluginDirConnectionOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `pluginDirConnectionOption` labeled alternative
	 * in {@see MySqlParser::connectionOption()}.
	 * @param $context The parse tree.
	 */
	public function exitPluginDirConnectionOption(Context\PluginDirConnectionOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::gtuidSet()}.
	 * @param $context The parse tree.
	 */
	public function enterGtuidSet(Context\GtuidSetContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::gtuidSet()}.
	 * @param $context The parse tree.
	 */
	public function exitGtuidSet(Context\GtuidSetContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::xaStartTransaction()}.
	 * @param $context The parse tree.
	 */
	public function enterXaStartTransaction(Context\XaStartTransactionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::xaStartTransaction()}.
	 * @param $context The parse tree.
	 */
	public function exitXaStartTransaction(Context\XaStartTransactionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::xaEndTransaction()}.
	 * @param $context The parse tree.
	 */
	public function enterXaEndTransaction(Context\XaEndTransactionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::xaEndTransaction()}.
	 * @param $context The parse tree.
	 */
	public function exitXaEndTransaction(Context\XaEndTransactionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::xaPrepareStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterXaPrepareStatement(Context\XaPrepareStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::xaPrepareStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitXaPrepareStatement(Context\XaPrepareStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::xaCommitWork()}.
	 * @param $context The parse tree.
	 */
	public function enterXaCommitWork(Context\XaCommitWorkContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::xaCommitWork()}.
	 * @param $context The parse tree.
	 */
	public function exitXaCommitWork(Context\XaCommitWorkContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::xaRollbackWork()}.
	 * @param $context The parse tree.
	 */
	public function enterXaRollbackWork(Context\XaRollbackWorkContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::xaRollbackWork()}.
	 * @param $context The parse tree.
	 */
	public function exitXaRollbackWork(Context\XaRollbackWorkContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::xaRecoverWork()}.
	 * @param $context The parse tree.
	 */
	public function enterXaRecoverWork(Context\XaRecoverWorkContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::xaRecoverWork()}.
	 * @param $context The parse tree.
	 */
	public function exitXaRecoverWork(Context\XaRecoverWorkContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::prepareStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterPrepareStatement(Context\PrepareStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::prepareStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitPrepareStatement(Context\PrepareStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::executeStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterExecuteStatement(Context\ExecuteStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::executeStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitExecuteStatement(Context\ExecuteStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::deallocatePrepare()}.
	 * @param $context The parse tree.
	 */
	public function enterDeallocatePrepare(Context\DeallocatePrepareContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::deallocatePrepare()}.
	 * @param $context The parse tree.
	 */
	public function exitDeallocatePrepare(Context\DeallocatePrepareContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::routineBody()}.
	 * @param $context The parse tree.
	 */
	public function enterRoutineBody(Context\RoutineBodyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::routineBody()}.
	 * @param $context The parse tree.
	 */
	public function exitRoutineBody(Context\RoutineBodyContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::blockStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterBlockStatement(Context\BlockStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::blockStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitBlockStatement(Context\BlockStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::caseStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterCaseStatement(Context\CaseStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::caseStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitCaseStatement(Context\CaseStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::ifStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterIfStatement(Context\IfStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::ifStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitIfStatement(Context\IfStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::iterateStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterIterateStatement(Context\IterateStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::iterateStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitIterateStatement(Context\IterateStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::leaveStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterLeaveStatement(Context\LeaveStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::leaveStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitLeaveStatement(Context\LeaveStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::loopStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterLoopStatement(Context\LoopStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::loopStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitLoopStatement(Context\LoopStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::repeatStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterRepeatStatement(Context\RepeatStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::repeatStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitRepeatStatement(Context\RepeatStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::returnStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterReturnStatement(Context\ReturnStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::returnStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitReturnStatement(Context\ReturnStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::whileStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterWhileStatement(Context\WhileStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::whileStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitWhileStatement(Context\WhileStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by the `CloseCursor`
	 * labeled alternative in {@see MySqlParser::cursorStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterCloseCursor(Context\CloseCursorContext $context) : void;
	/**
	 * Exit a parse tree produced by the `CloseCursor` labeled alternative
	 * in {@see MySqlParser::cursorStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitCloseCursor(Context\CloseCursorContext $context) : void;
	/**
	 * Enter a parse tree produced by the `FetchCursor`
	 * labeled alternative in {@see MySqlParser::cursorStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterFetchCursor(Context\FetchCursorContext $context) : void;
	/**
	 * Exit a parse tree produced by the `FetchCursor` labeled alternative
	 * in {@see MySqlParser::cursorStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitFetchCursor(Context\FetchCursorContext $context) : void;
	/**
	 * Enter a parse tree produced by the `OpenCursor`
	 * labeled alternative in {@see MySqlParser::cursorStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterOpenCursor(Context\OpenCursorContext $context) : void;
	/**
	 * Exit a parse tree produced by the `OpenCursor` labeled alternative
	 * in {@see MySqlParser::cursorStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitOpenCursor(Context\OpenCursorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::declareVariable()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclareVariable(Context\DeclareVariableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::declareVariable()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclareVariable(Context\DeclareVariableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::declareCondition()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclareCondition(Context\DeclareConditionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::declareCondition()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclareCondition(Context\DeclareConditionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::declareCursor()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclareCursor(Context\DeclareCursorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::declareCursor()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclareCursor(Context\DeclareCursorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::declareHandler()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclareHandler(Context\DeclareHandlerContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::declareHandler()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclareHandler(Context\DeclareHandlerContext $context) : void;
	/**
	 * Enter a parse tree produced by the `handlerConditionCode`
	 * labeled alternative in {@see MySqlParser::handlerConditionValue()}.
	 * @param $context The parse tree.
	 */
	public function enterHandlerConditionCode(Context\HandlerConditionCodeContext $context) : void;
	/**
	 * Exit a parse tree produced by the `handlerConditionCode` labeled alternative
	 * in {@see MySqlParser::handlerConditionValue()}.
	 * @param $context The parse tree.
	 */
	public function exitHandlerConditionCode(Context\HandlerConditionCodeContext $context) : void;
	/**
	 * Enter a parse tree produced by the `handlerConditionState`
	 * labeled alternative in {@see MySqlParser::handlerConditionValue()}.
	 * @param $context The parse tree.
	 */
	public function enterHandlerConditionState(Context\HandlerConditionStateContext $context) : void;
	/**
	 * Exit a parse tree produced by the `handlerConditionState` labeled alternative
	 * in {@see MySqlParser::handlerConditionValue()}.
	 * @param $context The parse tree.
	 */
	public function exitHandlerConditionState(Context\HandlerConditionStateContext $context) : void;
	/**
	 * Enter a parse tree produced by the `handlerConditionName`
	 * labeled alternative in {@see MySqlParser::handlerConditionValue()}.
	 * @param $context The parse tree.
	 */
	public function enterHandlerConditionName(Context\HandlerConditionNameContext $context) : void;
	/**
	 * Exit a parse tree produced by the `handlerConditionName` labeled alternative
	 * in {@see MySqlParser::handlerConditionValue()}.
	 * @param $context The parse tree.
	 */
	public function exitHandlerConditionName(Context\HandlerConditionNameContext $context) : void;
	/**
	 * Enter a parse tree produced by the `handlerConditionWarning`
	 * labeled alternative in {@see MySqlParser::handlerConditionValue()}.
	 * @param $context The parse tree.
	 */
	public function enterHandlerConditionWarning(Context\HandlerConditionWarningContext $context) : void;
	/**
	 * Exit a parse tree produced by the `handlerConditionWarning` labeled alternative
	 * in {@see MySqlParser::handlerConditionValue()}.
	 * @param $context The parse tree.
	 */
	public function exitHandlerConditionWarning(Context\HandlerConditionWarningContext $context) : void;
	/**
	 * Enter a parse tree produced by the `handlerConditionNotfound`
	 * labeled alternative in {@see MySqlParser::handlerConditionValue()}.
	 * @param $context The parse tree.
	 */
	public function enterHandlerConditionNotfound(Context\HandlerConditionNotfoundContext $context) : void;
	/**
	 * Exit a parse tree produced by the `handlerConditionNotfound` labeled alternative
	 * in {@see MySqlParser::handlerConditionValue()}.
	 * @param $context The parse tree.
	 */
	public function exitHandlerConditionNotfound(Context\HandlerConditionNotfoundContext $context) : void;
	/**
	 * Enter a parse tree produced by the `handlerConditionException`
	 * labeled alternative in {@see MySqlParser::handlerConditionValue()}.
	 * @param $context The parse tree.
	 */
	public function enterHandlerConditionException(Context\HandlerConditionExceptionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `handlerConditionException` labeled alternative
	 * in {@see MySqlParser::handlerConditionValue()}.
	 * @param $context The parse tree.
	 */
	public function exitHandlerConditionException(Context\HandlerConditionExceptionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::procedureSqlStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterProcedureSqlStatement(Context\ProcedureSqlStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::procedureSqlStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitProcedureSqlStatement(Context\ProcedureSqlStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::caseAlternative()}.
	 * @param $context The parse tree.
	 */
	public function enterCaseAlternative(Context\CaseAlternativeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::caseAlternative()}.
	 * @param $context The parse tree.
	 */
	public function exitCaseAlternative(Context\CaseAlternativeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::elifAlternative()}.
	 * @param $context The parse tree.
	 */
	public function enterElifAlternative(Context\ElifAlternativeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::elifAlternative()}.
	 * @param $context The parse tree.
	 */
	public function exitElifAlternative(Context\ElifAlternativeContext $context) : void;
	/**
	 * Enter a parse tree produced by the `alterUserMysqlV56`
	 * labeled alternative in {@see MySqlParser::alterUser()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterUserMysqlV56(Context\AlterUserMysqlV56Context $context) : void;
	/**
	 * Exit a parse tree produced by the `alterUserMysqlV56` labeled alternative
	 * in {@see MySqlParser::alterUser()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterUserMysqlV56(Context\AlterUserMysqlV56Context $context) : void;
	/**
	 * Enter a parse tree produced by the `alterUserMysqlV57`
	 * labeled alternative in {@see MySqlParser::alterUser()}.
	 * @param $context The parse tree.
	 */
	public function enterAlterUserMysqlV57(Context\AlterUserMysqlV57Context $context) : void;
	/**
	 * Exit a parse tree produced by the `alterUserMysqlV57` labeled alternative
	 * in {@see MySqlParser::alterUser()}.
	 * @param $context The parse tree.
	 */
	public function exitAlterUserMysqlV57(Context\AlterUserMysqlV57Context $context) : void;
	/**
	 * Enter a parse tree produced by the `createUserMysqlV56`
	 * labeled alternative in {@see MySqlParser::createUser()}.
	 * @param $context The parse tree.
	 */
	public function enterCreateUserMysqlV56(Context\CreateUserMysqlV56Context $context) : void;
	/**
	 * Exit a parse tree produced by the `createUserMysqlV56` labeled alternative
	 * in {@see MySqlParser::createUser()}.
	 * @param $context The parse tree.
	 */
	public function exitCreateUserMysqlV56(Context\CreateUserMysqlV56Context $context) : void;
	/**
	 * Enter a parse tree produced by the `createUserMysqlV57`
	 * labeled alternative in {@see MySqlParser::createUser()}.
	 * @param $context The parse tree.
	 */
	public function enterCreateUserMysqlV57(Context\CreateUserMysqlV57Context $context) : void;
	/**
	 * Exit a parse tree produced by the `createUserMysqlV57` labeled alternative
	 * in {@see MySqlParser::createUser()}.
	 * @param $context The parse tree.
	 */
	public function exitCreateUserMysqlV57(Context\CreateUserMysqlV57Context $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::dropUser()}.
	 * @param $context The parse tree.
	 */
	public function enterDropUser(Context\DropUserContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::dropUser()}.
	 * @param $context The parse tree.
	 */
	public function exitDropUser(Context\DropUserContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::grantStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterGrantStatement(Context\GrantStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::grantStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitGrantStatement(Context\GrantStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::roleOption()}.
	 * @param $context The parse tree.
	 */
	public function enterRoleOption(Context\RoleOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::roleOption()}.
	 * @param $context The parse tree.
	 */
	public function exitRoleOption(Context\RoleOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::grantProxy()}.
	 * @param $context The parse tree.
	 */
	public function enterGrantProxy(Context\GrantProxyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::grantProxy()}.
	 * @param $context The parse tree.
	 */
	public function exitGrantProxy(Context\GrantProxyContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::renameUser()}.
	 * @param $context The parse tree.
	 */
	public function enterRenameUser(Context\RenameUserContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::renameUser()}.
	 * @param $context The parse tree.
	 */
	public function exitRenameUser(Context\RenameUserContext $context) : void;
	/**
	 * Enter a parse tree produced by the `detailRevoke`
	 * labeled alternative in {@see MySqlParser::revokeStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterDetailRevoke(Context\DetailRevokeContext $context) : void;
	/**
	 * Exit a parse tree produced by the `detailRevoke` labeled alternative
	 * in {@see MySqlParser::revokeStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitDetailRevoke(Context\DetailRevokeContext $context) : void;
	/**
	 * Enter a parse tree produced by the `shortRevoke`
	 * labeled alternative in {@see MySqlParser::revokeStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterShortRevoke(Context\ShortRevokeContext $context) : void;
	/**
	 * Exit a parse tree produced by the `shortRevoke` labeled alternative
	 * in {@see MySqlParser::revokeStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitShortRevoke(Context\ShortRevokeContext $context) : void;
	/**
	 * Enter a parse tree produced by the `roleRevoke`
	 * labeled alternative in {@see MySqlParser::revokeStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterRoleRevoke(Context\RoleRevokeContext $context) : void;
	/**
	 * Exit a parse tree produced by the `roleRevoke` labeled alternative
	 * in {@see MySqlParser::revokeStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitRoleRevoke(Context\RoleRevokeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::revokeProxy()}.
	 * @param $context The parse tree.
	 */
	public function enterRevokeProxy(Context\RevokeProxyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::revokeProxy()}.
	 * @param $context The parse tree.
	 */
	public function exitRevokeProxy(Context\RevokeProxyContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::setPasswordStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterSetPasswordStatement(Context\SetPasswordStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::setPasswordStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitSetPasswordStatement(Context\SetPasswordStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::userSpecification()}.
	 * @param $context The parse tree.
	 */
	public function enterUserSpecification(Context\UserSpecificationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::userSpecification()}.
	 * @param $context The parse tree.
	 */
	public function exitUserSpecification(Context\UserSpecificationContext $context) : void;
	/**
	 * Enter a parse tree produced by the `passwordAuthOption`
	 * labeled alternative in {@see MySqlParser::userAuthOption()}.
	 * @param $context The parse tree.
	 */
	public function enterPasswordAuthOption(Context\PasswordAuthOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `passwordAuthOption` labeled alternative
	 * in {@see MySqlParser::userAuthOption()}.
	 * @param $context The parse tree.
	 */
	public function exitPasswordAuthOption(Context\PasswordAuthOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `stringAuthOption`
	 * labeled alternative in {@see MySqlParser::userAuthOption()}.
	 * @param $context The parse tree.
	 */
	public function enterStringAuthOption(Context\StringAuthOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `stringAuthOption` labeled alternative
	 * in {@see MySqlParser::userAuthOption()}.
	 * @param $context The parse tree.
	 */
	public function exitStringAuthOption(Context\StringAuthOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `hashAuthOption`
	 * labeled alternative in {@see MySqlParser::userAuthOption()}.
	 * @param $context The parse tree.
	 */
	public function enterHashAuthOption(Context\HashAuthOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `hashAuthOption` labeled alternative
	 * in {@see MySqlParser::userAuthOption()}.
	 * @param $context The parse tree.
	 */
	public function exitHashAuthOption(Context\HashAuthOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `simpleAuthOption`
	 * labeled alternative in {@see MySqlParser::userAuthOption()}.
	 * @param $context The parse tree.
	 */
	public function enterSimpleAuthOption(Context\SimpleAuthOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `simpleAuthOption` labeled alternative
	 * in {@see MySqlParser::userAuthOption()}.
	 * @param $context The parse tree.
	 */
	public function exitSimpleAuthOption(Context\SimpleAuthOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::tlsOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTlsOption(Context\TlsOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::tlsOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTlsOption(Context\TlsOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::userResourceOption()}.
	 * @param $context The parse tree.
	 */
	public function enterUserResourceOption(Context\UserResourceOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::userResourceOption()}.
	 * @param $context The parse tree.
	 */
	public function exitUserResourceOption(Context\UserResourceOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::userPasswordOption()}.
	 * @param $context The parse tree.
	 */
	public function enterUserPasswordOption(Context\UserPasswordOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::userPasswordOption()}.
	 * @param $context The parse tree.
	 */
	public function exitUserPasswordOption(Context\UserPasswordOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::userLockOption()}.
	 * @param $context The parse tree.
	 */
	public function enterUserLockOption(Context\UserLockOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::userLockOption()}.
	 * @param $context The parse tree.
	 */
	public function exitUserLockOption(Context\UserLockOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::privelegeClause()}.
	 * @param $context The parse tree.
	 */
	public function enterPrivelegeClause(Context\PrivelegeClauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::privelegeClause()}.
	 * @param $context The parse tree.
	 */
	public function exitPrivelegeClause(Context\PrivelegeClauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::privilege()}.
	 * @param $context The parse tree.
	 */
	public function enterPrivilege(Context\PrivilegeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::privilege()}.
	 * @param $context The parse tree.
	 */
	public function exitPrivilege(Context\PrivilegeContext $context) : void;
	/**
	 * Enter a parse tree produced by the `currentSchemaPriviLevel`
	 * labeled alternative in {@see MySqlParser::privilegeLevel()}.
	 * @param $context The parse tree.
	 */
	public function enterCurrentSchemaPriviLevel(Context\CurrentSchemaPriviLevelContext $context) : void;
	/**
	 * Exit a parse tree produced by the `currentSchemaPriviLevel` labeled alternative
	 * in {@see MySqlParser::privilegeLevel()}.
	 * @param $context The parse tree.
	 */
	public function exitCurrentSchemaPriviLevel(Context\CurrentSchemaPriviLevelContext $context) : void;
	/**
	 * Enter a parse tree produced by the `globalPrivLevel`
	 * labeled alternative in {@see MySqlParser::privilegeLevel()}.
	 * @param $context The parse tree.
	 */
	public function enterGlobalPrivLevel(Context\GlobalPrivLevelContext $context) : void;
	/**
	 * Exit a parse tree produced by the `globalPrivLevel` labeled alternative
	 * in {@see MySqlParser::privilegeLevel()}.
	 * @param $context The parse tree.
	 */
	public function exitGlobalPrivLevel(Context\GlobalPrivLevelContext $context) : void;
	/**
	 * Enter a parse tree produced by the `definiteSchemaPrivLevel`
	 * labeled alternative in {@see MySqlParser::privilegeLevel()}.
	 * @param $context The parse tree.
	 */
	public function enterDefiniteSchemaPrivLevel(Context\DefiniteSchemaPrivLevelContext $context) : void;
	/**
	 * Exit a parse tree produced by the `definiteSchemaPrivLevel` labeled alternative
	 * in {@see MySqlParser::privilegeLevel()}.
	 * @param $context The parse tree.
	 */
	public function exitDefiniteSchemaPrivLevel(Context\DefiniteSchemaPrivLevelContext $context) : void;
	/**
	 * Enter a parse tree produced by the `definiteFullTablePrivLevel`
	 * labeled alternative in {@see MySqlParser::privilegeLevel()}.
	 * @param $context The parse tree.
	 */
	public function enterDefiniteFullTablePrivLevel(Context\DefiniteFullTablePrivLevelContext $context) : void;
	/**
	 * Exit a parse tree produced by the `definiteFullTablePrivLevel` labeled alternative
	 * in {@see MySqlParser::privilegeLevel()}.
	 * @param $context The parse tree.
	 */
	public function exitDefiniteFullTablePrivLevel(Context\DefiniteFullTablePrivLevelContext $context) : void;
	/**
	 * Enter a parse tree produced by the `definiteFullTablePrivLevel2`
	 * labeled alternative in {@see MySqlParser::privilegeLevel()}.
	 * @param $context The parse tree.
	 */
	public function enterDefiniteFullTablePrivLevel2(Context\DefiniteFullTablePrivLevel2Context $context) : void;
	/**
	 * Exit a parse tree produced by the `definiteFullTablePrivLevel2` labeled alternative
	 * in {@see MySqlParser::privilegeLevel()}.
	 * @param $context The parse tree.
	 */
	public function exitDefiniteFullTablePrivLevel2(Context\DefiniteFullTablePrivLevel2Context $context) : void;
	/**
	 * Enter a parse tree produced by the `definiteTablePrivLevel`
	 * labeled alternative in {@see MySqlParser::privilegeLevel()}.
	 * @param $context The parse tree.
	 */
	public function enterDefiniteTablePrivLevel(Context\DefiniteTablePrivLevelContext $context) : void;
	/**
	 * Exit a parse tree produced by the `definiteTablePrivLevel` labeled alternative
	 * in {@see MySqlParser::privilegeLevel()}.
	 * @param $context The parse tree.
	 */
	public function exitDefiniteTablePrivLevel(Context\DefiniteTablePrivLevelContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::renameUserClause()}.
	 * @param $context The parse tree.
	 */
	public function enterRenameUserClause(Context\RenameUserClauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::renameUserClause()}.
	 * @param $context The parse tree.
	 */
	public function exitRenameUserClause(Context\RenameUserClauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::analyzeTable()}.
	 * @param $context The parse tree.
	 */
	public function enterAnalyzeTable(Context\AnalyzeTableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::analyzeTable()}.
	 * @param $context The parse tree.
	 */
	public function exitAnalyzeTable(Context\AnalyzeTableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::checkTable()}.
	 * @param $context The parse tree.
	 */
	public function enterCheckTable(Context\CheckTableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::checkTable()}.
	 * @param $context The parse tree.
	 */
	public function exitCheckTable(Context\CheckTableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::checksumTable()}.
	 * @param $context The parse tree.
	 */
	public function enterChecksumTable(Context\ChecksumTableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::checksumTable()}.
	 * @param $context The parse tree.
	 */
	public function exitChecksumTable(Context\ChecksumTableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::optimizeTable()}.
	 * @param $context The parse tree.
	 */
	public function enterOptimizeTable(Context\OptimizeTableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::optimizeTable()}.
	 * @param $context The parse tree.
	 */
	public function exitOptimizeTable(Context\OptimizeTableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::repairTable()}.
	 * @param $context The parse tree.
	 */
	public function enterRepairTable(Context\RepairTableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::repairTable()}.
	 * @param $context The parse tree.
	 */
	public function exitRepairTable(Context\RepairTableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::checkTableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterCheckTableOption(Context\CheckTableOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::checkTableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitCheckTableOption(Context\CheckTableOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::createUdfunction()}.
	 * @param $context The parse tree.
	 */
	public function enterCreateUdfunction(Context\CreateUdfunctionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::createUdfunction()}.
	 * @param $context The parse tree.
	 */
	public function exitCreateUdfunction(Context\CreateUdfunctionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::installPlugin()}.
	 * @param $context The parse tree.
	 */
	public function enterInstallPlugin(Context\InstallPluginContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::installPlugin()}.
	 * @param $context The parse tree.
	 */
	public function exitInstallPlugin(Context\InstallPluginContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::uninstallPlugin()}.
	 * @param $context The parse tree.
	 */
	public function enterUninstallPlugin(Context\UninstallPluginContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::uninstallPlugin()}.
	 * @param $context The parse tree.
	 */
	public function exitUninstallPlugin(Context\UninstallPluginContext $context) : void;
	/**
	 * Enter a parse tree produced by the `setVariable`
	 * labeled alternative in {@see MySqlParser::setStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterSetVariable(Context\SetVariableContext $context) : void;
	/**
	 * Exit a parse tree produced by the `setVariable` labeled alternative
	 * in {@see MySqlParser::setStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitSetVariable(Context\SetVariableContext $context) : void;
	/**
	 * Enter a parse tree produced by the `setCharset`
	 * labeled alternative in {@see MySqlParser::setStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterSetCharset(Context\SetCharsetContext $context) : void;
	/**
	 * Exit a parse tree produced by the `setCharset` labeled alternative
	 * in {@see MySqlParser::setStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitSetCharset(Context\SetCharsetContext $context) : void;
	/**
	 * Enter a parse tree produced by the `setNames`
	 * labeled alternative in {@see MySqlParser::setStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterSetNames(Context\SetNamesContext $context) : void;
	/**
	 * Exit a parse tree produced by the `setNames` labeled alternative
	 * in {@see MySqlParser::setStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitSetNames(Context\SetNamesContext $context) : void;
	/**
	 * Enter a parse tree produced by the `setPassword`
	 * labeled alternative in {@see MySqlParser::setStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterSetPassword(Context\SetPasswordContext $context) : void;
	/**
	 * Exit a parse tree produced by the `setPassword` labeled alternative
	 * in {@see MySqlParser::setStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitSetPassword(Context\SetPasswordContext $context) : void;
	/**
	 * Enter a parse tree produced by the `setTransaction`
	 * labeled alternative in {@see MySqlParser::setStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterSetTransaction(Context\SetTransactionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `setTransaction` labeled alternative
	 * in {@see MySqlParser::setStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitSetTransaction(Context\SetTransactionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `setAutocommit`
	 * labeled alternative in {@see MySqlParser::setStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterSetAutocommit(Context\SetAutocommitContext $context) : void;
	/**
	 * Exit a parse tree produced by the `setAutocommit` labeled alternative
	 * in {@see MySqlParser::setStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitSetAutocommit(Context\SetAutocommitContext $context) : void;
	/**
	 * Enter a parse tree produced by the `setNewValueInsideTrigger`
	 * labeled alternative in {@see MySqlParser::setStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterSetNewValueInsideTrigger(Context\SetNewValueInsideTriggerContext $context) : void;
	/**
	 * Exit a parse tree produced by the `setNewValueInsideTrigger` labeled alternative
	 * in {@see MySqlParser::setStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitSetNewValueInsideTrigger(Context\SetNewValueInsideTriggerContext $context) : void;
	/**
	 * Enter a parse tree produced by the `showMasterLogs`
	 * labeled alternative in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterShowMasterLogs(Context\ShowMasterLogsContext $context) : void;
	/**
	 * Exit a parse tree produced by the `showMasterLogs` labeled alternative
	 * in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitShowMasterLogs(Context\ShowMasterLogsContext $context) : void;
	/**
	 * Enter a parse tree produced by the `showLogEvents`
	 * labeled alternative in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterShowLogEvents(Context\ShowLogEventsContext $context) : void;
	/**
	 * Exit a parse tree produced by the `showLogEvents` labeled alternative
	 * in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitShowLogEvents(Context\ShowLogEventsContext $context) : void;
	/**
	 * Enter a parse tree produced by the `showObjectFilter`
	 * labeled alternative in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterShowObjectFilter(Context\ShowObjectFilterContext $context) : void;
	/**
	 * Exit a parse tree produced by the `showObjectFilter` labeled alternative
	 * in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitShowObjectFilter(Context\ShowObjectFilterContext $context) : void;
	/**
	 * Enter a parse tree produced by the `showColumns`
	 * labeled alternative in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterShowColumns(Context\ShowColumnsContext $context) : void;
	/**
	 * Exit a parse tree produced by the `showColumns` labeled alternative
	 * in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitShowColumns(Context\ShowColumnsContext $context) : void;
	/**
	 * Enter a parse tree produced by the `showCreateDb`
	 * labeled alternative in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterShowCreateDb(Context\ShowCreateDbContext $context) : void;
	/**
	 * Exit a parse tree produced by the `showCreateDb` labeled alternative
	 * in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitShowCreateDb(Context\ShowCreateDbContext $context) : void;
	/**
	 * Enter a parse tree produced by the `showCreateFullIdObject`
	 * labeled alternative in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterShowCreateFullIdObject(Context\ShowCreateFullIdObjectContext $context) : void;
	/**
	 * Exit a parse tree produced by the `showCreateFullIdObject` labeled alternative
	 * in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitShowCreateFullIdObject(Context\ShowCreateFullIdObjectContext $context) : void;
	/**
	 * Enter a parse tree produced by the `showCreateUser`
	 * labeled alternative in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterShowCreateUser(Context\ShowCreateUserContext $context) : void;
	/**
	 * Exit a parse tree produced by the `showCreateUser` labeled alternative
	 * in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitShowCreateUser(Context\ShowCreateUserContext $context) : void;
	/**
	 * Enter a parse tree produced by the `showEngine`
	 * labeled alternative in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterShowEngine(Context\ShowEngineContext $context) : void;
	/**
	 * Exit a parse tree produced by the `showEngine` labeled alternative
	 * in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitShowEngine(Context\ShowEngineContext $context) : void;
	/**
	 * Enter a parse tree produced by the `showGlobalInfo`
	 * labeled alternative in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterShowGlobalInfo(Context\ShowGlobalInfoContext $context) : void;
	/**
	 * Exit a parse tree produced by the `showGlobalInfo` labeled alternative
	 * in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitShowGlobalInfo(Context\ShowGlobalInfoContext $context) : void;
	/**
	 * Enter a parse tree produced by the `showErrors`
	 * labeled alternative in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterShowErrors(Context\ShowErrorsContext $context) : void;
	/**
	 * Exit a parse tree produced by the `showErrors` labeled alternative
	 * in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitShowErrors(Context\ShowErrorsContext $context) : void;
	/**
	 * Enter a parse tree produced by the `showCountErrors`
	 * labeled alternative in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterShowCountErrors(Context\ShowCountErrorsContext $context) : void;
	/**
	 * Exit a parse tree produced by the `showCountErrors` labeled alternative
	 * in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitShowCountErrors(Context\ShowCountErrorsContext $context) : void;
	/**
	 * Enter a parse tree produced by the `showSchemaFilter`
	 * labeled alternative in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterShowSchemaFilter(Context\ShowSchemaFilterContext $context) : void;
	/**
	 * Exit a parse tree produced by the `showSchemaFilter` labeled alternative
	 * in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitShowSchemaFilter(Context\ShowSchemaFilterContext $context) : void;
	/**
	 * Enter a parse tree produced by the `showRoutine`
	 * labeled alternative in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterShowRoutine(Context\ShowRoutineContext $context) : void;
	/**
	 * Exit a parse tree produced by the `showRoutine` labeled alternative
	 * in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitShowRoutine(Context\ShowRoutineContext $context) : void;
	/**
	 * Enter a parse tree produced by the `showGrants`
	 * labeled alternative in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterShowGrants(Context\ShowGrantsContext $context) : void;
	/**
	 * Exit a parse tree produced by the `showGrants` labeled alternative
	 * in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitShowGrants(Context\ShowGrantsContext $context) : void;
	/**
	 * Enter a parse tree produced by the `showIndexes`
	 * labeled alternative in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterShowIndexes(Context\ShowIndexesContext $context) : void;
	/**
	 * Exit a parse tree produced by the `showIndexes` labeled alternative
	 * in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitShowIndexes(Context\ShowIndexesContext $context) : void;
	/**
	 * Enter a parse tree produced by the `showOpenTables`
	 * labeled alternative in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterShowOpenTables(Context\ShowOpenTablesContext $context) : void;
	/**
	 * Exit a parse tree produced by the `showOpenTables` labeled alternative
	 * in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitShowOpenTables(Context\ShowOpenTablesContext $context) : void;
	/**
	 * Enter a parse tree produced by the `showProfile`
	 * labeled alternative in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterShowProfile(Context\ShowProfileContext $context) : void;
	/**
	 * Exit a parse tree produced by the `showProfile` labeled alternative
	 * in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitShowProfile(Context\ShowProfileContext $context) : void;
	/**
	 * Enter a parse tree produced by the `showSlaveStatus`
	 * labeled alternative in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterShowSlaveStatus(Context\ShowSlaveStatusContext $context) : void;
	/**
	 * Exit a parse tree produced by the `showSlaveStatus` labeled alternative
	 * in {@see MySqlParser::showStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitShowSlaveStatus(Context\ShowSlaveStatusContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::variableClause()}.
	 * @param $context The parse tree.
	 */
	public function enterVariableClause(Context\VariableClauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::variableClause()}.
	 * @param $context The parse tree.
	 */
	public function exitVariableClause(Context\VariableClauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::showCommonEntity()}.
	 * @param $context The parse tree.
	 */
	public function enterShowCommonEntity(Context\ShowCommonEntityContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::showCommonEntity()}.
	 * @param $context The parse tree.
	 */
	public function exitShowCommonEntity(Context\ShowCommonEntityContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::showFilter()}.
	 * @param $context The parse tree.
	 */
	public function enterShowFilter(Context\ShowFilterContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::showFilter()}.
	 * @param $context The parse tree.
	 */
	public function exitShowFilter(Context\ShowFilterContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::showGlobalInfoClause()}.
	 * @param $context The parse tree.
	 */
	public function enterShowGlobalInfoClause(Context\ShowGlobalInfoClauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::showGlobalInfoClause()}.
	 * @param $context The parse tree.
	 */
	public function exitShowGlobalInfoClause(Context\ShowGlobalInfoClauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::showSchemaEntity()}.
	 * @param $context The parse tree.
	 */
	public function enterShowSchemaEntity(Context\ShowSchemaEntityContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::showSchemaEntity()}.
	 * @param $context The parse tree.
	 */
	public function exitShowSchemaEntity(Context\ShowSchemaEntityContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::showProfileType()}.
	 * @param $context The parse tree.
	 */
	public function enterShowProfileType(Context\ShowProfileTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::showProfileType()}.
	 * @param $context The parse tree.
	 */
	public function exitShowProfileType(Context\ShowProfileTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::binlogStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterBinlogStatement(Context\BinlogStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::binlogStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitBinlogStatement(Context\BinlogStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::cacheIndexStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterCacheIndexStatement(Context\CacheIndexStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::cacheIndexStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitCacheIndexStatement(Context\CacheIndexStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::flushStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterFlushStatement(Context\FlushStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::flushStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitFlushStatement(Context\FlushStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::killStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterKillStatement(Context\KillStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::killStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitKillStatement(Context\KillStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::loadIndexIntoCache()}.
	 * @param $context The parse tree.
	 */
	public function enterLoadIndexIntoCache(Context\LoadIndexIntoCacheContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::loadIndexIntoCache()}.
	 * @param $context The parse tree.
	 */
	public function exitLoadIndexIntoCache(Context\LoadIndexIntoCacheContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::resetStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterResetStatement(Context\ResetStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::resetStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitResetStatement(Context\ResetStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::shutdownStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterShutdownStatement(Context\ShutdownStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::shutdownStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitShutdownStatement(Context\ShutdownStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::tableIndexes()}.
	 * @param $context The parse tree.
	 */
	public function enterTableIndexes(Context\TableIndexesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::tableIndexes()}.
	 * @param $context The parse tree.
	 */
	public function exitTableIndexes(Context\TableIndexesContext $context) : void;
	/**
	 * Enter a parse tree produced by the `simpleFlushOption`
	 * labeled alternative in {@see MySqlParser::flushOption()}.
	 * @param $context The parse tree.
	 */
	public function enterSimpleFlushOption(Context\SimpleFlushOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `simpleFlushOption` labeled alternative
	 * in {@see MySqlParser::flushOption()}.
	 * @param $context The parse tree.
	 */
	public function exitSimpleFlushOption(Context\SimpleFlushOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `channelFlushOption`
	 * labeled alternative in {@see MySqlParser::flushOption()}.
	 * @param $context The parse tree.
	 */
	public function enterChannelFlushOption(Context\ChannelFlushOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `channelFlushOption` labeled alternative
	 * in {@see MySqlParser::flushOption()}.
	 * @param $context The parse tree.
	 */
	public function exitChannelFlushOption(Context\ChannelFlushOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `tableFlushOption`
	 * labeled alternative in {@see MySqlParser::flushOption()}.
	 * @param $context The parse tree.
	 */
	public function enterTableFlushOption(Context\TableFlushOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `tableFlushOption` labeled alternative
	 * in {@see MySqlParser::flushOption()}.
	 * @param $context The parse tree.
	 */
	public function exitTableFlushOption(Context\TableFlushOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::flushTableOption()}.
	 * @param $context The parse tree.
	 */
	public function enterFlushTableOption(Context\FlushTableOptionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::flushTableOption()}.
	 * @param $context The parse tree.
	 */
	public function exitFlushTableOption(Context\FlushTableOptionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::loadedTableIndexes()}.
	 * @param $context The parse tree.
	 */
	public function enterLoadedTableIndexes(Context\LoadedTableIndexesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::loadedTableIndexes()}.
	 * @param $context The parse tree.
	 */
	public function exitLoadedTableIndexes(Context\LoadedTableIndexesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::simpleDescribeStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterSimpleDescribeStatement(Context\SimpleDescribeStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::simpleDescribeStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitSimpleDescribeStatement(Context\SimpleDescribeStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::fullDescribeStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterFullDescribeStatement(Context\FullDescribeStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::fullDescribeStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitFullDescribeStatement(Context\FullDescribeStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::helpStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterHelpStatement(Context\HelpStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::helpStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitHelpStatement(Context\HelpStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::useStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterUseStatement(Context\UseStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::useStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitUseStatement(Context\UseStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::signalStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterSignalStatement(Context\SignalStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::signalStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitSignalStatement(Context\SignalStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::resignalStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterResignalStatement(Context\ResignalStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::resignalStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitResignalStatement(Context\ResignalStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::signalConditionInformation()}.
	 * @param $context The parse tree.
	 */
	public function enterSignalConditionInformation(Context\SignalConditionInformationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::signalConditionInformation()}.
	 * @param $context The parse tree.
	 */
	public function exitSignalConditionInformation(Context\SignalConditionInformationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::diagnosticsStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterDiagnosticsStatement(Context\DiagnosticsStatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::diagnosticsStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitDiagnosticsStatement(Context\DiagnosticsStatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::diagnosticsConditionInformationName()}.
	 * @param $context The parse tree.
	 */
	public function enterDiagnosticsConditionInformationName(Context\DiagnosticsConditionInformationNameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::diagnosticsConditionInformationName()}.
	 * @param $context The parse tree.
	 */
	public function exitDiagnosticsConditionInformationName(Context\DiagnosticsConditionInformationNameContext $context) : void;
	/**
	 * Enter a parse tree produced by the `describeStatements`
	 * labeled alternative in {@see MySqlParser::describeObjectClause()}.
	 * @param $context The parse tree.
	 */
	public function enterDescribeStatements(Context\DescribeStatementsContext $context) : void;
	/**
	 * Exit a parse tree produced by the `describeStatements` labeled alternative
	 * in {@see MySqlParser::describeObjectClause()}.
	 * @param $context The parse tree.
	 */
	public function exitDescribeStatements(Context\DescribeStatementsContext $context) : void;
	/**
	 * Enter a parse tree produced by the `describeConnection`
	 * labeled alternative in {@see MySqlParser::describeObjectClause()}.
	 * @param $context The parse tree.
	 */
	public function enterDescribeConnection(Context\DescribeConnectionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `describeConnection` labeled alternative
	 * in {@see MySqlParser::describeObjectClause()}.
	 * @param $context The parse tree.
	 */
	public function exitDescribeConnection(Context\DescribeConnectionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::fullId()}.
	 * @param $context The parse tree.
	 */
	public function enterFullId(Context\FullIdContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::fullId()}.
	 * @param $context The parse tree.
	 */
	public function exitFullId(Context\FullIdContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::tableName()}.
	 * @param $context The parse tree.
	 */
	public function enterTableName(Context\TableNameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::tableName()}.
	 * @param $context The parse tree.
	 */
	public function exitTableName(Context\TableNameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::fullColumnName()}.
	 * @param $context The parse tree.
	 */
	public function enterFullColumnName(Context\FullColumnNameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::fullColumnName()}.
	 * @param $context The parse tree.
	 */
	public function exitFullColumnName(Context\FullColumnNameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::indexColumnName()}.
	 * @param $context The parse tree.
	 */
	public function enterIndexColumnName(Context\IndexColumnNameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::indexColumnName()}.
	 * @param $context The parse tree.
	 */
	public function exitIndexColumnName(Context\IndexColumnNameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::userName()}.
	 * @param $context The parse tree.
	 */
	public function enterUserName(Context\UserNameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::userName()}.
	 * @param $context The parse tree.
	 */
	public function exitUserName(Context\UserNameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::mysqlVariable()}.
	 * @param $context The parse tree.
	 */
	public function enterMysqlVariable(Context\MysqlVariableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::mysqlVariable()}.
	 * @param $context The parse tree.
	 */
	public function exitMysqlVariable(Context\MysqlVariableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::charsetName()}.
	 * @param $context The parse tree.
	 */
	public function enterCharsetName(Context\CharsetNameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::charsetName()}.
	 * @param $context The parse tree.
	 */
	public function exitCharsetName(Context\CharsetNameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::collationName()}.
	 * @param $context The parse tree.
	 */
	public function enterCollationName(Context\CollationNameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::collationName()}.
	 * @param $context The parse tree.
	 */
	public function exitCollationName(Context\CollationNameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::engineName()}.
	 * @param $context The parse tree.
	 */
	public function enterEngineName(Context\EngineNameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::engineName()}.
	 * @param $context The parse tree.
	 */
	public function exitEngineName(Context\EngineNameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::uuidSet()}.
	 * @param $context The parse tree.
	 */
	public function enterUuidSet(Context\UuidSetContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::uuidSet()}.
	 * @param $context The parse tree.
	 */
	public function exitUuidSet(Context\UuidSetContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::xid()}.
	 * @param $context The parse tree.
	 */
	public function enterXid(Context\XidContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::xid()}.
	 * @param $context The parse tree.
	 */
	public function exitXid(Context\XidContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::xuidStringId()}.
	 * @param $context The parse tree.
	 */
	public function enterXuidStringId(Context\XuidStringIdContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::xuidStringId()}.
	 * @param $context The parse tree.
	 */
	public function exitXuidStringId(Context\XuidStringIdContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::authPlugin()}.
	 * @param $context The parse tree.
	 */
	public function enterAuthPlugin(Context\AuthPluginContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::authPlugin()}.
	 * @param $context The parse tree.
	 */
	public function exitAuthPlugin(Context\AuthPluginContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::uid()}.
	 * @param $context The parse tree.
	 */
	public function enterUid(Context\UidContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::uid()}.
	 * @param $context The parse tree.
	 */
	public function exitUid(Context\UidContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::simpleId()}.
	 * @param $context The parse tree.
	 */
	public function enterSimpleId(Context\SimpleIdContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::simpleId()}.
	 * @param $context The parse tree.
	 */
	public function exitSimpleId(Context\SimpleIdContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::dottedId()}.
	 * @param $context The parse tree.
	 */
	public function enterDottedId(Context\DottedIdContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::dottedId()}.
	 * @param $context The parse tree.
	 */
	public function exitDottedId(Context\DottedIdContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::decimalLiteral()}.
	 * @param $context The parse tree.
	 */
	public function enterDecimalLiteral(Context\DecimalLiteralContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::decimalLiteral()}.
	 * @param $context The parse tree.
	 */
	public function exitDecimalLiteral(Context\DecimalLiteralContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::fileSizeLiteral()}.
	 * @param $context The parse tree.
	 */
	public function enterFileSizeLiteral(Context\FileSizeLiteralContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::fileSizeLiteral()}.
	 * @param $context The parse tree.
	 */
	public function exitFileSizeLiteral(Context\FileSizeLiteralContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::stringLiteral()}.
	 * @param $context The parse tree.
	 */
	public function enterStringLiteral(Context\StringLiteralContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::stringLiteral()}.
	 * @param $context The parse tree.
	 */
	public function exitStringLiteral(Context\StringLiteralContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::booleanLiteral()}.
	 * @param $context The parse tree.
	 */
	public function enterBooleanLiteral(Context\BooleanLiteralContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::booleanLiteral()}.
	 * @param $context The parse tree.
	 */
	public function exitBooleanLiteral(Context\BooleanLiteralContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::hexadecimalLiteral()}.
	 * @param $context The parse tree.
	 */
	public function enterHexadecimalLiteral(Context\HexadecimalLiteralContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::hexadecimalLiteral()}.
	 * @param $context The parse tree.
	 */
	public function exitHexadecimalLiteral(Context\HexadecimalLiteralContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::nullNotnull()}.
	 * @param $context The parse tree.
	 */
	public function enterNullNotnull(Context\NullNotnullContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::nullNotnull()}.
	 * @param $context The parse tree.
	 */
	public function exitNullNotnull(Context\NullNotnullContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::constant()}.
	 * @param $context The parse tree.
	 */
	public function enterConstant(Context\ConstantContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::constant()}.
	 * @param $context The parse tree.
	 */
	public function exitConstant(Context\ConstantContext $context) : void;
	/**
	 * Enter a parse tree produced by the `stringDataType`
	 * labeled alternative in {@see MySqlParser::dataType()}.
	 * @param $context The parse tree.
	 */
	public function enterStringDataType(Context\StringDataTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by the `stringDataType` labeled alternative
	 * in {@see MySqlParser::dataType()}.
	 * @param $context The parse tree.
	 */
	public function exitStringDataType(Context\StringDataTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by the `nationalStringDataType`
	 * labeled alternative in {@see MySqlParser::dataType()}.
	 * @param $context The parse tree.
	 */
	public function enterNationalStringDataType(Context\NationalStringDataTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by the `nationalStringDataType` labeled alternative
	 * in {@see MySqlParser::dataType()}.
	 * @param $context The parse tree.
	 */
	public function exitNationalStringDataType(Context\NationalStringDataTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by the `nationalVaryingStringDataType`
	 * labeled alternative in {@see MySqlParser::dataType()}.
	 * @param $context The parse tree.
	 */
	public function enterNationalVaryingStringDataType(Context\NationalVaryingStringDataTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by the `nationalVaryingStringDataType` labeled alternative
	 * in {@see MySqlParser::dataType()}.
	 * @param $context The parse tree.
	 */
	public function exitNationalVaryingStringDataType(Context\NationalVaryingStringDataTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by the `dimensionDataType`
	 * labeled alternative in {@see MySqlParser::dataType()}.
	 * @param $context The parse tree.
	 */
	public function enterDimensionDataType(Context\DimensionDataTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by the `dimensionDataType` labeled alternative
	 * in {@see MySqlParser::dataType()}.
	 * @param $context The parse tree.
	 */
	public function exitDimensionDataType(Context\DimensionDataTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by the `simpleDataType`
	 * labeled alternative in {@see MySqlParser::dataType()}.
	 * @param $context The parse tree.
	 */
	public function enterSimpleDataType(Context\SimpleDataTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by the `simpleDataType` labeled alternative
	 * in {@see MySqlParser::dataType()}.
	 * @param $context The parse tree.
	 */
	public function exitSimpleDataType(Context\SimpleDataTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by the `collectionDataType`
	 * labeled alternative in {@see MySqlParser::dataType()}.
	 * @param $context The parse tree.
	 */
	public function enterCollectionDataType(Context\CollectionDataTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by the `collectionDataType` labeled alternative
	 * in {@see MySqlParser::dataType()}.
	 * @param $context The parse tree.
	 */
	public function exitCollectionDataType(Context\CollectionDataTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by the `spatialDataType`
	 * labeled alternative in {@see MySqlParser::dataType()}.
	 * @param $context The parse tree.
	 */
	public function enterSpatialDataType(Context\SpatialDataTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by the `spatialDataType` labeled alternative
	 * in {@see MySqlParser::dataType()}.
	 * @param $context The parse tree.
	 */
	public function exitSpatialDataType(Context\SpatialDataTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by the `longVarcharDataType`
	 * labeled alternative in {@see MySqlParser::dataType()}.
	 * @param $context The parse tree.
	 */
	public function enterLongVarcharDataType(Context\LongVarcharDataTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by the `longVarcharDataType` labeled alternative
	 * in {@see MySqlParser::dataType()}.
	 * @param $context The parse tree.
	 */
	public function exitLongVarcharDataType(Context\LongVarcharDataTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by the `longVarbinaryDataType`
	 * labeled alternative in {@see MySqlParser::dataType()}.
	 * @param $context The parse tree.
	 */
	public function enterLongVarbinaryDataType(Context\LongVarbinaryDataTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by the `longVarbinaryDataType` labeled alternative
	 * in {@see MySqlParser::dataType()}.
	 * @param $context The parse tree.
	 */
	public function exitLongVarbinaryDataType(Context\LongVarbinaryDataTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::collectionOptions()}.
	 * @param $context The parse tree.
	 */
	public function enterCollectionOptions(Context\CollectionOptionsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::collectionOptions()}.
	 * @param $context The parse tree.
	 */
	public function exitCollectionOptions(Context\CollectionOptionsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::convertedDataType()}.
	 * @param $context The parse tree.
	 */
	public function enterConvertedDataType(Context\ConvertedDataTypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::convertedDataType()}.
	 * @param $context The parse tree.
	 */
	public function exitConvertedDataType(Context\ConvertedDataTypeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::lengthOneDimension()}.
	 * @param $context The parse tree.
	 */
	public function enterLengthOneDimension(Context\LengthOneDimensionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::lengthOneDimension()}.
	 * @param $context The parse tree.
	 */
	public function exitLengthOneDimension(Context\LengthOneDimensionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::lengthTwoDimension()}.
	 * @param $context The parse tree.
	 */
	public function enterLengthTwoDimension(Context\LengthTwoDimensionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::lengthTwoDimension()}.
	 * @param $context The parse tree.
	 */
	public function exitLengthTwoDimension(Context\LengthTwoDimensionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::lengthTwoOptionalDimension()}.
	 * @param $context The parse tree.
	 */
	public function enterLengthTwoOptionalDimension(Context\LengthTwoOptionalDimensionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::lengthTwoOptionalDimension()}.
	 * @param $context The parse tree.
	 */
	public function exitLengthTwoOptionalDimension(Context\LengthTwoOptionalDimensionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::uidList()}.
	 * @param $context The parse tree.
	 */
	public function enterUidList(Context\UidListContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::uidList()}.
	 * @param $context The parse tree.
	 */
	public function exitUidList(Context\UidListContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::tables()}.
	 * @param $context The parse tree.
	 */
	public function enterTables(Context\TablesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::tables()}.
	 * @param $context The parse tree.
	 */
	public function exitTables(Context\TablesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::tableNames()}.
	 * @param $context The parse tree.
	 */
	public function enterTableNames(Context\TableNamesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::tableNames()}.
	 * @param $context The parse tree.
	 */
	public function exitTableNames(Context\TableNamesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::indexColumnNames()}.
	 * @param $context The parse tree.
	 */
	public function enterIndexColumnNames(Context\IndexColumnNamesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::indexColumnNames()}.
	 * @param $context The parse tree.
	 */
	public function exitIndexColumnNames(Context\IndexColumnNamesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::expressions()}.
	 * @param $context The parse tree.
	 */
	public function enterExpressions(Context\ExpressionsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::expressions()}.
	 * @param $context The parse tree.
	 */
	public function exitExpressions(Context\ExpressionsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::expressionsWithDefaults()}.
	 * @param $context The parse tree.
	 */
	public function enterExpressionsWithDefaults(Context\ExpressionsWithDefaultsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::expressionsWithDefaults()}.
	 * @param $context The parse tree.
	 */
	public function exitExpressionsWithDefaults(Context\ExpressionsWithDefaultsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::constants()}.
	 * @param $context The parse tree.
	 */
	public function enterConstants(Context\ConstantsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::constants()}.
	 * @param $context The parse tree.
	 */
	public function exitConstants(Context\ConstantsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::simpleStrings()}.
	 * @param $context The parse tree.
	 */
	public function enterSimpleStrings(Context\SimpleStringsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::simpleStrings()}.
	 * @param $context The parse tree.
	 */
	public function exitSimpleStrings(Context\SimpleStringsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::userVariables()}.
	 * @param $context The parse tree.
	 */
	public function enterUserVariables(Context\UserVariablesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::userVariables()}.
	 * @param $context The parse tree.
	 */
	public function exitUserVariables(Context\UserVariablesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::defaultValue()}.
	 * @param $context The parse tree.
	 */
	public function enterDefaultValue(Context\DefaultValueContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::defaultValue()}.
	 * @param $context The parse tree.
	 */
	public function exitDefaultValue(Context\DefaultValueContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::currentTimestamp()}.
	 * @param $context The parse tree.
	 */
	public function enterCurrentTimestamp(Context\CurrentTimestampContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::currentTimestamp()}.
	 * @param $context The parse tree.
	 */
	public function exitCurrentTimestamp(Context\CurrentTimestampContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::expressionOrDefault()}.
	 * @param $context The parse tree.
	 */
	public function enterExpressionOrDefault(Context\ExpressionOrDefaultContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::expressionOrDefault()}.
	 * @param $context The parse tree.
	 */
	public function exitExpressionOrDefault(Context\ExpressionOrDefaultContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::ifExists()}.
	 * @param $context The parse tree.
	 */
	public function enterIfExists(Context\IfExistsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::ifExists()}.
	 * @param $context The parse tree.
	 */
	public function exitIfExists(Context\IfExistsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::ifNotExists()}.
	 * @param $context The parse tree.
	 */
	public function enterIfNotExists(Context\IfNotExistsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::ifNotExists()}.
	 * @param $context The parse tree.
	 */
	public function exitIfNotExists(Context\IfNotExistsContext $context) : void;
	/**
	 * Enter a parse tree produced by the `specificFunctionCall`
	 * labeled alternative in {@see MySqlParser::functionCall()}.
	 * @param $context The parse tree.
	 */
	public function enterSpecificFunctionCall(Context\SpecificFunctionCallContext $context) : void;
	/**
	 * Exit a parse tree produced by the `specificFunctionCall` labeled alternative
	 * in {@see MySqlParser::functionCall()}.
	 * @param $context The parse tree.
	 */
	public function exitSpecificFunctionCall(Context\SpecificFunctionCallContext $context) : void;
	/**
	 * Enter a parse tree produced by the `aggregateFunctionCall`
	 * labeled alternative in {@see MySqlParser::functionCall()}.
	 * @param $context The parse tree.
	 */
	public function enterAggregateFunctionCall(Context\AggregateFunctionCallContext $context) : void;
	/**
	 * Exit a parse tree produced by the `aggregateFunctionCall` labeled alternative
	 * in {@see MySqlParser::functionCall()}.
	 * @param $context The parse tree.
	 */
	public function exitAggregateFunctionCall(Context\AggregateFunctionCallContext $context) : void;
	/**
	 * Enter a parse tree produced by the `nonAggregateFunctionCall`
	 * labeled alternative in {@see MySqlParser::functionCall()}.
	 * @param $context The parse tree.
	 */
	public function enterNonAggregateFunctionCall(Context\NonAggregateFunctionCallContext $context) : void;
	/**
	 * Exit a parse tree produced by the `nonAggregateFunctionCall` labeled alternative
	 * in {@see MySqlParser::functionCall()}.
	 * @param $context The parse tree.
	 */
	public function exitNonAggregateFunctionCall(Context\NonAggregateFunctionCallContext $context) : void;
	/**
	 * Enter a parse tree produced by the `scalarFunctionCall`
	 * labeled alternative in {@see MySqlParser::functionCall()}.
	 * @param $context The parse tree.
	 */
	public function enterScalarFunctionCall(Context\ScalarFunctionCallContext $context) : void;
	/**
	 * Exit a parse tree produced by the `scalarFunctionCall` labeled alternative
	 * in {@see MySqlParser::functionCall()}.
	 * @param $context The parse tree.
	 */
	public function exitScalarFunctionCall(Context\ScalarFunctionCallContext $context) : void;
	/**
	 * Enter a parse tree produced by the `udfFunctionCall`
	 * labeled alternative in {@see MySqlParser::functionCall()}.
	 * @param $context The parse tree.
	 */
	public function enterUdfFunctionCall(Context\UdfFunctionCallContext $context) : void;
	/**
	 * Exit a parse tree produced by the `udfFunctionCall` labeled alternative
	 * in {@see MySqlParser::functionCall()}.
	 * @param $context The parse tree.
	 */
	public function exitUdfFunctionCall(Context\UdfFunctionCallContext $context) : void;
	/**
	 * Enter a parse tree produced by the `passwordFunctionCall`
	 * labeled alternative in {@see MySqlParser::functionCall()}.
	 * @param $context The parse tree.
	 */
	public function enterPasswordFunctionCall(Context\PasswordFunctionCallContext $context) : void;
	/**
	 * Exit a parse tree produced by the `passwordFunctionCall` labeled alternative
	 * in {@see MySqlParser::functionCall()}.
	 * @param $context The parse tree.
	 */
	public function exitPasswordFunctionCall(Context\PasswordFunctionCallContext $context) : void;
	/**
	 * Enter a parse tree produced by the `simpleFunctionCall`
	 * labeled alternative in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function enterSimpleFunctionCall(Context\SimpleFunctionCallContext $context) : void;
	/**
	 * Exit a parse tree produced by the `simpleFunctionCall` labeled alternative
	 * in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function exitSimpleFunctionCall(Context\SimpleFunctionCallContext $context) : void;
	/**
	 * Enter a parse tree produced by the `dataTypeFunctionCall`
	 * labeled alternative in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function enterDataTypeFunctionCall(Context\DataTypeFunctionCallContext $context) : void;
	/**
	 * Exit a parse tree produced by the `dataTypeFunctionCall` labeled alternative
	 * in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function exitDataTypeFunctionCall(Context\DataTypeFunctionCallContext $context) : void;
	/**
	 * Enter a parse tree produced by the `valuesFunctionCall`
	 * labeled alternative in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function enterValuesFunctionCall(Context\ValuesFunctionCallContext $context) : void;
	/**
	 * Exit a parse tree produced by the `valuesFunctionCall` labeled alternative
	 * in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function exitValuesFunctionCall(Context\ValuesFunctionCallContext $context) : void;
	/**
	 * Enter a parse tree produced by the `caseExpressionFunctionCall`
	 * labeled alternative in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function enterCaseExpressionFunctionCall(Context\CaseExpressionFunctionCallContext $context) : void;
	/**
	 * Exit a parse tree produced by the `caseExpressionFunctionCall` labeled alternative
	 * in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function exitCaseExpressionFunctionCall(Context\CaseExpressionFunctionCallContext $context) : void;
	/**
	 * Enter a parse tree produced by the `caseFunctionCall`
	 * labeled alternative in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function enterCaseFunctionCall(Context\CaseFunctionCallContext $context) : void;
	/**
	 * Exit a parse tree produced by the `caseFunctionCall` labeled alternative
	 * in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function exitCaseFunctionCall(Context\CaseFunctionCallContext $context) : void;
	/**
	 * Enter a parse tree produced by the `charFunctionCall`
	 * labeled alternative in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function enterCharFunctionCall(Context\CharFunctionCallContext $context) : void;
	/**
	 * Exit a parse tree produced by the `charFunctionCall` labeled alternative
	 * in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function exitCharFunctionCall(Context\CharFunctionCallContext $context) : void;
	/**
	 * Enter a parse tree produced by the `positionFunctionCall`
	 * labeled alternative in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function enterPositionFunctionCall(Context\PositionFunctionCallContext $context) : void;
	/**
	 * Exit a parse tree produced by the `positionFunctionCall` labeled alternative
	 * in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function exitPositionFunctionCall(Context\PositionFunctionCallContext $context) : void;
	/**
	 * Enter a parse tree produced by the `substrFunctionCall`
	 * labeled alternative in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function enterSubstrFunctionCall(Context\SubstrFunctionCallContext $context) : void;
	/**
	 * Exit a parse tree produced by the `substrFunctionCall` labeled alternative
	 * in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function exitSubstrFunctionCall(Context\SubstrFunctionCallContext $context) : void;
	/**
	 * Enter a parse tree produced by the `trimFunctionCall`
	 * labeled alternative in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function enterTrimFunctionCall(Context\TrimFunctionCallContext $context) : void;
	/**
	 * Exit a parse tree produced by the `trimFunctionCall` labeled alternative
	 * in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function exitTrimFunctionCall(Context\TrimFunctionCallContext $context) : void;
	/**
	 * Enter a parse tree produced by the `weightFunctionCall`
	 * labeled alternative in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function enterWeightFunctionCall(Context\WeightFunctionCallContext $context) : void;
	/**
	 * Exit a parse tree produced by the `weightFunctionCall` labeled alternative
	 * in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function exitWeightFunctionCall(Context\WeightFunctionCallContext $context) : void;
	/**
	 * Enter a parse tree produced by the `extractFunctionCall`
	 * labeled alternative in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function enterExtractFunctionCall(Context\ExtractFunctionCallContext $context) : void;
	/**
	 * Exit a parse tree produced by the `extractFunctionCall` labeled alternative
	 * in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function exitExtractFunctionCall(Context\ExtractFunctionCallContext $context) : void;
	/**
	 * Enter a parse tree produced by the `getFormatFunctionCall`
	 * labeled alternative in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function enterGetFormatFunctionCall(Context\GetFormatFunctionCallContext $context) : void;
	/**
	 * Exit a parse tree produced by the `getFormatFunctionCall` labeled alternative
	 * in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function exitGetFormatFunctionCall(Context\GetFormatFunctionCallContext $context) : void;
	/**
	 * Enter a parse tree produced by the `jsonValueFunctionCall`
	 * labeled alternative in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function enterJsonValueFunctionCall(Context\JsonValueFunctionCallContext $context) : void;
	/**
	 * Exit a parse tree produced by the `jsonValueFunctionCall` labeled alternative
	 * in {@see MySqlParser::specificFunction()}.
	 * @param $context The parse tree.
	 */
	public function exitJsonValueFunctionCall(Context\JsonValueFunctionCallContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::caseFuncAlternative()}.
	 * @param $context The parse tree.
	 */
	public function enterCaseFuncAlternative(Context\CaseFuncAlternativeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::caseFuncAlternative()}.
	 * @param $context The parse tree.
	 */
	public function exitCaseFuncAlternative(Context\CaseFuncAlternativeContext $context) : void;
	/**
	 * Enter a parse tree produced by the `levelWeightList`
	 * labeled alternative in {@see MySqlParser::levelsInWeightString()}.
	 * @param $context The parse tree.
	 */
	public function enterLevelWeightList(Context\LevelWeightListContext $context) : void;
	/**
	 * Exit a parse tree produced by the `levelWeightList` labeled alternative
	 * in {@see MySqlParser::levelsInWeightString()}.
	 * @param $context The parse tree.
	 */
	public function exitLevelWeightList(Context\LevelWeightListContext $context) : void;
	/**
	 * Enter a parse tree produced by the `levelWeightRange`
	 * labeled alternative in {@see MySqlParser::levelsInWeightString()}.
	 * @param $context The parse tree.
	 */
	public function enterLevelWeightRange(Context\LevelWeightRangeContext $context) : void;
	/**
	 * Exit a parse tree produced by the `levelWeightRange` labeled alternative
	 * in {@see MySqlParser::levelsInWeightString()}.
	 * @param $context The parse tree.
	 */
	public function exitLevelWeightRange(Context\LevelWeightRangeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::levelInWeightListElement()}.
	 * @param $context The parse tree.
	 */
	public function enterLevelInWeightListElement(Context\LevelInWeightListElementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::levelInWeightListElement()}.
	 * @param $context The parse tree.
	 */
	public function exitLevelInWeightListElement(Context\LevelInWeightListElementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::aggregateWindowedFunction()}.
	 * @param $context The parse tree.
	 */
	public function enterAggregateWindowedFunction(Context\AggregateWindowedFunctionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::aggregateWindowedFunction()}.
	 * @param $context The parse tree.
	 */
	public function exitAggregateWindowedFunction(Context\AggregateWindowedFunctionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::nonAggregateWindowedFunction()}.
	 * @param $context The parse tree.
	 */
	public function enterNonAggregateWindowedFunction(Context\NonAggregateWindowedFunctionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::nonAggregateWindowedFunction()}.
	 * @param $context The parse tree.
	 */
	public function exitNonAggregateWindowedFunction(Context\NonAggregateWindowedFunctionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::overClause()}.
	 * @param $context The parse tree.
	 */
	public function enterOverClause(Context\OverClauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::overClause()}.
	 * @param $context The parse tree.
	 */
	public function exitOverClause(Context\OverClauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::windowSpec()}.
	 * @param $context The parse tree.
	 */
	public function enterWindowSpec(Context\WindowSpecContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::windowSpec()}.
	 * @param $context The parse tree.
	 */
	public function exitWindowSpec(Context\WindowSpecContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::windowName()}.
	 * @param $context The parse tree.
	 */
	public function enterWindowName(Context\WindowNameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::windowName()}.
	 * @param $context The parse tree.
	 */
	public function exitWindowName(Context\WindowNameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::frameClause()}.
	 * @param $context The parse tree.
	 */
	public function enterFrameClause(Context\FrameClauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::frameClause()}.
	 * @param $context The parse tree.
	 */
	public function exitFrameClause(Context\FrameClauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::frameUnits()}.
	 * @param $context The parse tree.
	 */
	public function enterFrameUnits(Context\FrameUnitsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::frameUnits()}.
	 * @param $context The parse tree.
	 */
	public function exitFrameUnits(Context\FrameUnitsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::frameExtent()}.
	 * @param $context The parse tree.
	 */
	public function enterFrameExtent(Context\FrameExtentContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::frameExtent()}.
	 * @param $context The parse tree.
	 */
	public function exitFrameExtent(Context\FrameExtentContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::frameBetween()}.
	 * @param $context The parse tree.
	 */
	public function enterFrameBetween(Context\FrameBetweenContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::frameBetween()}.
	 * @param $context The parse tree.
	 */
	public function exitFrameBetween(Context\FrameBetweenContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::frameRange()}.
	 * @param $context The parse tree.
	 */
	public function enterFrameRange(Context\FrameRangeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::frameRange()}.
	 * @param $context The parse tree.
	 */
	public function exitFrameRange(Context\FrameRangeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::partitionClause()}.
	 * @param $context The parse tree.
	 */
	public function enterPartitionClause(Context\PartitionClauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::partitionClause()}.
	 * @param $context The parse tree.
	 */
	public function exitPartitionClause(Context\PartitionClauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::scalarFunctionName()}.
	 * @param $context The parse tree.
	 */
	public function enterScalarFunctionName(Context\ScalarFunctionNameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::scalarFunctionName()}.
	 * @param $context The parse tree.
	 */
	public function exitScalarFunctionName(Context\ScalarFunctionNameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::passwordFunctionClause()}.
	 * @param $context The parse tree.
	 */
	public function enterPasswordFunctionClause(Context\PasswordFunctionClauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::passwordFunctionClause()}.
	 * @param $context The parse tree.
	 */
	public function exitPasswordFunctionClause(Context\PasswordFunctionClauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::functionArgs()}.
	 * @param $context The parse tree.
	 */
	public function enterFunctionArgs(Context\FunctionArgsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::functionArgs()}.
	 * @param $context The parse tree.
	 */
	public function exitFunctionArgs(Context\FunctionArgsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::functionArg()}.
	 * @param $context The parse tree.
	 */
	public function enterFunctionArg(Context\FunctionArgContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::functionArg()}.
	 * @param $context The parse tree.
	 */
	public function exitFunctionArg(Context\FunctionArgContext $context) : void;
	/**
	 * Enter a parse tree produced by the `isExpression`
	 * labeled alternative in {@see MySqlParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterIsExpression(Context\IsExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `isExpression` labeled alternative
	 * in {@see MySqlParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitIsExpression(Context\IsExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `notExpression`
	 * labeled alternative in {@see MySqlParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterNotExpression(Context\NotExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `notExpression` labeled alternative
	 * in {@see MySqlParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitNotExpression(Context\NotExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `logicalExpression`
	 * labeled alternative in {@see MySqlParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterLogicalExpression(Context\LogicalExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `logicalExpression` labeled alternative
	 * in {@see MySqlParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitLogicalExpression(Context\LogicalExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `predicateExpression`
	 * labeled alternative in {@see MySqlParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterPredicateExpression(Context\PredicateExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by the `predicateExpression` labeled alternative
	 * in {@see MySqlParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitPredicateExpression(Context\PredicateExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by the `soundsLikePredicate`
	 * labeled alternative in {@see MySqlParser::predicate()}.
	 * @param $context The parse tree.
	 */
	public function enterSoundsLikePredicate(Context\SoundsLikePredicateContext $context) : void;
	/**
	 * Exit a parse tree produced by the `soundsLikePredicate` labeled alternative
	 * in {@see MySqlParser::predicate()}.
	 * @param $context The parse tree.
	 */
	public function exitSoundsLikePredicate(Context\SoundsLikePredicateContext $context) : void;
	/**
	 * Enter a parse tree produced by the `expressionAtomPredicate`
	 * labeled alternative in {@see MySqlParser::predicate()}.
	 * @param $context The parse tree.
	 */
	public function enterExpressionAtomPredicate(Context\ExpressionAtomPredicateContext $context) : void;
	/**
	 * Exit a parse tree produced by the `expressionAtomPredicate` labeled alternative
	 * in {@see MySqlParser::predicate()}.
	 * @param $context The parse tree.
	 */
	public function exitExpressionAtomPredicate(Context\ExpressionAtomPredicateContext $context) : void;
	/**
	 * Enter a parse tree produced by the `subqueryComparisonPredicate`
	 * labeled alternative in {@see MySqlParser::predicate()}.
	 * @param $context The parse tree.
	 */
	public function enterSubqueryComparisonPredicate(Context\SubqueryComparisonPredicateContext $context) : void;
	/**
	 * Exit a parse tree produced by the `subqueryComparisonPredicate` labeled alternative
	 * in {@see MySqlParser::predicate()}.
	 * @param $context The parse tree.
	 */
	public function exitSubqueryComparisonPredicate(Context\SubqueryComparisonPredicateContext $context) : void;
	/**
	 * Enter a parse tree produced by the `jsonMemberOfPredicate`
	 * labeled alternative in {@see MySqlParser::predicate()}.
	 * @param $context The parse tree.
	 */
	public function enterJsonMemberOfPredicate(Context\JsonMemberOfPredicateContext $context) : void;
	/**
	 * Exit a parse tree produced by the `jsonMemberOfPredicate` labeled alternative
	 * in {@see MySqlParser::predicate()}.
	 * @param $context The parse tree.
	 */
	public function exitJsonMemberOfPredicate(Context\JsonMemberOfPredicateContext $context) : void;
	/**
	 * Enter a parse tree produced by the `binaryComparisonPredicate`
	 * labeled alternative in {@see MySqlParser::predicate()}.
	 * @param $context The parse tree.
	 */
	public function enterBinaryComparisonPredicate(Context\BinaryComparisonPredicateContext $context) : void;
	/**
	 * Exit a parse tree produced by the `binaryComparisonPredicate` labeled alternative
	 * in {@see MySqlParser::predicate()}.
	 * @param $context The parse tree.
	 */
	public function exitBinaryComparisonPredicate(Context\BinaryComparisonPredicateContext $context) : void;
	/**
	 * Enter a parse tree produced by the `inPredicate`
	 * labeled alternative in {@see MySqlParser::predicate()}.
	 * @param $context The parse tree.
	 */
	public function enterInPredicate(Context\InPredicateContext $context) : void;
	/**
	 * Exit a parse tree produced by the `inPredicate` labeled alternative
	 * in {@see MySqlParser::predicate()}.
	 * @param $context The parse tree.
	 */
	public function exitInPredicate(Context\InPredicateContext $context) : void;
	/**
	 * Enter a parse tree produced by the `betweenPredicate`
	 * labeled alternative in {@see MySqlParser::predicate()}.
	 * @param $context The parse tree.
	 */
	public function enterBetweenPredicate(Context\BetweenPredicateContext $context) : void;
	/**
	 * Exit a parse tree produced by the `betweenPredicate` labeled alternative
	 * in {@see MySqlParser::predicate()}.
	 * @param $context The parse tree.
	 */
	public function exitBetweenPredicate(Context\BetweenPredicateContext $context) : void;
	/**
	 * Enter a parse tree produced by the `isNullPredicate`
	 * labeled alternative in {@see MySqlParser::predicate()}.
	 * @param $context The parse tree.
	 */
	public function enterIsNullPredicate(Context\IsNullPredicateContext $context) : void;
	/**
	 * Exit a parse tree produced by the `isNullPredicate` labeled alternative
	 * in {@see MySqlParser::predicate()}.
	 * @param $context The parse tree.
	 */
	public function exitIsNullPredicate(Context\IsNullPredicateContext $context) : void;
	/**
	 * Enter a parse tree produced by the `likePredicate`
	 * labeled alternative in {@see MySqlParser::predicate()}.
	 * @param $context The parse tree.
	 */
	public function enterLikePredicate(Context\LikePredicateContext $context) : void;
	/**
	 * Exit a parse tree produced by the `likePredicate` labeled alternative
	 * in {@see MySqlParser::predicate()}.
	 * @param $context The parse tree.
	 */
	public function exitLikePredicate(Context\LikePredicateContext $context) : void;
	/**
	 * Enter a parse tree produced by the `regexpPredicate`
	 * labeled alternative in {@see MySqlParser::predicate()}.
	 * @param $context The parse tree.
	 */
	public function enterRegexpPredicate(Context\RegexpPredicateContext $context) : void;
	/**
	 * Exit a parse tree produced by the `regexpPredicate` labeled alternative
	 * in {@see MySqlParser::predicate()}.
	 * @param $context The parse tree.
	 */
	public function exitRegexpPredicate(Context\RegexpPredicateContext $context) : void;
	/**
	 * Enter a parse tree produced by the `unaryExpressionAtom`
	 * labeled alternative in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function enterUnaryExpressionAtom(Context\UnaryExpressionAtomContext $context) : void;
	/**
	 * Exit a parse tree produced by the `unaryExpressionAtom` labeled alternative
	 * in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function exitUnaryExpressionAtom(Context\UnaryExpressionAtomContext $context) : void;
	/**
	 * Enter a parse tree produced by the `collateExpressionAtom`
	 * labeled alternative in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function enterCollateExpressionAtom(Context\CollateExpressionAtomContext $context) : void;
	/**
	 * Exit a parse tree produced by the `collateExpressionAtom` labeled alternative
	 * in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function exitCollateExpressionAtom(Context\CollateExpressionAtomContext $context) : void;
	/**
	 * Enter a parse tree produced by the `mysqlVariableExpressionAtom`
	 * labeled alternative in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function enterMysqlVariableExpressionAtom(Context\MysqlVariableExpressionAtomContext $context) : void;
	/**
	 * Exit a parse tree produced by the `mysqlVariableExpressionAtom` labeled alternative
	 * in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function exitMysqlVariableExpressionAtom(Context\MysqlVariableExpressionAtomContext $context) : void;
	/**
	 * Enter a parse tree produced by the `nestedExpressionAtom`
	 * labeled alternative in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function enterNestedExpressionAtom(Context\NestedExpressionAtomContext $context) : void;
	/**
	 * Exit a parse tree produced by the `nestedExpressionAtom` labeled alternative
	 * in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function exitNestedExpressionAtom(Context\NestedExpressionAtomContext $context) : void;
	/**
	 * Enter a parse tree produced by the `nestedRowExpressionAtom`
	 * labeled alternative in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function enterNestedRowExpressionAtom(Context\NestedRowExpressionAtomContext $context) : void;
	/**
	 * Exit a parse tree produced by the `nestedRowExpressionAtom` labeled alternative
	 * in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function exitNestedRowExpressionAtom(Context\NestedRowExpressionAtomContext $context) : void;
	/**
	 * Enter a parse tree produced by the `mathExpressionAtom`
	 * labeled alternative in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function enterMathExpressionAtom(Context\MathExpressionAtomContext $context) : void;
	/**
	 * Exit a parse tree produced by the `mathExpressionAtom` labeled alternative
	 * in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function exitMathExpressionAtom(Context\MathExpressionAtomContext $context) : void;
	/**
	 * Enter a parse tree produced by the `existsExpressionAtom`
	 * labeled alternative in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function enterExistsExpressionAtom(Context\ExistsExpressionAtomContext $context) : void;
	/**
	 * Exit a parse tree produced by the `existsExpressionAtom` labeled alternative
	 * in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function exitExistsExpressionAtom(Context\ExistsExpressionAtomContext $context) : void;
	/**
	 * Enter a parse tree produced by the `intervalExpressionAtom`
	 * labeled alternative in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function enterIntervalExpressionAtom(Context\IntervalExpressionAtomContext $context) : void;
	/**
	 * Exit a parse tree produced by the `intervalExpressionAtom` labeled alternative
	 * in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function exitIntervalExpressionAtom(Context\IntervalExpressionAtomContext $context) : void;
	/**
	 * Enter a parse tree produced by the `jsonExpressionAtom`
	 * labeled alternative in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function enterJsonExpressionAtom(Context\JsonExpressionAtomContext $context) : void;
	/**
	 * Exit a parse tree produced by the `jsonExpressionAtom` labeled alternative
	 * in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function exitJsonExpressionAtom(Context\JsonExpressionAtomContext $context) : void;
	/**
	 * Enter a parse tree produced by the `subqueryExpressionAtom`
	 * labeled alternative in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function enterSubqueryExpressionAtom(Context\SubqueryExpressionAtomContext $context) : void;
	/**
	 * Exit a parse tree produced by the `subqueryExpressionAtom` labeled alternative
	 * in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function exitSubqueryExpressionAtom(Context\SubqueryExpressionAtomContext $context) : void;
	/**
	 * Enter a parse tree produced by the `constantExpressionAtom`
	 * labeled alternative in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function enterConstantExpressionAtom(Context\ConstantExpressionAtomContext $context) : void;
	/**
	 * Exit a parse tree produced by the `constantExpressionAtom` labeled alternative
	 * in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function exitConstantExpressionAtom(Context\ConstantExpressionAtomContext $context) : void;
	/**
	 * Enter a parse tree produced by the `functionCallExpressionAtom`
	 * labeled alternative in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function enterFunctionCallExpressionAtom(Context\FunctionCallExpressionAtomContext $context) : void;
	/**
	 * Exit a parse tree produced by the `functionCallExpressionAtom` labeled alternative
	 * in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function exitFunctionCallExpressionAtom(Context\FunctionCallExpressionAtomContext $context) : void;
	/**
	 * Enter a parse tree produced by the `binaryExpressionAtom`
	 * labeled alternative in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function enterBinaryExpressionAtom(Context\BinaryExpressionAtomContext $context) : void;
	/**
	 * Exit a parse tree produced by the `binaryExpressionAtom` labeled alternative
	 * in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function exitBinaryExpressionAtom(Context\BinaryExpressionAtomContext $context) : void;
	/**
	 * Enter a parse tree produced by the `fullColumnNameExpressionAtom`
	 * labeled alternative in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function enterFullColumnNameExpressionAtom(Context\FullColumnNameExpressionAtomContext $context) : void;
	/**
	 * Exit a parse tree produced by the `fullColumnNameExpressionAtom` labeled alternative
	 * in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function exitFullColumnNameExpressionAtom(Context\FullColumnNameExpressionAtomContext $context) : void;
	/**
	 * Enter a parse tree produced by the `bitExpressionAtom`
	 * labeled alternative in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function enterBitExpressionAtom(Context\BitExpressionAtomContext $context) : void;
	/**
	 * Exit a parse tree produced by the `bitExpressionAtom` labeled alternative
	 * in {@see MySqlParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function exitBitExpressionAtom(Context\BitExpressionAtomContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::unaryOperator()}.
	 * @param $context The parse tree.
	 */
	public function enterUnaryOperator(Context\UnaryOperatorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::unaryOperator()}.
	 * @param $context The parse tree.
	 */
	public function exitUnaryOperator(Context\UnaryOperatorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::comparisonOperator()}.
	 * @param $context The parse tree.
	 */
	public function enterComparisonOperator(Context\ComparisonOperatorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::comparisonOperator()}.
	 * @param $context The parse tree.
	 */
	public function exitComparisonOperator(Context\ComparisonOperatorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::logicalOperator()}.
	 * @param $context The parse tree.
	 */
	public function enterLogicalOperator(Context\LogicalOperatorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::logicalOperator()}.
	 * @param $context The parse tree.
	 */
	public function exitLogicalOperator(Context\LogicalOperatorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::bitOperator()}.
	 * @param $context The parse tree.
	 */
	public function enterBitOperator(Context\BitOperatorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::bitOperator()}.
	 * @param $context The parse tree.
	 */
	public function exitBitOperator(Context\BitOperatorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::mathOperator()}.
	 * @param $context The parse tree.
	 */
	public function enterMathOperator(Context\MathOperatorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::mathOperator()}.
	 * @param $context The parse tree.
	 */
	public function exitMathOperator(Context\MathOperatorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::jsonOperator()}.
	 * @param $context The parse tree.
	 */
	public function enterJsonOperator(Context\JsonOperatorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::jsonOperator()}.
	 * @param $context The parse tree.
	 */
	public function exitJsonOperator(Context\JsonOperatorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::charsetNameBase()}.
	 * @param $context The parse tree.
	 */
	public function enterCharsetNameBase(Context\CharsetNameBaseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::charsetNameBase()}.
	 * @param $context The parse tree.
	 */
	public function exitCharsetNameBase(Context\CharsetNameBaseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::transactionLevelBase()}.
	 * @param $context The parse tree.
	 */
	public function enterTransactionLevelBase(Context\TransactionLevelBaseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::transactionLevelBase()}.
	 * @param $context The parse tree.
	 */
	public function exitTransactionLevelBase(Context\TransactionLevelBaseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::privilegesBase()}.
	 * @param $context The parse tree.
	 */
	public function enterPrivilegesBase(Context\PrivilegesBaseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::privilegesBase()}.
	 * @param $context The parse tree.
	 */
	public function exitPrivilegesBase(Context\PrivilegesBaseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::intervalTypeBase()}.
	 * @param $context The parse tree.
	 */
	public function enterIntervalTypeBase(Context\IntervalTypeBaseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::intervalTypeBase()}.
	 * @param $context The parse tree.
	 */
	public function exitIntervalTypeBase(Context\IntervalTypeBaseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::dataTypeBase()}.
	 * @param $context The parse tree.
	 */
	public function enterDataTypeBase(Context\DataTypeBaseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::dataTypeBase()}.
	 * @param $context The parse tree.
	 */
	public function exitDataTypeBase(Context\DataTypeBaseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::keywordsCanBeId()}.
	 * @param $context The parse tree.
	 */
	public function enterKeywordsCanBeId(Context\KeywordsCanBeIdContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::keywordsCanBeId()}.
	 * @param $context The parse tree.
	 */
	public function exitKeywordsCanBeId(Context\KeywordsCanBeIdContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see MySqlParser::functionNameBase()}.
	 * @param $context The parse tree.
	 */
	public function enterFunctionNameBase(Context\FunctionNameBaseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see MySqlParser::functionNameBase()}.
	 * @param $context The parse tree.
	 */
	public function exitFunctionNameBase(Context\FunctionNameBaseContext $context) : void;
}