<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Chain;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = User::paginate(2);

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $chain   = DB::table('chains')->where('enabled', true)->orderBy('name')->pluck('name', 'id');
        $category = DB::table('categories')->where('enabled', true)->orderBy('name')->pluck('name', 'id');
        $channel  = DB::table('channels')->where('enabled', true)->orderBy('name')->pluck('name', 'id');
        $format  = DB::table('formats')->where('enabled', true)->orderBy('name')->pluck('name', 'id');

        return view('users.create',  [
                                        'chains' => $chain,
                                        'categories' => $category,
                                        'channels' => $channel,
                                        'formats' => $format
                                      ]);
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
         $requestData = $request->all();
     
        
        $this->validate($request, [
			'username' => 'required|max:10|unique:users,username',
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required'
		],[
                        'username.unique' => 'El nombre de ususario ya está en uso', 
                        'username.max' => 'El nombre de ususario no puede ser mayor de 10 caractéres',
                        'email.email' => 'Escriba un correo valido',
                   ]);
        $requestData = $request->all();
        $requestData['password'] = bcrypt($requestData['password']);
        /*echo "<pre>";
        print_r($requestData);
        die;*/
        
        $user= User::create($requestData);
        foreach($requestData['chain'] as $idChain){
            Chain::find($idChain)->users()->save($user);   
        }

        Session::flash('flash_message', 'User added!');

        return redirect('users');
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
        $user = User::findOrFail($id);

        return view('users.show', compact('user'));
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
        $chain   = DB::table('chains')->where('enabled', true)->orderBy('name')->pluck('name', 'id');
        $category = DB::table('categories')->where('enabled', true)->orderBy('name')->pluck('name', 'id');
        $channel  = DB::table('channels')->where('enabled', true)->orderBy('name')->pluck('name', 'id');
        $format  = DB::table('formats')->where('enabled', true)->orderBy('name')->pluck('name', 'id');
        $user = User::findOrFail($id);

        return view('users.edit', [
                            'chains' => $chain,
                        'categories' => $category,
                          'channels' => $channel,
                           'formats' => $format,
                           'user'    => $user
        ]);
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
			'email' => 'required|email',
		],[
                    'username.unique' => 'El nombre de ususario ya está en uso',    
                    'username.max' => 'El nombre de ususario no puede ser mayor de 10 caractéres',
                        'email.email' => 'Escriba un correo valido',
                   ]);
        $requestData = $request->all();
        
        unset($requestData['username']);
        
        
        if(empty($requestData['password'])){
            unset($requestData['password']);    
        }else{
            $requestData['password'] = bcrypt($requestData['password']);
        }
        
        $user = User::findOrFail($id);
        $user->update($requestData);

        $user->chains()->sync($requestData['chain']);
        //$user->categories()->sync($requestData['category']);
        //$user->formats()->sync($requestData['format']);
        //$user->channels()->sync($requestData['channel']);
        
        
        
        Session::flash('flash_message', 'User updated!');

        return redirect('users');
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
        User::destroy($id);

        Session::flash('flash_message', 'User deleted!');

        return redirect('users');
    }
}
