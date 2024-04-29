<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTableLdhv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('schedules', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->bigInteger('field_id')->unsigned();
			$table->string('day', 15);
			$table->time('time');
			$table->float('price', 50);
			$table->enum('status', ['Available','Not Available']);
			$table->timestamps();
        });

        Schema::table('schedules', function (Blueprint $table) {
            $table->foreign('field_id')->references('id')->on('fields')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('schedules');
    }
}
