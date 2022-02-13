<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepage', function (Blueprint $table) {
            $table->id();
            $table->string('slider_img_1')->nullable();
            $table->string('slider_img_2')->nullable();
            $table->string('slider_img_3')->nullable();
            $table->string('slider_1_title_ar')->nullable();
            $table->string('slider_2_title_ar')->nullable();
            $table->string('slider_3_title_ar')->nullable();
            $table->string('slider_1_desc_ar')->nullable();
            $table->string('slider_2_desc_ar')->nullable();
            $table->string('slider_3_desc_ar')->nullable();
            $table->string('slider_1_title_en')->nullable();
            $table->string('slider_2_title_en')->nullable();
            $table->string('slider_3_title_en')->nullable();
            $table->string('slider_1_desc_en')->nullable();
            $table->string('slider_2_desc_en')->nullable();
            $table->string('slider_3_desc_en')->nullable();
            $table->string('sec_3_heading_ar')->nullable();
            $table->string('sec_3_heading_en')->nullable();
            $table->string('sec_3_div_1_content_ar')->nullable();
            $table->string('sec_3_div_2_content_ar')->nullable();
            $table->string('sec_3_div_3_content_ar')->nullable();
            $table->string('sec_3_div_4_content_ar')->nullable();
            $table->string('sec_3_div_1_content_en')->nullable();
            $table->string('sec_3_div_2_content_en')->nullable();
            $table->string('sec_3_div_3_content_en')->nullable();
            $table->string('sec_3_div_4_content_en')->nullable();
            $table->string('sec_4_img')->nullable();
            $table->string('sec_4_heading_ar')->nullable();
            $table->string('sec_4_heading_en')->nullable();
            $table->string('sec_5_div_1_desc_ar')->nullable();
            $table->string('sec_5_div_1_desc_en')->nullable();
            $table->string('sec_5_div_2_desc_ar')->nullable();
            $table->string('sec_5_div_2_desc_en')->nullable();
            $table->string('sec_6_img')->nullable();
            $table->string('sec_6_heading_ar')->nullable();
            $table->string('sec_6_heading_en')->nullable();
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
        Schema::dropIfExists('homepage');
    }
}
