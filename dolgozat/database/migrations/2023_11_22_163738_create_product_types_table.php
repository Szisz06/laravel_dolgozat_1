<?php

use App\Models\Product_type;
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
        Schema::create('product_types', function (Blueprint $table) {
            $table->id('type_id');
            $table->string('name');
            $table->string('description');
            $table->integer('cost');
            $table->timestamps();
        });
        Product_type::create(['name' => 'Mosógép', 'description' => 'Jól mos!', 'cost' => '2000']);
        Product_type::create(['name' => 'Vasaló', 'description' => 'Nem működik!', 'cost' => '100']);
        Product_type::create(['name' => 'Mikró', 'description' => 'Tud olvasztani is!', 'cost' => '800']);
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_types');
    }
};
