@extends("admin.layouts.main")
@section("title","Đổi mật khẩu")
@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Đổi mật khẩu</h3>
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
            <form action="{{route('admin.updatePassword')}}" method="POST">
                @csrf
                <x-inputs.text label="Mật khẩu cũ" name="password_old"
                               value=""></x-inputs.text>
                <x-inputs.text label="Mật khẩu mới" name="password_new"
                               value=""></x-inputs.text>
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
