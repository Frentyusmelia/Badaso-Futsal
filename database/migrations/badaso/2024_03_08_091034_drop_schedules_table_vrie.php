<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropSchedulesTableVrie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::dropIfExists('schedules');

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
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
			$table->bigInteger('field_id')->index('field_id');
			$table->string('day', 15);
			$table->time('time');
			$table->enum('status', ['']);
			$table->timestamps();
			$table->double('price', );
			$table->bigInteger('futsal_id');
        });
    }
}
