<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('pembelian', function (Blueprint $table) {
      $table->id();
      $table->integer('id_supplier');
      $table->integer('total_item');
      $table->integer('total_harga');
      $table->tinyInteger('diskon')->default(0);
      $table->integer('bayar')->default(0);
      $table->timestamps();
    });

    Schema::create('pembelian_detail', function (Blueprint $table) {
      $table->id();
      $table->integer('id_pembelian');
      $table->integer('id_product');
      $table->integer('harga_beli');
      $table->integer('jumlah');
      $table->integer('subtotal');
      $table->timestamps();
    });

    Schema::create('penjualan', function (Blueprint $table) {
      $table->id();
      $table->integer('id_member');
      $table->integer('total_item');
      $table->integer('total_harga');
      $table->tinyInteger('diskon')->default(0);
      $table->integer('bayar')->default(0);
      $table->integer('diterima')->default(0);
      $table->integer('id_user');
      $table->timestamps();
    });

    Schema::create('', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
    });

    Schema::create('', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('');
    Schema::dropIfExists('');
    Schema::dropIfExists('');
    Schema::dropIfExists('');
    Schema::dropIfExists('');
  }
};
