<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOauthScopesTable extends Migration {

    //CREATE TABLE oauth_scopes (scope TEXT, is_default BOOLEAN);

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oauth_scopes', function(Blueprint $table)
		{
			$table->text('scope');
            $table->boolean('is_default');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oauth_scopes');
	}

}
