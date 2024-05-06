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
        Schema::create('kuesioner_identitas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->string('name')->nullable(false);
            $table->string('nim')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('graduation_year')->nullable();
            $table->string('major')->nullable();
            $table->string('degree')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('admins')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuesioner_identitas');
    }
};
