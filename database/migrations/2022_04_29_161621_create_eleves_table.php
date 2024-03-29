<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('ine');
            $table->string('nom');
            $table->string('prenom');
            $table->string('date_naissance');
            $table->string('lieu_naissance')->nullable();
            $table->string('sexe');
            $table->foreignUuid('classe_id')->constrained('classes');
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
        Schema::dropIfExists('eleves');
    }
}
