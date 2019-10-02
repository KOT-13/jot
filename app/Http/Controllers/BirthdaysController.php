<?php

namespace App\Http\Controllers;

use App\Http\Resources\Contact;
use Illuminate\Http\Request;

/**
 * Class BirthdaysController
 * @package App\Http\Controllers
 */
class BirthdaysController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        $contacts = request()->user()->contacts()->birthdays()->get();

        return Contact::collection($contacts);
    }
}
