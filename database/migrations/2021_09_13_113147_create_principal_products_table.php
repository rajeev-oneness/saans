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
            $table->tinyInteger('status')->default('1')->comment('1 = Active, 0 = Inactive');
            $table->softDeletes();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
            $data = [
                [
                    'principalId' => '1',
                    'name' => 'NEOSCAN N60',
                    'description' => 'Compact, accessible micro-CT scanner',
                    'redirect_link' => 'https://hirox-europe.com/products/3d-digital-microscope/hrx-01-new-3d-digital-microscope/'
                ],
                [
                    'principalId' => '1',
                    'name' => 'THERMAL STAGE',
                    'description' => 'Cooling and heating in a wide temperature range for large object volumes',
                    'redirect_link' => 'https://hirox-europe.com/products/3d-digital-microscope/hrx-01-new-3d-digital-microscope/'
                ],
                [
                    'principalId' => '2',
                    'name' => 'HRX-01-FULLSYSTEM-3D',
                    'description' => 'The HRX-01 is the result of over 40 years of optical manufacturing from Hirox',
                    'redirect_link' => 'https://hirox-europe.com/products/3d-digital-microscope/hrx-01-new-3d-digital-microscope/'
                ],
                [
                    'principalId' => '2',
                    'name' => 'RH-2000 System',
                    'description' => 'New Revolutionary Hardware',
                    'redirect_link' => 'https://hirox-europe.com/products/3d-digital-microscope/hrx-01-new-3d-digital-microscope/'
                ]
            ];

            DB::table('principal_products')->insert($data);
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
