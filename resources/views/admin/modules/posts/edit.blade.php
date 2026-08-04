@extends("admin.layouts.main")
@section("title","Sửa bài viết")
@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Sửa bài viết</h3>
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
            <form action="{{route('admin.posts.update',$post->id)}}" method="POST">
                @csrf
                @method('PUT')

                <x-inputs.text label="Tiêu đề" name="title" :value="$post->title"></x-inputs.text>
                <x-inputs.text-area label="Mô tả" name="description" :value="$post->description"></x-inputs.text-area>

                <x-inputs.image-link label="Ảnh đại diện" name="thumbnail"
                                     :value="$post->thumbnail"></x-inputs.image-link>

                <x-inputs.text label="URL" name="url" :value="$post->url"></x-inputs.text>

                <x-inputs.text label="Tác giả" name="author" :value="$post->author"></x-inputs.text>


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
