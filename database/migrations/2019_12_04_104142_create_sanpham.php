<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ten');
            $table->double('gia');
          
            $table->longText('hinhanh');
           $table->longText('mota');
           $table->bigInteger('idtl')->unsigned();
            $table->foreign('idtl')->references('id')->on('theloai');
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
        Schema::dropIfExists('sanpham');
    }
}

 
