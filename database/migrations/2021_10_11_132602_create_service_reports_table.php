<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_reports', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('serial_no');
            $table->string('installed_system');
            $table->string('warranty');
            $table->string('amc_offer_sent');
            $table->string('amc_value')->nullable();
            $table->string('remarks');
            $table->string('action_plan');
            $table->string('concern_engineer');
            $table->softDeletes();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_reports');
    }
}
