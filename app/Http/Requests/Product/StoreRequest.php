<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return  [
            'category_id' => 'required',

            'title' =>[
                // 'required',
                'string',
                
            ],
            'price'=>[
                'bail',
                'required',
                'numeric',
            ],
            'discount'=>[
                'bail',
                'numeric',
            ],
            'thumbnail'=>[
                'required',
                // 'image',
            ],
            'description'=>[
                'bail',
                'required',
                'string',
            ],
        ];
    }
    public function messages(){
        return [
            'required'=>':attribute không được để trống',
            'unique'=>':attribute đã tồn tại',
            'string'=>':attribute phải là chuỗi',
            'image'=>':attribute phải là ảnh',
            'numeric'=>':attribute phải là số',
            'bail'=>':attribute không được để trống',

        ]; 
    }
    public function attributes(){
        return [
            'title'=>'Tên sản phẩm ',
            'price'=>'Giá sản phẩm',
            'discount'=>'Giá giảm',
            'thumbnail'=>'Ảnh sản phẩm',
            'description'=>'Mô tả sản phẩm',
            'category_id'=>'Thể loại sản phẩm',
        ];
    }
}
