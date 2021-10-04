<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_managers', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('redirect_link');
            $table->tinyInteger('status')->default('1')->comment('1 = Active, 0 = Inactive');
            $table->softDeletes();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });

        $data = [
            [
                'logo' => 'front/images/logo3.png',
                'redirect_link' => '',
            ], 
            [
                'logo' => 'front/images/logo4.png',
                'redirect_link' => '',
            ], 
            [
                'logo' => 'front/images/logo5.png',
                'redirect_link' => '',
            ], 
            [
                'logo' => 'front/images/logo6.png',
                'redirect_link' => '',
            ]
        ];

        DB::table('company_managers')->insert($data);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_managers');
    }
}
