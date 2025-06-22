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

      // relasi pembelian ke supplier
      $table->integer('id_supplier');

      $table->integer('total_item');
      $table->integer('total_harga');
      $table->tinyInteger('diskon')->default(0);
      $table->integer('bayar')->default(0);
      $table->timestamps();
    });

    Schema::create('pembelian_detail', function (Blueprint $table) {
      $table->id();

      // relasi pembelian ke pembelian_detail
      $table->integer('id_pembelian');

      // relasi pembelian ke products
      $table->integer('id_product');

      $table->integer('harga_beli');
      $table->integer('jumlah');
      $table->integer('subtotal');
      $table->timestamps();
    });

    Schema::create('penjualan', function (Blueprint $table) {
      $table->id();

      // relasi penjualan ke members
      $table->integer('id_member');

      $table->integer('total_item');
      $table->integer('total_harga');
      $table->tinyInteger('diskon')->default(0);
      $table->integer('bayar')->default(0);
      $table->integer('diterima')->default(0);

      // relasi penjualan ke users
      $table->integer('id_user');

      $table->timestamps();
    });

    Schema::create('penjualan_detail', function (Blueprint $table) {
      $table->id();

      // relasi penjualan_detail ke penjualan
      $table->integer('id_penjualan');

      // relasi penjualan_detail ke products
      $table->integer('id_product');

      $table->integer('harga_jual');
      $table->integer('jumlah');
      $table->tinyInteger('diskon')->default(0);
      $table->integer('subtotal');
      $table->timestamps();
    });

    Schema::create('pengeluaran', function (Blueprint $table) {
      $table->id();
      $table->text('description');
      $table->integer('nominal');
      $table->timestamps();
    });

    Schema::create('setting', function (Blueprint $table) {
      $table->id();
      $table->string('nama_perusahaan');
      $table->text('alamat')->nullable();
      $table->string('no_hp');
      $table->tinyInteger('type_nota');
      $table->string('path_logo');
      $table->string('path_kartu_member');
      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('pembelian');
    Schema::dropIfExists('pembelian_detail');
    Schema::dropIfExists('penjualan');
    Schema::dropIfExists('penjualan_detail');
    Schema::dropIfExists('pengeluaran');
    Schema::dropIfExists('setting');
  }
};
