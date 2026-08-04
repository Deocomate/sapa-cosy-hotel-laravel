@extends("admin.layouts.main")
@section("title","Danh sách blogs")
@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Danh sách Blogs</h3>
            <div class="card-tools">
                <a href="{{route('admin.blogs.create')}}" class="btn btn-success btn-sm">
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
                    <th>Tác giả</th>
                    <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <td>{{$blog->id}}</td>
                        <td>{{$blog->title}}</td>
                        <td><img src="{{ $blog->thumbnail }}" alt="Thumbnail"
                                 style="max-width: 100px; max-height: 100px;object-fit: cover"></td>
                        <td>{{$blog->author}}</td>
                        <td>
                            <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-primary btn-sm"><i
                                    class="fas fa-edit"></i> Sửa</a>
                            <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST"
                                  style="display: inline-block"
                                  onsubmit="return confirm('Bạn chắc chắn muốn xóa blog này?')">
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
