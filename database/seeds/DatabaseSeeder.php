<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD

=======
        $this->call(TargetsTableSeeder::class);
>>>>>>> develop
        $this->call(UsersTableSeeder::class);
        $this->call(TargetsTableSeeder::class);
        $this->call(VideosTableSeeder::class);

    }
}
