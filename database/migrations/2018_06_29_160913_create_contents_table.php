<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id')->nullable();
            $table->TinyInteger('status')->nullable();
            $table->tinyInteger('show')->default(0);
            $table->tinyInteger('add_to_main_contents')->default(0);
            $table->integer('add_to_main_contents_order')->default(5);
            $table->string('title')->nullable();
            $table->string('url_slug')->nullable();
            $table->text('body')->nullable();
            $table->text('images')->nullable();
            $table->text('summary')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_desc')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
