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
        Schema::create('asset_assignments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asset_id');
            $table->string('remarks');
            $table->unsignedBigInteger('department_id')->nullable();
            $table->unsignedBigInteger('section_id')->nullable();
            $table->unsignedBigInteger('room_id')->nullable();
            $table->unsignedBigInteger('assigned_by')->nullable();
            $table->unsignedBigInteger('headOfDepartment_id')->nullable();
            $table->unsignedBigInteger('headOfSection_id')->nullable();
            $table->unsignedBigInteger('headOfOffice_id')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('asset_id')
            ->references('id')
            ->on('assets')
            ->cascadeOnDelete();

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

            $table->foreign('assigned_by')
            ->references('id')
            ->on('employee')
            ->cascadeOnDelete();

            // $table->foreign('assigned_toDept')
            // ->references('id')
            // ->on('employee')
            // ->cascadeOnDelete();

            // $table->foreign('assigned_toSec')
            // ->references('id')
            // ->on('employee')
            // ->cascadeOnDelete();

            // $table->foreign('assigned_toRm')
            // ->references('id')
            // ->on('employee')
            // ->cascadeOnDelete();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset_assignments');
    }
};
