<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title_post' => 'What is the Global Forum on Cyber Expertise ',
                'category_post' => 'Category 1',
                'profile_type' => 'Profile 1',
                'profile_name' => 'John Doe',
                'user_email' => 'john@example.com',
                'body_post' => 'The GFCE is a multi-stakeholder community of more than 180 members and partners from all regions of the world, aiming to strengthen cyber capacity and expertise globally. The GFCE endeavours to be a pragmatic, action-orientated and flexible platform for international collaboration, reducing overlap and duplication of efforts in the cyber capacity building (CCB) ecosystem to ensure an open, free, peaceful and secure digital world.

                As a global platform comprising of governments, international organizations, non-governmental organizations, civil society, private companies, the technical community and academia, the GFCE builds global cyber capacity through the GFCE Working Groups, Cybil Knowledge Portal, the Clearing House function, the Global CCB Research Agenda and practical GFCE initiatives.',
            ],
            [
                'title_post' => 'Advancing Cybersecurity with Africa',
                'category_post' => 'Category 2',
                'profile_type' => 'Profile 2',
                'profile_name' => 'Jane Smith',
                'user_email' => 'jane@example.com',
                'body_post' => 'It is noteworthy that efforts have been made by African countries towards cyber capacity building. The level, however, differs by country and region. This variation can be explained by the differences in leadership commitment, cultural practices, knowledge and skills, resource availability, cooperation and intelligence sharing, among others, in relation to cybersecurity. The cyber security maturity gap in Africa, such as a lack of comprehensive national cybersecurity strategy, appropriate cybercrime laws and cybersecurity standards has created opportunities for threats to flourish in the continent with weak defence capabilities.',
            ],
            // Add more sample posts here
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
