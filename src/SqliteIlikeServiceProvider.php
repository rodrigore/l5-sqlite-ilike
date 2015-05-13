<?php
namespace Bmatics\SqliteIlike;

use Illuminate\Support\ServiceProvider;
use Bmatics\SqliteIlike\Database\SqliteIlikeConnection;

class SqliteIlikeServiceProvider extends ServiceProvider {

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
		$this->app->bind('db.connection.sqlite', 'Bmatics\SqliteIlike\Database\SqliteIlikeConnection');
	}
}
