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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string(
                'name'
            )->nullable(false);
            $table->string(
                'url'
            )->nullable();
            $table->unsignedBigInteger(
                'parent_module'
            )->nullable();
            $table->integer(
                'module_level'
            )->nullable();
            $table->string(
                'icon'
            )->nullable();
            $table->string(
                'description'
            )->nullable();
            $table->integer('valid_status')->nullable(false);
            $table->timestamps();
        });

        Schema::table('modules', function (Blueprint $table) {
            $table->foreign('parent_module')->references('id')->on('modules');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
