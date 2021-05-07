<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers_profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('teachers_id');
            $table->string('name');
            $table->string('dp_path');
            $table->string('information');
            $table->integer('rating');
            $table->string('style');
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
        Schema::dropIfExists('teachers_profiles');
    }
}
