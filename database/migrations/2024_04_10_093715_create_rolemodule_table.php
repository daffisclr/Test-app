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
        Schema::create('module_role', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->unsignedBigInteger('role_id');
            $table->integer('valid')->nullable(false)->default(0);
            $table->integer('C')->nullable(false)->default(0);
            $table->integer('R')->nullable(false)->default(0);
            $table->integer('U')->nullable(false)->default(0);
            $table->integer('D')->nullable(false)->default(0);
            $table->string(
                'description'
            )->nullable();
            $table->foreign(
                'module_id'
            )->references('id')->on('modules')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('module_role');
        Schema::table('userrole', function (Blueprint $table) {
            $table->dropForeign('module_id');
            $table->dropIndex('module_id');
            $table->dropColumn('module_id');
            $table->dropForeign('role_id');
            $table->dropIndex('role_id');
            $table->dropColumn('role_id');
        });
    }
};
