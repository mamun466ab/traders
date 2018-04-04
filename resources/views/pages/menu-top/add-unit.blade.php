@extends('placeholder')
@section('title', 'Add Unit')
@section('content')

<section class="wrapper">
    <h3><i class="fa fa-angle-right"></i>Add Boat</h3>
    <hr />
    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Unit</h4>
                <div class="alert alert-success print-success-msg text-center" style="display: none;"></div>
                {!! Form::open(['url' => '/add-unit', 'class' => 'form-horizontal style-form', 'method' => 'post', 'id' => 'wbd_form']) !!}

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Unit</label>
                    <div class="col-sm-9">
                        <input name="unt" type="text" id="unt" class="form-control" placeholder="Add Unit.">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <input type="submit" name="wbdsmt" value="Submit" class="btn btn-theme" />
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div><!-- col-lg-12-->      	
    </div><!-- /row -->
</section><!--/wrapper -->

@endsection