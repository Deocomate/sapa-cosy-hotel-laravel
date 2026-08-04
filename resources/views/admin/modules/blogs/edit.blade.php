@extends("admin.layouts.main")
@section("title","Sửa Blog")
@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Sửa Blog</h3>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('admin.blogs.update',$blog->id)}}" method="POST">
                @csrf
                @method('PUT')
                <x-inputs.text label="Tiêu đề" name="title" :value="$blog->title"></x-inputs.text>
                <x-inputs.text-area label="Mô tả" name="description" :value="$blog->description"></x-inputs.text-area>

                <x-inputs.image-link label="Ảnh đại diện" name="thumbnail"
                                     :value="$blog->thumbnail"></x-inputs.image-link>
                <x-inputs.editor label="Chi tiết blog" name="detail" :value="$blog->detail"></x-inputs.editor>
                <x-inputs.text label="Tác giả" name="author" :value="$blog->author"></x-inputs.text>

                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>
@endsection
@push("scripts")
    <!-- Viết Javascript nếu cần -->
    <script>
    </script>
@endpush
