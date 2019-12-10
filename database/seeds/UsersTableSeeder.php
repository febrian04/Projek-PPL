<?php

use App\User;
use App\Role;
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
        //User::truncate();

        $adminRole = Role::where('nama', 'admin')->first();
        $dokterRole = Role::where('nama', 'dokter')->first();
        $peternakRole = Role::where('nama', 'peternak')->first();

        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('admin');
        $admin->save();

        $dokter = new User();
        $dokter->name = 'dokter';
        $dokter->email = 'dokter@gmail.com';
        $dokter->password = bcrypt('dokter');
        $dokter->save();

        $peternak = new User();
        $peternak->name = 'peternak';
        $peternak->email = 'peternak@gmail.com';
        $peternak->password = bcrypt('peternak');
        $peternak->save();

        
        $admin->roles()->attach($adminRole);
        $dokter->roles()->attach($dokterRole);
        $peternak->roles()->attach($peternakRole);

    }
}
