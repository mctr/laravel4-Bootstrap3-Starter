<?php
class UserTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        //DB::table('users')->delete();

        User::create(array(
            'firstname'  => 'Mesut',
            'lastname'  => 'Çittir',
            'password'  => Hash::make('12345'),
            'email'     => 'mesut.cittir@bil.omu.edu.tr'
        ));
        User::create(array(
            'firstname'  => 'admin',
            'lastname'  => 'admin',
            'password'  => Hash::make('admin'),
            'email'     => 'admin@admin.com'
        ));
    }
}
