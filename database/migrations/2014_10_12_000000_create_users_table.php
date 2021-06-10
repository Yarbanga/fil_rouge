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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenoms');
            $table->string('matricule')->unique();
            $table->string('ufr')->nullable();;
            $table->string('filiere')->nullable();
            $table->string('sexe')->nullable();;
            $table->string('matiere')->nullable();
            $table->string('numero')->nullable();
            $table->string('annee')->nullable();
            $table->text('photo')->nullable();
            $table->integer('role')->nullable();
            $table->string('status')->default(false);
            $table->string('naissance')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
