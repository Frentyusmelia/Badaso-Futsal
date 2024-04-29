<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSchedulesTableLwar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::table('schedules', function (Blueprint $table) {
            $table->bigInteger('futsal_id')->unsigned()->charset('')->collation('')->change();
        });        Schema::table('schedules', function (Blueprint $table) {
            $table->foreign('futsal_id')->references('id')->on('futsals')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::table('schedules', function (Blueprint $table) {
            $table->dropForeign(['futsal_id']);
        });
        Schema::table('schedules', function (Blueprint $table) {
            $table->bigInteger('futsal_id')->unsigned(false)->charset('')->collation('')->change();
        });
    }
}
