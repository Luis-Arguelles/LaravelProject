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
        Schema::create('evaluation_eleve', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('note');
            $table->unsignedBigInteger('evaluation_id')->unsigned();
            $table->foreign('evaluation_id')->references('id')->on('evaluation');
            $table->unsignedBigInteger('eleves_id')->unsigned();
            $table->foreign('eleves_id')->references('id')->on('eleves');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluation_eleve');
    }
};
