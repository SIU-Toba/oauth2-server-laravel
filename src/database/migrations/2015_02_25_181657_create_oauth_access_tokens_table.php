<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOauthAccessTokensTable extends Migration {

    //CREATE TABLE oauth_access_tokens (
    //access_token VARCHAR(40) NOT NULL,
    // client_id VARCHAR(80) NOT NULL,
    // user_id VARCHAR(255),
    // expires TIMESTAMP NOT NULL,
    // scope VARCHAR(2000),
    // CONSTRAINT access_token_pk PRIMARY KEY (access_token));

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oauth_access_tokens', function(Blueprint $table)
		{
		    $table->string('access_token', 40);
            $table->string('client_id');
            $table->string('user_id');
            $table->timestamp('expires');
            $table->text('scope');

            $table->primary('access_token', 'access_token_pk');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oauth_access_tokens');
	}

}
