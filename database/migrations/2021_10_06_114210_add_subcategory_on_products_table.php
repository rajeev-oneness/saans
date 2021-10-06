<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSubcategoryOnProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $data = [
            [
                'categoryId' => '1',
                'subCategoryId' => '1',
                'principalId' => '1',
                'name' => 'Neosacn Bave',
                'image1' => 'front/images/pro1.jpg',
                'image2' => 'front/images/pro2.jpg',
                'image3' => 'front/images/pro3.jpg',
                'image4' => 'front/images/pro1.jpg',
                'image5' => 'front/images/pro2.jpg',
                'description' => 'PERFORMANCE & POWER IN A FLEXIBLE PLATFORM
                Hitachi High-Techs scanning electron microscopes SU3800/SU3900 deliver both operability and expandability. The operator can automate many operations and efficiently utilize their high performance. The SU3900 is equipped with a large multipurpose specimen chamber to accommodate observation of large samples.',
                'feature' => 'Robust Stage for Flexibility in Sample Size, Shape, and Weight
                The specimen exchange sequence prevents potential damage to the system or the sample.
                Exchange the specimens without venting the specimen chamber, improving throughput.
                Increase sample manipulation with Stage Free Mode*.
                The Chamber Scope enhances the safety of stage movements*.',
                'larger_specification' => 'Neosacn Bave',
            ],
            [
                'categoryId' => '1',
                'subCategoryId' => '2',
                'principalId' => '1',
                'name' => 'Neosacn Bave',
                'image1' => 'front/images/pro1.jpg',
                'image2' => 'front/images/pro2.jpg',
                'image3' => 'front/images/pro3.jpg',
                'image4' => 'front/images/pro1.jpg',
                'image5' => 'front/images/pro2.jpg',
                'description' => 'PERFORMANCE & POWER IN A FLEXIBLE PLATFORM
                Hitachi High-Techs scanning electron microscopes SU3800/SU3900 deliver both operability and expandability. The operator can automate many operations and efficiently utilize their high performance. The SU3900 is equipped with a large multipurpose specimen chamber to accommodate observation of large samples.',
                'feature' => 'Robust Stage for Flexibility in Sample Size, Shape, and Weight
                The specimen exchange sequence prevents potential damage to the system or the sample.
                Exchange the specimens without venting the specimen chamber, improving throughput.
                Increase sample manipulation with Stage Free Mode*.
                The Chamber Scope enhances the safety of stage movements*.',
                'larger_specification' => 'Neosacn Bave',
            ],
            [
                'categoryId' => '2',
                'subCategoryId' => '1',
                'principalId' => '2',
                'name' => 'Neosacn Bave',
                'image1' => 'front/images/pro1.jpg',
                'image2' => 'front/images/pro2.jpg',
                'image3' => 'front/images/pro3.jpg',
                'image4' => 'front/images/pro1.jpg',
                'image5' => 'front/images/pro2.jpg',
                'description' => 'PERFORMANCE & POWER IN A FLEXIBLE PLATFORM
                Hitachi High-Techs scanning electron microscopes SU3800/SU3900 deliver both operability and expandability. The operator can automate many operations and efficiently utilize their high performance. The SU3900 is equipped with a large multipurpose specimen chamber to accommodate observation of large samples.',
                'feature' => 'Robust Stage for Flexibility in Sample Size, Shape, and Weight
                The specimen exchange sequence prevents potential damage to the system or the sample.
                Exchange the specimens without venting the specimen chamber, improving throughput.
                Increase sample manipulation with Stage Free Mode*.
                The Chamber Scope enhances the safety of stage movements*.',
                'larger_specification' => 'Neosacn Bave',

            ],
            [
                'categoryId' => '2',
                'subCategoryId' => '1',
                'principalId' => '3',
                'name' => 'Neosacn Bave',
                'image1' => 'front/images/pro1.jpg',
                'image2' => 'front/images/pro2.jpg',
                'image3' => 'front/images/pro3.jpg',
                'image4' => 'front/images/pro1.jpg',
                'image5' => 'front/images/pro2.jpg',
                'description' => 'PERFORMANCE & POWER IN A FLEXIBLE PLATFORM
                Hitachi High-Techs scanning electron microscopes SU3800/SU3900 deliver both operability and expandability. The operator can automate many operations and efficiently utilize their high performance. The SU3900 is equipped with a large multipurpose specimen chamber to accommodate observation of large samples.',
                'feature' => 'Robust Stage for Flexibility in Sample Size, Shape, and Weight
                The specimen exchange sequence prevents potential damage to the system or the sample.
                Exchange the specimens without venting the specimen chamber, improving throughput.
                Increase sample manipulation with Stage Free Mode*.
                The Chamber Scope enhances the safety of stage movements*.',
                'larger_specification' => 'Neosacn Bave',

            ],
            [
                'categoryId' => '2',
                'subCategoryId' => '1',
                'principalId' => '4',
                'name' => 'Neosacn Bave',
                'image1' => 'front/images/pro1.jpg',
                'image2' => 'front/images/pro2.jpg',
                'image3' => 'front/images/pro3.jpg',
                'image4' => 'front/images/pro1.jpg',
                'image5' => 'front/images/pro2.jpg',
                'description' => 'PERFORMANCE & POWER IN A FLEXIBLE PLATFORM
                Hitachi High-Techs scanning electron microscopes SU3800/SU3900 deliver both operability and expandability. The operator can automate many operations and efficiently utilize their high performance. The SU3900 is equipped with a large multipurpose specimen chamber to accommodate observation of large samples.',
                'feature' => 'Robust Stage for Flexibility in Sample Size, Shape, and Weight
                The specimen exchange sequence prevents potential damage to the system or the sample.
                Exchange the specimens without venting the specimen chamber, improving throughput.
                Increase sample manipulation with Stage Free Mode*.
                The Chamber Scope enhances the safety of stage movements*.',
                'larger_specification' => 'Neosacn Bave',

            ],
            [
                'categoryId' => '2',
                'subCategoryId' => '2',
                'principalId' => '1',
                'name' => 'Neosacn Bave',
                'image1' => 'front/images/pro1.jpg',
                'image2' => 'front/images/pro2.jpg',
                'image3' => 'front/images/pro3.jpg',
                'image4' => 'front/images/pro1.jpg',
                'image5' => 'front/images/pro2.jpg',
                'description' => 'PERFORMANCE & POWER IN A FLEXIBLE PLATFORM
                Hitachi High-Techs scanning electron microscopes SU3800/SU3900 deliver both operability and expandability. The operator can automate many operations and efficiently utilize their high performance. The SU3900 is equipped with a large multipurpose specimen chamber to accommodate observation of large samples.',
                'feature' => 'Robust Stage for Flexibility in Sample Size, Shape, and Weight
                The specimen exchange sequence prevents potential damage to the system or the sample.
                Exchange the specimens without venting the specimen chamber, improving throughput.
                Increase sample manipulation with Stage Free Mode*.
                The Chamber Scope enhances the safety of stage movements*.',
                'larger_specification' => 'Neosacn Bave',
            ],
            [
                'categoryId' => '2',
                'subCategoryId' => '2',
                'principalId' => '3',
                'name' => 'Neosacn Bave',
                'image1' => 'front/images/pro1.jpg',
                'image2' => 'front/images/pro2.jpg',
                'image3' => 'front/images/pro3.jpg',
                'image4' => 'front/images/pro1.jpg',
                'image5' => 'front/images/pro2.jpg',
                'description' => 'PERFORMANCE & POWER IN A FLEXIBLE PLATFORM
                Hitachi High-Techs scanning electron microscopes SU3800/SU3900 deliver both operability and expandability. The operator can automate many operations and efficiently utilize their high performance. The SU3900 is equipped with a large multipurpose specimen chamber to accommodate observation of large samples.',
                'feature' => 'Robust Stage for Flexibility in Sample Size, Shape, and Weight
                The specimen exchange sequence prevents potential damage to the system or the sample.
                Exchange the specimens without venting the specimen chamber, improving throughput.
                Increase sample manipulation with Stage Free Mode*.
                The Chamber Scope enhances the safety of stage movements*.',
                'larger_specification' => 'Neosacn Bave',
            ],
            [
                'categoryId' => '2',
                'subCategoryId' => '2',
                'principalId' => '2',
                'name' => 'Neosacn Bave',
                'image1' => 'front/images/pro1.jpg',
                'image2' => 'front/images/pro2.jpg',
                'image3' => 'front/images/pro3.jpg',
                'image4' => 'front/images/pro1.jpg',
                'image5' => 'front/images/pro2.jpg',
                'description' => 'PERFORMANCE & POWER IN A FLEXIBLE PLATFORM
                Hitachi High-Techs scanning electron microscopes SU3800/SU3900 deliver both operability and expandability. The operator can automate many operations and efficiently utilize their high performance. The SU3900 is equipped with a large multipurpose specimen chamber to accommodate observation of large samples.',
                'feature' => 'Robust Stage for Flexibility in Sample Size, Shape, and Weight
                The specimen exchange sequence prevents potential damage to the system or the sample.
                Exchange the specimens without venting the specimen chamber, improving throughput.
                Increase sample manipulation with Stage Free Mode*.
                The Chamber Scope enhances the safety of stage movements*.',
                'larger_specification' => 'Neosacn Bave',
            ],
            [
                'categoryId' => '3',
                'subCategoryId' => '1',
                'principalId' => '2',
                'name' => 'Neosacn Bave',
                'image1' => 'front/images/pro1.jpg',
                'image2' => 'front/images/pro2.jpg',
                'image3' => 'front/images/pro3.jpg',
                'image4' => 'front/images/pro1.jpg',
                'image5' => 'front/images/pro2.jpg',
                'description' => 'PERFORMANCE & POWER IN A FLEXIBLE PLATFORM
                Hitachi High-Techs scanning electron microscopes SU3800/SU3900 deliver both operability and expandability. The operator can automate many operations and efficiently utilize their high performance. The SU3900 is equipped with a large multipurpose specimen chamber to accommodate observation of large samples.',
                'feature' => 'Robust Stage for Flexibility in Sample Size, Shape, and Weight
                The specimen exchange sequence prevents potential damage to the system or the sample.
                Exchange the specimens without venting the specimen chamber, improving throughput.
                Increase sample manipulation with Stage Free Mode*.
                The Chamber Scope enhances the safety of stage movements*.',
                'larger_specification' => 'Neosacn Bave',

            ],
            [
                'categoryId' => '3',
                'subCategoryId' => '1',
                'principalId' => '4',
                'name' => 'Neosacn Bave',
                'image1' => 'front/images/pro1.jpg',
                'image2' => 'front/images/pro2.jpg',
                'image3' => 'front/images/pro3.jpg',
                'image4' => 'front/images/pro1.jpg',
                'image5' => 'front/images/pro2.jpg',
                'description' => 'PERFORMANCE & POWER IN A FLEXIBLE PLATFORM
                Hitachi High-Techs scanning electron microscopes SU3800/SU3900 deliver both operability and expandability. The operator can automate many operations and efficiently utilize their high performance. The SU3900 is equipped with a large multipurpose specimen chamber to accommodate observation of large samples.',
                'feature' => 'Robust Stage for Flexibility in Sample Size, Shape, and Weight
                The specimen exchange sequence prevents potential damage to the system or the sample.
                Exchange the specimens without venting the specimen chamber, improving throughput.
                Increase sample manipulation with Stage Free Mode*.
                The Chamber Scope enhances the safety of stage movements*.',
                'larger_specification' => 'Neosacn Bave',

            ],
            [
                'categoryId' => '3',
                'subCategoryId' => '1',
                'principalId' => '3',
                'name' => 'Neosacn Bave',
                'image1' => 'front/images/pro1.jpg',
                'image2' => 'front/images/pro2.jpg',
                'image3' => 'front/images/pro3.jpg',
                'image4' => 'front/images/pro1.jpg',
                'image5' => 'front/images/pro2.jpg',
                'description' => 'PERFORMANCE & POWER IN A FLEXIBLE PLATFORM
                Hitachi High-Techs scanning electron microscopes SU3800/SU3900 deliver both operability and expandability. The operator can automate many operations and efficiently utilize their high performance. The SU3900 is equipped with a large multipurpose specimen chamber to accommodate observation of large samples.',
                'feature' => 'Robust Stage for Flexibility in Sample Size, Shape, and Weight
                The specimen exchange sequence prevents potential damage to the system or the sample.
                Exchange the specimens without venting the specimen chamber, improving throughput.
                Increase sample manipulation with Stage Free Mode*.
                The Chamber Scope enhances the safety of stage movements*.',
                'larger_specification' => 'Neosacn Bave',

            ],
            [
                'categoryId' => '3',
                'subCategoryId' => '2',
                'principalId' => '4',
                'name' => 'Neosacn Bave',
                'image1' => 'front/images/pro1.jpg',
                'image2' => 'front/images/pro2.jpg',
                'image3' => 'front/images/pro3.jpg',
                'image4' => 'front/images/pro1.jpg',
                'image5' => 'front/images/pro2.jpg',
                'description' => 'PERFORMANCE & POWER IN A FLEXIBLE PLATFORM
                Hitachi High-Techs scanning electron microscopes SU3800/SU3900 deliver both operability and expandability. The operator can automate many operations and efficiently utilize their high performance. The SU3900 is equipped with a large multipurpose specimen chamber to accommodate observation of large samples.',
                'feature' => 'Robust Stage for Flexibility in Sample Size, Shape, and Weight
                The specimen exchange sequence prevents potential damage to the system or the sample.
                Exchange the specimens without venting the specimen chamber, improving throughput.
                Increase sample manipulation with Stage Free Mode*.
                The Chamber Scope enhances the safety of stage movements*.',
                'larger_specification' => 'Neosacn Bave',
            ],
            [
                'categoryId' => '3',
                'subCategoryId' => '2',
                'principalId' => '2',
                'name' => 'Neosacn Bave',
                'image1' => 'front/images/pro1.jpg',
                'image2' => 'front/images/pro2.jpg',
                'image3' => 'front/images/pro3.jpg',
                'image4' => 'front/images/pro1.jpg',
                'image5' => 'front/images/pro2.jpg',
                'description' => 'PERFORMANCE & POWER IN A FLEXIBLE PLATFORM
                Hitachi High-Techs scanning electron microscopes SU3800/SU3900 deliver both operability and expandability. The operator can automate many operations and efficiently utilize their high performance. The SU3900 is equipped with a large multipurpose specimen chamber to accommodate observation of large samples.',
                'feature' => 'Robust Stage for Flexibility in Sample Size, Shape, and Weight
                The specimen exchange sequence prevents potential damage to the system or the sample.
                Exchange the specimens without venting the specimen chamber, improving throughput.
                Increase sample manipulation with Stage Free Mode*.
                The Chamber Scope enhances the safety of stage movements*.',
                'larger_specification' => 'Neosacn Bave',
            ],
            [
                'categoryId' => '3',
                'subCategoryId' => '2',
                'principalId' => '2',
                'name' => 'Neosacn Bave',
                'image1' => 'front/images/pro1.jpg',
                'image2' => 'front/images/pro2.jpg',
                'image3' => 'front/images/pro3.jpg',
                'image4' => 'front/images/pro1.jpg',
                'image5' => 'front/images/pro2.jpg',
                'description' => 'PERFORMANCE & POWER IN A FLEXIBLE PLATFORM
                Hitachi High-Techs scanning electron microscopes SU3800/SU3900 deliver both operability and expandability. The operator can automate many operations and efficiently utilize their high performance. The SU3900 is equipped with a large multipurpose specimen chamber to accommodate observation of large samples.',
                'feature' => 'Robust Stage for Flexibility in Sample Size, Shape, and Weight
                The specimen exchange sequence prevents potential damage to the system or the sample.
                Exchange the specimens without venting the specimen chamber, improving throughput.
                Increase sample manipulation with Stage Free Mode*.
                The Chamber Scope enhances the safety of stage movements*.',
                'larger_specification' => 'Neosacn Bave',
            ],
        ];

        DB::table('products')->insert($data);
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
