<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
						$table->string('First_Name');
						$table->string('Last_Name');
						$table->string('Street')->nullable()->change();
						$table->string('City')->nullable()->change();
						$table->string('State')->nullable()->change();
						$table->integer('Zip')->nullable()->change();
						$table->string('Mobile_Phone');
						$table->string('Home_Phone')->nullable()->change();
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
        Schema::dropIfExists('contacts');
    }
}
