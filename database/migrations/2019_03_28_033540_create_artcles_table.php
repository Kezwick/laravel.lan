<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artcles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->unique()->nullable();;
            $table->string('image');
            $table->text('intro');
            $table->text('text');
            $table->unsignedInteger('cat_id');
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
        Schema::dropIfExists('artcles');
    }
}
