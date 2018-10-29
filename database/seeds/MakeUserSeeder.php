<?php

use Illuminate\Database\Seeder;

use App\ORM\User as UserEloquent;

use App\ORM\UserProfile as UserInfoEloquent;

class MakeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$user=UserEloquent::create([
			's_id'=>'yangmingcourse',
			'r_id'=>'3',
			'name'=>'衍莉姊',
			'email'=>'yangmingcourse@gmail.com',
			'password'=>bcrypt('yang5341')
		]);
		$user->assignRole('TA');
		
		$userinfo=UserInfoEloquent::create([
			'school_id'=>'yangmingcourse',
			'semester'=>'999',
			'USN'=>'yang5341',
			'address'=>'',
			'Department'=>"助理",
		]);
		
    }
}
