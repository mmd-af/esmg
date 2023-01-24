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
            $table->string('project_name');
            $table->string('slug')->unique();
            $table->string('employer_name')->nullable();
            $table->string('project_location');
            $table->string('customer_image')->nullable();
            $table->string('primary_image');
            $table->string('logo_image');
            $table->text('description');
            $table->string('year_enforce');
            $table->string('interval')->nullable();
            $table->string('selected')->nullable();
            $table->boolean('is_active')->default(1);
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
        Schema::dropIfExists('projects');
    }
}
