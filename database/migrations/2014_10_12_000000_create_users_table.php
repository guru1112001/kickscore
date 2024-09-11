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
            $table->bigInteger('role_id')->nullable();
            
            $table->string('name');
            $table->string('email')->unique();
            $table->date('birthday')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('gender')->nullable();
            $table->integer('city')->nullable();
            $table->string('avatar_url')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('session_id')->nullable();
            $table->string('fcm_token')->nullabe();
            $table->softDeletes();
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
