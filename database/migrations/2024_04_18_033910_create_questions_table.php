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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question_label')->nullable(false);
            $table->string('input_name')->nullable(false);
            $table->string('type')->nullable(false);
            $table->integer('step')->nullable(false)->comment('1 = info alumni, 2 = job status, 3 = interview, 4 = remark');
            $table->string('description')->nullable();
            $table->string('rules')->nullable()->comment('seperate with |');
            $table->string('select_options')->nullable()->comment('seperate with |');
            $table->string('select_value')->nullable()->comment('seperate with |');
            $table->integer('valid_status')->nullable(false)->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
