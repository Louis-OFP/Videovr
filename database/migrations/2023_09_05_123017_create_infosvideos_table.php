<?php

use App\Models\Fichier;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('infosvideos', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('new_name')->nullable();
            $table->date('date')->nullable();
            $table->string('description')->nullable();
            $table->string('user_name')->nullable();
            $table->string('url');
            $table->string('weight');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infosvideos');
    }
};
