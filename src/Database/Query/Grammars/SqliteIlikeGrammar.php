<?php
namespace Bmatics\SqliteIlike\Database\Query\Grammars;

use Illuminate\Database\Query\Builder;
use Illuminate\Database\Query\Grammars\SqliteGrammar;

class SqliteIlikeGrammar extends PostgresGrammar
{
	protected function compileWheres(Builder $query)
	{
		$compiled = parent::compileWheres($query);
		return $this->handleIlikes($compiled);
	}

	protected function compileJoins(Builder $query, $joins)
	{
		$compiled = parent::compileJoins($query, $joins);
		return $this->handleIlikes($compiled);
	}

	protected function compileHavings(Builder $query, $havings)
	{
		$compiled = parent::compileHavings($query, $havings);
		return $this->handleIlikes($compiled);		
	}

	protected function handleIlikes($compiled)
	{
		return preg_replace('/ilike/i', 'like', $compiled);
	}
}