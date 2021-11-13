<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('proj_title');
            $table->string('proj_desc');
            $table->integer('proj_total_score')->nullable();
            $table->integer('proj_current_score')->nullable();
            $table->dateTime('project_start_date');
            $table->dateTime('project_comp_date')->nullable();
            $table->string('report')->nullable();
            $table->foreignId('user_id')->constrained()->nullable()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
