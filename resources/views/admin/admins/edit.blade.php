@extends('layouts.dashboard.app')

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-10">
                    <form action="{{ route('dashboard.admins.update', $admin->id) }}" method="POST"
                        enctype="multipart/form-data" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="row align-items-center my-4">
                            <div class="col">
                                <h2 class="h3 mb-0 page-title">Edit Admin</h2>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">Save Change</button>
                            </div>
                        </div>
                        <hr class="my-4">

                        {{-- ID Insert type  --}}
                        <input type="text" value="{{ $type->id }}" hidden>
                        <h5 class="mb-2 mt-4">Personal</h5>
                        <p class="mb-4">Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus</p>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstname">Firstname</label>
                                <input type="text" id="firstname" class="form-control" name="name"
                                    value="{{ $admin->name }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname">Lastname</label>
                                <input type="text" id="lastname" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" name="email"
                                    value="{{ $admin->email }}" disabled>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPhone">Phone</label>
                                <input type="text" class="form-control" id="inputPhone" name="phone"
                                    value="{{ $admin->phone }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="custom-placeholder">Date of Birth</label>
                                <input class="form-control input-placeholder" id="" type="text"
                                    value="{{ date('Y-m-d', strtotime($admin->dob_date)) }}" name="dob_date">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState5">Gender</label>
                                <select id="inputState5" class="form-control" name="gender">
                                    <option value="">{{ display('chooes') }}</option>
                                    <option {{ $admin->gender == $admin->gender ? 'selected' : '' }}
                                        value="{{ $admin->gender }}">{{ $admin->gender }}</option>
                                    <option value="male">{{ display('male') }}</option>
                                    <option value="famle">{{ display('famle') }}</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputLang">Language</label>
                                <select id="inputLang" class="form-control">
                                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            <option value="en">{{ $properties['native'] }}</option>
                                        </a>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="custom-placeholder">image</label>
                                @include('admin.admins.tabs_edit')
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="custom-placeholder">image</label>
                                @include('admin.admins.dropzone')
                            </div>
                        </div>

                        <hr class="my-4">
                    </form>
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->

    </main> <!-- main -->
@endsection
