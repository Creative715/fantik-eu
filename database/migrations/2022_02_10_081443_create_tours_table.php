<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('seo_title')->nullable();
            $table->string('seo_h1')->nullable();
            $table->string('seo_description')->nullable();
            $table->longText('content');
            $table->string('slug');
            $table->integer('duration')->default('1');
            $table->string('img')->nullable();
            $table->string('carousel')->nullable();
            $table->string('video')->nullable();
            $table->integer('night')->default(null)->nullable();
            $table->decimal('price', 10, 2)->default('0.00');
            $table->boolean('published')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
};
