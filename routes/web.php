<?php
/*
 * Author: Kevin Underwood
 * Date: 6/8/21
 * Class: cscd378
 * Assignment 8: Database Setup
 * Description:
 * Objectives:

    Understand the difference between traditional request/response web development vs single page applications
    Observe how Ajax works (no page reload)
    Get familiar with Livewire to build interactive applications

   Specifications

    Add the following enhancements/variation to your Assignment 6 (Database Setup) application. If you didn't before, lay out your city data in a nicely formatted table.

    Use the provided database.sqlite file in your project.
    This file contains pre-loaded Washington State data from a different population API. Be sure that you know what table to use and the fields that are contained within that table.
    Build a Livewire component that:
    [X]displays cities
    [X]searches cities by name or state
    [X]is able to sort cities by all fields in either desc or asc order
    [X]You'll create a route that takes you to the Livewire component displaying the cities
    [X]Make sure the component utilizes a layout file that has Livewire styles and scripts that it needs

*/
use Illuminate\Support\Facades\Route;

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

Route::get('/', App\Http\Livewire\Cities::class);
/*
Route::get('/cities', function () {
    return view('cities',['cities'=>App\Models\City::orderBy('state')->cursor()]);
});
*/
