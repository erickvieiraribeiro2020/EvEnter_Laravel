<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
    $table->increments('id');// Id da tabela (chave primária e incremento)
// Define o campo como chave extrangeira (foreign key) 
    $table->string('name', 60)->unique(); // Nome // Imagem
    $table->text('description'); // Descrição
    $table->text('adress');
    $table->string('city', 30); // Nome
    $table->string('state', 30);
    $table->integer('id_user')->unsigned();
    $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
   
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
        Schema::dropIfExists('events');
    }
}
