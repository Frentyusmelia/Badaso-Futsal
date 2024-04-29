<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterRentalsTableOneh extends Migration
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
            $table->enum('status', ['Paid Off','Not Yet Paid Off'])->charset('')->collation('')->change();
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
            $table->enum('status', ['Paid Off','Not Yet Paid Off','Cancel'])->charset('')->collation('')->change();
        });
    }
}
