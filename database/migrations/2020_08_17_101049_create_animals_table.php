<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string("name", 50);
            $table->string("type", 50);
            $table->date("dob");
            $table->unsignedDecimal("weight", 10, 2);
            $table->unsignedDecimal("height", 10, 2);
            $table->unsignedTinyInteger("biteyness");
            $table->timestamps();
            //create the owner_id column
            $table->foreignId("owner_id")->unsigned();
            //set up the foreign key constraint
            $table->foreign("owner_id")->references("id")->on("owners")->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
