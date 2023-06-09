<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('image_cards')->insert([
            0=> [
                'fullname' => 'Walter White',
                'position' => 'Chief Executive Officer',
                'description' => 'Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut ',
                'image' => '',
                'type' => 'team',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 1=> [
                'fullname' => 'Sarah Jhinson',
                'position' => 'Product Manager',
                'description' => 'Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut ',
                'image' => '',
                'type' => 'team',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 2=> [
                'fullname' => 'William Anderson',
                'position' => 'CTO',
                'description' => 'Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus ',
                'image' => '',
                'type' => 'team',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 3=> [
                'fullname' => 'Saul Goodman',
                'position' => 'Ceo & Founder',
                'description' => '
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    ',
                'image' => '',
                'type' => 'testimonials',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 4=> [
                'fullname' => 'Sara Wilsson',
                'position' => 'Designer',
                'description' => '
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    ',
                'image' => '',
                'type' => 'testimonials',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 5=> [
                'fullname' => 'Jena Karlis',
                'position' => 'Store Owner',
                'description' => '
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                    ',
                'image' => '',
                'type' => 'testimonials',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 6=> [
                'fullname' => 'Matt Brandon',
                'position' => 'Freelancer',
                'description' => '
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                    ',
                'image' => '',
                'type' => 'testimonials',
                'created_at' =>now(),
                'updated_at' =>now()
            ], 7=> [
                'fullname' => 'John Larson',
                'position' => 'Entrepreneur',
                'description' => 'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.',
                'image' => '',
                'type' => 'testimonials',
                'created_at' =>now(),
                'updated_at' =>now()
            ]


        ]);


    }
}
