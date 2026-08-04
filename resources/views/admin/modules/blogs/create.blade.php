@extends("admin.layouts.main")
@section("title","Thêm Blog")
@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Thêm Blog</h3>
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
            <form action="{{route('admin.blogs.store')}}" method="POST">
                @csrf
                <x-inputs.text label="Tiêu đề" name="title" value=""></x-inputs.text>

                <x-inputs.text-area label="Mô tả" name="description" value=""></x-inputs.text-area>

                <x-inputs.image-link label="Ảnh đại diện" name="thumbnail"
                                     value=""></x-inputs.image-link>

                <x-inputs.editor label="Chi tiết blog" name="detail" value=""></x-inputs.editor>

                <x-inputs.text label="Tác giả" name="author" value=""></x-inputs.text>

                <button type="submit" class="btn btn-success">Thêm mới</button>
            </form>
        </div>
    </div>
@endsection
@push("scripts")
    <!-- Viết Javascript nếu cần -->
    <script>
    </script>
@endpush
