<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('fb')->nullable();
            $table->string('insta')->nullable();
            $table->string('twitter')->nullable();
            $table->string('pt')->nullable();
            $table->text('about')->nullable();
            $table->text('hdescription')->nullable();
            $table->text('bcdescription')->nullable();
            $table->text('cdescription')->nullable();
            $table->text('adescription')->nullable();
            $table->text('bdescription')->nullable();
            $table->text('pdescription')->nullable();
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
        Schema::dropIfExists('information');
    }
}
