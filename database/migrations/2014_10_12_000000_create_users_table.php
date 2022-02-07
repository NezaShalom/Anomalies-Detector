<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('mobile_number')->unique();
            $table->string('address')->nullable();
            $table->enum('role', ['admin', 'customer', 'employee', 'supervisor'])->default('customer');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->enum('marriage', ['married', 'not_married', 'partner_de'])->default('not_married');
            $table->enum('life', ['alive', 'not_alive'])->default('alive');
            $table->integer('age');
            $table->integer('department_id')->nullable();
            $table->string('image')->nullable();
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
