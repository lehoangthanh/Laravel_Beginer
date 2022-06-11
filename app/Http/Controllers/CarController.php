<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Http\Requests\Car\StoreRequest;
use App\Http\Requests\Car\UpdateRequest;

class CarController extends Controller
{
    public function index() {
        $cars = Car::all();
        return view('cars.cars')->with('cars', $cars);
    }

    public function create() {
        return view('cars.create');
    }

    public function store(StoreRequest $request) {
        $cars = new Car();
        $cars->name = $request->name;
        $cars->brand = $request->brand;
        $cars->price = $request->price;
        $cars->launched_year = $request->launched_year;
        $cars->save();
        return redirect(url('/cars'));
    }

    public function edit($id) {
        $car = Car::find($id);
        return view('cars.edit')->with('car', $car);
    }

    public function update(UpdateRequest $request, $id) {
        $car = Car::find($id);
        $car->name = $request->name;
        $car->brand = $request->brand;
        $car->price = $request->price;
        $car->launched_year = $request->launched_year;
        $car->save();
        return redirect(url('/cars'));
    }

    public function delete($id) {
        $car = Car::find($id);
        $car->delete();
        return redirect(url('/cars'));
    }
}
