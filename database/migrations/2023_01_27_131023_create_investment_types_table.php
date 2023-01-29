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
        Schema::create('investment_types', function (Blueprint $table) {
            $table->id();
            $table->string("package");
            $table->string("duration");
            $table->string("roi")->default("0");
            $table->string("min");
            $table->string("max");
            $table->string("cover_image_url");
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
        Schema::dropIfExists('investment_type');
    }
};
