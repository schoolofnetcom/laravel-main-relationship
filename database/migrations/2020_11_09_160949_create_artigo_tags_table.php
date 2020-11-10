<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtigoTagsTable extends Migration
{

    // artigo_id | tag_id

    //     2           2
    //     2           3
    //     3           2
    //     4           2
    //     5           1
    //     6           1

    public function up()
    {
        Schema::create('artigo_tags', function (Blueprint $table) {
            $table->integer('artigo_id')->unsigned();
            $table->foreign('artigo_id')->references('id')->on('artigos');
            $table->integer('tag_id')->unsigned();
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artigo_tags');
    }
}
