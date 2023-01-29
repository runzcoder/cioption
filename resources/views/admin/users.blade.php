@extends('layouts.admin')

@section('content')
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-md-12 text-light alert alert-muted">
                <h1>REGISTERED USERS</h1>
                {{-- <button class="btn btn-primary text-light" style="float: right"
            data-bs-toggle="modal" data-bs-target="#add_payoption">
                <i class="bi bi-currency-dollar"></i>Add Pay Option</button> --}}
            </div><br><br>
            <div class="col-12" style="overflow-x:auto;">
                <table class="table-bordered w-100 text-light" style="overflow: scroll">
                    <thead>
                        <th>#</th>
                        <th>{{ ucfirst('Full name') }}</th>
                        <th>{{ ucfirst('username') }}</th>
                        <th>{{ ucfirst('email') }}</th>
                        {{-- <th>{{ucfirst("network")}}</th>
                    <th>{{ucfirst("type")}}</th>
                    <th>{{ucfirst("wallet_address")}}</th> --}}
                        <th>{{ ucfirst('Actions') }}</th>
                    </thead>
                    <tbody>
                        {{-- {{$pay_option}}
                    {{$currencies}} --}}
                        @if (count($users) == 0)
                            <tr>
                                <td colspan="8">No users</td>
                            </tr>
                        @else
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        {{-- <img width="20px" src="{{user->currency->image}}" alt=""> --}}
                                        <label for="scales">{{ $user->name }}</label>
                                    </td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    {{-- <td>{{$user->network}}</td>
                    <td>{{$user->type}}</td>
                    <td>{{$user->wallet_address}}</td> --}}
                                    <td>
                                        <div
                                            style="display: flex; flex-direction:row; justify-content: space-evenly; align-content: center;">

                                            <button data-bs-toggle="modal"
                                                data-bs-target="#delete_payoption{{ $loop->index }}"><i
                                                    class="text-danger bi  bi-archive-fill"></i>
                                            </button>
                                            {{-- <i class="text-success bi  bi-pencil"></i><br>
                        <i class=" text-primary bi  bi-check-circle-fill"></i>
                        <i class="text-info bi  bi-x"></i> --}}

                                            {{-- @include('admin.include.delete_payoption') --}}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                @if ($users->hasPages())
                <div class="pagination-wrapper">
                     {{ $users->links() }}
                </div>
            @endif
            </div>
        </div>
    </div>

@endsection
