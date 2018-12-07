<?php

use App\AdminUser;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminUser::create([
            'name'    => 'Khuyen Nguyen',
            'email'   => 'khuyentn@gmail.com',
            'password'=>'$2y$10$y9APMIoGE6x08MUJ5ntC3.mcENcU8QKsN7u9k2oo1R4GE77i2JKEy'
        ]);
    }
}
