{{--admin.modules.services.edit--}}
@extends("admin.layouts.main")
@section("title","Sửa dịch vụ")
@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Sửa dịch vụ</h3>
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
            <form action="{{route('admin.services.update',$service->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-inputs.text label="Tiêu đề" name="title" :value="$service->title"></x-inputs.text>

                <x-inputs.image-link label="Ảnh đại diện" name="thumbnail"
                                     :value="$service->thumbnail"></x-inputs.image-link>

                <x-inputs.text label="Loại dịch vụ" name="type" :value="$service->type"></x-inputs.text>

                <x-inputs.number label="Giá dịch vụ" name="price" :value="$service->price"></x-inputs.number>

                <x-inputs.text-area label="Mô tả" name="description"
                                    :value="$service->description"></x-inputs.text-area>

                <x-inputs.editor label="Chi tiết" name="details" :value="$service->details"></x-inputs.editor>

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
