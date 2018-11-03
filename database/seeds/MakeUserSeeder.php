<?php

use Illuminate\Database\Seeder;

use App\Services\Model\ORM\User as UserEloquent;

use App\Services\Model\ORM\UserProfile as UserInfoEloquent;

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

		$user3=UserEloquent::create([
			's_id'=>'student',
			'r_id'=>'1',
			'name'=>'學生',
			'email'=>'s0968048786@gmail.com',
			'password'=>bcrypt('student')
		]);
		$user3->assignRole('student');
		
		$userinfo3=UserInfoEloquent::create([
			'school_id'=>'student',
			'semester'=>'105',
			'USN'=>'student',
			'address'=>'',
			'Department'=>"CT01",
		]);

		$user1=UserEloquent::create([
			's_id'=>'admin',
			'r_id'=> '4',
			'name'=>'admin',
			'email'=>'s0968048786@gmail.com',
			'password'=>bcrypt('admin')
		]);
		$user1->assignRole('administrator');
		
		$userinfo1=UserInfoEloquent::create([
			'school_id'=>'admin',
			'semester'=>'999',
			'USN'=>'admin',
			'address'=>'',
			'Department'=>"AD001",
		]);

		$user2=UserEloquent::create([
			's_id'=>'teacher',
			'r_id'=>'2',
			'name'=>'老師',
			'email'=>'s0968048786@gmail.com',
			'password'=>bcrypt('teacher')
		]);
		$user2->assignRole('teacher');
		
		$userinfo2=UserInfoEloquent::create([
			'school_id'=>'teacher',
			'semester'=>'105',
			'USN'=>'teacher',
			'address'=>'',
			'Department'=>"TE01",
		]);
		
    }
}
