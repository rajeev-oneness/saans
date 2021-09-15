<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('user_type')->default(3);
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('mobile');
            $table->tinyInteger('is_super')->comment('1: Super, 0: Not super')->default(1);
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });

        $data = [
            [
                'user_type' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('secret'),
                'mobile' => '9021587965',
            ],
            [
                'user_type' => 2,
                'name' => 'user',
                'email' => 'sales@sales.com',
                'password' => Hash::make('secret'),
                'mobile' => '9022547896',

            ],
            [
                'user_type' => 3,
                'name' => 'service',
                'email' => 'service@service.com',
                'password' => Hash::make('secret'),
                'mobile' => '9022547896',

            ]

        ];

        DB::table('users')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
