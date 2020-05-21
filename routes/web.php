<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/test-maze-javascript', 'maze')->name('test-maze-javascript');
Route::get('/test-maze-php', function(Request $request){
    $mazeText = '';
    if($request->mazeLength){
        $rules = [
            'mazeLength'    => 'required|numeric|min:1'
        ];
        $request->validate($rules);
        $mazeLength = $request->mazeLength;
        for ($a = 1; $a <= $mazeLength; $a++) {
            for ($b = 1; $b <= $mazeLength; $b++) {
                if($a % 2 == 1){
                    if($b == 2 && $a % 4 == 1){
                        $mazeText .= '<span>@</span>';
                    }else if($b == $mazeLength-1 && ($a+1) % 4 == 0){
                        $mazeText .= '<span>@</span>';
                    }else{
                        $mazeText .= '@';
                    }
                }else{
                    if($b == 1 || $b == $mazeLength){
                        $mazeText .= '@';
                    }else{
                        $mazeText .= '<span>@</span>';
                    }
                }
            }
            $mazeText .= '<br>';
        }
    }
    return view('maze-php', [
        'mazeText'  => $mazeText ?? null
    ]);
})->name('test-maze-php');
