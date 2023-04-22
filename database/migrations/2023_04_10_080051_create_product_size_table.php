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
        Schema::create('product_size', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("product_id")->unsigned();
            $table->foreign("product_id")->references("id")->on("products")->onDelete("cascade")->onUpdate("cascade");

            $table->string("size");
            $table->integer("quantity");

            $table->decimal("price",8,2)->nullable();
            $table->decimal("discount",8,2)->nullable();
            $table->integer("in_Stock")->default(1);


            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_size');
    }
};
