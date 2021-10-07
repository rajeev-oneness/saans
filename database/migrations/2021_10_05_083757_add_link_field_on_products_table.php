<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLinkFieldOnProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('redirect_link')->after('larger_specification');
        });
        $pro_data=DB::table('products')->get();
        foreach ($pro_data as $key => $product) {
            DB::table('products')->where('id',$product->id)->update(['redirect_link'=>'https://hirox-europe.com/products/3d-digital-microscope/hrx-01-new-3d-digital-microscope/']);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['redirect_link']);
        });
    }
}
