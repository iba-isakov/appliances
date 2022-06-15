<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')
                ->nullable()
                ->default(null);
            $table->string('type')
                ->nullable()
                ->default(null);
            $table->text('description')
                ->nullable()
                ->default(null);
            $table->string('short_description')
                ->nullable()
                ->default(null);
            $table->date('date')
                ->nullable()
                ->default(null);
            $table->string('image')
                ->nullable()
                ->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
