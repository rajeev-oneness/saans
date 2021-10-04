<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_companies', function (Blueprint $table) {
            $table->id();
            $table->longText('content');
            $table->string('extra_info');
            $table->string('image');
            $table->tinyInteger('status')->default('1')->comment('1 = Active, 0 = Inactive');
            $table->softDeletes();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });

        $data = [
            [
                'content' => 'Analytical instruments pvt. ltd.
                Sophisticated Analysis for the Application of Natural Science(SAANS) Analytical Instruments is incorporated with highly skilled professionals in the field of Analytical research, Lifescience and Clinical support. We represent a number of well -known foreign principles and Indian Manufactures all over India. We promise our customers for the best after sales support so that our customers can perform an uninterrupted work.
                
                Our core team is formed with highly qualified professionals including M Techs, MBAs and Phd holders to provide consultation in the area of Analytical instrumentation. We have qualified Engineers to troubleshoot customer’s equipment issues and provide solution at shortest possible time frame.',
                'extra_info' => 'YEARS OF WORKING EXPERIENCE IN THIS FIELD',
                'image' => 'front/images/about.png',
            ]
        ];

        DB::table('about_companies')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_companies');
    }
}
