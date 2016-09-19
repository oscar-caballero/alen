<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Launch;
use App\Chain;
use Illuminate\Http\Request;
use Session;

class LaunchController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $launch = Launch::paginate(2);

        return view('launch.index', compact('launch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $chain   = DB::table('chains')->where('enabled', true)->orderBy('name');
        
        
        return view('launch.create',['chains'      => $chain->get(),
                                     'chainsPluck' => $chain->pluck('name', 'id')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        
        $this->validate($request, [
			'name' => 'required',
			'presentation' => 'required',
			'launch_date'  => 'required',
                        'chain_id'        => 'required',
                        'description'  => 'required',
                        'image'  => 'required',
		]);
        $requestData = $request->all();
        
        $launch = Launch::create($requestData);
        Chain::find($requestData['chain_id'])->launches()->save($launch);
        

        Session::flash('flash_message', 'Launch added!');

        return redirect('launch');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $launch = Launch::findOrFail($id);

        return view('launch.show', compact('launch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $launch = Launch::findOrFail($id);

        return view('launch.edit', compact('launch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
			'name' => 'required',
			'presentation' => 'required',
			'launch_date' => 'required'
		]);
        $requestData = $request->all();
        
        $launch = Launch::findOrFail($id);
        $launch->update($requestData);

        Session::flash('flash_message', 'Launch updated!');

        return redirect('launch');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Launch::destroy($id);

        Session::flash('flash_message', 'Launch deleted!');

        return redirect('launch');
    }
}
