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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 250)->index;
            $table->string('image_url')->nullable();
            $table->text('description');
            //$table->integer('author_id')->unsigned();
            //$table->foreign('author_id')->references('id')->on('authors');
            $table->integer('pages_count');
            $table->decimal('price', 5); //, 2); // 2 is redundant
            $table->softDeletes();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
