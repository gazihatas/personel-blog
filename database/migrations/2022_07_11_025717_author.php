<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Author extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('hakkimda')->nullable();
            $table->string('pozisyon')->nullable();
            $table->string('foto')->nullable();
            $table->longText('yetenek')->nullable();
            $table->longText('deneyim')->nullable();
            $table->longText('egitim')->nullable();
            $table->longText('sertifika')->nullable();
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
        Schema::dropIfExists('authors');
    }
}
