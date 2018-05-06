<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');

            // Title & Description
            $table->string('site_title_en');
            $table->string('site_desc_en');
            $table->text('site_keywords_en');
            $table->string('site_webmails');

            // Maintenance field
            $table->tinyInteger('site_status');
            $table->text('close_msg');

            // Logo and favicon setting
            $table->string('style_logo_en')->nullable();
            $table->string('style_fav')->nullable();;


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
        Schema::dropIfExists('settings');
    }
}
