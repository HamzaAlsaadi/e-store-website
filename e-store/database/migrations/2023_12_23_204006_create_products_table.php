<?php

use App\Models\offer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Company;
use App\Models\Category;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
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
            $table->foreignIdFor(Company::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate()->nullable();
            $table->foreignIdFor(Category::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate()->nullable();
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
