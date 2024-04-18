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
        Schema::create('posts', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('title');
            $table->string('content', 1000);
            $table->uuid('owner_id')->nullable();
            $table->string('social');
            $table->string('social_link');
            $table->timestamps();

            $table->primary('id');
            $table
                ->foreign('owner_id')
                ->references('id')
                ->on('users')
                ->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
