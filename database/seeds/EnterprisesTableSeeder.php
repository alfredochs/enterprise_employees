<?php

use App\Enterprise;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Provider\it_IT\Company as FakerAdd;

class EnterprisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker, FakerAdd $fakerAdd)
    {
        $percorso_images = storage_path("app/public/img");
        for ($i = 0; $i < 20; $i++) {
            $newEnterprise = new Enterprise();
            $newEnterprise->name = $faker->words(3, true);
            $newEnterprise->img_logo = $faker->imageUrl();
            $newEnterprise->partita_iva = $fakerAdd->vat();
            //modifica numero di partita iva 11 al posto di 9.
            //err randomNumber() can only generate numbers up to mt_getrandmax()
            $newEnterprise->save();
        }
    }
}
