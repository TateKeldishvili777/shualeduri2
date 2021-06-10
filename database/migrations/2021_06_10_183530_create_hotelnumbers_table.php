<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelnumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotelnumbers', function (Blueprint $table) {
            $table->id();

            $table->string('room_name');

            $table->integer('room_qty');

            $table->integer('hotel_id');

            $table->boolean('is_occupied');

            $table->string('occupied_by');

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
        Schema::dropIfExists('hotelnumbers');
    }
}
