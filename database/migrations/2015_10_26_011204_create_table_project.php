<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_project', function (Blueprint $table) {
            $table->increments('project_id');
            $table->char('project_title',255);
            $table->text('project_headline');
            $table->text('project_description');
            $table->double('project_value');
            $table->integer('agency_id');
            $table->integer('project_category_id');
            $table->integer('project_issue_id');
            $table->char('image_file',255);
            $table->text('supporting_file',255);
            $table->text('external_link');
            $table->integer('status');
            $table->softDeletes();
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
        Schema::drop('table_project');
    }
}
