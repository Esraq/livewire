<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('academic_councils', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('weight')->default(0);
            $table->string('name');
            $table->string('image');
            $table->string('position');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('academic_councils');
    }
};
