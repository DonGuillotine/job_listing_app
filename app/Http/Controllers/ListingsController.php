<?php

namespace App\Http\Controllers;

use App\Models\Listings;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingsController extends Controller
{
    public function index(){
        // dd(request('tag'));
        return view('index', [
            'details' => Listings::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    public function show(Listings $details){
        return view('show', [
            'one_job' => $details
        ]);
    }

    public function create(){
        return view('create');
    }

   public function store(Request $request){
        // dd($request->all());
        // dd($request->file('logo'));

        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        //Assigning the user_id to the currnet user
        $formFields['user_id'] = auth()->id();

        Listings::create($formFields);

        // Session::flash('message', 'Succsseffull');

        return redirect('/')->with('message', 'successful');
   }

   public function edit(Listings $listings){
        return view('edit', ['listings' => $listings]);
   }

   public function update(Request $request, Listings $listings){
    
    if($listings->user_id != auth()->id()){
        abort(403, 'Unauthorized Action');
    }

    $formFields = $request->validate([
        'title' => 'required',
        'company' => 'required', 
        'location' => 'required',
        'website' => 'required',
        'email' => ['required', 'email'],
        'tags' => 'required',
        'description' => 'required'
    ]);

    if($request->hasFile('logo')){
        $formFields['logo'] = $request->file('logo')->store('logos', 'public');
    }

    $listings->update($formFields);
    return redirect('/job_detail/' . $listings->id)->with('message', 'Job Updated Successfully!');
   }

   public function destroy(Listings $listings){
    $listings->delete();
    return redirect('/')->with('message', 'Deleted Succesfully');
   }

   public function manage(){
    return view('users.manage', ['listings' => auth()->user()->listings()->get()]);
   }

}
