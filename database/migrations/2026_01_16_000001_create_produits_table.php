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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('categorie'); // Colonne catégorie pour filtrer les produits
            $table->decimal('price', 10, 2);
            $table->decimal('old_price', 10, 2)->nullable();
            $table->string('image');
            $table->decimal('rating', 2, 1)->default(0);
            $table->integer('reviews')->default(0);
            $table->text('description');
            $table->json('features')->nullable();
            $table->integer('stock')->default(0);
            $table->boolean('new')->default(false);
            $table->boolean('sale')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
