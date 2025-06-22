<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('menus', function (Blueprint $table) {
      $table->id();
      $table->integer('sm');
      $table->string('name')->unique();
      $table->string('slug')->unique();
      $table->text('description')->nullable();
      $table->string('url', 5)->unique();
      $table->timestamps();
    });

    Schema::create('submenus', function (Blueprint $table) {
      $table->id();
      $table->foreignId('menu_id')
        ->constrained('menus')
        ->cascadeOnDelete()
        ->cascadeOnUpdate();
      $table->integer('ssm');
      $table->string('name')->unique();
      $table->string('slug')->unique();
      $table->string('route')->nullable();
      $table->string('active')->nullable();
      $table->string('routename')->nullable();
      $table->text('description')->nullable();
      $table->string('url', 5)->unique();
      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('menus');
    Schema::dropIfExists('submenus');
  }
};
