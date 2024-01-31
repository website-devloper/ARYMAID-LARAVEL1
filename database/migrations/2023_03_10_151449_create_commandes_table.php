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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produit_id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->string('adress');
            $table->string('tel');
            $table->string('Country');
            $table->string('City');
            $table->integer('CodePost');
            $table->date('dateCmd');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
