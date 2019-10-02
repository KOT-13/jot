<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Resources\Contact as ContactResource;
use Illuminate\Http\Request;

/**
 * Class SearchController
 * @package App\Http\Controllers
 */
class SearchController extends Controller
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = request()->validate([
            'searchTerm' => 'required'
        ]);

        $contacts = Contact::search($data['searchTerm'])
            ->where('user_id', request()->user()->id)
            ->get();

        return ContactResource::collection($contacts);
    }
}
