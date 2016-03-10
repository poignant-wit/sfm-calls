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
            ['action' => 'Добавлен', 'type' => 'primary'],
            ['action' => 'Отправлено письмо', 'type' => 'info'],
            ['action' => 'Телефонный звонок', 'type' => 'info'],
            ['action' => 'Ждем ответа', 'type' => 'warning'],
            ['action' => 'Выполнен', 'type' => 'success'],
            ['action' => 'Принят', 'type' => '_'],
        ]);



    }
}
