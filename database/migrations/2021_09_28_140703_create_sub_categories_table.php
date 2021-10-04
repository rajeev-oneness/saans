<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('categoryId');
            $table->string('sub_category_name');
            $table->tinyInteger('status')->default('1')->comment('1 = Active, 0 = Inactive');
            $table->softDeletes();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });

        $data = [
            [
                'categoryId' => 1,
                'sub_category_name' => 'Scanning Electron Microscope (Hitachi High Technologies)'
            ],
            [
                'categoryId' => 1,
                'sub_category_name' => 'Universal Testing Machines (Sobre Ibertest)',

            ],
            [
                'categoryId' => 2,
                'sub_category_name' => 'Scanning Electron Microscope (Hitachi High Technologies)'
            ],
            [
                'categoryId' => 2,
                'sub_category_name' => 'Universal Testing Machines (Sobre Ibertest)',

            ],
            [
                'categoryId' => 3,
                'sub_category_name' => 'Scanning Electron Microscope (Hitachi High Technologies)'
            ],
            [
                'categoryId' => 3,
                'sub_category_name' => 'Universal Testing Machines (Sobre Ibertest)',

            ]

        ];

        DB::table('sub_categories')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_categories');
    }
}
