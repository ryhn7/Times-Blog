<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
            'title' => 'What to Expect From Marvel in 2023: The MCU \'s Phase 5, X-Men \'97 and More',
            'slug' => 'marvel-2023-preview-mcu-phase-5-disney-plus-comics',
            'author' => 'Jesse Schedeen',
            'body' => 'Whether you prefer your superhero adventures to play out on the big screen, streaming on your phone or prefer good, old-fashioned comic books, there’s a whole lot of Marvel content headed your way in 2023. The MCU is kicking off Phase 5, Sony has new live-action and animated Spider-Man movies in the works and Marvel is celebrating the 60th anniversary of one of the biggest franchises in the world.'
        ],
        [
            'title' => 'God of War Ragnarok is Getting New Game Plus in 2023',
            'slug' => 'god-of-war-ragnarok-is-getting-new-game-plus-in-2023',
            'author' => 'George Yang',
            'body' => 'God of War (2018) added a New Game Plus mode a few months after its release. There, players were able to carry over earned equipment and abilities. Players were also able to create new armor sets for Kratos and Atreus, as well as the ability to convert talismans into enchantments. New Game Plus mode also changed the attack patterns for Valkyries and introduced Timed Realm Tears.
    
                While there weren’t any details provided about God of War Ragnarok’s New Game Plus mode just yet, it\'s likely to be similar to what the first game implemented, such as carrying over equipment and changing the Berserkers’ attack patterns as they did for Valkyries.
                
                In IGN’s God of War Ragnarok review, we said, “An enthralling spectacle to behold and an even more exciting one to take the reins of, God of War Ragnarok melds action and adventure together to create a new, unforgettable Norse saga.”'
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
