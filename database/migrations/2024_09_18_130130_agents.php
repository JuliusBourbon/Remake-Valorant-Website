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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('img');
            $table->string('name');
            $table->string('role');
            $table->string('roleImg');
            $table->string('description');
            $table->string('s1Img');
            $table->string('s2Img');
            $table->string('s3Img');
            $table->string('s4Img');
            $table->string('s1Desc');
            $table->string('s2Desc');
            $table->string('s3Desc');
            $table->string('s4Desc');
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
