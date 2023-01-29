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
        Schema::create('pay_options', function (Blueprint $table) {
            $table->id();
            $table->string("currencies")->nullable();
            $table->string("bank_name")->nullable();
            $table->string("account_number")->nullable();
            $table->string("network")->nullable();
            $table->enum("type", ["fiat", "crypto"]);
            $table->string("wallet_address")->nullable();
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
        Schema::dropIfExists('pay_options');
    }
};
