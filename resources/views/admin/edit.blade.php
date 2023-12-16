<form action="{{route('product.update', $product)}} " method="POST" >
    @csrf
    @method('PUT')
    Thể lọai: 
    <select name="category_id" >
        @foreach ($category_name as $each)
            <option value="{{ $each -> id }}">{{ $each -> name }}</option>
        @endforeach
    </select>
    <br>
    Tên sản phẩm: 
    <input type="text" name="title" value="{{$product->title}}">
    <br>
    Giá:
    <input type="number" name="price" value="{{$product->price}}">
    <br>
    Giảm giá:
    <input type="number" name="discount" value="{{$product->discount}}">
    <br>
    Ảnh:
    <input type="file" name="thumbnail" value="{{$product->thumbnail}}">
    <br>
    Mô tả:
    <textarea name="description" id="" cols="30" rows="10">{{$product->description}}</textarea>
    <br>
    <!-- @if($errors->has('name'))
        <span class="error">
            {{$errors->first('name')}}
        </span>
    @endif -->
    <br>
    <button>Update</button>
</form>