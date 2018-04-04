@extends('placeholder')
@section('title', 'All Product')
@section('content')

<h3><i class="fa fa-angle-right"></i>
    All Product 
    @if(Session::get('spjInfo'))
    <span style="padding: 2px 7px; border-radius: 3px; background: #666; color: #FFF;">
    {{Session::get('spjInfo')->pjttl}}
    </span>
    @endif
</h3>
<hr>

@if(session('pjError'))
<div class="alert alert-danger">
    {{session('pjError')}}
</div>
@endif
<div class="row">
    <div class="col-md-3">
        <h4 class="centered">Shunamganj Project</h4>
        <div class="thumbnail">
            
                <a href="{{URL::to('/project/1')}}"><img src="storage/app/images/project-image1521811900.png" alt="Lights" style="width:100%; height: 200px;" /></a>
        </div>
    </div>
    
    <div class="col-md-3">
        <h4 class="centered">Project 2</h4>
        <div class="thumbnail">
                <a href="" disabled><img src="storage/app/images/project-2.jpeg" alt="Lights" style="width:100%; height: 200px;" /></a>
        </div>
    </div>
</div>
@endsection