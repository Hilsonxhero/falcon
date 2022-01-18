<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('media_id');
            $table->foreignId('category_id');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->string('link')->nullable();
            $table->boolean('status')->default(0);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('media_id')->references('id')->on('media')->onDelete('cascade');

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brands');
    }
}
