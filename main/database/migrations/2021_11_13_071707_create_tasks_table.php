<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task_title');
            $table->string('task_desc');
            $table->dateTime('task_start_date');
            $table->dateTime('task_end_date');
            $table->dateTime('task_comp_date');
            $table->string('report');
            $table->unsignedBigInteger('assigned_to')->nullable();
            $table->unsignedBigInteger('assisted_by')->nullable();
            $table->string('sprint_id');
            $table->string('type_id'); //bug, enhancement, documentation
            $table->string('priority_id'); // high, medium, low
            $table->timestamps();

            
            $table->foreign('sprint_id')->references('id')->on('sprints')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('assigned_to')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('assisted_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
