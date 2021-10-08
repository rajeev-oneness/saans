<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPdfFieldOnProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('pdf')->after('image5');
        });
        $pro_data=DB::table('products')->get();
        foreach ($pro_data as $key => $product) {
            DB::table('products')->where('id',$product->id)->update(['pdf'=>'front/pdf/sample.pdf']);
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
            $table->dropColumn(['pdf']);
        });
    }
}
