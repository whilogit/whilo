<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
	
	
    public function index($limit = 10, $offset = 1)
    {
			
			return view('frontend.company');
    }
}
?>