<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 9/28/16
 * Time: 6:03 PM
 */

namespace traffik\Transformers;

use Faker\Factory;
use traffik\Transformers\Transformer;

class StationTransformer extends Transformer
{
    protected $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    public function transform($item)
    {
        return [
            'name' => $this->faker->name,
            'location' => $this->faker->address,
            'capacity' => $this->faker->numberBetween(0, 5000),
            'occupiedLevel' => $this->faker->numberBetween(0, 2500),
            'inflow' => $this->faker->numberBetween(0, 15),
            'outflow' => $this->faker->numberBetween(0,15),
            'rating' => $this->faker->numberBetween(0,5),
            'businessHours' => [
                'weekdays' => [
                    'from' => $this->faker->time('H:i:s', 'now'),
                    'to' => $this->faker->time('H:i:s', 'now')
                    ],
                'weekends' => [
                    'from' => $this->faker->time('H:i:s', 'now'),
                    'to' => $this->faker->time('H:i:s', 'now')
                    ],
                'publicHolidays' => [
                    'from' => $this->faker->time('H:i:s', 'now'),
                    'to' => $this->faker->time('H:i:s', 'now')
                    ]
            ]
        ];
    }
}