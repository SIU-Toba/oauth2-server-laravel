<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOauthRefreshTokensTable extends Migration {

    //CREATE TABLE oauth_refresh_tokens (
    //refresh_token VARCHAR(40) NOT NULL,
    // client_id VARCHAR(80) NOT NULL,
    // user_id VARCHAR(255),
    // expires TIMESTAMP NOT NULL,
    // scope VARCHAR(2000),
    // CONSTRAINT refresh_token_pk PRIMARY KEY (refresh_token));

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oauth_refresh_tokens', function(Blueprint $table)
		{
			$table->string('refresh_token', 40);
            $table->string('client_id');
            $table->string('user_id')->nullable();
            $table->timestamp('expires');
            $table->text('scope');

            $table->primary('refresh_token', 'refresh_token_pk');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oauth_refresh_tokens');
	}

}
