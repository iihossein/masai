<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table
                ->string('first_name', 100)->nullable();
            $table
                ->string('last_name', 100)->nullable();
            $table->string('mobile', 12);
            $table->string('national_code')->nullable();
            $table
                ->string('address')->nullable();
            $table->string('postal_code',16)->nullable();
            
            $table
                ->tinyInteger('activation')
                ->default(0)
                ->comment('0 => inactive, 1 => active');
            $table->timestamp('activation_date')->nullable();
            $table->string('password')->nullable();
            $table->string('avatar')->nullable();
            $table->timestamp('birthday')->nullable();
            $table
                ->string('slug')
                ->unique()
                ->nullable();
            $table->tinyInteger('status')->default(0);
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
