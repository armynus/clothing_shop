<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\Product\StoreRequest;



class ProductController extends Controller
{
 
    public function index()
    {

        $product = Product::all();
        return view('product.index', compact('product'));
    }
    public function admin()
    {

        $data = Product::all();
        return view('admin.index', compact('data'));
    }

    public function create()
    {
        
        $category_name= Category::get();
        return view('admin.create', compact('category_name'));

    }

    public function store(StoreRequest $request)
    {
        
        Product::create($request->validated());
        return redirect()->route('admin.index');
    }


    public function show(Product $product)
    {
        //
    }

    public function edit(Product $each)
    {
        $product = Product::find($each->id);
        
        $category_name= Category::get();
        return view('admin.edit', compact('product','category_name'));
    }

    public function update(Request $request, Product $product)
    {

        $product->update(
            $request->except('_token','_method')
        );
        
        return redirect()->route('admin.index');
    }

    public function destroy(Product $each)
    {
        // Course::destroy($course->id);
        $each->delete();
        return redirect()->route('admin.index');   
    }
    public function indexhome()
    {
        $product = Product:: take(5)
        
        ->orderBy('id', 'desc')->get();
          //lấy 5 sản phẩm mới nhất
        
        $products_nam = Product::take(5)
        -> join('categories', 'products.category_id', '=', 'categories.id')
        -> where('categories.name', 'Nam')
        ->select('products.*', 'categories.name as category_nam')->get();
        $products_nu = Product::take(5)
        -> join('categories', 'products.category_id', '=', 'categories.id')
        -> where('categories.name', 'Nu')
        ->select('products.*', 'categories.name as category_nu')->get();
        $products_treem = Product::take(5)
        -> join('categories', 'products.category_id', '=', 'categories.id')
        -> where('categories.name', 'tre em')
        ->select('products.*', 'categories.name as category_treem')->get();
        return view('index', compact('product','products_nam','products_nu','products_treem',));
    }
    public function nam()
    {
        $products_nam = Product::take(100)
        -> join('categories', 'products.category_id', '=', 'categories.id')
        -> where('categories.name', 'Nam')
        ->select('products.*', 'categories.name as category_nam')->get();
        return view('nam', compact('products_nam'));
    }
    public function nu()
    {
        $products_nu = Product::take(100)
        -> join('categories', 'products.category_id', '=', 'categories.id')
        -> where('categories.name', 'Nu')
        ->select('products.*', 'categories.name as category_nu')->get();
        return view('nu', compact('products_nu'));
    }
    public function treem()
    {
        $products_treem = Product::take(100)
        -> join('categories', 'products.category_id', '=', 'categories.id')
        -> where('categories.name', 'tre em')
        ->select('products.*', 'categories.name as category_treem')->get();
        return view('treem', compact('products_treem'));
    }
    public function detail_product($id)
    {
        $product = Product::find($id);
        return view('detail_product', compact('product'));
    }
}
