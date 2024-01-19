<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            // $table->uuid('address_code')->unique();
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('section_id')->nullable();
            // $table->unsignedBigInteger('building_id');
            // $table->unsignedBigInteger('floor_id');
            $table->unsignedBigInteger('room_id');
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('department_id')
            ->references('id')
            ->on('departments')
            ->cascadeOnDelete();

            $table->foreign('section_id')
            ->references('id')
            ->on('sections')
            ->cascadeOnDelete();

            // $table->foreign('building_id')
            // ->references('id')
            // ->on('buildings')
            // ->cascadeOnDelete();

            // $table->foreign('floor_id')
            // ->references('id')
            // ->on('floors')
            // ->cascadeOnDelete();

            $table->foreign('room_id')
            ->references('id')
            ->on('rooms')
            ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
