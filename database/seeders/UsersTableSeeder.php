<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user= new User;
        $user->name='SuperAdmin';
        $user->email="Superadmin@gmail.com";
        $user->password=bcrypt('Superadmin');
        $user->is_admin=true;
        $user->save();

       
    }
}
