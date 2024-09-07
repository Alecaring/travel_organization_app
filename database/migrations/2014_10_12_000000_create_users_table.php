<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('otp')->nullable()->unique();
            $table->string('nameComplete')->nullable();
            $table->string('username')->nullable()->unique();
            // aggiunta
            $table->string('userImg')->nullable()->uniqid();
            $table->string('bio')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('nation')->nullable();

            $table->string('email')->nullable()->unique();
            $table->string('phone')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
