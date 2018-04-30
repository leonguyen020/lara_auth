<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $new_user = new User();
        $new_user -> name = "admin";
        $new_user -> email = "admin@site.com";
        $new_user -> password = bcrypt("admin");
        $new_user -> permissions_id = "1";
        $new_user -> status = "1";
        $new_user -> created_by = 1;
        $new_user -> save();

    }
}
