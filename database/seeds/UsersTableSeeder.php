<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => '管理者 太郎',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'),
            'admin_flg' => 2
        ],[
            'name' => '一般 太郎',
            'email' => 'normal@example.com',
            'password' => bcrypt('normal'),
            'admin_flg' => 0
        ],[
            'name' => 'リーダー 太郎',
            'email' => 'leader@example.com',
            'password' => bcrypt('leader'),
            'admin_flg' => 1
        ]);
    }
}
