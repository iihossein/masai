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
                ->string('username', 100)
                ->nullable()
                ->unique();
            $table->string('first_name', 40);
            $table->string('last_name', 60);
            $table->string('mobile', 12)->nullable();
            $table
                ->tinyInteger('activation')
                ->default(0)
                ->comment('0 => inactive, 1 => active');
            $table->timestamp('activation_date')->nullable();
            $table->string('password')->nullable();
            $table->string('provider')->nullable();
            // $table->string('provider_id')->nullable();
            // $table->string('provider_token')->nullable();
            $table->string('avatar')->nullable();
            $table->timestamp('birthday')->nullable();
            $table->tinyInteger('gender')->nullable()->comment('0 => man , 1 => wommen');
            $table
                ->string('slug')
                ->unique()
                ->nullable();
            $table->tinyInteger('status')->default(1);
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
