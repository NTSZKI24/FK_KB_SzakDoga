<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'eventname' => 'Kosárlabda mérkőzés',
                'eventdesc' => 'Barátságos kosárlabda mérkőzés a helyi csapattal',
                'eventdate' => '2024-04-15',
                'eventtime' => '14:00',
                'eventplace' => 'Városi Sportcsarnok',
                'counties_id' => 1,
                'types_id' => 1, // Sport
                'eventage' => 16,
                'user_id' => 1,
                'image' => 'uploads/events/basketball.jpg'
            ],
            [
                'eventname' => 'Múzeumi túra',
                'eventdesc' => 'Vezetett túra a városi múzeumban',
                'eventdate' => '2024-04-20',
                'eventtime' => '10:00',
                'eventplace' => 'Városi Múzeum',
                'counties_id' => 1,
                'types_id' => 4, // Kulturális
                'eventage' => 12,
                'user_id' => 1,
                'image' => 'uploads/events/museum.jpg'
            ],
            [
                'eventname' => 'Tanulócsoport találkozó',
                'eventdesc' => 'Közös tanulás és felkészülés a vizsgákra',
                'eventdate' => '2024-04-25',
                'eventtime' => '15:00',
                'eventplace' => 'Központi Könyvtár',
                'counties_id' => 1,
                'types_id' => 5, // Tanulmányi
                'eventage' => 18,
                'user_id' => 1,
                'image' => 'uploads/events/study.jpg'
            ],

            // Events for second user (id: 2)
            [
                'eventname' => 'Közös bográcsozás',
                'eventdesc' => 'Szabadtéri főzés és közösségi program',
                'eventdate' => '2024-05-01',
                'eventtime' => '12:00',
                'eventplace' => 'Városi Park',
                'counties_id' => 2,
                'types_id' => 2, // Összetartás
                'eventage' => 0,
                'user_id' => 2,
                'image' => 'uploads/events/cooking.jpg'
            ],
            [
                'eventname' => 'Táncest',
                'eventdesc' => 'Modern és néptánc bemutató',
                'eventdate' => '2024-05-05',
                'eventtime' => '19:00',
                'eventplace' => 'Művelődési Ház',
                'counties_id' => 2,
                'types_id' => 3, // Szórakozás
                'eventage' => 16,
                'user_id' => 2,
                'image' => 'uploads/events/dance.jpg'
            ],
            [
                'eventname' => 'Futóverseny',
                'eventdesc' => 'Városi futóverseny minden korosztálynak',
                'eventdate' => '2024-05-10',
                'eventtime' => '09:00',
                'eventplace' => 'Városliget',
                'counties_id' => 2,
                'types_id' => 1, // Sport
                'eventage' => 12,
                'user_id' => 2,
                'image' => 'uploads/events/running.jpg'
            ],

            // Events for third user (id: 3)
            [
                'eventname' => 'Koncert est',
                'eventdesc' => 'Helyi zenekarok fellépése',
                'eventdate' => '2024-05-15',
                'eventtime' => '20:00',
                'eventplace' => 'Ifjúsági Ház',
                'counties_id' => 3,
                'types_id' => 3, // Szórakozás
                'eventage' => 18,
                'user_id' => 3,
                'image' => 'uploads/events/concert.jpg'
            ],
            [
                'eventname' => 'Nyelvtanulási workshop',
                'eventdesc' => 'Angol nyelvi készségfejlesztő workshop',
                'eventdate' => '2024-05-20',
                'eventtime' => '17:00',
                'eventplace' => 'Nyelviskola',
                'counties_id' => 3,
                'types_id' => 5, // Tanulmányi
                'eventage' => 14,
                'user_id' => 3,
                'image' => 'uploads/events/language.jpg'
            ],
            [
                'eventname' => 'Családi nap',
                'eventdesc' => 'Családi programok és játékok',
                'eventdate' => '2024-05-25',
                'eventtime' => '10:00',
                'eventplace' => 'Szabadidőpark',
                'counties_id' => 3,
                'types_id' => 2, // Összetartás
                'eventage' => 0,
                'user_id' => 3,
                'image' => 'uploads/events/family.jpg'
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
