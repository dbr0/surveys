<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDbr0SurveysConnectorsTable extends Migration
{
    public function up()
    {
        Schema::create('dbr0_surveys_connectors', function(Blueprint $table)
        {
            $table->increments('id')->unsigned();
            $table->timestamps();

            $table->integer('survey_id')->unsigned();
            $table->tinyInteger('type_id')->unsigned()->nullable();
            $table->integer('option_id')->unsigned();
        });

        Schema::table('dbr0_surveys_connectors', function(Blueprint $table)
        {
            $table->index('survey_id');
        });
        Schema::table('dbr0_surveys_connectors', function(Blueprint $table)
        {
            $table->index('type_id');
        });
        Schema::table('dbr0_surveys_connectors', function(Blueprint $table)
        {
            $table->index('option_id');
        });
    }

    public function down()
    {
        Schema::table('dbr0_surveys_connectors', function(Blueprint $table)
        {
            $table->dropIndex(['option_id']);
        });
        Schema::table('dbr0_surveys_connectors', function(Blueprint $table)
        {
            $table->dropIndex(['type_id']);
        });
        Schema::table('dbr0_surveys_connectors', function(Blueprint $table)
        {
            $table->dropIndex(['survey_id']);
        });

        Schema::drop('dbr0_surveys_connectors');
    }
}