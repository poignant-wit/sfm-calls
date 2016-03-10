<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('order_types')->insert([
            ['title' => 'НАЧИТКА'],
            ['title' => 'ИВР'],
            ['title' => 'РАДИОРОЛИК'],
            ['title' => 'ВИДЕОРОЛИК'],
            ['title' => 'ДРУГОЙ'],

        ]);

        DB::table('action_types')->insert([
            ['action' => 'ДОБАВЛЕН', 'type' => 'primary'],
            ['action' => 'ОТПРАВЛЕНО ПИСЬМО', 'type' => 'info'],
            ['action' => 'ТЕЛЕФОННЫЙ ЗВОНОК', 'type' => 'info'],
            ['action' => 'ЖДЕМ ОТВЕТ', 'type' => 'warning'],
            ['action' => 'ВЫПОЛНЕН', 'type' => 'success'],
            ['action' => 'ПРИНЯТ', 'type' => '_'],
        ]);



    }
}
