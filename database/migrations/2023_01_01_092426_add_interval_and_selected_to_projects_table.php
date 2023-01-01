<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIntervalAndSelectedToProjectsTable extends Migration
{
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('slug')->after('project_name');
            $table->string('interval')->nullable()->after('year_enforce');
            $table->string('selected')->nullable()->after('interval');
            $table->boolean('is_active')->default(1)->after('selected');
            $table->softDeletes()->after('is_active');
        });
    }

    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('slug');
            $table->dropColumn('interval');
            $table->dropColumn('selected');
            $table->dropColumn('is_active');
            $table->dropColumn('deleted_at');
        });
    }
}
