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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->enum('role',
            [
                'pelanggan',
                'seller'
            ])->default('pelanggan');
            $table->string('phone')->nullable();
            $table->string('photo')->nullable();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id('id_product');
            $table->foreignId('id_seller')->constrained('users');
            $table->foreignId('id_category')->constrained('categories');
            $table->string('nama_produk');
            $table->text('deskripsi');
            $table->decimal('harga',12,2);
            $table->integer('stok');
            $table->string('gambar');
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id('id_category');
            $table->string('nama_kategori');
            $table->timestamps();
        });

        Schema::create('carts', function (Blueprint $table) {
            $table->id('id_cart');
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_product')->constrained('products');
            $table->integer('qty');
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

        Schema::create('payments', function (Blueprint $table) {
            $table->id('id_payment');
            $table->foreignId('id_order')->constrained('orders');
            $table->foreignId('id_user')->constrained('users');
            $table->enum('metode',
            [
                'transfer e-wallet',
                'transfer bank'
            ]);
            $table->string('bukti_bayar')->nullable();
            $table->enum('status',
            [
                'pending',
                'verified',
                'rejected'
            ])->default('pending');
            $table->timestamps();
        });

        Schema::create('reviews', function (Blueprint $table) {
            $table->id('id_review');
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_product')->constrained('products');
            $table->integer('rating');
            $table->text('komentar');
            $table->timestamps();
        });

        Schema::create('blogs', function (Blueprint $table) {
            $table->id('id_blog');
            $table->foreignId('id_user')->constrained('users');
            $table->string('judul');
            $table->text('isi');
            $table->string('gambar');
            $table->timestamps();
        });

        Schema::create('wishlists', function (Blueprint $table) {
            $table->id('id_wishlist');
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_product')->constrained('products');
            $table->timestamps();
        });

        Schema::create('addresses', function (Blueprint $table) {
            $table->id('id_address');
            $table->foreignId('id_user')->constrained('users');
            $table->string('alamat');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('kode_pos');
            $table->timestamps();
        });

        Schema::create('transactions', function (Blueprint $table) {
            $table->id('id_transaction');
            $table->foreignId('id_order')->constrained('orders');
            $table->foreignId('id_payment')->constrained('payments');
            $table->timestamps();
        });
    }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('users');
            Schema::dropIfExists('password_reset_tokens');
            Schema::dropIfExists('sessions');
        }
};
