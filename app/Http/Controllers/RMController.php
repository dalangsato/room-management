<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\form;
// use App\Bagian;
// use App\UnitKerja;
use Calendar;
use App\Event;

class RMController extends Controller
{
    public function roomA()
    {
        return view('formA');
    }
    public function index()
    {
        $appointments = Appointment::all();
        return view('admin.appointments.index', compact('appointments'));
    }

public function calendar()
    {
        $events = [];
        $data = Event::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
	                [
	                    'color' => '#f05050',
	                    'url' => 'pass here url and any route',
	                ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('fullcalender', compact('calendar'));
    }
}