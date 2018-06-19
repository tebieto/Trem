<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Monthly;
use App\Weekly;
use App\G12;
use App\Sectiona;
use App\Sectionb;
use App\Sectionc;
use App\Sectiond;
use App\Sectione;
Use Auth;
Use Session;
use Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
	
	public function viewreport()
    {
        return view('viewreports');
    }
	
	public function getreports($type, $branch, $year, $start)
    {
        if($type=='monthly') {
			
		$reports = array();
		
		$monthlies = Monthly::where('branch', $branch)
				->whereYear('date', $year)
				->orderBy('created_at', 'DESC')->skip($start)->take(5)->get();
		
		foreach($monthlies as $monthly):
		
		array_push($reports, $monthly);
		
		endforeach;
		
		return $reports;
			
		} else if($type=='weekly') {
			
			
		$reports = array();
		
		$weeklies = Weekly::where('branch', $branch)
				->whereYear('date', $year)
				->orderBy('created_at', 'DESC')->skip($start)->take(5)->get();
		
		foreach($weeklies as $weekly):
		
		array_push($reports, $weekly);
		
		endforeach;
		
		return $reports;
			
		} else if($type=='g12') {
			
		$reports = array();
		
		$g12s = G12::where('branch', $branch)
				->whereYear('date', $year)
				->orderBy('created_at', 'DESC')->skip($start)->take(5)->get();
		
		foreach($g12s as $g12):
		
		array_push($reports, $g12);
		
		endforeach;
		
		return $reports;
			
		}
    }
	
	public function report(Request $r)
	{
	
	$this->validate($r, [
	'report' => 'required',
	'branch' => 'required|max:255',
	'name' => 'required|max:255',
	'date' => 'required'
	]);
	
	if($r->report=='monthly') {
		
	$monthly= Monthly::create([
		'user_id' => Auth::id(),
		'type' => $r->report,
		'branch' => $r->branch,
		'name' => $r->name,
		'date' => $r->date
	]);
	
	Sectiona::create([
		'monthly_id' => $monthly->id,
		'adults' => $r->adults,
		'children' => $r->children,
		'total' => $r->total
	]);
	
	Sectionb::create([
		'monthly_id' => $monthly->id,
		'newmembers' => $r->newmembers,
		'tithers' => $r->tithers
	]);
	
	Sectionc::create([
		'monthly_id' => $monthly->id,
		'councilmeetings' => $r->councilmeetings,
		'specialactivities' => $r->specialactivities,
		'specialcomments' => $r->specialcomments,
		'branchprojects' => $r->branchprojects,
		'projectcomments' => $r->projectcomments
	]);
	
	Sectiond::create([
		'monthly_id' => $monthly->id,
		'cmf' => $r->cmf,
		'cwf' => $r->cwf,
		'cyf' => $r->cyf,
		'rc' => $r->rc
	]);
	
	Sectione::create([
		'monthly_id' => $monthly->id,
		'newcells' => $r->newcells,
		'totalcells' => $r->totalcells
	]);
	
	} 
	else if($r->report=='weekly') {
		
	Weekly::create([
		'user_id' => Auth::id(),
		'type' => $r->report,
		'branch' => $r->branch,
		'name' => $r->name,
		'event' => $r->event,
		'men' => $r->men,
		'women' => $r->women,
		'children' => $r->children,
		'total' => $r->total,
		'preacher' => $r->preacher,
		'date' => $r->date
		]);
	
	}
	
	else if($r->report=='g12') {
		
	G12::create([
		'user_id' => Auth::id(),
		'type' => $r->report,
		'branch' => $r->branch,
		'name' => $r->name,
		'weeknumber' => $r->weeknumber,
		'attendance' => $r->attendance,
		'date' => $r->date
		]);
	
	}
	
	
	Session::flash('success', 'Report submitted successfully.');
	return redirect()->back();
	
	
	}
}
