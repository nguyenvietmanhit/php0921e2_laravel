<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function edit(Request $request, $product_id) {
        dump($product_id);
    }

    public function index() {
//        $products = Product::all(); // Eloquent
          $products = Product::paginate(2);   //phân trang
//        DB::table('products')->get(); //Query Builder
//        dd($products);
        return view('products.index', [
            'products' => $products
        ]);
    }

    public function create() {

        return view('products.create');
    }

    public function store(Request $request) {
        // Xử lý form
//        dd($request->all());
        // - Xử lý validate form
        $rules = [
          'name' => 'required|min:2',
          'price' => 'numeric',
          'description' => 'required'
        ];
        $messages = [
            'name.required' => 'Name phải nhập',
            'name.min' => 'Name phải nhập ít nhất 2 ký tự',
            'price.numeric' => 'Giá phải là số',
            'description.required' => 'Mô tả phải nhập'
        ];
        $request->validate($rules, $messages);

        // Lưu vào CSDL, insert tự động với 1 điều kiện là các name của
        //form phải trùng với tên trường trong bảng
        $data = $request->all();
//        dump($data);
        $product = Product::create($data);
        if ($product) {
            session()->flash('success', 'Thêm mới thành công');
            return redirect('danh-sach-sp');
        }
        session()->flash('error', 'Thêm mới thất bại');
        return redirect('them-moi-sp');
    }
}
