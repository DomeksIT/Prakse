<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tour;

class TourController extends Controller
{
    public function index()
{
$tours = Tour::all();
return view('tours.index', [
'tours' => $tours
]);
}

public function show($id)
{
$tour = Tour::findOrFail($id);
return view('tours.show', [
'tour'=> $tour
]);
}

public function apply(Request $request, $id)
{
$tour = Tour::findOrFail($id);
$data = $request->validate([
'name'=>['required', 'min:2'],
'email'=>['required', 'email'],
'phone'=>['nullable'],
]);


DB::table('bookings')->insert([
'tour_id'=> $tour->id,
'name'=> $data['name'],
'email'=> $data['email'],
'phone'=> $data['phone'] ?? null,
'status'=> 'new',
'created_at' => now(),
'updated_at' => now(),
]);
return redirect('/tours/'. $tour->id)
->with('OK', 'Pieteikuma nosūtīts!');
}
public function bookings()
{
    $bookings = DB::table('bookings')
    ->join('tours', 'bookings.tour_id', '=', 'tours.id')
    ->select('bookings.*', 'tours.title as tour_title')
    ->orderBy('bookings.created_at', 'desc')
    ->get();
    return view('admin.bookings', [
        'bookings'=>$bookings
    ]);
    
}

public function done($id)
{
    DB::table('bookings')
    ->where('id',$id)
    ->update(['status'=>'done']);
    return redirect('/admin/bookings');
}

}




