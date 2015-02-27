<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOauthJwtTable extends Migration {

//CREATE TABLE oauth_jwt (
//client_id VARCHAR(80) NOT NULL,
// subject VARCHAR(80),
// public_key VARCHAR(2000),
// CONSTRAINT jwt_client_id_pk PRIMARY KEY (client_id));

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oauth_jwt', function(Blueprint $table)
		{
	        $table->string('client_id');
            $table->string('subject')->nullable();
            $table->text('public_key');

            $table->primary('client_id', 'jwt_client_id_pk');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oauth_jwt');
	}

}
