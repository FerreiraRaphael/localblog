<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaUsers extends Migration {
  
    public function up() {
        Schema::create( 'users' , function(Blueprint $table) {
            $table->increments( 'id' );
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            $table->string( 'email' )->unique();
            $table->string( 'password' , 64 );
            $table->string( 'name' );
        } );
    }
  
    public function down() {
        Schema::drop( 'users' );
    }
}