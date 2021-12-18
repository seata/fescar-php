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
    use Antlr\Antlr4\Runtime\Token;
    use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
    use Antlr\Antlr4\Runtime\Tree\TerminalNode;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

    class LoadDataStatementContext extends ParserRuleContext
    {
        /**
         * @var null|Token
         */
        public $priority;

        /**
         * @var null|Token
         */
        public $filename;

        /**
         * @var null|Token
         */
        public $violation;

        /**
         * @var null|Token
         */
        public $fieldsFormat;

        /**
         * @var null|Token
         */
        public $linesFormat;

        /**
         * @var null|CharsetNameContext
         */
        public $charset;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_loadDataStatement;
        }

        public function LOAD(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LOAD, 0);
        }

        public function DATA(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DATA, 0);
        }

        public function INFILE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INFILE, 0);
        }

        public function INTO(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INTO, 0);
        }

        public function TABLE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TABLE, 0);
        }

        public function tableName(): ?TableNameContext
        {
            return $this->getTypedRuleContext(TableNameContext::class, 0);
        }

        public function STRING_LITERAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STRING_LITERAL, 0);
        }

        public function LOCAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LOCAL, 0);
        }

        public function PARTITION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PARTITION, 0);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function LR_BRACKET(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::LR_BRACKET);
            }

            return $this->getToken(MySqlParser::LR_BRACKET, $index);
        }

        public function uidList(): ?UidListContext
        {
            return $this->getTypedRuleContext(UidListContext::class, 0);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function RR_BRACKET(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::RR_BRACKET);
            }

            return $this->getToken(MySqlParser::RR_BRACKET, $index);
        }

        public function CHARACTER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CHARACTER, 0);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function SET(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::SET);
            }

            return $this->getToken(MySqlParser::SET, $index);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function LINES(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::LINES);
            }

            return $this->getToken(MySqlParser::LINES, $index);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function IGNORE(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::IGNORE);
            }

            return $this->getToken(MySqlParser::IGNORE, $index);
        }

        public function decimalLiteral(): ?DecimalLiteralContext
        {
            return $this->getTypedRuleContext(DecimalLiteralContext::class, 0);
        }

        /**
         * @return null|array<AssignmentFieldContext>|AssignmentFieldContext
         */
        public function assignmentField(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(AssignmentFieldContext::class);
            }

            return $this->getTypedRuleContext(AssignmentFieldContext::class, $index);
        }

        /**
         * @return null|array<UpdatedElementContext>|UpdatedElementContext
         */
        public function updatedElement(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(UpdatedElementContext::class);
            }

            return $this->getTypedRuleContext(UpdatedElementContext::class, $index);
        }

        public function charsetName(): ?CharsetNameContext
        {
            return $this->getTypedRuleContext(CharsetNameContext::class, 0);
        }

        public function LOW_PRIORITY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LOW_PRIORITY, 0);
        }

        public function CONCURRENT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CONCURRENT, 0);
        }

        public function REPLACE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REPLACE, 0);
        }

        public function FIELDS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FIELDS, 0);
        }

        public function COLUMNS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COLUMNS, 0);
        }

        public function ROWS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ROWS, 0);
        }

        /**
         * @return null|array<SelectFieldsIntoContext>|SelectFieldsIntoContext
         */
        public function selectFieldsInto(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(SelectFieldsIntoContext::class);
            }

            return $this->getTypedRuleContext(SelectFieldsIntoContext::class, $index);
        }

        /**
         * @return null|array<SelectLinesIntoContext>|SelectLinesIntoContext
         */
        public function selectLinesInto(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(SelectLinesIntoContext::class);
            }

            return $this->getTypedRuleContext(SelectLinesIntoContext::class, $index);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function COMMA(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::COMMA);
            }

            return $this->getToken(MySqlParser::COMMA, $index);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterLoadDataStatement($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitLoadDataStatement($this);
            }
        }
    }
