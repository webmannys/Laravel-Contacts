<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContactsFieldsNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			Schema::table('contacts', function (Blueprint $table) {
				$table->string('Street')->nullable()->change();
				$table->string('City')->nullable()->change();
				$table->string('State')->nullable()->change();
				$table->string('Zip')->nullable()->change();
				$table->string('Home_Phone')->nullable()->change();
			});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
			Schema::table('contacts', function ($table) {
				$table->string('Street')->nullable(false)->change();
				$table->string('City')->nullable(false)->change();
				$table->string('State')->nullable(false)->change();
				$table->string('Zip')->nullable(false)->change();
				$table->string('Home_Phone')->nullable(false)->change();
			});
    }
}
