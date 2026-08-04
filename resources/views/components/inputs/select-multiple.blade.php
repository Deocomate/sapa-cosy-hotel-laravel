<div class="mb-3">
    <label for="input-{{$name}}" class="form-label">{{$label}}</label>
    <select name="{{$name}}[]" id="input-{{$name}}" class="form-select form-control select-2"
            required multiple>
        {{$slot}}
    </select>
</div>

@push('scripts')
    <script>
        $(document).ready(function () {
            $('#input-{{$name}}').select2({
                theme: "bootstrap-5"
            });
        });
    </script>
@endpush
