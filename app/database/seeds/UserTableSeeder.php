<?php
 
class UserTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->delete();
 
        User::create(array(
            'username' => 'eli',
            'password' => Hash::make('123456')
        ));
 
        User::create(array(
            'username' => 'tony',
            'password' => Hash::make('123456')
        ));
    }
 
}


?>