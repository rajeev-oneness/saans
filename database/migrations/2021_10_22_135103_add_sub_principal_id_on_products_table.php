<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSubPrincipalIdOnProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('products', function (Blueprint $table) {
            $table->integer('subPrincipalId')->after('principalId');
        });
        $pro_data=DB::table('products')->get();
        foreach ($pro_data as $key => $product) {
            DB::table('products')->where('principalId',1)->update(['subPrincipalId'=>1]);
             DB::table('products')->where('principalId',2)->update(['subPrincipalId'=>2]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
