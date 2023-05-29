<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // show all listings
    public function index() {
        return view('/listings/index', [
            'listings' => Listing::latest()->filter(request(['tags', 'search']))->simplePaginate(4)
        ]);
    }
    // show single listing
    public function single(Listing $listing) {
        return view('/listings/single', [
            'listing' => $listing
        ]);
    }

    // show create post form
    public function create() {
        return view('/listings/create');
    }

    // store listing data in database
    public function store(Request $request) {
        $form = $request->validate([
            'company' => 'required|unique:listings,company',
            'email' => 'required|email',
            'title' => 'required',
            'location' => 'required',
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        Listing::create($form);

        return redirect('/')->with('message', 'Listing created successfully!');
    }
}
