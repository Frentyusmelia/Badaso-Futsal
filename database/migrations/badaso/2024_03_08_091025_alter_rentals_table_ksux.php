<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterRentalsTableKsux extends Migration
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
            $table->dropForeign(['schedule_id']);
        });

        Schema::table('rentals', function (Blueprint $table) {
            $table->dropColumn('schedule_id');
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
            $table->bigInteger('schedule_id')->unsigned();
        });

        Schema::table('rentals', function (Blueprint $table) {
            $table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('cascade')->onUpdate('cascade');
        });


    }
}
