@extends("admin.layouts.main")
@section("title","Sửa Địa điểm")
@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Sửa Địa điểm</h3>
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
            <form action="{{route('admin.locations.update',$location->id)}}" method="POST">
                @csrf
                @method('PUT')
                <x-inputs.text label="Tiêu đề" name="title" :value="$location->title"></x-inputs.text>
                <x-inputs.text-area label="Mô tả" name="description"
                                    :value="$location->description"></x-inputs.text-area>

                <x-inputs.image-link label="Ảnh đại diện" name="thumbnail"
                                     :value="$location->thumbnail"></x-inputs.image-link>
                <x-inputs.number label="Giá" name="price" :value="$location->price"></x-inputs.number>

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
