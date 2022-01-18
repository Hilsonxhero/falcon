<?php

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->foreignId('category_id')->nullable();
            $table->foreignId('brand_id')->nullable();
            $table->foreignId('color_id')->nullable();
            $table->foreignId('shipment_id')->nullable();
            $table->foreignId("guarantee_id")->nullable();
            $table->foreignId('media_id')->nullable();
            $table->string('title');
            $table->string('title_en');
            $table->string('slug');
            $table->longText('body');
            $table->longText('description');
            $table->bigInteger('price');
            $table->integer('discount');
            $table->integer('count');
            $table->integer('weight');
            $table->integer('order_count')->nullable();
            $table->integer('view')->default(0);
            $table->boolean('status')->default(0);
            $table->boolean('original')->default(1);
            $table->boolean('special')->default(0);
            $table->enum('confirmation_status', [Product::$confirmationStatuses]);

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->foreign('shipment_id')->references('id')->on('shipments')->onDelete('cascade');
            $table->foreign('guarantee_id')->references('id')->on('guarantees')->onDelete('cascade');
            $table->foreign('media_id')->references('id')->on('media')->onDelete('cascade');
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
}
