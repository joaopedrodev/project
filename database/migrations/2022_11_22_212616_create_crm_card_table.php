<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrmCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crm_card', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fkDepartment');
            $table->unsignedInteger('fkTimeline');
            $table->unsignedInteger('fkLead');

            $table->dateTime('dttDeleted')->nullable(true);

            $table->foreign('fkDepartment')
                ->references('id')
                ->on('crm_department');

            $table->foreign('fkTimeline')
                ->references('id')
                ->on('crm_timeline');

            $table->foreign('fkLead')
                ->references('id')
                ->on('crm_lead');

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
        Schema::dropIfExists('crm_card');
    }
}
