<?php

namespace App\Http\Controllers;
Use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\BooksDetail;

class AdminController extends Controller
{

    public function showLoginForm()
    {
        return view('adminlogin');
    }

    public function showUserLog()
    {
        return view('userlogin');
    }

    public function index()
    {
    
        $BooksDetails = BooksDetail::all();
        return view('admin', compact('BooksDetails'));
    }
    public function getPropertyForm(){
        return view('admin_property_form');
    }
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        $storeData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'publication_date' => 'required',
            'description' => '',
            'publisher' => 'required',
            'image_url' => '',
        ]);
      
        $BooksDetail = BooksDetail::create($storeData);
        return redirect('/admin')->with('completed', 'Record has been saved!');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $BooksDetails = BooksDetail::findOrFail($id);
        return view('edit', compact('BooksDetails'));
    }

    /**
     * Update the specified resource in db.
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'publication_date' => 'required',
            'description' => '',
            'genre' => '',
            'isbn' => '',
            'publisher' => 'required',
            'image' => ''
        ]);
        BooksDetail::whereId($id)->update($updateData);
        return redirect('/admin')->with('completed', 'Record has been updated');
    }
    public function destroy($id)
    {
        $BooksDetail = BooksDetail::findOrFail($id);
        $BooksDetail->delete();
        return redirect('/admin')->with('completed', 'Record has been deleted');
    }
    public function bookdetail($id)
    {
        $BooksDetails = BooksDetail::findOrFail($id);
        return view('detail', compact('BooksDetails'));
    }
    public function userbooklist()
    {
        $BooksDetails = BooksDetail::all();
       // echo "<pre>";print_r($BooksDetails);exit;
        return view('userbooklist', compact('BooksDetails'));

    }


    public function apiDataStore(Request $request)
    {
        $url = "https://fakerapi.it/api/v1/books?_quantity=100";

        $json_data = file_get_contents($url);
        // Send request to Server
        $ch = curl_init($url);
        // Get response
        $response = curl_exec($ch);
        // Decode
        $result = json_decode($json_data);
      
         //echo "<pre>";print_r($result);exit; 
        foreach ($result->data as $value) {
              $findisbn = BooksDetail::where('isbn', $value->isbn)->first();

            if($findisbn){
                $affected = BooksDetail::where('isbn', $value->isbn)
                            ->update([
                                'title' => $value->title, 
                                'author' => $value->author, 
                                'genre' => $value->genre,
                                'description' => $value->description,
                                'isbn' => $value->isbn,
                                'publication_date' => $value->published,
                                'publisher' => $value->publisher,
                                'image' => $value->image,
                                ]);
            }else{
                $BooksDetail = new BooksDetail;
                $BooksDetail->isbn = $value->isbn;
                $BooksDetail->title = $value->title;
                $BooksDetail->author = $value->author;
                $BooksDetail->genre = $value->genre;
                $BooksDetail->publication_date = $value->published;
                $BooksDetail->description = $value->description;
                $BooksDetail->publisher = $value->publisher;
                $BooksDetail->image = $value->image;
                           
                $BooksDetail->save();
            }
        }
       
      
        //$PropertyDetail = PropertyDetail::create($storeData);
        return redirect('/admin')->with('completed', 'Record has been saved!');
    }

}
