<?php

use App\Models\Role;
use App\Models\Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// todo: Move this code to controllers, services, repository. Basically organize it much nicer

Route::get("/schedule", function (Request $request) {
    // not optimal solution in terms of performance probably produces a lot of queries
    $sessions = Session::with('participants.user')
        ->where('active', 'Y')
        ->get();


    // At first I thought to do some processing in order to group response by user id in case of 
    // multiple users may be at one conference with different role

    // $its = $sessions->map(function (Session $item) {
    //     $processedParticipants = $item->participants;
    //     // $processedParticipants = $item->participants->groupBy('userid');
    //     return [
    //         ...$item->toArray(),
    //         'participants' => $processedParticipants,
    //     ];
    // });
    return [
        'items' => $sessions,
    ];
});


Route::get("/schedule_v2", function (Request $request) {
    // TODO: I can more effectively query DB with two requests and join them on php side. But out of scope for now
    $sessions = Session::select(
        "name",
        "session_start",
        "session_end",
    )
        ->where('active', 'Y')
        ->get();


    throw new Exception("not implemented");
    $participants = User::select(
        "s.id",
        "u.name",
        "r.usertype",
    )->join("role r");
    return [
        'items' => $sessions,
    ];
});
