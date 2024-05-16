<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use App\Functions\Helper;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics_array = config('comics');
        foreach ($comics_array as $item) {
            $new_comic = new Comic();
            $new_comic->title = $item['title'];
            $new_comic->slug = Helper::makeSlug($new_comic['title'], new Comic());
            $new_comic->description = $item['description'];
            $new_comic->thumb = $item['thumb'];
            $new_comic->price = $item['price'];
            $new_comic->series = $item['series'];
            $new_comic->sale_date = $item['sale_date'];
            $new_comic->type = $item['type'];
            $new_comic->artists = implode(', ', $item['artists']);
            $new_comic->writers = implode(', ', $item['writers']);
            $new_comic->save();
        }
    }
}
