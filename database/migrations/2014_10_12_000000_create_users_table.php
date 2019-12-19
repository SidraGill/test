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
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();

            $table->string('file_return')->nullable();
            $table->string('file_upload')->nullable();
            $table->string('file_document')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('mobile')->nullable();
            $table->date('dob')->nullable();
            $table->tinyInteger('is_pakistani')->nullable();
            $table->string('cnic')->nullable();
            $table->string('passport')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('stay_183days')->nullable();
            $table->string('stay_bcz_of_emp')->nullable();
            $table->string('over_3years')->nullable();

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
