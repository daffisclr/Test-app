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
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(
                'question_id'
            );
            $table->unsignedBigInteger(
                'admin_id'
            );
            $table->string('answer')->nullable(false);
            $table->string('description')->nullable();
            $table->integer('valid_status')->nullable(false)->default(1);
            $table->timestamps();
            $table->foreign(
                'question_id'
            )->references('id')->on('questions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign(
                'admin_id'
            )->references('id')->on('admins')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
