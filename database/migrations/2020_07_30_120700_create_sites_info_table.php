<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('date_load');
            $table->longText('domain_name');
            $table->longText('page_url');
            $table->float('price')->unsigned();
            $table->float('price_promotional')->unsigned()->nullable();
            $table->float('price_discount_percentage')->unsigned()->nullable();
            $table->longText('product_name');
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
        Schema::dropIfExists('sites_info');
    }
}




