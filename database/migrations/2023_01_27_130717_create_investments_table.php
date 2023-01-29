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
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->string("user_id")->nullable();
            $table->string("currency_id")->nullable();
            $table->string("investment_type_id")->nullable();
            $table->string("amount")->nullable();
            $table->datetime("cancelled_at");
            $table->enum("status", ["pending","running","cancelled","declined", "finished"])->default("running");
            $table->string("approved_by");
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
        Schema::dropIfExists('investments');
    }
};
