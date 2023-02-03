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
            $table->string("user_id");
            $table->string("currency_id")->nullable();
            $table->string("investment_type_id");
            $table->string("amount");
            $table->datetime("cancelled_at")->nullable();
            $table->datetime("next_due_date")->nullable();
            $table->enum("status", ["pending","running","cancelled","declined", "finished"])->default("running");
            $table->string("approved_by")->nullable();
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
