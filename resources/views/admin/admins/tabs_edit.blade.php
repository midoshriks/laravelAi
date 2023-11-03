@php
    $models = ['users', 'profile'];
    $maps = ['create', 'read', 'update', 'delete'];
@endphp
<div class="col-lg mb-4">
    <div class="card shadow">
        <div class="card-body">
            <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                @foreach ($models as $index => $model)
                    <li class="nav-item">
                        <a class="nav-link {{ $index == 0 ? 'active' : '' }}" id="pills-{{ $model }}-tab"
                            data-toggle="pill" href="#pills-{{ $model }}" role="tab"
                            aria-controls="pills-{{ $model }}" aria-selected="true">{{ $model }}</a>
                    </li>
                @endforeach
            </ul>

            <div class="tab-content mb-1" id="pills-tabContent">
                @foreach ($models as $index => $model)
                    <div class="tab-pane fade show {{ $index == 0 ? 'active' : '' }} text-center"
                        id="pills-{{ $model }}" role="tabpanel" aria-labelledby="pills-{{ $model }}-tab">
                        @foreach ($maps as $map)
                            <label style="margin-right: 30px;">
                                <input type="checkbox" name="permissions[]"
                                    {{ $admin->hasPermission($model . '_' . $map) ? 'checked' : '' }}
                                    value="{{ $model . '_' . $map }}" id="{{ $model . ' ' . $map }}">
                                {{ $model . ' ' . $map }}
                            </label>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
