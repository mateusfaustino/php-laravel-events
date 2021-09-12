<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){    
        $search = request('search');
        if($search){
            $events = Event::where(
                'title', 'like','%'.$search.'%'
            )->get();
        }else{
            $events = Event::all()->sortByDesc("id");
        }
        return view('home', ['events'=>$events, 'search'=>$search]);
    }
    public function show($id){
        $event= Event::findOrFail($id);
        return view('events/show', ['event'=>$event]);
    }  

    public function events(){    
        return view('home');
    }

    public function create(){    
        return view('events/create');
    }
    
    public function login(){    
        return view('signin/login');
    }
    public function signup(){    
        return view('signin/signup');
    }

    public function store(Request $request){
        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->items = $request->items;
        
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $path = $requestImage->store("/public/events");
            $event->image = $path;
        }

        $event->save();
        return redirect('/');
    }
}
