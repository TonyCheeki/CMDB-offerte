<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Validator;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {   
        $pages = page::all();
        $products = product::limit(4)->get();
        return view('home', ['products' => $products, 'pages' => $pages]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page, $id)
    {
        //// get the page
        $page = page::find($id);

        // show the edit form and pass the pagedata
        return View('page.edit')
            ->with('page', $page);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id)
    {
        //
        $rules = array(
            'name' => 'required',
            'description' => 'required',
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()
                        ->action('PageController@edit', ['id' => $page->id])
                        ->withErrors($validator)
                        ->withInput();
        } else {
            $page = page::find($id);
            $page->name       = $request->input('name');
            $page->description      = $request->input('description');
            $page->save();
        }
        // Session::flash('message', 'section updated Successfully !');
        return View('page.edit')
            ->with('page', $page);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }

    public function indexPage()
    {   
        $pages = page::all();
        return view('page.index', compact('pages'));
    }

    public function indexlogout()
    {
        Auth::logout();

        $pages = page::all();
        $products = product::limit(4)->get();
        return view('home', ['products' => $products, 'pages' => $pages]);
    }
}
