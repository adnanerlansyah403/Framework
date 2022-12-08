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
        Schema::create('sekolah', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('email', 60);
            $table->enum('tingkatan', ['sd', 'smp', 'smk'])->nullable();
            $table->text('alamat');
            $table->string('no_telp', 16);
            $table->string('nis', 16)->nullable();
            $table->boolean('status')->default(1);
            $table->text('deskripsi')->nullable();
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
        Schema::dropIfExists('sekolah');
    }
};
