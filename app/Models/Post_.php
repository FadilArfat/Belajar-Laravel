<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fadil Arfat",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores natus illum dolore animi maxime dolorem, obcaecati, expedita pariatur facilis illo laboriosam totam ipsum corporis aliquam cum quia odio. Itaque quo ducimus vitae placeat tempora quisquam quam repudiandae illo iusto! Deleniti eaque amet corporis consequatur minus perferendis sunt aperiam, voluptate eveniet earum dolorum officiis asperiores aliquid vitae, error, temporibus repudiandae cupiditate ipsam nihil! Nulla laudantium labore esse! Voluptates molestias vero possimus porro explicabo, recusandae, beatae aspernatur unde nobis veritatis, quos dolorem!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Alika",
            "body"   => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur exercitationem suscipit ratione ea dolor dolorum necessitatibus et, provident assumenda non accusantium? Eum delectus tempora a veniam praesentium, ab cumque magnam dicta quas accusantium ducimus inventore. Magnam laboriosam repellat, placeat excepturi quos nesciunt ipsum earum ipsa! Nobis, accusantium natus ex veniam officia sed? Aspernatur adipisci odit mollitia incidunt, repudiandae expedita delectus nesciunt aperiam laboriosam deleniti laudantium placeat quis quae, aliquid modi temporibus dolores, totam odio doloribus! Harum nam aliquam maxime sed veritatis aperiam, tempore ratione ipsum laborum quae praesentium voluptatem quas quos, earum error molestiae corporis officia repellendus fugiat, blanditiis quis."
        ],
    ];

        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
            $posts = static::all();
            return $posts->firstWhere('slug', $slug);
        }
}
