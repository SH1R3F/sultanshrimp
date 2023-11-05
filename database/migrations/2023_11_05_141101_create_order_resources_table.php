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
        Schema::create('order_resources', function (Blueprint $table) {
            $table->id();
            $table->string('resource')->index();
            $table->unsignedInteger('amount')->index();
            $table->unsignedInteger('existing')->default(0)->index();
            $table->foreignId('order_id')->references('id')->on('orders')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_resources');
    }
};
