<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->integer('dept_id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('slug');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('experience');
            $table->string('expertise');
            $table->string('board_certification');
            $table->string('appointment');
            $table->string('schdule');
            $table->string('address');
            $table->string('nid');
            $table->float('price', 8, 2);
            $table->string('avatar');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('doctors');
    }
}
