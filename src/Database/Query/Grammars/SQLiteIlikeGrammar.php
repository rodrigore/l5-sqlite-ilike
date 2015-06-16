<?php
namespace Bmatics\SQLiteIlike\Database\Query\Grammars;

use Illuminate\Database\Query\Builder;
use Illuminate\Database\Query\Grammars\SQLiteGrammar;

class SQLiteIlikeGrammar extends SQLiteGrammar
{
	protected function compileWheres(Builder $query)
	{
		$compiled = parent::compileWheres($query);
		return $this->replaceIlikes($compiled);
	}

	protected function compileJoins(Builder $query, $joins)
	{
		$compiled = parent::compileJoins($query, $joins);
		return $this->replaceIlikes($compiled);
	}

	protected function compileHavings(Builder $query, $havings)
	{
		$compiled = parent::compileHavings($query, $havings);
		return $this->replaceIlikes($compiled);		
	}

	protected function replaceIlikes($compiled)
	{
		return preg_replace('/(\s)ilike(\s)/i', '$1like$2', $compiled);
	}
}
