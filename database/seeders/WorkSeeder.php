<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Work;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayWorks = config('works');

        foreach($arrayWorks as $elem){
            $newWork = new Work();
            $newWork->title =
            $newWork->lenguages =
            $newWork->description =
            $newWork->image =
            $newWork->creation_date =
            $newWork->save();
        }
    }
}
