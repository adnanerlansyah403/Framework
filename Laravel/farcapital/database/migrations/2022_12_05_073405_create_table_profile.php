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
        Schema::create('table_profile', function (Blueprint $table) {
            $table->id();
            $table->text('bio');
            $table->boolean('gender');
            $table->string('link_facebook');
            $table->string('link_twitter');
            $table->string('link_instagram');
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
        Schema::dropIfExists('table_profile');
    }
};
