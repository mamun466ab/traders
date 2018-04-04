@extends('placeholder')
@section('title', 'Unloading Machin')
@section('content')

<section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Unloading Machin</h3>
    <hr />
    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Unloading Cost Information</h4>
                <div class="alert alert-success print-success-msg text-center" style="display: none;"></div>
                {!! Form::open(['url' => '/unloading-machin', 'class' => 'form-horizontal style-form', 'method' => 'post', 'id' => 'wbd_form']) !!}
                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Selected Project</label>
                    <div class="col-sm-9">
                        <span class="label label-default" style="font-size: 19px;">{{$pjName}}</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Diesel Amount</label>
                    <div class="col-sm-9">
                        <div id="dslmnt">
                            <div class="input-group">
                                <span class="input-group-addon">Ltr.</span>
                                <input name="dslmnt" type="text" id="dslmnt" class="form-control" placeholder="Total Amount.">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Price per Liter</label>
                    <div class="col-sm-9">
                        <div id="dsl">
                            <div class="input-group">
                                <span class="input-group-addon">Tk.</span>
                                <input name="dsl" type="text" id="dsl" class="form-control" placeholder="Price per Liter.">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Maintenance Charge</label>
                    <div class="col-sm-9">
                        <div id="crg">
                            <div class="input-group">
                                <span class="input-group-addon">Tk.</span>
                                <input name="crg" type="text" id="crg" class="form-control" placeholder="unloading machin Maintenance Charge.">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Parts Total Price</label>
                    <div class="col-sm-9">
                        <div id="pts">
                            <div class="input-group">
                                <span class="input-group-addon">Tk.</span>
                                <input name="pts" type="text" id="pts" class="form-control" placeholder="Parts for unloading machin.">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Cost Description (Optional)</label>
                    <div class="col-sm-9">
                        <textarea name="cstdtl" id="cstdtl" class="form-control" placeholder="Cost Description (Optional)"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Cost Date</label>
                    <div class="col-sm-9">
                        <input name="cstdt" type="date" id="cstdt" class="form-control" placeholder="Product Price" style="padding-top: 1px;">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <input type="submit" name="wbdsmt" value="Cost Submit" class="btn btn-theme" />
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div><!-- col-lg-12-->      	
    </div><!-- /row -->
</section><!--/wrapper -->

@endsection