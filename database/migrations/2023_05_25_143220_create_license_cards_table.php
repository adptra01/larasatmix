<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicenseCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('license_cards', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('nameOfOwner');//
            $table->longText('address');//
            $table->string('telp')->nullable();//
            $table->string('dateOfExpire');//
            $table->string('extraTime');
            $table->string('payDate');//
            $table->string('payment');//
            $table->boolean('status');
            $table->longText('description');//
            $table->string('policeNumber');//
            $table->string('brandAndType');//
            $table->string('categoryAndModel');//
            $table->string('manufactureYear');//
            $table->string('cylindrerCapacity');//
            $table->string('bodyNumber');//
            $table->string('engineNumber');//
            $table->string('color');//
            $table->string('typeFuel');//
            $table->string('licensePlateColor');//
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
        Schema::dropIfExists('license_cards');
    }
}
