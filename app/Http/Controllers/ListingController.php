<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // show all listings
    public function index() {
        return view('/listings/index', [
            'listings' => Listing::latest()->filter(request(['tags', 'search']))->paginate(4)
        ]);
    }
    // show single listing
    public function single(Listing $listing) {
        return view('/listings/single', [
            'listing' => $listing
        ]);
    }

    public function create() {
        return view('/listings/create');
    }
}
