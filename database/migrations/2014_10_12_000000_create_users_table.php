<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gambar')->default('default.png');
            $table->integer('role_id')->default(3);
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('alamat');
            $table->string('email')->unique();
            $table->string('no_hp')->unique();
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin', ['Perempuan', 'Laki - Laki']);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
