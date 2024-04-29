<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentalsTableXbzu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('rentals', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->bigInteger('user_id')->unsigned();
			$table->string('name', 30);
			$table->bigInteger('schedule_id')->unsigned();
			$table->time('start_time');
			$table->time('end_time');
			$table->integer('duration');
			$table->float('price', 50);
			$table->float('total', 50);
			$table->float('dp', 50);
			$table->float('minus', 50);
			$table->enum('status', ['Paid Off','Not Yet Paid Off',' Cancel']);
			$table->timestamps();
        });

        Schema::table('rentals', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('badaso_users')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('rentals');
    }
}
