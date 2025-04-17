<?php

namespace App\Doctrine\Functions;

use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\Lexer;
use Doctrine\ORM\Query\Parser;
use Doctrine\ORM\Query\SqlWalker;

/**
 * Custom DQL function for MySQL TIMESTAMPDIFF
 */
class TimestampDiff extends FunctionNode
{
    public $unit;
    public $date1;
    public $date2;

    public function parse(Parser $parser): void
    {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);
        
        // First argument is the unit (e.g., HOUR, DAY, etc.)
        $this->unit = $parser->StringPrimary();
        
        $parser->match(Lexer::T_COMMA);
        
        // Second argument is the start date
        $this->date1 = $parser->ArithmeticPrimary();
        
        $parser->match(Lexer::T_COMMA);
        
        // Third argument is the end date
        $this->date2 = $parser->ArithmeticPrimary();
        
        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }

    public function getSql(SqlWalker $sqlWalker): string
    {
        return 'TIMESTAMPDIFF(' .
            $this->unit->dispatch($sqlWalker) . ', ' .
            $this->date1->dispatch($sqlWalker) . ', ' .
            $this->date2->dispatch($sqlWalker) .
        ')';
    }
}
