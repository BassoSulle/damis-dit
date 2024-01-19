<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('capacity');
            $table->unsignedBigInteger('floor_id');
            $table->unsignedBigInteger('building_id');
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('floor_id')
            ->references('id')
            ->on('floors')
            ->cascadeOnDelete();

            $table->foreign('building_id')
            ->references('id')
            ->on('buildings')
            ->cascadeOnDelete();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
};
