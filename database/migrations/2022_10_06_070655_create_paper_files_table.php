<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paper_files', function (Blueprint $table) {
            $table->id();
            $table->integer('paper_id')->unsigned();
            $table->string('url');
            $table->string('urlP');
            $table->foreign('paper_id')->references('id')->on('papers')->cascadeOnUpdate()->cascadeOnDelete();    
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
        Schema::dropIfExists('paper_files');
    }
}
