@if(count($errors) > 0 )
<div class="container">
    <div class="row">
        <div class="col-12 alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endif

@if(Session::has("failed"))
<div class="container">
    <div class="row">
        <div class="col-12 alert alert-danger">
            {{Session("failed")}}
        </div>
    </div>
</div>
@endif

@if(Session::has("success"))
<div class="container">
    <div class="row">
        <div class="col-12 alert alert-success">
            {{Session("success")}}
        </div>
    </div>
</div>
@endif

