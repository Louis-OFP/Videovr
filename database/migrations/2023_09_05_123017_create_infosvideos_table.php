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
            $table->string('new_name');
            $table->date('date')->default(now());
            $table->text('description');
            $table->string('user_name')->default('Amine-l4dmin');
            $table->string('url')->default('C:\Users\Amine\Documents\Url\Fake-Url');;
            $table->decimal('weight')->default(127);
            $table->timestamps(); 
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
