<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
// Auto Schema  By Baboon Script
// Baboon Maker has been Created And Developed By [It V 1.4 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.4 | https://it.phpanonymous.com]
class CreateCausesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('causes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('admin_id')->unsigned()->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->string('causes_name_ar')->nullable();
            $table->string('causes_name_en')->nullable();
            $table->longtext('causes_dis_ar')->nullable();
            $table->longtext('causes_dis_en')->nullable();
            $table->date('causes_date')->nullable();
            $table->string('causes_img')->nullable();
            $table->string('causes_youtube_link')->nullable();
            $table->string('causes_facebook_link')->nullable();
            $table->string('causes_twitter_link')->nullable();
            $table->string('causes_instgram_link')->nullable();
            $table->string('causes_plase')->nullable();
            $table->enum('status',['soon','done']);
            $table->string('key_word')->nullable();
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
        Schema::dropIfExists('causes');
    }
}