<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    


    public function up()
    {
        Schema::create('estimations', function (Blueprint $table) {
            $table->id();
            $table->float('grossAmount');
            $table->float('discount');
            $table->float('vat');
            $table->float('vatAmount');
            $table->float('ait');
            $table->float('aitAmount');
            $table->float('netAmount');
            $table->float('gt');
            $table->string('note');
            $table->date('startDate');
            $table->date('endDate');
            $table->date('eDate');
            $table->unsignedInteger('client_id');
            $table->string('cName');
            $table->float('vat_on');
            $table->integer('commOn');
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
        Schema::dropIfExists('estimations');
    }
};
