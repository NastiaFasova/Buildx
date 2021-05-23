<?php


namespace App\Http\Controllers;


use App\Models\Building;
use App\Models\Characteristic;
use App\Models\Scheme;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function show()
    {
        $popular_buildings = Building::all()->sortByDesc('popularity_rating')->take(4);
        return view("home", [
            "popular_buildings" => $popular_buildings
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
        $projectQuery = Building::query();
        if ($request->filled('bed')) {
            $projectQuery->where('bedroom_number', '=', $request->bedroom_number);
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
        return view("projects", [
            "popular_buildings" => $popular_buildings
        ]);
    }
}
