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
        Schema::create('kuesioner_company', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('broadcast_id')->nullable(false);
            $table->string('unique_code')->nullable(false);
            $table->string('company_name')->nullable();
            $table->string('name')->nullable();
            $table->string('position')->nullable();
            $table->string('email')->nullable();
            $table->integer('phone')->nullable();
            $table->string('alumni_name')->nullable();
            $table->string('alumni_program')->nullable();
            $table->string('alumni_degree')->nullable();
            $table->string('alumni_graduation')->nullable();
            $table->integer('ethics')->nullable();
            $table->integer('competency')->nullable();
            $table->integer('language')->nullable();
            $table->integer('tech')->nullable();
            $table->integer('communication')->nullable();
            $table->integer('teamwork')->nullable();
            $table->integer('development')->nullable();
            $table->integer('readiness')->nullable();
            $table->string('remarks')->nullable();
            $table->string('recommendation')->nullable();
            $table->foreign('broadcast_id')->references('id')->on('broadcast')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuesioner_company');
    }
};
