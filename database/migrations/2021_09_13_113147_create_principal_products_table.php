<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrincipalProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('principal_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('principalId');
            $table->string('name');
            $table->string('image');
            $table->string('description');
            $table->string('redirect_link');
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
        Schema::dropIfExists('principal_products');
    }
}
