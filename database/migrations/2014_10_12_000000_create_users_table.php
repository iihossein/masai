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
            $table->string('username',100)->nullable()->unique();
            $table->string('first_name',40);
            $table->string('last_name',60);
            $table->string('email')->unique()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('auth_provider_id')->nullable();
            $table->string('provider_token')->nullable();
            $table->string('phone',12);
            $table->string('avatar')->nullable();
            $table->timestamp('birthday');
            $table->tinyInteger('gender');
            $table->tinyInteger('is_active')->default(1);
            $table->tinyInteger('status');
            $table->integer('score')->nullable();
            $table->tinyInteger('rule_id')->default(1);
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
