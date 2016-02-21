<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(ProvinceTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(AreaTableSeeder::class);
        $this->call(Barangay1TableSeeder::class);
        $this->call(Barangay2TableSeeder::class);
        $this->call(Barangay3TableSeeder::class);
        $this->call(Barangay4TableSeeder::class);
        $this->call(Barangay5TableSeeder::class);
        $this->call(Barangay6TableSeeder::class);
        $this->call(Barangay7TableSeeder::class);
        $this->call(Barangay8TableSeeder::class);
        $this->call(Barangay9TableSeeder::class);

        Model::reguard();
    }
}
