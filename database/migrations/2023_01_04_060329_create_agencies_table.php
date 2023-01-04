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
        Schema::create('agencies', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('short_code')->unique();
            $table->tinyInteger('agency_type')->default(1);
            $table->string('contact_person');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->float('agency_commission')->default(0.00);
            $table->float('vat')->default(0.00);
            $table->float('supplementary_vat')->default(0.00);
            $table->tinyInteger('vat_on')->default(0);
            $table->tinyInteger('commission_on')->default(0);
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
        Schema::dropIfExists('agencies');
    }
};
