<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bonuses_tasks', function (Blueprint $table) {
            $table->unsignedBigInteger('bonus_id');
            $table->unsignedBigInteger('task_id');
            $table->foreign('bonus_id')->references('id')->on('bonuses')->onDelete('cascade');
            $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->primary(['bonus_id', 'task_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bonuses_tasks');
    }
};
