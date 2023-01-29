<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("symbol")->nullable();
            $table->text("image")->nullable();
            $table->enum("type", ["fiat", "crypto"]);
            $table->string("network")->nullable();
            $table->enum("active", ["yes", "no"])->default("yes");
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
        Schema::dropIfExists('currency');
    }
};
