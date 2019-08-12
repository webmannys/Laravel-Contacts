<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContactRenameFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voFirst
     */
    public function up()
    {
			Schema::table('contacts', function(Blueprint $table) {
					$table->renameColumn('First', 'First_Name');
					$table->renameColumn('Last', 'Last_Name');
			});
    }

    /**
     * Reverse the migrations.
     *
     * @return voFirst
     */
    public function down()
    {
        Schema::table('contacts', function(Blueprint $table) {
            $table->renameColumn('First_Name', 'First');
            $table->renameColumn('Last_Name', 'Last');
        });
    }
}
