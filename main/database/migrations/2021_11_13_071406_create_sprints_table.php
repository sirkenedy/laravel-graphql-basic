<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSprintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sprints', function (Blueprint $table) {
            $table->id();
            $table->string('sprint_title');
            $table->string('sprint_desc');
            $table->dateTime('sprint_start_date');
            $table->dateTime('sprint_end_date');
            $table->dateTime('sprint_comp_date');
            $table->string('project_id');
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sprints');
    }
}
