<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            // Set collation & charset
            $table->collation = 'utf8_general_ci';
            $table->charset = 'utf8';

            $table->increments('id');
            $table->string('name');

            // Permission to CRUD
            $table->tinyInteger('view_status')->default(false);
            $table->tinyInteger('add_status')->default(false);
            $table->tinyInteger('edit_status')->default(false);
            $table->tinyInteger('delete_status')->default(false);

            // Status of permission
            $table->tinyInteger('status'); // 0 is active - 1 is deactive
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
}
