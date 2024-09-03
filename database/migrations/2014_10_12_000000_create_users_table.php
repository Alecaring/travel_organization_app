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
            $table->string('name')->nullable(); // Il nome potrebbe non essere presente nella fase iniziale
            $table->string('email')->nullable()->unique(); // L'email può essere nulla se si usa il telefono
            $table->string('phone')->nullable()->unique(); // Numero di telefono
            $table->enum('identifier_type', ['email', 'phone'])->nullable(); // Tipo di identificazione
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
