<?php

use App\User;
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
        User::create([
            'name'=>'Jolie',
            'email'=>'jolie@example.com',
            'password'=> '$2y$10$y9APMIoGE6x08MUJ5ntC3.mcENcU8QKsN7u9k2oo1R4GE77i2JKEy'
        ]);
        User::create([
            'name'=>'Billy',
            'email'=>'billy@example.com',
            'password'=> '$2y$10$y9APMIoGE6x08MUJ5ntC3.mcENcU8QKsN7u9k2oo1R4GE77i2JKEy'
        ]);
        User::create([
            'name'=>'Kha Ngan',
            'email'=>'ngantn@gmail.com',
            'password'=> '$2y$10$y9APMIoGE6x08MUJ5ntC3.mcENcU8QKsN7u9k2oo1R4GE77i2JKEy'
        ]);
        User::create([
            'name'=>'Suti',
            'email'=>'suti@gmail.com',
            'password'=> '$2y$10$y9APMIoGE6x08MUJ5ntC3.mcENcU8QKsN7u9k2oo1R4GE77i2JKEy'
        ]);
        User::create([
            'name'=>'DAC Company',
            'email'=>'dac@example.com',
            'password'=> '$2y$10$y9APMIoGE6x08MUJ5ntC3.mcENcU8QKsN7u9k2oo1R4GE77i2JKEy'
        ]);
        User::create([
            'name'=>'Fpt Company',
            'email'=>'fpt@gmail.com',
            'password'=> '$2y$10$y9APMIoGE6x08MUJ5ntC3.mcENcU8QKsN7u9k2oo1R4GE77i2JKEy'
        ]);
    }
}
