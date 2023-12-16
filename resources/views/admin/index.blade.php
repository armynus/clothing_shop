<a href="{{ route('create') }}">Thêm sản phẩm mới</a>
<table border="1" width="100%">
    <caption>
        <form action="" method="GET">
            
        </form>
    </caption>
    <tr>
        <th>#</th>
        <th>Thể loại</th>
        <th>Tên</th>
        <th>Giá</th>
        <th>Giảm Giá</th>
        <th>Ảnh</th>
        <th>Mô tả</th>
        <th>Created At</th>
        <th>Update_at</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach ($data as $each)
        <tr>
            <td>{{ $each -> id }}</td>
            <td>{{ $each -> category_id }}</td>
            <td>{{ $each -> title }}</td>
            <td>{{ $each -> price }}</td>
            <td>{{ $each -> discount }} </td>
            <td>
                <img src="{{ asset('img/'.$each -> thumbnail) }}" alt="" height="150px">
            </td>
            <td>{{ $each -> description }}</td>
            <td>{{ $each -> created_at }}</td>
            <td>{{ $each -> Update_at }}</td>
            <td>
                <a href="{{route('edit', $each) }}">
                    Edit
                </a>
            </td>
            <td>
                <form action="{{ route('product.destroy', $each)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>   
            </td>
        </tr>
    @endforeach
</table>
