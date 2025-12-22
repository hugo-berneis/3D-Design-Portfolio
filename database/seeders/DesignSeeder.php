<?php

namespace Database\Seeders;

use App\Models\Design;
use Illuminate\Database\Seeder;

class DesignSeeder extends Seeder
{
    public function run(): void
    {
        Design::truncate();

        $designs = [
            [
                'title' => 'Cat Keychain',
                'description' => 'A cat keychain. This keychain takes inspiration from Animal Crossing and uses features like a large head, large beady eyes, and a dumpling-shaped torso.',
                'category' => 'Objects, Design',
                'thumbnail' => 'https://via.placeholder.com/400x300?text=Cat+Keychain',
                'image' => 'https://via.placeholder.com/800x600?text=Cat+Keychain',
                'model_file' => 'models/cat-keychain.stl',
                'model_url' => null,
                'order' => 1,
            ],
            [
                'title' => 'Laser Cut Squirrel',
                'description' => 'The layout for a laser cut squirrel. Each piece is a flat body that interprets the thickness of wood and size of cuts. After laser cutting, each piece fits snugly together and does not need glue to hold it together. Glue was used in the final product so pieces don\'t get dislodged and lost.',
                'category' => 'Objects, Design, Projects',
                'thumbnail' => 'https://via.placeholder.com/400x300?text=Squirrel',
                'image' => 'https://via.placeholder.com/800x600?text=Laser+Cut+Squirrel',
                'model_file' => 'models/LaserCutSquirrel.stl',
                'model_url' => null,
                'order' => 8,
            ],
            [
                'title' => 'RV Project',
                'description' => 'This is the exterior of my RV project. The goal was to make a compact RV for people who unfortunately lost their homes and need a temporary solution before falling directly into homelessness. This RV comes with all the essentials including a kitchen, bed, and bathroom. It can comfortably fit 3 people.',
                'category' => 'Projects',
                'thumbnail' => 'https://via.placeholder.com/400x300?text=RV+Project',
                'image' => 'https://via.placeholder.com/800x600?text=RV+Project',
                'model_file' => 'models/rv.stl',
                'model_url' => null,
                'order' => 9,
            ],
            [
                'title' => 'RV Kitchen',
                'description' => 'This kitchen is inside my RV project. It includes a microwave, oven, vent, sink, and many overhead compartments.',
                'category' => 'Objects',
                'thumbnail' => 'https://via.placeholder.com/400x300?text=RV+Kitchen',
                'image' => 'https://via.placeholder.com/800x600?text=RV+Kitchen',
                'model_file' => 'models/kitchen.stl',
                'model_url' => null,
                'order' => 10,
            ],
            [
                'title' => 'RV Bathroom',
                'description' => 'The sink and toilet in the RV. Includes a medicine cabinet and a mobile sink with extra storage for towels.',
                'category' => 'Objects',
                'thumbnail' => 'https://via.placeholder.com/400x300?text=RV+Bathroom',
                'image' => 'https://via.placeholder.com/800x600?text=RV+Bathroom',
                'model_file' => 'models/RVSinkAndToilet.stl',
                'model_url' => null,
                'order' => 11,
            ],
            [
                'title' => 'RV Couch',
                'description' => 'The couch in the RV designed to be a pullout couch with symetrical cushions and a simple design.',
                'category' => 'Objects',
                'thumbnail' => 'https://via.placeholder.com/400x300?text=RV+Couch',
                'image' => 'https://via.placeholder.com/800x600?text=RV+Couch',
                'model_file' => 'models/RVcouch.stl',
                'model_url' => null,
                'order' => 12,
            ],
            [
                'title' => 'Cafe Espresso Machine',
                'description' => 'The heart of the cafe! This machine makes the best espresso and looks pretty cool on the counter too.',
                'category' => 'Objects, Design',
                'thumbnail' => 'https://via.placeholder.com/400x300?text=Cafe+Espresso',
                'image' => 'https://via.placeholder.com/800x600?text=Cafe+Espresso',
                'model_file' => 'models/CafeEspresso.stl',
                'model_url' => null,
                'order' => 13,
            ],
            [
                'title' => 'Cafe Project',
                'description' => 'This is the outside of the cafe I designed. I wanted it to feel super open and welcoming with all those big windows.',
                'category' => 'Projects',
                'thumbnail' => 'https://via.placeholder.com/400x300?text=Cafe+Exterior',
                'image' => 'https://via.placeholder.com/800x600?text=Cafe+Exterior',
                'model_file' => 'models/CafeExterior.stl',
                'model_url' => null,
                'order' => 14,
            ],
            [
                'title' => 'Cafe Coffee Grinder',
                'description' => 'This is the cafe\'s coffee grinder. When a cup is pressed against the button it triggers the grinder.',
                'category' => 'Objects',
                'thumbnail' => 'https://via.placeholder.com/400x300?text=Cafe+Grinder',
                'image' => 'https://via.placeholder.com/800x600?text=Cafe+Grinder',
                'model_file' => 'models/CafeGrinder.stl',
                'model_url' => null,
                'order' => 15,
            ],
            [
                'title' => 'Cafe Lamp',
                'description' => 'A custom designed lamp to add to the cozy atmosphere.',
                'category' => 'Objects, Design',
                'thumbnail' => 'https://via.placeholder.com/400x300?text=Cafe+Lamp',
                'image' => 'https://via.placeholder.com/800x600?text=Cafe+Lamp',
                'model_file' => 'models/CafeLamp.stl',
                'model_url' => null,
                'order' => 16,
            ],
            [
                'title' => 'Cafe Oven',
                'description' => 'The cafes oven. It features a custom stovetop design made to cook multiple pans at once.',
                'category' => 'Objects, Design',
                'thumbnail' => 'https://via.placeholder.com/400x300?text=Cafe+Oven',
                'image' => 'https://via.placeholder.com/800x600?text=Cafe+Oven',
                'model_file' => 'models/CafeOven.stl',
                'model_url' => null,
                'order' => 17,
            ],
            [
                'title' => 'Cafe Seating',
                'description' => 'Some comfy spots to hang out, grab a coffee, and maybe get some work done.',
                'category' => 'Objects, Design',
                'thumbnail' => 'https://via.placeholder.com/400x300?text=Cafe+Seating',
                'image' => 'https://via.placeholder.com/800x600?text=Cafe+Seating',
                'model_file' => 'models/CafeSeating.stl',
                'model_url' => null,
                'order' => 18,
            ],
            [
                'title' => 'Cafe Self Service Station',
                'description' => 'The spot where you can grab your own napkins, sugar, and milk. Kept it simple so it\'s easy to find everything.',
                'category' => 'Objects',
                'thumbnail' => 'https://via.placeholder.com/400x300?text=Cafe+Self+Service',
                'image' => 'https://via.placeholder.com/800x600?text=Cafe+Self+Service',
                'model_file' => 'models/CafeSelfService.stl',
                'model_url' => null,
                'order' => 19,
            ],
            [
                'title' => 'Cafe Water Dispenser',
                'description' => 'A simple water station inspired by the water dispensers at my local cafe',
                'category' => 'Objects',
                'thumbnail' => 'https://via.placeholder.com/400x300?text=Cafe+Water+Dispenser',
                'image' => 'https://via.placeholder.com/800x600?text=Cafe+Water+Dispenser',
                'model_file' => 'models/CafeWaterDispenser.stl',
                'model_url' => null,
                'order' => 20,
            ],
        ];

        foreach ($designs as $design) {
            Design::create($design);
        }
    }
}
