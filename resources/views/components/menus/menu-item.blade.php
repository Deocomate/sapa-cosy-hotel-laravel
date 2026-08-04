<div class="nav-item menu-item-control">
    <a
        class="nav-link nav-link-control"
        href="#"
        data-bs-toggle="collapse"
        data-bs-target="#{{$icon}}"
        rol="button"
        aria-expanded="false"
        aria-controls="{{$icon}}"
    >
        <span class="material-symbols-outlined me-3">{{$icon}}</span> {{$name}}
    </a>
    <div class="collapse" id="{{$icon}}">
        <nav class="nav nav-pills">
            {{$slot}}
        </nav>
    </div>
</div>
