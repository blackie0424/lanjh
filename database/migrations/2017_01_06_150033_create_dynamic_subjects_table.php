<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDynamicSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dynamic_subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->date('origin_date');
            $table->integer('origin_period');
            $table->integer('origin_teacher_id');
            $table->integer('origin_subject_id');
            $table->integer('origin_class_id');
            $table->date('transferred_date');
            $table->integer('transferred_period');
            $table->integer('transferred_teacher_id');
            $table->integer('transferred_subject_id');
            $table->integer('transferred_class_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dynamic_subjects');
    }
}
