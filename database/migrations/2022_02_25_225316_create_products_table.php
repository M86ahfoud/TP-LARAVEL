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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description');
            $table->integer('prix');
            $table->string('slug')->nullable();
            $table->integer('coup_de_coeur')->nullable();
            $table->string('image')->nullable();
            $table->json('liste_couleurs')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->integer('promotion');
            $table->timestamp('dat_creation')->nullable();
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
        Schema::dropIfExists('products');
    }
};
