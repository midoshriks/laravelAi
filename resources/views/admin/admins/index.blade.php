@extends('layouts.dashboard.app')
{{-- <style>
    /* The switch - the box around the slider */
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    /* Hide default HTML checkbox */
    .switch .stauts {
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* The slider */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .stauts:checked+.slider {
        background-color: #2196F3;
    }

    .stauts:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    .stauts:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style> --}}


@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2 page-title">Data Table Admin</h2>
                    <p class="card-text"></p>
                    @if (auth()->user()->hasPermission('users_create'))
                        @include('admin.admins.create')
                    @endif
                    {{-- @dd($type) --}}
                    <div class="row my-4">
                        <!-- Small table -->
                        <div class="col-md-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <!-- table -->
                                    <table class="table datatables" id="dataTable-1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>avatar</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>email</th>
                                                <th>Gender</th>
                                                <th>Country</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($admins as $index => $admin)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>
                                                        <span class="avatar avatar-sm mt-2">
                                                            <img src="{{ $admin->getMedia('photo_user')->last()? $admin->getMedia('photo_user')->last()->getUrl('mobile'): $admin->photo_user }}"
                                                                alt="..." class="avatar-img rounded-circle">
                                                        </span>
                                                    <td>{{ $admin->name }}</td>
                                                    <td>{{ $admin->phone }}</td>
                                                    <td>{{ $admin->email }}</td>
                                                    <td>{{ $admin->gender }}</td>
                                                    <td>{{ $admin->country->name }}</td>
                                                    {{-- <td>{{ $admin->country_id }}</td> --}}
                                                    <td>{{ $admin->dob_date }}</td>
                                                    <td>
                                                        <input type="checkbox" id="toggle" checked />
                                                        <label class="switch" for="toggle"></label>
                                                        {{-- <!-- Rounded switch -->
                                                            <label class="switch">
                                                                <input class="stauts" type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label> --}}
                                                    </td>

                                                    <td>
                                                        <button class="btn btn-sm dropdown-toggle more-horizontal"
                                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <span class="text-muted sr-only">Action</span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item"
                                                                href="{{ route('dashboard.admins.edit', $admin->id) }}">Edit</a>
                                                            <a href="{{ route('dashboard.admins.destroy', $admin->id) }}"
                                                                class="dropdown-item text-danger"
                                                                data-confirm-delete="true">Remove</a>

                                                            {{-- <form
                                                                action="{{ route('dashboard.admins.destroy', $admin->id) }}"
                                                                method="POST" style="display: inline-block;">
                                                                {{ csrf_field() }}
                                                                {{ method_field('delete') }}

                                                                <button href="#" type="submit"
                                                                    class="dropdown-item text-danger">Remove</button>
                                                            </form> --}}

                                                            {{-- <a class="dropdown-item"
                                                                href="{{ route('dashboard.admins.edit', $admin->id) }}">Edit</a>
                                                            <a class="dropdown-item" href="#">Remove</a> --}}
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- simple table -->
                    </div> <!-- end section -->

                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main> <!-- main -->
@endsection
