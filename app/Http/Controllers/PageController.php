<?php 
	namespace App\Http\Controllers;


	class PageController extends Controller
	{
	    

	    public function getIndex()
	    {
	    	return view("pages.welcome");
	    }

	    public function getAbout()
	    {

	    	return view("pages.about");
	    }

	    public function getContact()
	    {
	    	return view("pages.contact");
	    }


	    public function getData()
	    {
	    	$name= array(
	    		'name' => 'Ariful Islam',
	    		'address' => "Elenga, Tangail, Bangladesh",
	    		'mobile' => ['01750840217','01836451658'],
	    		'email' => ['arifsofg@gmail.com','arif98741@gmail.com'],
	    		'interest' =>''
	    	);
	    	return view('test')->with("data",$name);
	    }


	}
	

?>