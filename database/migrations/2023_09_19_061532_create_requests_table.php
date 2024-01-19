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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sender_id');
            $table->unsignedBigInteger('asset_id');
            $table->string('remarks');
            $table->integer('quantity');
            $table->unsignedBigInteger('receiver_id');
            $table->enum('request_status', ['active', 'forwarded', 'pending', 'accepted', 'rejected'])->default('active');
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('sender_id')
            ->references('id')
            ->on('employee')
            ->cascadeOnDelete();

            $table->foreign('receiver_id')
            ->references('id')
            ->on('employee')
            ->cascadeOnDelete();

            $table->foreign('asset_id')
            ->references('id')
            ->on('assets')
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
        Schema::dropIfExists('requests');
    }
};
