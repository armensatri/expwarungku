<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('categories', function (Blueprint $table) {
      $table->id();
      $table->integer('sc');
      $table->string('name')->unique();
      $table->string('slug')->unique();
      $table->text('description');
      $table->string('url', 5)->unique();
      $table->timestamps();
    });

    Schema::create('products', function (Blueprint $table) {
      $table->id();

      // relasi product ke categories
      $table->integer('id_category');

      $table->string('name')->unique();
      $table->string('slug')->unique();
      $table->string('merk')->nullable();
      $table->integer('harga_beli');
      $table->tinyInteger('diskon')->default(0);
      $table->integer('harga_jual');
      $table->integer('stok');
      $table->string('url', 5)->unique();
      $table->timestamps();
    });

    Schema::create('members', function (Blueprint $table) {
      $table->id();
      $table->string('kode_member')->unique();
      $table->string('name');
      $table->text('alamat')->nullable();
      $table->string('no_hp');
      $table->string('url', 5)->unique();
      $table->timestamps();
    });

    Schema::create('suppliers', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->text('alamat')->nullable();
      $table->string('no_hp');
      $table->string('url', 5)->unique();
      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('categories');
    Schema::dropIfExists('products');
    Schema::dropIfExists('members');
    Schema::dropIfExists('suppliers');
  }
};
