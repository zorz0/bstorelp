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
        Schema::create('card', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("user_id")->unsigned();
            $table->integer("productSize_id")->unsigned();
            $table->integer("product_id")->unsigned();

            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("productSize_id")->references("id")->on("product_size")->onDelete("cascade")->onUpdate("cascade");

            $table->foreign("product_id")->references("id")->on("products")->onDelete("cascade")->onUpdate("cascade");


            $table->integer("quantity")->default(1);

            // $table->decimal("price_two",8,2)->nullable();
            // $table->decimal("discount",8,2)->nullable();
            // $table->integer("status")->default(1);

            $table->decimal("price",8,2)->nullable();
            $table->string("totalprice")->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card');
    }
};
