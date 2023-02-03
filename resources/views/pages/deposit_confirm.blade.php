@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-content">
                <div class="page-title">
                    <div class="row justify-content-between align-items-center">
                        <div class="mb-3 col-md-6 mb-md-0">
                            <h5 class="mb-0 text-white h3 font-weight-400">Finish your funding</h5>
                        </div>
                    </div>
                </div>
                <div>
                </div>
                <div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div  class="card-body" id="deposit_confirm">                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
  <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
  <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>

    <script src='{{ asset('react_components/DepositConfirm.jsx') }}' type="text/babel"></script>
@endsection
