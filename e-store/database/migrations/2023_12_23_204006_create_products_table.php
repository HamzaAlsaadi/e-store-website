<?php

use App\Models\offer;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('mobile_name');
            $table->string('Cpu_spsecfication');
            $table->string('Gpu_spsecfication');
            $table->string('battery_spsecfication');
            $table->string('Front_camera_spsecfication');
            $table->string('Back_camera_spsecfication');
            $table->string('Screen_Size');
            $table->string('Type_of_charge');
            $table->string('Price');
            $table->string('imge')->nullable()->default('none');
            $table->unsignedBigInteger('Company_id');
            $table->unsignedBigInteger('category_id');
            // $table->unsignedBigInteger('offer_id');
            $table->foreign('Company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreignIdFor(offer::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
