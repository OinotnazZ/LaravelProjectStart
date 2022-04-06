<?php

use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Person::class,100)->create();

        $arrayName= array(
            "Maria",
            "Joaquina",
            "Roberto",
            "Alberto",
            "Antonio"
        );



        $arrayBirtDate= array(
            new DateTime("22-02-2022"),
            new DateTime("23-03-2021"),
            new DateTime("19-01-1998"),
            new DateTime("03-11-1996"),
            new DateTime("15-07-1967"),
        );

        for($i=0; $i<50;$i++){
            \DB::table('people')->insert([
                'name'      => $arrayName[rand(1,count($arrayName)-1)],
                'email'     => 'user' . $i . '@email.com',
                'birthDate' => $arrayBirtDate[rand(1,count( $arrayBirtDate)-1)],
                'address_id' => rand(1,150),
            ]);
        }
    }
}
