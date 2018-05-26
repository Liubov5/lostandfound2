<?php

use Illuminate\Database\Seeder;
use App\Stuff;
class StuffsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stuff::create([
        	"title"=>"Потеряла платье Gucci",
        	"description"=>"Верните за вознаграждение",
        	"contact"=>"89644209101",
        	"status"=>0,
        	
        	"done"=>0,
        	"path"=>"/storage/dress.jpg",



        	 ]);
        Stuff::create([
        	"title"=>"Потеряла сумку Louis Vuitton",
        	"description"=>"Верните за вознаграждение",
        	"contact"=>"89141105685",
        	"status"=>0,
        	"done"=>0,
        	"path"=>"/storage/bag.png",



        	 ]);
           Stuff::create([
        	"title"=>"Найден iphone x",
        	"description"=>"Возле 203 мкр",
        	"contact"=>"89243607067",
        	"status"=>1,
        	"done"=>0,
        	"path"=>"/storage/iphone.jpg",



        	 ]);
           
           Stuff::create([
        	"title"=>"Найден кошелек supreme",
        	"description"=>"Внутри наличка 1000$, вод права и паспорт на имя Яковлевой Любови",
        	"contact"=>"89148298315",
        	"status"=>1,
        	"done"=>0,
        	"path"=>"/storage/supreme.jpg",



        	 ]);
             Stuff::create([
        	"title"=>"Потеряны очки gucci 2018 года",
        	"description"=>"Просьба вернуть за вознаграждение",
        	"contact"=>"89644161450",
        	"status"=>0,
        	"done"=>0,
        	"path"=>"/storage/sunglasses.jpg",



        	 ]);
    }
}
