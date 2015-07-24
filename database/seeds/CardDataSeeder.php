<?php

use Illuminate\Database\Seeder;

class CardDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cardData')->insert([
				['cardNo' => '4214100110229582','security_password' => '1234','name' => 'Franz Anthony','last_name' => 'Rodriguez Maravi'],
				['cardNo' => '4214100110239583','security_password' => '5678','name' => 'Manuel Alonso','last_name' => 'Yacolca Inga']
		]);
    }
}
