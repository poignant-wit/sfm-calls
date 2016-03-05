<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function(Blueprint $table){
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('action_type_id')->unsigned();
            $table->text('comment');
            $table->timestamps();

        });

        Schema::table('actions', function(Blueprint $table){
           $table->foreign('order_id')->references('id')->on('orders');
           $table->foreign('user_id')->references('id')->on('users');
           $table->foreign('action_type_id')->references('id')->on('action_types');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('actions');
    }
}
