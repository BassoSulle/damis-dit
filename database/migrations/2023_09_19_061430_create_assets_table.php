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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('asset_no', 50);
            $table->string('description', 100);
            $table->string('serial_no', 50)->nullable();
            $table->float('cost');
            $table->string('gfs_code')->nullable();
            $table->string('gfs_description')->nullable();
            $table->float('accumulated_depreciation')->nullable();
            $table->string('acquisition_date');
            $table->string('acquisition_type');
            $table->string('remarks')->nullable();
            $table->unsignedBigInteger('assettype_id');
            $table->unsignedBigInteger('condition_id');
            $table->json('extra_attribute')->nullable();
            $table->unsignedBigInteger('registered_by')->nullable();
            $table->boolean('is_assigned')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            //Define foreign key constraints
            $table->foreign('assettype_id')
              ->references('id')
              ->on('asset_types')
              ->cascadeOnDelete();

            $table->foreign('condition_id')
              ->references('id')
              ->on('conditions')
              ->cascadeOnDelete();

          //we will back on it letter
              $table->foreign('registered_by')
              ->references('id')
              ->on('employee')
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
        Schema::dropIfExists('assets');
    }
};
