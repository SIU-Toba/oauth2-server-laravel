<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOauthAuthorizationCodesTable extends Migration {

    //CREATE TABLE oauth_authorization_codes (
    //authorization_code VARCHAR(40) NOT NULL,
    // client_id VARCHAR(80) NOT NULL,
    // user_id VARCHAR(255),
    // redirect_uri VARCHAR(2000),
    // expires TIMESTAMP NOT NULL,
    // scope VARCHAR(2000),
    // CONSTRAINT auth_code_pk PRIMARY KEY (authorization_code));

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oauth_authorization_codes', function(Blueprint $table)
		{
			$table->string('authorization_code', 40);
            $table->string('client_id');
            $table->string('user_id')->nullable();
            $table->text('redirect_uri')->nullable();
            $table->timestamp('expires');
            $table->text('scope');

            $table->primary('authorization_code', 'auth_code_pk');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oauth_authorization_codes');
	}

}
