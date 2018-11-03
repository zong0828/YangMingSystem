<?php
/**
 * StudentController
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Model\ORM\User as User;
use App\Services\Model\ORM\UserProfile as UserProfile;

class StudentController extends Controller
{
    /**
     * 預先執行function 
     */
	public function __construct()
    {
        $this->user = new User();
    }

    //
    public function index()
    {
        $user = User::find(1);
        return  $user;
    }
}
