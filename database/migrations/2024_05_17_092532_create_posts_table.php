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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('name',100);
            $table->string('slug',100);
            $table->text('description');
            $table->longText('content');
            $table->text('seo_description');
            $table->text('seo_title');
            $table->text('seo_keywords');
            $table->bigInteger('viewer')->default(0);
            $table->bigInteger('rating_number')->default(0);
            $table->double('rating_value');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
