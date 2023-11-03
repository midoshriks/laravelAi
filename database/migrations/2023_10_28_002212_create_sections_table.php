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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->string('title_larg')->nullable();
            $table->string('body')->nullable();
            $table->string('body_text_1')->nullable();
            $table->string('body_text_2')->nullable();
            $table->string('body_text_3')->nullable();
            $table->string('body_text_4')->nullable();
            $table->string('body_text_5')->nullable();
            $table->string('body_text_6')->nullable();
            $table->string('button_text')->nullable();
            $table->string('button_text_1')->nullable();
            $table->string('avatar')->nullable();
            $table->bigInteger('page_id')->unsigned();
            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');

            $table->bigInteger('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
