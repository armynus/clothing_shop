@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('store')}}" method="POST" >
    @csrf
    Thể loại:
    <select name="category_id" >
        @foreach ($category_name as $each)
            <option value="{{ $each -> id }}">{{ $each -> name }}</option>
        @endforeach
    </select>
    <br>
    Name: 
    <input type="text" name="title"> 
    <br>
    Giá:
    <input type="number" name="price">
    <br>
    Giá giảm:
    <input type="number" name="discount">
    <br>
    Ảnh:
    <input type="file" name="thumbnail">
    <br>
    Mô tả:
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <br>
    <button type="submit">Thêm</button>
    
</form>