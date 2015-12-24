<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::Create('profiles', function(Blueprint $table) {
           $table->integer('user_id')->unsigned()->nullable();
           $table->foreign('user_id')->references('id')->on('users');
            $table->date('birthday');
            $table->string('image');
            $table->string('housenumber')->nullable();
            $table->string('addressline1')->nullable();
            $table->string('addressline2')->nullable();
            $table->string('postcode')->nullable();
            $table->string('county')->nullable();
            $table->string('country')->nullable();
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
        //
        Schema::drop('profiles');
    }
}
