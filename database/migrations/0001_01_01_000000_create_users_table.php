<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->timestamps();
            $table->enum('role',
            [
                'pelanggan',
                'seller'
            ])->default('pelanggan');
            $table->string('phone')->nullable();
            $table->string('photo')->nullable();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id('id_category');
            $table->string('nama_kategori');
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {

            $table->id('id_product');
            $table->foreignId('id_seller')->constrained('users');
            $table->foreignId('id_category')->constrained('categories');
            $table->string('nama_produk');
            $table->text('deskripsi');
            $table->decimal('harga',12,2);
            $table->string('gambar');
            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
           $table->id('id_order');
            $table->foreignId('id_user')->constrained('users');
            $table->decimal('total_harga',12,2);
            $table->enum('status_order',
            [
                'pending',
                'paid',
                'shipping',
                'done'
            ])->default('pending');
            $table->timestamps();
        });

        Schema::create('order_details', function (Blueprint $table) {

            $table->id('id_detail');
            $table->foreignId('id_order')->constrained('orders');
            $table->foreignId('id_product')->constrained('products');
            $table->integer('qty');
            $table->decimal('subtotal',12,2);
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_details');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('users');
    }
};