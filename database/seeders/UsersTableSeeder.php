<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\QueryException;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

            $user = new User;
            $user->name = 'adminsuper';
            $user->email = "adminsuper@gmail.com";
            $user->password = bcrypt('Superadmin');
            $user->is_admin = true;
            $user->save();
        }

    }

