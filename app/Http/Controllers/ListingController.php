<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {

        $listings = Listing::all();
        // select * from listings

        return view('listings.index', compact('listings'));
    }

    public function show(Listing $listing)
    {

        // $listing = Listing::find($id);

        // if(!$listing)
        //     abort('404');

        return view('listings.show', compact('listing'));
    }

    public function create()
    {
        return view('listings.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $formFields = $request->validate([
            'company' => 'required',
            'title' => 'required',
            'location' => 'required',
            'email' => 'required|email',
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);
        // request()->validate()

        Listing::create($request->all());

        return back();
    }

    public function edit(Listing $listing)
    {
        return view('listings.edit', compact('listing'));
    }

    public function update(Request $request, Listing $listing)
    {
        $formFields = $request->validate([
            'company' => 'required',
            'title' => 'required',
            'location' => 'required',
            'email' => 'required|email',
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        $listing->update($formFields);

        return back();
    }
}