<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOauthUsersTable extends Migration {

//CREATE TABLE oauth_users (
//username VARCHAR(255) NOT NULL,
// password VARCHAR(2000),
// first_name VARCHAR(255),
// last_name VARCHAR(255),
// CONSTRAINT username_pk PRIMARY KEY (username));

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oauth_users', function(Blueprint $table)
		{
            $table->string('username');
            $table->string('password');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();

            $table->primary('username', 'username_pk');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oauth_users');
	}

}
