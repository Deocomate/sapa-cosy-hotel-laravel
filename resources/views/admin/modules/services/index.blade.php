{{--admin.modules.services.index--}}
@extends("admin.layouts.main")
@section("title","Danh sách dịch vụ")
@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Danh sách dịch vụ</h3>
            <div class="card-tools">
                <a href="{{route('admin.services.create')}}" class="btn btn-success btn-sm">
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
                    <th>Tiêu đề</th>
                    <th>Ảnh đại diện</th>
                    <th>Loại</th>
                    <th>Giá</th>
                    <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $service)
                    <tr>
                        <td>{{$service->id}}</td>
                        <td>{{$service->title}}</td>
                        <td><img src="{{ $service->thumbnail }}" alt="Thumbnail"
                                 style="max-width: 100px; max-height: 100px;object-fit: cover"></td>
                        <td>{{$service->type}}</td>
                        <td>{{number_format($service->price)}} VNĐ</td>
                        <td>
                            <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-primary btn-sm"><i
                                    class="fas fa-edit"></i> Sửa</a>
                            <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST"
                                  style="display: inline-block"
                                  onsubmit="return confirm('Bạn chắc chắn muốn xóa dịch vụ này?')">
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
