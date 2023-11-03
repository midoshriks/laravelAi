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
            $table->string('body')->nullable();
            $table->string('body_spin')->nullable();
            $table->string('body_h4')->nullable();
            $table->string('body_icon')->nullable();

            $table->string('body_li_1')->nullable();
            $table->string('body_li_2')->nullable();
            $table->string('body_li_3')->nullable();
            $table->string('body_li_4')->nullable();
            $table->string('body_li_5')->nullable();
            $table->string('body_li_6')->nullable();

            $table->string('button')->nullable();
            $table->string('button_a')->nullable();

            $table->bigInteger('page_id')->unsigned();
            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');

            $table->bigInteger('card_id')->unsigned();
            $table->foreign('card_id')->references('id')->on('cards')->onDelete('cascade');

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
