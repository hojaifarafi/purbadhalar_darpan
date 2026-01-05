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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('author')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->longText('content');
            $table->enum('status', ['draft', 'published', 'closed'])->default('draft');
            $table->integer('views')->default(0);
            $table->timestamps();
            $table->foreign('author')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
