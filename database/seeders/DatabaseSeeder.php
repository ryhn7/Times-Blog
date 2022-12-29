<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            [
                'name' => 'Jansen Ackles',
                'email' => 'ackles@gmail.com',
                'password' => bcrypt('12345'),
            ],
            [
                'name' => 'Jared Leto',
                'email' => 'leto@gmail.com',
                'password' => bcrypt('12345'),
            ],
            [
                'name' => 'John Stewart',
                'email' => 'stewart@gmail.com',
                'password' => bcrypt('12345'),
            ]

        ]);

        DB::table('categories')->insert([
            [
                'name' => 'World',
                'slug' => 'world',
            ],
            [
                'name' => 'Business',
                'slug' => 'business',
            ],
            [
                'name' => 'Sports',
                'slug' => 'sports',
            ],
            [
                'name' => 'Entertainment',
                'slug' => 'entertainment',
            ],

            [
                'name' => 'Technology',
                'slug' => 'technology',
            ],
            [
                'name' => 'Science',
                'slug' => 'science',
            ],
            [
                'name' => 'Health',
                'slug' => 'health',
            ],
            [
                'name' => 'Travel',
                'slug' => 'travel',
            ]
        ]);

        DB::table('posts')->insert([
            [
                'title' => 'Energy giant ExxonMobil sues EU to block energy windfall tax',
                'category_id' => 1,
                'user_id' => 2,
                'slug' => 'energy-giant-exxonmobil-sues-eu-to-block-energy-windfall-tax',
                'body' => '<p>In September, European Commission chief Ursula von der Leyen announced the plan for major oil, gas and coal companies to pay a "crisis contribution" on their increased 2022 profits.</p>
                <p>"Whether we invest here primarily depends on how attractive and globally competitive Europe will be," Exxon spokesperson Casey Norton told the Reuters news agency.</p>
                <p>EU ministers estimate that they can raise €140bn (£123bn) from the levies on non-gas electricity producers and suppliers that are making larger-than-usual profits from the current demand.</p>',
                'excerpt' => 'The European Commission has proposed a windfall tax on energy companies to help pay for the bloc\'s green transition.',
            ],
            [
                'title' => 'US to lift travel ban for fully vaccinated foreign visitors',
                'category_id' => 1,
                'user_id' => 2,
                'slug' => 'us-to-lift-travel-ban-for-fully-vaccinated-foreign-visitors',
                'body' => '<p>The US will lift its ban on foreign visitors from 33 countries and territories on 1 November, the White House has announced.</p>
                <p>President Joe Biden said the move would allow "safe and responsible travel" to resume.</p>
                <p>It comes as the US has seen a surge in coronavirus cases, with more than 7.5 million infections and 210,000 deaths.</p>',
                'excerpt' => 'The US will lift its ban on foreign visitors from 33 countries and territories on 1 November, the White House has announced.',
            ],
            [
                'title' => 'Apple and Tesla: Tech shares tumble amid supply issues',
                'category_id' => 5,
                'user_id' => 1,
                'slug' => 'apple-and-tesla-tech-shares-tumble-amid-supply-issues',
                'body' => '<p>China announced that it will lift its strict quarantine rules for travellers on 8 January, a positive sign for many investors who are seeing an ease in supply chain movement in 2023.</p>
                <p>"Factories are going to experience labour shortages for at least 4-6 weeks as the wave passes through their production regions, and of course most migrant workers will go back to their home villages for the Lunar New Year at the end of January," says Simon Baptist, chief economist at The Economist Intelligence Unit.</p>
                <p>Investors have also raised concerns about Tesla chief executive Elon Musk, who has repeatedly made controversial headlines. He took over Twitter in October after a drawn-out legal battle and since then, Mr Musk has focused a significant amount of his time on running the social media platform. Some have cited his alleged distraction during this time as another reason for the fall in Tesla\'s share price.</p>',
                'excerpt' => 'Shares in Apple and Tesla have fallen sharply amid concerns about supply chain issues and the impact of the coronavirus pandemic.',
            ],
            [
                'title' => 'Netflix password sharing may be illegal, says UK government',
                'category_id' => 4,
                'user_id' => 1,
                'slug' => 'netflix-password-sharing-may-be-illegal-says-uk-government',
                'body' => '<p>"There are a range of provisions in criminal and civil law which may be applicable in the case of password sharing where the intent is to allow a user to access copyright-protected works without payment," it said.</p>
                <p>Netflix said it wanted to "make it easy" for people borrowing others\' accounts to set up their own, to transfer their profile into a new account, as well as to create "sub-accounts" for people to pay extra for family or friends.</p>
                <p>Since then user growth has stalled and Netflix has tried to crack down on the practice, which is against its terms of service - but it has never taken legal action.</p>',
                'excerpt' => 'The UK government has said that password sharing for streaming services such as Netflix may be illegal.',
            ],
            [
                'title' => 'Water pipe robots could stop billions of litres leaking',
                'category_id' => 6,
                'user_id' => 3,
                'slug' => 'water-pipe-robots-could-stop-billions-of-litres-leaking',
                'body' => '<p>Around three billion litres of water are lost through leaks across hundreds of thousands of miles of water pipe in England and Wales daily, says water industry economic regulator Ofwat.</p>
                <p>But a recent Ofwat report pointed to a lack of investment by water companies. It named several that it said were "letting down customers and the environment" by not spending enough on improvements. Water UK responded saying that leakage was at "its lowest level since privatisation".</p>',
                'excerpt' => 'Water pipe robots could be used to stop billions of litres of water leaking from the UK\'s ageing water pipes.',
            ],
            [
                'title' => 'Domino\'s Pizza considers selling Russian business',
                'category_id' => 2,
                'user_id' => 3,
                'slug' => 'dominos-pizza-considers-selling-russian-business',
                'body' => '<p>In the days following Russia\'s invasion of Ukraine. on 28 February 2022, DP Eurasia said it was "too early to quantify any possible ramifications for the group\'s Russian business".</p>
                <p>The firm subsequently stated: "The safety and welfare of all of the group\'s employees and customers remains its primary priority and DP Eurasia is shocked and saddened by the conflict and the effect it has had on all of the innocent civilians across the region.</p>',
                'excerpt' => 'Domino\'s Pizza is considering selling its Russian business, according to reports.',
            ],
            [
                'title' => 'Haaland sets record as Man City beat Leeds',
                'category_id' => 3,
                'user_id' => 2,
                'slug' => 'haaland-sets-record',
                'body' => '<p>Frustrated by a disciplined and determined home side and their own profligacy for much of the first half at Elland Road, City snatched the lead just before the break through Rodri\'s follow-up finish and then sped into the distance in a one-sided second half.</p>
                <p>Having seen a couple of efforts saved early in the game, Haaland - playing in the city of his birth against the side he supports - did not celebrate his goals but showed little mercy in securing them to bring up his impressive tally in just his 14th game of the campaign.</p>',
                'excerpt' => 'Borussia Dortmund\'s Erling Haaland scored twice to set a new record for the most goals scored by a teenager in a single season in Europe\'s top five leagues.',
            ],
            [
                'title' => 'Norway\'s creative, isolated Arctic hideaway',
                'category_id' => 8,
                'user_id' => 1,
                'slug' => 'norways-creative-isolated-arctic-hideaway',
                'body' => '<p>On a remote island deep into the Arctic Circle, a passionate jazz musician runs a hospitality project like no other – and it takes all his improvisational skills to keep it going.
                </p>
                <p>T
                Tethered to windswept rocks on an island deep into the Arctic Circle is an unexpected sight: a tiny hotel with just four modernist sleeping cabins. Located 40 minutes off Norway\'s coast, the island of Sørvær is so remote that the next nearest piece of land is the east coast of Greenland, more than 2,000km away. Views from the highest point on the island take in the dark slivers of surfacing whales, soaring sea eagles and the endless expanse of the Arctic Ocean. But perhaps the biggest attraction for visitors is the new perspective they may gain on life.</p>',
                'excerpt' => 'On a remote island deep into the Arctic Circle, a passionate jazz musician runs a hospitality project like no other – and it takes all his improvisational skills to keep it going.',
            ],
            [
                'title' => 'Joe Wicks: Facing My Childhood',
                'category_id' => 7,
                'user_id' => 3,
                'slug' => 'joe-wicks-facing-my-childhood',
                'body' => '<p>Joe Wicks became a national hero during the first lockdown with his hugely successful \'PE with Joe\' workouts. But in the wake of the pandemic, it’s not just the nation’s physical health that concerns him – it’s our mental health.</p>
                <p>Many of the thousands of letters and messages Joe has received since he began his workouts have been from parents confiding in him about their own mental health struggles, and their worries for their children. Unfortunately, Joe knows all too well how stressful and confusing it can be when you are a child and your mum and dad aren’t well, and he wants to find out more. Joe opens up on about his mum’s OCD, eating disorders and anxiety, as well as his dad’s heroin addiction and depression. He wants to understand how his family’s illnesses affected him as a child and how we can better support kids and families living in similar situations today.</p>',
                'excerpt' => 'Joe Wicks became a national hero during the first lockdown with his hugely successful \'PE with Joe\' workouts. But in the wake of the pandemic, it’s not just the nation’s physical health that concerns him – it’s our mental health.',
            ],
        ]);
    }
}
