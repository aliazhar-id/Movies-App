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
    Schema::create('schedules', function (Blueprint $table) {
      $table->string('id_movie')->primary();
      $table->string('poster_path')->nullable();
      $table->string('trailer_id')->nullable();
      $table->string('title');
      $table->float('rating');
      $table->date('release_date')->nullable();
      $table->integer('price')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('schedules');
  }
};