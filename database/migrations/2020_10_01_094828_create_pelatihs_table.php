<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelatihsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelatihs', function (Blueprint $table) {
            $table->bigIncrements('pelatih_id');
            $table->foreignId('cabang_olahraga_id');
            $table->string('nama_pelatih');
            $table->string('slug');
            $table->string('thumbnail')->nullable();

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
        Schema::dropIfExists('pelatihs');
    }
}
