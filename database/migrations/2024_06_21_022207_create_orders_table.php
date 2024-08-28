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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('payment_method_id')->unsigned();
            $table->bigInteger('total');
            $table->bigInteger('discount');
            $table->enum('status',['Đã đặt hàng','Đã thanh toán','Đang giao hàng','Đã giao hàng'])->default('Đã đặt hàng');
            $table->string('shipping_code',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
