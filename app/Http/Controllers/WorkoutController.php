<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class WorkoutController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getData(){
         $data = array("status" => "ok");
        $response = Http::get('https://dummyjson.com/products');
        return $jsonData = $response->json();
    }
    public function index()
    {
        // echo "---------------------------------------------------";
        return view('login');
        // $books = Book::all();
        // return view('books.index',compact('books'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('books.create');
    // }


    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        echo "<pre>";
        print_r($request);
        echo "</pre>";

        Book::create($request->all());


        return redirect()->route('workout.index')
                        ->with('success','Book created successfully.');
    }


    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Book  $book
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Book $book)
    // {
    //     return view('books.show',compact('book'));
    // }


    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Book  $book
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Book $book)
    // {
    //     return view('books.edit',compact('book'));
    // }


    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Book  $book
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Book $book)
    // {
    //      request()->validate([
    //         'name' => 'required',
    //         'detail' => 'required',
    //     ]);


    //     $book->update($request->all());


    //     return redirect()->route('books.index')
    //                     ->with('success','Book updated successfully');
    // }
    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Book  $book
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Book $book)
    // {
    //     $book->delete();
    //     return redirect()->route('books.index')->with('success','Book deleted successfully');
    // }







    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Workout  $workout
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Workout $workout)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Workout  $workout
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Workout $workout)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Workout  $workout
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Workout $workout)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Workout  $workout
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Workout $workout)
    // {
    //     //
    // }
}
