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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('category_nameen');
            $table->string('category_namear');
            $table->string('img');
            $table->string('color');
            $table->string('nameen');
            $table->string('namear');
            $table->longText('texten');
            $table->longText('textar');
            $table->date('dateen');
            $table->date('datear');
            $table->string('clienten');
            $table->string('clientar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
