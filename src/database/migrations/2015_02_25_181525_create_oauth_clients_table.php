<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOauthClientsTable extends Migration {

    //CREATE TABLE oauth_clients (
    //client_id VARCHAR(80) NOT NULL,
    // client_secret VARCHAR(80) NOT NULL,
    // redirect_uri VARCHAR(2000) NOT NULL,
    // grant_types VARCHAR(80),
    // scope VARCHAR(100),
    // user_id VARCHAR(80),
    // CONSTRAINT clients_client_id_pk PRIMARY KEY (client_id));
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oauth_clients', function(Blueprint $table)
		{
			$table->string('client_id');
			$table->string('client_secret');
            $table->text('redirect_uri');
            $table->string('grant_types')->nullable();
            $table->string('scope')->nullable();
            $table->string('user_id')->nullable();

            $table->primary('client_id', 'clients_client_id_pk');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oauth_clients');
	}

}
