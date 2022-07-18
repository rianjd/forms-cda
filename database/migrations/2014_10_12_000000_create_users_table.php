<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core_table', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cpf');
            $table->string('setor');
            $table->string('filial');
            $table->string('inDJ');
            $table->string('msg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_table');
    }
}
