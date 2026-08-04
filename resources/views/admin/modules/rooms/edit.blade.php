@extends("admin.layouts.main")
@section("title","Sửa phòng")
@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Sửa phòng</h3>
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
            <form action="{{route('admin.rooms.update',$room->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-inputs.text label="Tiêu đề" name="title" :value="$room->title"></x-inputs.text>

                <x-inputs.image-link label="Ảnh đại diện" name="thumbnail"
                                     :value="$room->thumbnail"></x-inputs.image-link>

                <x-inputs.text label="Loại phòng" name="type" :value="$room->type"></x-inputs.text>

                <x-inputs.number label="Giá phòng" name="price" :value="$room->price"></x-inputs.number>

                <x-inputs.text-area label="Mô tả" name="description"
                                    :value="$room->description"></x-inputs.text-area>

                <x-inputs.editor label="Chi tiết" name="details" :value="$room->details"></x-inputs.editor>

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
