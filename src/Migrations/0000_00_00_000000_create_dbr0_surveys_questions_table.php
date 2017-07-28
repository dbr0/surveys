<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDbr0SurveysQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('dbr0_surveys_questions', function(Blueprint $table)
        {
            $table->increments('id')->unsigned();
            $table->timestamps();

            $table->string('question');
            $table->integer('connector_id')->unsigned();
        });

        Schema::table('dbr0_surveys_questions', function(Blueprint $table)
        {
            $table->index('connector_id');
        });
    }

    public function down()
    {
        Schema::table('dbr0_surveys_questions', function(Blueprint $table)
        {
            $table->dropIndex(['connector_id']);
        });

        Schema::drop('dbr0_surveys_questions');
    }
}