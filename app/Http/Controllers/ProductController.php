<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use View;
use App\Models\Product;
use App\Models\File;
use App\Models\Cart;
use Illuminate\Http\Request;
use Session;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // get all the products
        $products = product::all();
        // load the view and pass the products
        return View::make('products.index')->with('products', $products);
    }

    public function productList(){
    
        // get all the products
        $products = product::all();
        // load the view and pass the products
        return View('products.list')->with('products', $products);
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param $product
     * @return Response
     */
    public function show(Product $product)
    {
        // show the view and pass the product to it
        
        foreach($product->files as $file){

            $file->thumbnail=str_replace('"', '' , $file->thumbnail);
            $file->thumbnail=explode(' ,', $file->thumbnail);
        }


        return View::make('products.show')
            ->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return void
     */
    public function edit(Product $product, $id)
    {
        //// get the page
        $product = product::find($id);

        // show the edit form and pass the pagedata
        return View('products/edit')
            ->with('product', $product);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Product $product
     * @return Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function getAddToCart(Request $request,$id){
        //add item to cart by ID
        $product = product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart',$cart);
        return redirect()->back();
    }
    public function getCart(){
        // get cart with added products
        if(!Session::has('cart')){
            return view('shopping-cart');
        }
        $oldCart =Session::get('cart');
        $cart = new Cart($oldCart);
        return view ('shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
    public function getReduceByOne($id)
    {
        // delete one item by ID
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceOne($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->back();
    }
    public function getRemoveItem($id)
    {
         // delete all counted items by ID
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->back();
    }
    public function getIncreaseByOne(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
                'thumbnail' => 'required',
                'thumbnail.*' => 'image'
        ]);
        $files = [];
        if($request->hasfile('thumbnail'))
        {
            foreach($request->file('thumbnail') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('files'), $name);  
                $files[] = $name;  
            }
        }
        $file= new Product();
        $file->filenames = $files;
        $file->save();
        return back()->with('success', 'Data Your files has been successfully added');
    }
    
}
