<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Userlist;

class UserlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listA = new Userlist();
        $listA->name = "UserLise_A";
        $listA->save();
        
        $listB = new Userlist();
        $listB->name = "UserLise_B";
        $listB->save();
        
        $listC = new Userlist();
        $listC->name = "UserLise_C";
        $listC->save();
        
        $listD = new Userlist();
        $listD->name = "UserLise_D";
        $listD->save();
        
        $listE = new Userlist();
        $listE->name = "UserLise_E";
        $listE->save();
        
        $listF = new Userlist();
        $listF->name = "UserLise_F";
        $listF->save();
    }
}