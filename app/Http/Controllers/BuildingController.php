<?php


namespace App\Http\Controllers;


use App\Models\Building;
use App\Models\Characteristic;
use App\Models\Scheme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuildingController extends Controller
{
    public function show()
    {
        $popular_buildings = Building::all()->sortByDesc('popularity_rating')->take(4);
        return view("home", [
            "popular_buildings" => $popular_buildings]);
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $isAllContentLoaded = true;
        $popular_buildings = Building::where('title', 'LIKE', "%{$search}%")->get();
        return view("projects", [
            "popular_buildings" => $popular_buildings,
            "isAllContentLoaded" => $isAllContentLoaded,
        ]);
    }

    public function showOne($project)
    {
        $project = Building::find($project);
        $characteristic = Characteristic::with('building')->where('building_id',
            '=', $project->id)->first();
        $images = $project->images->where('main_picture', '=', 0);
        $image = $project->images->where('main_picture', '=', 1)->first();
        $scheme = Scheme::with('building')->where('building_id',
            '=', $project->id)->first();
        return view("project", [
            "project" => $project,
            "characteristic" => $characteristic,
            "images" => $images,
            "image" => $image,
            "scheme" => $scheme
        ]);
    }

    public function showAll(Request $request)
    {
        $isAllContentLoaded = false;
        $projectQuery = Building::query();
        if ($request->filled('bed')) {
            $projectQuery->where('bedroom_number', '=', $request->bed);
        }
        if ($request->filled('shower')) {
            $projectQuery->where('bathroom_number', '=', $request->shower);
        }
        if ($request->filled('room')) {
            $projectQuery->where('door_number', '=', $request->room);
        }
        if ($request->filled('square')) {
            $projectQuery->where('square', '>=', $request->square);
        }
        if ($request->filled('price')) {
            $projectQuery->where('cost', '>=', $request->price);
        }
        $popular_buildings = Building::all()->sortByDesc('popularity_rating')->take(4);
//        $popular_buildings = $projectQuery->take(4);
        return view("projects", [
            "popular_buildings" => $popular_buildings,
            "isAllContentLoaded" => $isAllContentLoaded
        ]);
    }

    public function showOverallAll()
    {
        $isAllContentLoaded = true;
        $popular_buildings = Building::all()->sortByDesc('popularity_rating');
        return view("projects", [
            "popular_buildings" => $popular_buildings,
            "isAllContentLoaded" => $isAllContentLoaded
        ]);
    }
}
