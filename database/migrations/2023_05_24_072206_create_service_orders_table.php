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
        Schema::create('service_orders', function (Blueprint $table) {
            $table->id();
            $table->string("vehiclePlate", 7)->nullable();
            $table->timestamp("entryDateTime")->default('2023-01-01 00:00:00');
            $table->timestamp("exitDateTime")->nullable();
            $table->string("priceType", 55)->nullable();
            $table->decimal("price", 12, 2)->nullable();
            $table->unsignedBigInteger("userId")->nullable();
            $table->timestamps();

            $table->foreign('userId')->references('id')
                    ->on('users')
                    ->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_orders');
    }
};
