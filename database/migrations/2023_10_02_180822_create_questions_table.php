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
            $table->timestamps();
            $table->string('pergunta');
            $table->string('description');
            $table->boolean('optional');
            $table->unsignedBigInteger('quiz_id');
            $table->foreign('quiz_id')->references('id')->on('quizzes');

        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->dropForeign('questions_quiz_id_foreign'); //tabela_Chaveforeign_foreign
            $table->dropColumn('quiz_id');
        });

        Schema::dropIfExists('questions');
    }
};
