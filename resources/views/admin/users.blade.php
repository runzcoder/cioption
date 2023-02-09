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
                <form action="{{route("admin.search_users")}}" method="post">
                    @csrf
                    <div class="row bg-primary alert alert-primary">
                        <div class="col-8 ">
                            <input type="text" class="w-100 p-2" name="search_text" placeholder="Enter name, username or email">
                        </div>
                      <div class="col-4">  <input class="w-100 btn btn-primary" type="submit" value="Search"></div>
                    </div>
                </form>
                <table class="table-bordered w-100 text-light" style="overflow: scroll">
                    <thead>
                        <th>#</th>
                        <th>{{ ucfirst('Full name') }}</th>
                        <th>{{ ucfirst('username') }}</th>
                        <th>{{ ucfirst('email') }}</th>
                        <th>{{ucfirst("level")}}</th>
                        <th>{{ucfirst("balance")}}</th>
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
                                    <td>{{$user->level}}</td>
                                    <td>${{$user->balance}}</td>
                                    <td>
                                        <div
                                            style="display: flex; flex-direction:row; justify-content: space-evenly; align-content: center;">

                                            <button data-bs-toggle="modal"
                                                data-bs-target="#change_role{{ $loop->index }}"><i
                                                    class="text-danger bi  bi-pencil-fill"></i>
                                            </button>
                                            <button data-bs-toggle="modal"
                                            data-bs-target="#add_balance{{ $loop->index }}"><i
                                                class="text-danger bi  bi-currency-dollar"></i>
                                        </button>
                                           
                                        </div>
                                    </td>
                                </tr>
                                <tr><td colspan="5">
                                @include("admin.include.change_role")   
                                </td></tr>
                            
                                <tr><td colspan="5">
                                    @include("admin.include.add_balance")    
                                </td></tr>
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
