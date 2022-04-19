<?php

namespace Database\Seeders;

use App\Models\Distributed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Film;
use App\Models\Genre;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Film::create([
            'title' => 'The Wasteland',
            'slug' => 'the-wasteland',
            'language' => 'Spanish',
            'production' => 'Netflix, Rodar y Rodar',
            'runtime' => '1h 32min',
            'description' => 'The Wasteland (Spanish: El páramo), also known during the production stage as The Beast (La bestia), is a 2021 Spanish horror drama film directed by David Casademunt from a screenplay by Casademunt, Fran Menchón, and Martí Lucas. The film stars Inma Cuesta, Asier Flores, and Roberto Álamo. It was released on Netflix on 6 January 2022.',
            'genre_id' => 1,
            'distributed_id' => 1
        ]);
        Film::create([
            'title' => 'Brazen',
            'slug' => 'brazen',
            'language' => 'English',
            'production' => 'Eponymous Production, Mandalay Pictures',
            'runtime' => '1h 36min',
            'description' => 'Brazen is a 2022 American thriller film directed by Monika Mitchell and starring Alyssa Milano, Sam Page and Matthew Finlan, based on Nora Roberts\'s novel Brazen Virtue. It was released on Netflix on January 13, 2022.',
            'genre_id' => 4,
            'distributed_id' => 1
        ]);
        Film::create([
            'title' => 'How I Fell in Love with a Gangster',
            'slug' => 'how-i-fell-in-love-with-a-gangster',
            'language' => 'Polish',
            'production' => 'Open Mind Production',
            'runtime' => '2h 59min',
            'description' => 'How I Fell in Love with a Gangster is a 2022 Polish film directed by Maciej Kawulski, written by Krzysztof Gureczny and Maciej Kawulski and starring Tomasz Wlosok, Aleks Kurdzielewicz and Antoni Królikowski.',
            'genre_id' => 2,
            'distributed_id' => 1
        ]);
        Film::create([
            'title' => 'Photocopier',
            'slug' => 'photocopier',
            'language' => 'Indonesian',
            'production' => 'Rekata Studio, Kaninga Pictures',
            'runtime' => '2h 10min',
            'description' => 'Photocopier (Indonesian: Penyalin Cahaya) is a 2021 Indonesian crime mystery drama film, co-written and directed by Wregas Bhanuteja in his feature-length directorial debut. The film had its world premiere at the 26th Busan International Film Festival in October 2021, in the New Currents competition. The film won a total of twelve Citra Awards out of seventeen nominations, including the awards for Best Picture and Best Director. It won the most Citra Awards by a single film.',
            'genre_id' => 5,
            'distributed_id' => 1
        ]);
        Film::create([
            'title' => 'This is Not a Comedy',
            'slug' => 'this-is-not-a-comedy',
            'language' => 'Spanish',
            'production' => 'Agencia Bengala, Panorama Global',
            'runtime' => '1h 45min',
            'description' => 'This Is Not a Comedy (Spanish: El Comediante) is a 2021 Mexican film directed by Rodrigo Guardiola and Gabriel Nuncio, written by Gabriel Nuncio and Alo Valenzuela and starring Gabriel Nuncio, Cassandra Ciangherotti and Adriana Paz.',
            'genre_id' => 6,
            'distributed_id' => 1
        ]);

        Film::create([
            'title' => 'The Banker',
            'slug' => 'the-banker',
            'language' => 'English',
            'production' => 'Romulus Entertainment, Iam21 Entertainment, Mad Hatter, Hyphenate Films',
            'runtime' => '120min',
            'description' => 'The Banker is a 2020 American drama film directed, co-written and produced by George Nolfi. The film stars Anthony Mackie, Nicholas Hoult, Nia Long, Jessie T. Usher and Samuel L. Jackson. The story follows Joe Morris (Jackson) and Bernard S. Garrett Sr. (Mackie), two of the first African-American bankers in the United States.',
            'genre_id' => 8,
            'distributed_id' => 2
        ]);
        Film::create([
            'title' => 'CODA',
            'slug' => 'coda',
            'language' => 'American Sign Language, English',
            'production' => 'Vendôme Pictures, Pathé Films',
            'runtime' => '111min',
            'description' => 'CODA is a 2021 coming-of-age comedy-drama film written and directed by Sian Heder. An English-language remake of the 2014 French-Belgian film La Famille Bélier, it stars Emilia Jones as the titular child of deaf adults (CODA) and only hearing member of a deaf family, who attempts to help her family\'s struggling fishing business, while pursuing her own aspirations of being a singer. Eugenio Derbez, Troy Kotsur, Ferdia Walsh-Peelo, Daniel Durant, and Marlee Matlin are featured in supporting roles. An international co-production between the United States and France with La Famille Bélier producer Philippe Rousselet reprising his role as producer, the film was filmed on location in Gloucester, Massachusetts, in the United States.',
            'genre_id' => 5,
            'distributed_id' => 2
        ]);
        Film::create([
            'title' => 'Come from Away',
            'slug' => 'come-from-away',
            'language' => 'English',
            'production' => 'Entertainment One, Junkyard Dog Productions, RadicalMedia, Alchemy Production Group',
            'runtime' => '106min',
            'description' => 'Come from Away is a 2021 American-Canadian musical film comprising a live stage recording of Irene Sankoff and David Hein\'s 2017 musical of the same name, which tells the true story of 7,000 airline passengers who were stranded in a small town in Newfoundland, where they were housed and welcomed, after the 9/11 terrorist attacks. The film, produced in response to the shutdown of Broadway caused by the COVID-19 pandemic in the spring of 2020, was directed by Christopher Ashley and filmed in May 2021 at the Gerald Schoenfeld Theater in New York City, featuring members of the Broadway cast.',
            'genre_id' => 6,
            'distributed_id' => 2
        ]);
        Film::create([
            'title' => 'The Elephant Queen',
            'slug' => 'the-elephant-queen',
            'language' => 'English',
            'production' => 'Mister Smith Entertainment, Deeble & Stone',
            'runtime' => '96min',
            'description' => 'The Elephant Queen is a 2018 documentary film directed by Victoria Stone and Mark Deeble, and narrated by Chiwetel Ejiofor. It tells the journey of a family of elephants in the African savannah when they are forced to leave their waterhole. The film was produced by Lucinda Englehart under the banner of Deeble & Stone.',
            'genre_id' => 9,
            'distributed_id' => 2
        ]);
        Film::create([
            'title' => 'Pachinko',
            'slug' => 'pachinko',
            'language' => 'Korean, Japanese, English',
            'production' => 'Blue Marble Pictures, A Han.Bok Dream Production, Media Res',
            'runtime' => 'Episodes 8, 52-64 minutes',
            'description' => 'Kim Sun-Ja (Kim Min-Ha) was born and raised in Busan, Korea in the early 20th century, while Korea was under Japanese rule. She falls in love with a man named Koh Han-Su (Lee Min-Ho). She can see that he is a powerful person and from a different social class from her, but she is unaware of his complete background. Meanwhile, a church priest named Baek Isak (Noh Sang-Hyun) comes to stay at the lodge run by Kim Sun-Ja\'s mother. When he learns of Kim Sun-Ja\'s situation, he tries to give her advice, but, when he experiences her unwavering conviction, he offers to marry her. Kim Sun-Ja soon moves to Japan and faces difficult times as a Korean immigrant living in a unfamiliar land.',
            'genre_id' => 2,
            'distributed_id' => 2
        ]);

        Genre::create([
            'genre' => 'Horror',
        ]);
        Genre::create([
            'genre' => 'Drama',
        ]);
        Genre::create([
            'genre' => 'Romantic thriller',
        ]);
        Genre::create([
            'genre' => 'Thriller',
        ]);
        Genre::create([
            'genre' => 'Coming-of-age drama',
        ]);
        Genre::create([
            'genre' => 'Comedy-drama',
        ]);
        Genre::create([
            'genre' => 'Romance',
        ]);
        Genre::create([
            'genre' => 'Biography-drama',
        ]);
        Genre::create([
            'genre' => 'Family',
        ]);

        Distributed::create([
            'distributed' => 'Netflix',
        ]);
        Distributed::create([
            'distributed' => 'Apple TV',
        ]);
        
    }
}

