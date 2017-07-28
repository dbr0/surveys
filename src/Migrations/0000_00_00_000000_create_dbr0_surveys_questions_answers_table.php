<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDbr0SurveysQuestionsAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('dbr0_surveys_questions_answers', function(Blueprint $table)
        {
            $table->increments('id')->unsigned();
            $table->timestamps();

            $table->string('answer');
            $table->integer('question_id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable();
        });

        Schema::table('dbr0_surveys_questions_answers', function(Blueprint $table)
        {
            $table->index('question_id');
        });
        Schema::table('dbr0_surveys_questions_answers', function(Blueprint $table)
        {
            $table->index('user_id');
        });
    }

    public function down()
    {
        Schema::table('dbr0_surveys_questions_answers', function(Blueprint $table)
        {
            $table->dropIndex(['user_id']);
        });
        Schema::table('dbr0_surveys_questions_answers', function(Blueprint $table)
        {
            $table->dropIndex(['question_id']);
        });

        Schema::drop('dbr0_surveys_questions_answers');
    }
}