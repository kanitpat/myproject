<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_statuses', function (Blueprint $table) {
            $table->increments('id');
           
            $table->integer('idUsers')->nullable()->unsigned();
            $table->foreign('idUsers')
            ->references('id')->on('users')
            ->onDelete('cascade');            

            $table->integer('idPumps')->unsigned();
            $table->foreign('idPumps')
            ->references('id')->on('pumps')
            ->onDelete('cascade');            

            $table->integer('idStatus')->unsigned();
            $table->foreign('idStatus')
            ->references('id')->on('statuses')
            ->onDelete('cascade');            

            $table->integer('idWaters')->unsigned();
            $table->foreign('idWaters')
            ->references('id')->on('waters')             
            ->onDelete('cascade');            

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
        Schema::dropIfExists('process_statuses');
    }
}
