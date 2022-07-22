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
namespace Hyperf\Seata\SqlParser\Antlr\MySql\Parser\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

class FunctionNameBaseContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_functionNameBase;
    }

    public function ABS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ABS, 0);
    }

    public function ACOS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ACOS, 0);
    }

    public function ADDDATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ADDDATE, 0);
    }

    public function ADDTIME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ADDTIME, 0);
    }

    public function AES_DECRYPT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AES_DECRYPT, 0);
    }

    public function AES_ENCRYPT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AES_ENCRYPT, 0);
    }

    public function AREA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AREA, 0);
    }

    public function ASBINARY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ASBINARY, 0);
    }

    public function ASIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ASIN, 0);
    }

    public function ASTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ASTEXT, 0);
    }

    public function ASWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ASWKB, 0);
    }

    public function ASWKT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ASWKT, 0);
    }

    public function ASYMMETRIC_DECRYPT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ASYMMETRIC_DECRYPT, 0);
    }

    public function ASYMMETRIC_DERIVE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ASYMMETRIC_DERIVE, 0);
    }

    public function ASYMMETRIC_ENCRYPT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ASYMMETRIC_ENCRYPT, 0);
    }

    public function ASYMMETRIC_SIGN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ASYMMETRIC_SIGN, 0);
    }

    public function ASYMMETRIC_VERIFY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ASYMMETRIC_VERIFY, 0);
    }

    public function ATAN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ATAN, 0);
    }

    public function ATAN2(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ATAN2, 0);
    }

    public function BENCHMARK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BENCHMARK, 0);
    }

    public function BIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BIN, 0);
    }

    public function BIT_COUNT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BIT_COUNT, 0);
    }

    public function BIT_LENGTH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BIT_LENGTH, 0);
    }

    public function BUFFER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BUFFER, 0);
    }

    public function CEIL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CEIL, 0);
    }

    public function CEILING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CEILING, 0);
    }

    public function CENTROID(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CENTROID, 0);
    }

    public function CHARACTER_LENGTH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHARACTER_LENGTH, 0);
    }

    public function CHARSET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHARSET, 0);
    }

    public function CHAR_LENGTH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHAR_LENGTH, 0);
    }

    public function COERCIBILITY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COERCIBILITY, 0);
    }

    public function COLLATION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COLLATION, 0);
    }

    public function COMPRESS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COMPRESS, 0);
    }

    public function CONCAT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONCAT, 0);
    }

    public function CONCAT_WS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONCAT_WS, 0);
    }

    public function CONNECTION_ID(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONNECTION_ID, 0);
    }

    public function CONV(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONV, 0);
    }

    public function CONVERT_TZ(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONVERT_TZ, 0);
    }

    public function COS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COS, 0);
    }

    public function COT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COT, 0);
    }

    public function COUNT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COUNT, 0);
    }

    public function CRC32(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CRC32, 0);
    }

    public function CREATE_ASYMMETRIC_PRIV_KEY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CREATE_ASYMMETRIC_PRIV_KEY, 0);
    }

    public function CREATE_ASYMMETRIC_PUB_KEY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CREATE_ASYMMETRIC_PUB_KEY, 0);
    }

    public function CREATE_DH_PARAMETERS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CREATE_DH_PARAMETERS, 0);
    }

    public function CREATE_DIGEST(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CREATE_DIGEST, 0);
    }

    public function CROSSES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CROSSES, 0);
    }

    public function DATABASE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DATABASE, 0);
    }

    public function DATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DATE, 0);
    }

    public function DATEDIFF(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DATEDIFF, 0);
    }

    public function DATE_FORMAT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DATE_FORMAT, 0);
    }

    public function DAY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DAY, 0);
    }

    public function DAYNAME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DAYNAME, 0);
    }

    public function DAYOFMONTH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DAYOFMONTH, 0);
    }

    public function DAYOFWEEK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DAYOFWEEK, 0);
    }

    public function DAYOFYEAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DAYOFYEAR, 0);
    }

    public function DECODE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DECODE, 0);
    }

    public function DEGREES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DEGREES, 0);
    }

    public function DES_DECRYPT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DES_DECRYPT, 0);
    }

    public function DES_ENCRYPT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DES_ENCRYPT, 0);
    }

    public function DIMENSION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DIMENSION, 0);
    }

    public function DISJOINT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DISJOINT, 0);
    }

    public function ELT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ELT, 0);
    }

    public function ENCODE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ENCODE, 0);
    }

    public function ENCRYPT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ENCRYPT, 0);
    }

    public function ENDPOINT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ENDPOINT, 0);
    }

    public function ENVELOPE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ENVELOPE, 0);
    }

    public function EQUALS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EQUALS, 0);
    }

    public function EXP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EXP, 0);
    }

    public function EXPORT_SET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EXPORT_SET, 0);
    }

    public function EXTERIORRING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EXTERIORRING, 0);
    }

    public function EXTRACTVALUE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EXTRACTVALUE, 0);
    }

    public function FIELD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FIELD, 0);
    }

    public function FIND_IN_SET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FIND_IN_SET, 0);
    }

    public function FLOOR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FLOOR, 0);
    }

    public function FORMAT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FORMAT, 0);
    }

    public function FOUND_ROWS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FOUND_ROWS, 0);
    }

    public function FROM_BASE64(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FROM_BASE64, 0);
    }

    public function FROM_DAYS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FROM_DAYS, 0);
    }

    public function FROM_UNIXTIME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FROM_UNIXTIME, 0);
    }

    public function GEOMCOLLFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GEOMCOLLFROMTEXT, 0);
    }

    public function GEOMCOLLFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GEOMCOLLFROMWKB, 0);
    }

    public function GEOMETRYCOLLECTION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GEOMETRYCOLLECTION, 0);
    }

    public function GEOMETRYCOLLECTIONFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GEOMETRYCOLLECTIONFROMTEXT, 0);
    }

    public function GEOMETRYCOLLECTIONFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GEOMETRYCOLLECTIONFROMWKB, 0);
    }

    public function GEOMETRYFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GEOMETRYFROMTEXT, 0);
    }

    public function GEOMETRYFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GEOMETRYFROMWKB, 0);
    }

    public function GEOMETRYN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GEOMETRYN, 0);
    }

    public function GEOMETRYTYPE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GEOMETRYTYPE, 0);
    }

    public function GEOMFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GEOMFROMTEXT, 0);
    }

    public function GEOMFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GEOMFROMWKB, 0);
    }

    public function GET_FORMAT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GET_FORMAT, 0);
    }

    public function GET_LOCK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GET_LOCK, 0);
    }

    public function GLENGTH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GLENGTH, 0);
    }

    public function GREATEST(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GREATEST, 0);
    }

    public function GTID_SUBSET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GTID_SUBSET, 0);
    }

    public function GTID_SUBTRACT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GTID_SUBTRACT, 0);
    }

    public function HEX(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::HEX, 0);
    }

    public function HOUR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::HOUR, 0);
    }

    public function IFNULL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IFNULL, 0);
    }

    public function INET6_ATON(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INET6_ATON, 0);
    }

    public function INET6_NTOA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INET6_NTOA, 0);
    }

    public function INET_ATON(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INET_ATON, 0);
    }

    public function INET_NTOA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INET_NTOA, 0);
    }

    public function INSTR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INSTR, 0);
    }

    public function INTERIORRINGN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INTERIORRINGN, 0);
    }

    public function INTERSECTS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INTERSECTS, 0);
    }

    public function INVISIBLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INVISIBLE, 0);
    }

    public function ISCLOSED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ISCLOSED, 0);
    }

    public function ISEMPTY(): bool
    {
        return empty($this->getToken(MySqlParser::ISEMPTY, 0));
    }

    public function ISNULL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ISNULL, 0);
    }

    public function ISSIMPLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ISSIMPLE, 0);
    }

    public function IS_FREE_LOCK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IS_FREE_LOCK, 0);
    }

    public function IS_IPV4(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IS_IPV4, 0);
    }

    public function IS_IPV4_COMPAT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IS_IPV4_COMPAT, 0);
    }

    public function IS_IPV4_MAPPED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IS_IPV4_MAPPED, 0);
    }

    public function IS_IPV6(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IS_IPV6, 0);
    }

    public function IS_USED_LOCK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IS_USED_LOCK, 0);
    }

    public function LAST_INSERT_ID(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LAST_INSERT_ID, 0);
    }

    public function LCASE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LCASE, 0);
    }

    public function LEAST(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LEAST, 0);
    }

    public function LEFT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LEFT, 0);
    }

    public function LENGTH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LENGTH, 0);
    }

    public function LINEFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LINEFROMTEXT, 0);
    }

    public function LINEFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LINEFROMWKB, 0);
    }

    public function LINESTRING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LINESTRING, 0);
    }

    public function LINESTRINGFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LINESTRINGFROMTEXT, 0);
    }

    public function LINESTRINGFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LINESTRINGFROMWKB, 0);
    }

    public function LN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LN, 0);
    }

    public function LOAD_FILE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOAD_FILE, 0);
    }

    public function LOCATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOCATE, 0);
    }

    public function LOG(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOG, 0);
    }

    public function LOG10(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOG10, 0);
    }

    public function LOG2(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOG2, 0);
    }

    public function LOWER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOWER, 0);
    }

    public function LPAD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LPAD, 0);
    }

    public function LTRIM(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LTRIM, 0);
    }

    public function MAKEDATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MAKEDATE, 0);
    }

    public function MAKETIME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MAKETIME, 0);
    }

    public function MAKE_SET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MAKE_SET, 0);
    }

    public function MASTER_POS_WAIT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MASTER_POS_WAIT, 0);
    }

    public function MBRCONTAINS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MBRCONTAINS, 0);
    }

    public function MBRDISJOINT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MBRDISJOINT, 0);
    }

    public function MBREQUAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MBREQUAL, 0);
    }

    public function MBRINTERSECTS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MBRINTERSECTS, 0);
    }

    public function MBROVERLAPS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MBROVERLAPS, 0);
    }

    public function MBRTOUCHES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MBRTOUCHES, 0);
    }

    public function MBRWITHIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MBRWITHIN, 0);
    }

    public function MD5(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MD5, 0);
    }

    public function MICROSECOND(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MICROSECOND, 0);
    }

    public function MINUTE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MINUTE, 0);
    }

    public function MLINEFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MLINEFROMTEXT, 0);
    }

    public function MLINEFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MLINEFROMWKB, 0);
    }

    public function MOD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MOD, 0);
    }

    public function MONTH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MONTH, 0);
    }

    public function MONTHNAME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MONTHNAME, 0);
    }

    public function MPOINTFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MPOINTFROMTEXT, 0);
    }

    public function MPOINTFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MPOINTFROMWKB, 0);
    }

    public function MPOLYFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MPOLYFROMTEXT, 0);
    }

    public function MPOLYFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MPOLYFROMWKB, 0);
    }

    public function MULTILINESTRING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MULTILINESTRING, 0);
    }

    public function MULTILINESTRINGFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MULTILINESTRINGFROMTEXT, 0);
    }

    public function MULTILINESTRINGFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MULTILINESTRINGFROMWKB, 0);
    }

    public function MULTIPOINT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MULTIPOINT, 0);
    }

    public function MULTIPOINTFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MULTIPOINTFROMTEXT, 0);
    }

    public function MULTIPOINTFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MULTIPOINTFROMWKB, 0);
    }

    public function MULTIPOLYGON(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MULTIPOLYGON, 0);
    }

    public function MULTIPOLYGONFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MULTIPOLYGONFROMTEXT, 0);
    }

    public function MULTIPOLYGONFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MULTIPOLYGONFROMWKB, 0);
    }

    public function NAME_CONST(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NAME_CONST, 0);
    }

    public function NULLIF(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NULLIF, 0);
    }

    public function NUMGEOMETRIES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NUMGEOMETRIES, 0);
    }

    public function NUMINTERIORRINGS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NUMINTERIORRINGS, 0);
    }

    public function NUMPOINTS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NUMPOINTS, 0);
    }

    public function OCT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OCT, 0);
    }

    public function OCTET_LENGTH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OCTET_LENGTH, 0);
    }

    public function ORD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ORD, 0);
    }

    public function OVERLAPS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OVERLAPS, 0);
    }

    public function PERIOD_ADD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PERIOD_ADD, 0);
    }

    public function PERIOD_DIFF(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PERIOD_DIFF, 0);
    }

    public function PI(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PI, 0);
    }

    public function POINT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::POINT, 0);
    }

    public function POINTFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::POINTFROMTEXT, 0);
    }

    public function POINTFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::POINTFROMWKB, 0);
    }

    public function POINTN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::POINTN, 0);
    }

    public function POLYFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::POLYFROMTEXT, 0);
    }

    public function POLYFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::POLYFROMWKB, 0);
    }

    public function POLYGON(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::POLYGON, 0);
    }

    public function POLYGONFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::POLYGONFROMTEXT, 0);
    }

    public function POLYGONFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::POLYGONFROMWKB, 0);
    }

    public function POSITION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::POSITION, 0);
    }

    public function POW(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::POW, 0);
    }

    public function POWER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::POWER, 0);
    }

    public function QUARTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::QUARTER, 0);
    }

    public function QUOTE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::QUOTE, 0);
    }

    public function RADIANS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RADIANS, 0);
    }

    public function RAND(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RAND, 0);
    }

    public function RANDOM_BYTES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RANDOM_BYTES, 0);
    }

    public function RELEASE_LOCK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RELEASE_LOCK, 0);
    }

    public function REVERSE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REVERSE, 0);
    }

    public function RIGHT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RIGHT, 0);
    }

    public function ROUND(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ROUND, 0);
    }

    public function ROW_COUNT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ROW_COUNT, 0);
    }

    public function RPAD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RPAD, 0);
    }

    public function RTRIM(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RTRIM, 0);
    }

    public function SECOND(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SECOND, 0);
    }

    public function SEC_TO_TIME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SEC_TO_TIME, 0);
    }

    public function SCHEMA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SCHEMA, 0);
    }

    public function SESSION_USER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SESSION_USER, 0);
    }

    public function SESSION_VARIABLES_ADMIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SESSION_VARIABLES_ADMIN, 0);
    }

    public function SHA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SHA, 0);
    }

    public function SHA1(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SHA1, 0);
    }

    public function SHA2(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SHA2, 0);
    }

    public function SIGN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SIGN, 0);
    }

    public function SIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SIN, 0);
    }

    public function SLEEP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SLEEP, 0);
    }

    public function SOUNDEX(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SOUNDEX, 0);
    }

    public function SQL_THREAD_WAIT_AFTER_GTIDS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SQL_THREAD_WAIT_AFTER_GTIDS, 0);
    }

    public function SQRT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SQRT, 0);
    }

    public function SRID(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SRID, 0);
    }

    public function STARTPOINT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STARTPOINT, 0);
    }

    public function STRCMP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRCMP, 0);
    }

    public function STR_TO_DATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STR_TO_DATE, 0);
    }

    public function ST_AREA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_AREA, 0);
    }

    public function ST_ASBINARY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_ASBINARY, 0);
    }

    public function ST_ASTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_ASTEXT, 0);
    }

    public function ST_ASWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_ASWKB, 0);
    }

    public function ST_ASWKT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_ASWKT, 0);
    }

    public function ST_BUFFER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_BUFFER, 0);
    }

    public function ST_CENTROID(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_CENTROID, 0);
    }

    public function ST_CONTAINS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_CONTAINS, 0);
    }

    public function ST_CROSSES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_CROSSES, 0);
    }

    public function ST_DIFFERENCE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_DIFFERENCE, 0);
    }

    public function ST_DIMENSION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_DIMENSION, 0);
    }

    public function ST_DISJOINT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_DISJOINT, 0);
    }

    public function ST_DISTANCE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_DISTANCE, 0);
    }

    public function ST_ENDPOINT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_ENDPOINT, 0);
    }

    public function ST_ENVELOPE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_ENVELOPE, 0);
    }

    public function ST_EQUALS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_EQUALS, 0);
    }

    public function ST_EXTERIORRING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_EXTERIORRING, 0);
    }

    public function ST_GEOMCOLLFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_GEOMCOLLFROMTEXT, 0);
    }

    public function ST_GEOMCOLLFROMTXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_GEOMCOLLFROMTXT, 0);
    }

    public function ST_GEOMCOLLFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_GEOMCOLLFROMWKB, 0);
    }

    public function ST_GEOMETRYCOLLECTIONFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_GEOMETRYCOLLECTIONFROMTEXT, 0);
    }

    public function ST_GEOMETRYCOLLECTIONFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_GEOMETRYCOLLECTIONFROMWKB, 0);
    }

    public function ST_GEOMETRYFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_GEOMETRYFROMTEXT, 0);
    }

    public function ST_GEOMETRYFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_GEOMETRYFROMWKB, 0);
    }

    public function ST_GEOMETRYN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_GEOMETRYN, 0);
    }

    public function ST_GEOMETRYTYPE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_GEOMETRYTYPE, 0);
    }

    public function ST_GEOMFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_GEOMFROMTEXT, 0);
    }

    public function ST_GEOMFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_GEOMFROMWKB, 0);
    }

    public function ST_INTERIORRINGN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_INTERIORRINGN, 0);
    }

    public function ST_INTERSECTION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_INTERSECTION, 0);
    }

    public function ST_INTERSECTS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_INTERSECTS, 0);
    }

    public function ST_ISCLOSED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_ISCLOSED, 0);
    }

    public function ST_ISEMPTY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_ISEMPTY, 0);
    }

    public function ST_ISSIMPLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_ISSIMPLE, 0);
    }

    public function ST_LINEFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_LINEFROMTEXT, 0);
    }

    public function ST_LINEFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_LINEFROMWKB, 0);
    }

    public function ST_LINESTRINGFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_LINESTRINGFROMTEXT, 0);
    }

    public function ST_LINESTRINGFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_LINESTRINGFROMWKB, 0);
    }

    public function ST_NUMGEOMETRIES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_NUMGEOMETRIES, 0);
    }

    public function ST_NUMINTERIORRING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_NUMINTERIORRING, 0);
    }

    public function ST_NUMINTERIORRINGS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_NUMINTERIORRINGS, 0);
    }

    public function ST_NUMPOINTS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_NUMPOINTS, 0);
    }

    public function ST_OVERLAPS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_OVERLAPS, 0);
    }

    public function ST_POINTFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_POINTFROMTEXT, 0);
    }

    public function ST_POINTFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_POINTFROMWKB, 0);
    }

    public function ST_POINTN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_POINTN, 0);
    }

    public function ST_POLYFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_POLYFROMTEXT, 0);
    }

    public function ST_POLYFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_POLYFROMWKB, 0);
    }

    public function ST_POLYGONFROMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_POLYGONFROMTEXT, 0);
    }

    public function ST_POLYGONFROMWKB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_POLYGONFROMWKB, 0);
    }

    public function ST_SRID(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_SRID, 0);
    }

    public function ST_STARTPOINT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_STARTPOINT, 0);
    }

    public function ST_SYMDIFFERENCE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_SYMDIFFERENCE, 0);
    }

    public function ST_TOUCHES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_TOUCHES, 0);
    }

    public function ST_UNION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_UNION, 0);
    }

    public function ST_WITHIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_WITHIN, 0);
    }

    public function ST_X(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_X, 0);
    }

    public function ST_Y(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ST_Y, 0);
    }

    public function SUBDATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SUBDATE, 0);
    }

    public function SUBSTRING_INDEX(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SUBSTRING_INDEX, 0);
    }

    public function SUBTIME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SUBTIME, 0);
    }

    public function SYSTEM_USER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SYSTEM_USER, 0);
    }

    public function TAN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TAN, 0);
    }

    public function TIME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TIME, 0);
    }

    public function TIMEDIFF(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TIMEDIFF, 0);
    }

    public function TIMESTAMP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TIMESTAMP, 0);
    }

    public function TIMESTAMPADD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TIMESTAMPADD, 0);
    }

    public function TIMESTAMPDIFF(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TIMESTAMPDIFF, 0);
    }

    public function TIME_FORMAT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TIME_FORMAT, 0);
    }

    public function TIME_TO_SEC(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TIME_TO_SEC, 0);
    }

    public function TOUCHES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TOUCHES, 0);
    }

    public function TO_BASE64(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TO_BASE64, 0);
    }

    public function TO_DAYS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TO_DAYS, 0);
    }

    public function TO_SECONDS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TO_SECONDS, 0);
    }

    public function UCASE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UCASE, 0);
    }

    public function UNCOMPRESS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UNCOMPRESS, 0);
    }

    public function UNCOMPRESSED_LENGTH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UNCOMPRESSED_LENGTH, 0);
    }

    public function UNHEX(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UNHEX, 0);
    }

    public function UNIX_TIMESTAMP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UNIX_TIMESTAMP, 0);
    }

    public function UPDATEXML(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UPDATEXML, 0);
    }

    public function UPPER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UPPER, 0);
    }

    public function UUID(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UUID, 0);
    }

    public function UUID_SHORT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UUID_SHORT, 0);
    }

    public function VALIDATE_PASSWORD_STRENGTH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VALIDATE_PASSWORD_STRENGTH, 0);
    }

    public function VERSION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VERSION, 0);
    }

    public function VISIBLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VISIBLE, 0);
    }

    public function WAIT_UNTIL_SQL_THREAD_AFTER_GTIDS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WAIT_UNTIL_SQL_THREAD_AFTER_GTIDS, 0);
    }

    public function WEEK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WEEK, 0);
    }

    public function WEEKDAY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WEEKDAY, 0);
    }

    public function WEEKOFYEAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WEEKOFYEAR, 0);
    }

    public function WEIGHT_STRING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WEIGHT_STRING, 0);
    }

    public function WITHIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WITHIN, 0);
    }

    public function YEAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::YEAR, 0);
    }

    public function YEARWEEK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::YEARWEEK, 0);
    }

    public function Y_FUNCTION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::Y_FUNCTION, 0);
    }

    public function X_FUNCTION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::X_FUNCTION, 0);
    }

    public function JSON_ARRAY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_ARRAY, 0);
    }

    public function JSON_OBJECT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_OBJECT, 0);
    }

    public function JSON_QUOTE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_QUOTE, 0);
    }

    public function JSON_CONTAINS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_CONTAINS, 0);
    }

    public function JSON_CONTAINS_PATH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_CONTAINS_PATH, 0);
    }

    public function JSON_EXTRACT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_EXTRACT, 0);
    }

    public function JSON_KEYS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_KEYS, 0);
    }

    public function JSON_OVERLAPS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_OVERLAPS, 0);
    }

    public function JSON_SEARCH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_SEARCH, 0);
    }

    public function JSON_VALUE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_VALUE, 0);
    }

    public function JSON_ARRAY_APPEND(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_ARRAY_APPEND, 0);
    }

    public function JSON_ARRAY_INSERT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_ARRAY_INSERT, 0);
    }

    public function JSON_INSERT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_INSERT, 0);
    }

    public function JSON_MERGE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_MERGE, 0);
    }

    public function JSON_MERGE_PATCH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_MERGE_PATCH, 0);
    }

    public function JSON_MERGE_PRESERVE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_MERGE_PRESERVE, 0);
    }

    public function JSON_REMOVE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_REMOVE, 0);
    }

    public function JSON_REPLACE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_REPLACE, 0);
    }

    public function JSON_SET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_SET, 0);
    }

    public function JSON_UNQUOTE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_UNQUOTE, 0);
    }

    public function JSON_DEPTH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_DEPTH, 0);
    }

    public function JSON_LENGTH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_LENGTH, 0);
    }

    public function JSON_TYPE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_TYPE, 0);
    }

    public function JSON_VALID(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_VALID, 0);
    }

    public function JSON_TABLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_TABLE, 0);
    }

    public function JSON_SCHEMA_VALID(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_SCHEMA_VALID, 0);
    }

    public function JSON_SCHEMA_VALIDATION_REPORT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_SCHEMA_VALIDATION_REPORT, 0);
    }

    public function JSON_PRETTY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_PRETTY, 0);
    }

    public function JSON_STORAGE_FREE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_STORAGE_FREE, 0);
    }

    public function JSON_STORAGE_SIZE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_STORAGE_SIZE, 0);
    }

    public function JSON_ARRAYAGG(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_ARRAYAGG, 0);
    }

    public function JSON_OBJECTAGG(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_OBJECTAGG, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterFunctionNameBase($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitFunctionNameBase($this);
        }
    }
}
