@extends('placeholder')
@section('title', 'Others Cost')
@section('content')

<section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Others Cost</h3>
    <hr />
    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Cost Information</h4>
                <div class="alert alert-success print-success-msg text-center" style="display: none;"></div>
                {!! Form::open(['url' => '/bank-in-out', 'class' => 'form-horizontal style-form', 'method' => 'post', 'id' => 'wbd_form']) !!}
                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Selected Project</label>
                    <div class="col-sm-9">
                        <span class="label label-default" style="font-size: 19px;">{{$pjName}}</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Cash In/Out</label>
                    <div class="col-sm-9">
                        <select name="cshinout" id="cshinout" class="form-control">
                            <option value="">Select Cash In/Out</option>
                            <option value="in">Cash In</option>
                            <option value="out">Cash Out</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Cash Amount</label>
                    <div class="col-sm-9">
                        <div id="cshamnt">
                            <div class="input-group">
                                <span class="input-group-addon">Tk.</span>
                                <input name="cshamnt" type="text" id="cshamnt" class="form-control" placeholder="Amount">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Description (Optional)</label>
                    <div class="col-sm-9">
                        <textarea name="cshdtl" id="cshdtl" class="form-control" placeholder="Description (Optional)"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">In/Out Date</label>
                    <div class="col-sm-9">
                        <input name="datepicker" type="text" id="datepicker" class="form-control" placeholder="YY-mm-dd"">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <input type="submit" name="wbdsmt" value="Add Cost Info" class="btn btn-theme" />
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div><!-- col-lg-12-->      	
    </div><!-- /row -->
</section><!--/wrapper -->

@endsection