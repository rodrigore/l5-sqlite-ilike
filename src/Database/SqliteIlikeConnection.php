<?php
namespace Bmatics\SqliteIlike\Database;

use Bmatics\SqliteIlike\Database\Query\Grammars\SqliteIlikeGrammar as QueryGrammar;
use Illuminate\Database\SqliteConnection;

class SqliteIlikeConnection extends SqliteConnection
{
	protected function getDefaultQueryGrammar()
	{
		return $this->withTablePrefix(new QueryGrammar);
	}
}