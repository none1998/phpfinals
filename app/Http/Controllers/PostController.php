<?php


namespace App\Http\Controllers;
use App\Http\Requests\SavePostRequest;
use App\Models\Food;
use App\Models\Ingredient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
        $foods = Food::all();
        return view('foods')->with('foods',$foods);
    }

    public function customer(){
        $foods = Food::all();
        return view('customer')->with('foods',$foods);
    }

    public function show(Food $food){
        return view('food')->with('food',$food);
    }

    public function create(User $user){
        $ingredients = Ingredient::all();
        return view('create', compact('ingredients'))->with('user',$user);
    }

    public function save(SavePostRequest $request){
        $food = new Food($request->all());
        $food->user_id = 25;
        $food->save();
        $food->ingredients()->attach($request->ingredients);
        return redirect()->back();
    }

    public function edit($id){
        $food=Food::findOrFail($id);
        $ingredients = Ingredient::get();
//        return view('edit',[
//            'ingredients' => $ingredients
//        ]);
        return view('edit')->with('food',$food)->with('ingredients',$ingredients);
    }

    public function update(Request $request, Food $food){
        $ingredients = Ingredient::get();
        $food->update($request->all());
        return redirect('/foods/'.$food->id)->with('ingredients',$ingredients);
    }

    public function delete(Food $food){
        $food->delete();
        return redirect()->back();
    }

    public function buy($id){
        $food=Food::findOrFail($id);
        return view('buy')->with('food',$food);
    }
}
