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
      Schema::create('service_categories', function (Blueprint $table) {
         $table->id();
         $table->unsignedBigInteger('parent_id')->nullable()->index()->comment('Parent category ID');
         $table->string('name');
         $table->text('description')->nullable();
         $table->string('thumbnail_image')->nullable();
         $table->string('banner_image')->nullable();
         $table->integer('sort_order')->default(0);
         $table->tinyInteger('status')->default(1)->comment('0 = inactive, 1 = active, 2 = deleted');
         $table->unsignedBigInteger('created_by')->nullable();
         $table->unsignedBigInteger('updated_by')->nullable();
         $table->timestamps();

         $table->foreign('parent_id')->references('id')->on('service_categories')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_categories');
    }
};
