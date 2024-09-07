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
        Schema::table('order_resources', function (Blueprint $table) {
            $table->unsignedFloat('amount')->change();
            $table->unsignedFloat('existing')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('order_resources', function (Blueprint $table) {
            $table->unsignedInteger('amount')->change();
            $table->unsignedInteger('existing')->change();
        });
    }
};
