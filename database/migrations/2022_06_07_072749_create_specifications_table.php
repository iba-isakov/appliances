<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specifications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')
                ->nullable()
                ->default(null);
            $table->unsignedBigInteger('filter_id')
                ->nullable()
                ->default(null);
            $table->foreign('filter_id')
                ->references('id')
                ->on('filters');
            $table->unsignedBigInteger('product_id')
                ->nullable()
                ->default(null);
            $table->foreign('product_id')
                ->references('id')
                ->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specifications');
    }
}
