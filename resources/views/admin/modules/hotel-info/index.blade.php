@extends("admin.layouts.main")
@section("title","Thông tin Khách sạn")
@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Thông tin Khách sạn</h3>
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
            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            <form action="{{route('admin.hotel-info.update',$hotelInfo->id)}}" method="POST">
                @method('PUT')
                @csrf
                <x-inputs.text label="Tên Khách sạn" name="name" :value="$hotelInfo->name"></x-inputs.text>
                <x-inputs.text label="Tiêu đề" name="title" :value="$hotelInfo->title"></x-inputs.text>
                <x-inputs.text-area label="Mô tả" name="description"
                                    :value="$hotelInfo->description"></x-inputs.text-area>
                <x-inputs.text label="Link Video" name="video_link" :value="$hotelInfo->video_link"></x-inputs.text>
                <x-inputs.text-area label="Thực đơn" name="food_menu"
                                    :value="$hotelInfo->food_menu"></x-inputs.text-area>
                <x-inputs.text label="Địa chỉ" name="address" :value="$hotelInfo->address"></x-inputs.text>
                <x-inputs.text label="Email liên hệ" name="contact_email"
                               :value="$hotelInfo->contact_email"></x-inputs.text>
                <x-inputs.text label="Số điện thoại liên hệ" name="contact_phone"
                               :value="$hotelInfo->contact_phone"></x-inputs.text>
                <x-inputs.text label="Hotline liên hệ" name="contact_hotline"
                               :value="$hotelInfo->contact_hotline"></x-inputs.text>
                <x-inputs.text label="Link Facebook" name="facebook_link"
                               :value="$hotelInfo->facebook_link"></x-inputs.text>
                <x-inputs.text label="Link Zalo" name="zalo_link" :value="$hotelInfo->zalo_link"></x-inputs.text>
                <x-inputs.text label="Link Map" name="map_link" :value="$hotelInfo->map_link"></x-inputs.text>

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
