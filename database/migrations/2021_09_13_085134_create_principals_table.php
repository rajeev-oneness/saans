<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrincipalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('principals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('status')->default('1')->comment('1 = Active, 0 = Inactive');
            $table->softDeletes();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });

        $data = [
            [
                'name' => 'Neosacn Bave'
            ],
            [
                'name' => 'Hirox',

            ],
            [
                'name' => 'Ostec Corporate Group'

            ],
            [
                'name' => 'Elemission Inc.'

            ],
            [
                'name' => 'Precisa'

            ],
            [
                'name' => 'FALC Instruments'

            ],
            [
                'name' => 'ORS (Object Research Systems) for Dragonfly Software'

            ],
            [
                'name' => 'Media Cybernetics, Inc. for Image Pro Software'

            ]
        ];

        DB::table('principals')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('principals');
    }
}
