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
            $table->timestamps();
            $table->string('resposta');
            $table->unsignedBigInteger('question_id');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->dropForeign('answers_question_id_foreign'); //tabela_Chaveforeign_foreign
            $table->dropColumn('question_id');
        });
        Schema::dropIfExists('answers');
    }
};
