<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrmTimelineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crm_timeline', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fkDepartment');
            $table->char('chrTimeline');
            $table->dateTime('dttDeleted')->nullable(true);

            $table->foreign('fkDepartment')
                ->references('id')
                ->on('crm_department');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crm_timeline');
    }
}
