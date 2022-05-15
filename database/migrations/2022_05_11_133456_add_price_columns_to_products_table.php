<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPriceColumnsToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->float('buy_price')
                ->nullable()
                ->default(null);
            $table->float('wholesale_price')
                ->nullable()
                ->default( null);
            $table->float('retail_price')
                ->nullable()
                ->default(null);
            $table->string('crossed_out_price')
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
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('buy_price');
            $table->dropColumn('wholesale_price');
            $table->dropColumn('retail_price');
            $table->dropColumn('crossed_out_price');
        });
    }
}
