<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportSchedulesTable extends Migration
{
    public function up()
    {
        Schema::create('transport_schedules', function (Blueprint $table) {
            $table->id();
            $table->time('departure_time');
            $table->string('route_from');
            $table->string('route_to');
            $table->string('bus_number');
            $table->integer('capacity');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transport_schedules');
    }
}

