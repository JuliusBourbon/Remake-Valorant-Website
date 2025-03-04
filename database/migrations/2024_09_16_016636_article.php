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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('img');
            $table->string('title');
            $table->string('summary');
            $table->foreignId('author_id')->constrained(
                table: 'users',
                indexName: 'ariticles_author_id'
            );
            $table->foreignId('category_id')->constrained(
                table: 'categories',
                indexName: 'ariticles_category_id'
            );
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
