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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->string('subtitle',255);
            $table->string('image1',500);
            $table->string('image2',500);
            $table->string('image3',500);
            $table->text('description');
            $table->string('slug',255);
            $table->string('client',255);
            $table->string('proj_date');
            $table->string('proj_url',1000);
            $table->string('category',255);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
