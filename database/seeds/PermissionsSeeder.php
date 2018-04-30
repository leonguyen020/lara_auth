<?php

use App\Permissions;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // First Permission
        $Permissions = new Permissions();
        $Permissions -> name = "President";

        // CRUD status setting
        $Permissions -> view_status = false;
        $Permissions -> add_status = true;
        $Permissions -> edit_status = true;
        $Permissions -> delete_status = true;

        // Permission status
        $Permissions -> status = true;
        $Permissions -> created_by = 1;

        $Permissions -> save();
        // End First Permission
    }
}
