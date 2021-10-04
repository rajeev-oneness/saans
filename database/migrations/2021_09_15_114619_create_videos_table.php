<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('video_link');
            $table->tinyInteger('status')->default('1')->comment('1 = Active, 0 = Inactive');
            $table->softDeletes();
            $table->timestamps();
        });

        $data = [
            [
                'video_link' => 'https://youtu.be/7U4SV--iBNQ',
            ], 
            [
                'video_link' => 'https://youtu.be/7U4SV--iBNQ',
            ], 
            [
                'video_link' => 'https://youtu.be/7U4SV--iBNQ',
            ], 
            [
                'video_link' => 'https://youtu.be/7U4SV--iBNQ',
            ]
        ];

        DB::table('videos')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
