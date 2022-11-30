<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrmCardProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crm_card_progress', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('fkDepartment');
            $table->unsignedInteger('fkTimeline');
            $table->unsignedInteger('fkCard');

            $table->dateTime('dttRegister');

            $table->dateTime('dttDeleted')->nullable(true);

            $table->foreign('fkDepartment')
                ->references('id')
                ->on('crm_department');

            $table->foreign('fkTimeline')
                ->references('id')
                ->on('crm_timeline');

            $table->foreign('fkCard')
                ->references('id')
                ->on('crm_card');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crm_card_progress');
    }
}
