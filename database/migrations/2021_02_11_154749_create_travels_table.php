<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat',250);
            $table->string('aksesKendaraan');
            $table->string('jamBuka');
            $table->string('gambar')->nullable();
            $table->longText('deskripsi');
            $table->integer('harga');
            $table->integer('category_id');
            $table->integer('city_id');
            $table->softDeletes();
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
        Schema::dropIfExists('travels');
    }
}
