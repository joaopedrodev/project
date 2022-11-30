<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrmLeadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crm_lead', function (Blueprint $table) {
            $table->increments('id');
            $table->char('chrName', 255); //char siginifica caracteres
            $table->char('chrEmail', 255);
            $table->char('chrPhone', 255);
            $table->dateTime('dttDeleted')->nullable(true);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crm_lead');
    }
}
