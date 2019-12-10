<?php


use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $admin = new Role();
        // $admin->nama = 'admin';
        // $admin->save();

        // $owner = new Role();
        // $owner->nama = 'owner';
        // $owner->save();

        // $petani = new Role();
        // $petani->nama = 'petani';
        // $petani->save();

        Role::truncate();

        Role::create(['nama' => 'admin']);
        Role::create(['nama' => 'dokter']);
        Role::create(['nama' => 'peternak']);

        
    }
}
