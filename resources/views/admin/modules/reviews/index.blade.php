@extends("admin.layouts.main")
@section("title","Danh sách đánh giá")
@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Danh sách đánh giá</h3>
            <div class="card-tools">
                <a href="{{route('admin.reviews.create')}}" class="btn btn-success btn-sm">
                    <i class="fas fa-plus"></i>
                    Thêm mới
                </a>
            </div>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên khách hàng</th>
                    <th>Đánh giá</th>
                    <th>Địa chỉ</th>
                    <th>Số sao</th>
                    <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reviews as $review)
                    <tr>
                        <td>{{$review->id}}</td>
                        <td>{{$review->customer_name}}</td>
                        <td>{{$review->customer_review}}</td>
                        <td>{{$review->customer_address}}</td>
                        <td>{{$review->customer_rating}} Sao</td>
                        <td>
                            <a href="{{ route('admin.reviews.edit', $review->id) }}" class="btn btn-primary btn-sm"><i
                                    class="fas fa-edit"></i> Sửa</a>
                            <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST"
                                  style="display: inline-block"
                                  onsubmit="return confirm('Bạn chắc chắn muốn xóa đánh giá này?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Xóa
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@push("scripts")
    <!-- Viết Javascript nếu cần -->
    <script></script>
@endpush
