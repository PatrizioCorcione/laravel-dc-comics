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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 70)->unique();
            $table->string('title', 50);
            $table->text('description')->unsigned();
            $table->text('thumb');
            $table->string('price', 10);
            $table->string('series', 50)->unsigned();
            $table->date('sale_date')->unsigned();
            $table->string('type', 50)->unsigned();
            $table->text('artists')->unsigned();
            $table->text('writers')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
