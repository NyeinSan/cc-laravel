<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Blog::truncate();
        // Category::truncate();

        $mgmg=User::factory()->create(['name'=>'mgmg','username'=>'mgmg']);
        $aungaung=User::factory()->create(['name'=>'aungaung','username'=>'aungaung']);
        $fontend=Category::factory()->create(['name'=>"frontend",'slug'=>'frontend']);
        $backend=Category::factory()->create(['name'=>"backend",'slug'=>'backend']);

        Blog::factory(2)->create(['category_id'=>$fontend->id,'user_id'=>$mgmg->id]);
        Blog::factory(2)->create(['category_id'=>$backend->id,'user_id'=>$aungaung->id]);
    }
}
