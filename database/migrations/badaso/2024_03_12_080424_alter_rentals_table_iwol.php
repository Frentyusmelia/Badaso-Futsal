<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterRentalsTableIwol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::table('rentals', function (Blueprint $table) {
            $table->dropColumn('duration');
			$table->dropColumn('minus');
        });



        } catch (PDOException $ex) {
            $this->down();
            throw $ex;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('rentals', function (Blueprint $table) {
            $table->integer('duration');
			$table->double('minus', 50,2);
        });


    }
}
