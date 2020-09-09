<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sitename_ar');
            $table->string('sitename_en');
            $table->string('email')->nullable();
            $table->string('logo')->nullable();
            $table->string('icon')->nullable();
            $table->string('place_ar')->nullable();
            $table->string('place_en')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instgram')->nullable();
            $table->string('youtube')->nullable();
            $table->integer('phone1')->nullable();
            $table->integer('phone2')->nullable();
            $table->string('word_ar')->nullable();//
            $table->string('word_en')->nullable();//
            $table->enum('system_status', ['open', 'close'])->default('open');
            $table->longtext('system_message')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
