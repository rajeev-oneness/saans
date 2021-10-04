<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->longText('content1');
            $table->longText('content2');
            $table->float('experience', 8, 2);
            $table->integer('winning_awards');
            $table->string('main_banar');
            $table->string('image1');
            $table->string('image2');
            $table->tinyInteger('status')->default('1')->comment('1 = Active, 0 = Inactive');
            $table->softDeletes();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });

        $data = [
            [
                'content1' => 'Story about our instruments
                Sophisticated Analysis for the Application of Natural Science(SAANS)Analytical Instruments is incorporated with highly skilled professionals in the field of Analytical Research, Life Science and Clinical support. We represent a number of well -known foreign principles and Indian Manufactures throughout India. The major products which we have introduced in the market include the first mobile XRF system with PPM level analysis and XRF attachment for Scanning Electron Microscope with PPM level analysis and EDS detector. Also we are into marketing of all kind of Optical Microscope including Metallurgical, Polarizing, Stereo Zoom, and Spectrophotometer for pharmaceutical industry.',
                'content2' => 'Keep improving our instruments
                We supply all kind of commonly use biological systems like Biosafety Cabinet, PCR Thermal Cycle, Liquid Chromatography, FTIR, Spectrophotometer, Incubator (Bacteriology, BOD), Humidity chamber, Centrifuge, Hot Air Oven, Magnetic stirrer, Shaker, Mixer, Analysis kit (water, soil, NPK) and Fluorescence Microscope. Moreover for Medical use we supply portable haemoglobin meter, pH meter, Mini Centrifuge, Clinical centrifuge, Compound Microscope, semiauto biochemistry analyser and all kind of glass and plastic ware.',
                'experience' => '6',
                'winning_awards' => '6',
                'main_banar' => 'front/images/about-banner.jpg',
                'image1' => 'front/images/about1.png',
                'image2' => 'front/images/id20.png',
            ]
        ];

        DB::table('about_us')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_us');
    }
}
