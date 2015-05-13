<?php
namespace Bmatics\SQLiteIlike;

use Illuminate\Support\ServiceProvider;
use Bmatics\SqliteIlike\Database\SQLiteIlikeConnection;

class SQLiteIlikeServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('db.connection.sqlite', 'Bmatics\SQLiteIlike\Database\SQLiteIlikeConnection');
	}
}
