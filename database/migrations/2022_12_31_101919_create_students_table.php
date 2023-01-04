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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->required();
            $table->char('email', 100)->required()->unique();
            $table->string('username', 100)->required()->unique();
            $table->string('password', 100)->required();
            $table->string('birthdate', 100)->required();
            $table->string('phonenumber', 30)->required();
            $table->string('address', 100)->required();
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
        Schema::dropIfExists('students');
    }
};
