<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_specifications', function (Blueprint $table) {
            // $table->id();
            $table->increments('product_specifications_id');
            $table->integer('product_id');
            $table->string('operating_system'); // Hệ điều hành của laptop (kiểu chuỗi)
            $table->string('cpu_type'); // Loại CPU của laptop (kiểu chuỗi)
            $table->float('cpu_speed'); // Tốc độ CPU của laptop (kiểu số thực)
            $table->integer('cpu_cores'); // Số lõi CPU của laptop (kiểu số nguyên)
            $table->string('cpu_cache'); // Cache của CPU của laptop (kiểu chuỗi)
            $table->integer('ram_capacity'); // Dung lượng RAM của laptop (kiểu số nguyên)
            $table->string('ram_type'); // Loại RAM của laptop (kiểu chuỗi)
            $table->integer('ram_speed'); // Tốc độ RAM của laptop (kiểu số nguyên)
            $table->string('storage_type'); // Loại bộ nhớ trong của laptop (kiểu chuỗi)
            $table->integer('storage_capacity'); // Dung lượng bộ nhớ trong của laptop (kiểu số nguyên)
            $table->string('graphics_card_type'); // Loại card đồ họa của laptop (kiểu chuỗi)
            $table->string('graphics_card_memory'); // Dung lượng bộ nhớ card đồ họa của laptop (kiểu chuỗi)
            $table->float('display_size'); // Kích thước màn hình của laptop (kiểu số thực)
            $table->string('display_resolution'); // Độ phân giải màn hình của laptop (kiểu chuỗi)
            $table->string('display_technology'); // Công nghệ màn hình của laptop (kiểu chuỗi)
            $table->boolean('wifi'); // Có hỗ trợ Wi-Fi hay không (kiểu boolean)
            $table->boolean('bluetooth'); // Có hỗ trợ Bluetooth hay không (kiểu boolean)
            $table->integer('usb_ports'); // Số lượng cổng USB của laptop (kiểu số nguyên)
            $table->boolean('hdmi_port'); // Có cổng HDMI hay không (kiểu boolean)
            $table->boolean('thunderbolt_port'); // Có cổng Thunderbolt hay không (kiểu boolean)
            $table->string('battery_type'); // Loại pin của laptop (kiểu chuỗi)
            $table->integer('battery_capacity'); // Dung lượng pin của laptop (kiểu số nguyên)
            $table->float('weight'); // Trọng lượng của laptop (kiểu số thực)
            $table->string('dimensions'); // Kích thước của laptop (kiểu chuỗi)
            $table->integer('price'); // Giá của laptop (kiểu số nguyên)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_specifications');
    }
};
