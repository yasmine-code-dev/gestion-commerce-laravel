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
        Schema::create('detail_bls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bon_livraison_id')
                  ->constrained('bon_livraisons');
            $table->foreignId('article_id')
                  ->constrained('articles');
            $table->integer('qte');
            $table->float('prix_vente_ht');
            $table->float('tva');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_bls');
    }
};
