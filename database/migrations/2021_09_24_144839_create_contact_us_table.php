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
            $table->tinyInteger('type')->default('1');
            $table->string('key',20);
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('phone');
            $table->string('message');
            $table->string('blog_link');
            $table->string('google_link');
            $table->string('facebook_link');
            $table->string('twiter_link');
            $table->string('email_us');
            $table->tinyInteger('status')->default('1')->comment('1 = Active, 0 = Inactive');
            $table->softDeletes();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });

        $data = [
            [
                'type' => 0,
                'key' => 'other',
                'name' => 'Get In Touch',
                'email' => '',
                'message' => 'Find out how we can serve you! Call +91 3340001735 or request a free consultation now.',
                'address' => '',
                'phone' => '',
                'blog_link' => 'http://www.goole.com/',
                'google_link' => 'http://www.goole.com/',
                'facebook_link' => 'http://www.facebook.com',
                'twiter_link' => 'http://www.goole.com/',
                'email_us' => 'salse@saansanalytical.com / support@saansanalytical.com',
            ],
            [
                'type' => 0,
                'key' => 'location',
                'name' => 'Durgapur',
                'email' => '',
                'message' => '',
                'address' => 'Durgapur.700014',
                'phone' => '+91 901547896',
                'blog_link' => '',
                'google_link' => '',
                'facebook_link' => '',
                'twiter_link' => '',
                'email_us' => '',
            ],
            [
                'type' => 0,
                'key' => 'location',
                'name' => 'Kolkata',
                'email' => '',
                'message' => '',
                'address' => 'kolkata.700012',
                'phone' => '+91 0123456789',
                'blog_link' => '',
                'google_link' => '',
                'facebook_link' => '',
                'twiter_link' => '',
                'email_us' => '',
            ]
        ];

        DB::table('contact_us')->insert($data);
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
