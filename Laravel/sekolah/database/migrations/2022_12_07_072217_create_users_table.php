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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('role')->default(3);
            $table->boolean('status')->default(1);
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('tingkatan', ['sd', 'smp', 'smk']);
            $table->string('nisn', 10);
            $table->text('alamat')->nullable();
            $table->enum('gender', ['L', 'P'])->nullable();
            $table->text('keterangan')->nullable();
            $table->rememberToken();
            $table->timestamps();
            
            $table->integer('id_sekolah')->unsigned();
            $table->foreign('id_sekolah')->references('id')->on('sekolah')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
