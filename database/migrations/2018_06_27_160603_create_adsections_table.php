<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adsections', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('status')->default(true);
            $table->string('section');
            $table->string('title')->nullable();
            $table->boolean('image_or_js')->default(true);
            $table->text('image')->nullable();
            $table->text('js');
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
        Schema::dropIfExists('adsections');
    }
}
