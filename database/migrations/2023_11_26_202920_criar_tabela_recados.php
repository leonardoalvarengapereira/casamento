<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaRecados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recados', function (Blueprint $table) {
            $table->increments("id");
            $table->string('nome', 100)->default("")->nullable(false);
            $table->text('mensagem')->nullable(false);
            $table->string('data')->default("")->nullable(false);
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
        Schema::dropIfExists('recados');
    }
}
