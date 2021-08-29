<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id')->default('0');
            $table->string('level')->default('0');
            $table->string('name');
            $table->integer('order_level')->default('0');
            $table->double('commision_rate')->default('0.00');
            $table->string('banner')->nullable();
            $table->integer('banner_file_size')->nullable();
            $table->string('banner_content_type')->nullable();
            $table->timestamp('banner_updated_at')->nullable();
            $table->string('icon')->nullable();
            $table->integer('icon_file_size')->nullable();
            $table->string('icon_content_type')->nullable();
            $table->timestamp('icon_updated_at')->nullable();
            $table->integer('featured')->default('0');
            $table->integer('top')->default('0');
            $table->integer('digital')->default('0');
            $table->string('slug')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
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
        Schema::dropIfExists('categories');
    }
}
