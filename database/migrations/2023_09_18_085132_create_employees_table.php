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
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('password')->default(bcrypt('@tamis'));
            $table->string('phone')->nullable();
            // $table->unsignedBigInteger('address_id')->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->unsignedBigInteger('section_id')->nullable();
            $table->unsignedBigInteger('room_id')->nullable();
            $table->unsignedBigInteger('role_id');
            $table->boolean('is_active')->default(true);
            $table->rememberToken();
            $table->timestamps();

            // Define foreign key constraints if needed
                // $table->foreign('address_id')
                // ->references('id')
                // ->on('addresses')
                // ->cascadeOnDelete();

                $table->foreign('department_id')
                ->references('id')
                ->on('departments')
                ->cascadeOnDelete();

                $table->foreign('section_id')
                ->references('id')
                ->on('sections')
                ->cascadeOnDelete();

                $table->foreign('room_id')
                ->references('id')
                ->on('rooms')
                ->cascadeOnDelete();

                $table->foreign('role_id')
                ->references('id')
                ->on('roles')
                ->cascadeOnDelete();


        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
