<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->enum('contact_type',array('0','1'))->default('1');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('office_type')->nullable();
            $table->string('message')->nullable();
            $table->string('blog_link')->nullable();
            $table->string('google_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('twiter_link')->nullable();
            $table->string('email_us')->nullable();
            $table->enum('status',array('0','1'))->default('1')->comment('1 = Active, 0 = Inactive');
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
        Schema::dropIfExists('contact_us');
    }
}
