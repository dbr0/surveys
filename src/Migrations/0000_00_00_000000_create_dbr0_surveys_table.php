<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDbr0SurveysTable extends Migration
{
    public function up()
    {
        Schema::create('dbr0_surveys', function(Blueprint $table)
        {
            $table->increments('id')->unsigned();
            $table->timestamps();

            $table->string('name');
            $table->string('slug');
            $table->text('description');
        });

        Schema::table('dbr0_surveys', function(Blueprint $table)
        {
            $table->index('parent_id');
        });
    }

    public function down()
    {
        Schema::table('dbr0_surveys', function(Blueprint $table)
        {
            $table->dropIndex(['parent_id']);
        });

        Schema::drop('dbr0_surveys');
    }
}