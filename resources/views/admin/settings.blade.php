@extends('layouts.admin')

@section('content')
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-md-12 text-light alert alert-muted">
                <h1>App Settings</h1>
                <button class="btn btn-primary text-light" style="float: right" data-bs-toggle="modal"
                    data-bs-target="#add_settings">Add Settings</button>
            </div><br><br>
            @if (count($_settings) <= 0)
                <div class="alert alert-info p-5">No Settings</div>
            @else
                <div class="container-fluid bg-light">
                     <table class="table-bordered w-100">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Value</th>
                                <th>Action</th>
                            </tr>
                    @foreach ($_settings as $setting)
                       
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $setting->name }}</td>
                                <td>{{ $setting->value }}</td>
                                <td>  <button data-bs-toggle="modal" data-bs-target="#edit_settings{{ $loop->index }}"
                                    class="btn btn-warning">Edit</button>

                                <button data-bs-toggle="modal" data-bs-target="#delete_settings{{ $loop->index }}"
                                    class="btn btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    @include("admin.include.edit_settings")
                                </td>
                                <td colspan="2">
                                    @include("admin.include.delete_settings")
                                </td>
                            </tr>
                      
                    @endforeach
                  </table>
                </div>

        </div>
        @endif
    </div>
    </div>
    @include('admin.include.add_settings')
@endsection
