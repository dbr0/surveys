<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDbr0SurveysTable extends Migration
{
    public function up()
    {
        Schema::create('dbr0_surveys', function(Blueprint $t)
        {
            $t->increments('id')->unsigned();
            $t->timestamps();

            $t->string('name');
            $t->string('slug');
            $t->text('description');
        });
    }

    public function down()
    {
        Schema::drop('dbr0_surveys');
    }
}