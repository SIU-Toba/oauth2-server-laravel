<?php

use Illuminate\Database\Seeder;

class OauthClientsSeeder extends Seeder
{
    public function run()
    {
        DB::table('oauth_clients')->delete();
        DB::table('oauth_clients')->insert([
            'client_id' => 'testclient',
            'client_secret' => 'testpass',
            'redirect_uri' => 'http://disney.com',
        ]);
    }
}