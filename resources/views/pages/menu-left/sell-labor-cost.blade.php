@extends('placeholder')
@section('title', 'Sell Labor Cost')
@section('content')

<section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Sell Labor Cost</h3>
    <hr />
    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Cost Information</h4>
                <div class="alert alert-success print-success-msg text-center" style="display: none;"></div>
                {!! Form::open(['url' => '/sell-labor-cost', 'class' => 'form-horizontal style-form', 'method' => 'post', 'id' => 'wbd_form']) !!}
                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Selected Project</label>
                    <div class="col-sm-9">
                        <span class="label label-default" style="font-size: 19px;">{{$pjName}}</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Dumping Labor</label>
                    <div class="col-sm-9">
                        <div id="dmplbr">
                            <div class="input-group">
                                <span class="input-group-addon">Tk.</span>
                                <input name="dmplbr" type="text" id="dmplbr" class="form-control" placeholder="Dumping Labor">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Unloading Labor</label>
                    <div class="col-sm-9">
                        <div id="uldlbr">
                            <div class="input-group">
                                <span class="input-group-addon">Tk.</span>
                                <input name="uldlbr" type="text" id="uldlbr" class="form-control" placeholder="Unloading Labor">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Extra Labor</label>
                    <div class="col-sm-9">
                        <div id="extlbr">
                            <div class="input-group">
                                <span class="input-group-addon">Tk.</span>
                                <input name="extlbr" type="text" id="extlbr" class="form-control" placeholder="Extra Labor">
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
                        <input name="cstdt" type="date" id="cstdt" class="form-control" placeholder="Cost Date" style="padding-top: 1px;">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <input type="submit" name="wbdsmt" value="Add Product" class="btn btn-theme" />
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div><!-- col-lg-12-->      	
    </div><!-- /row -->
</section><!--/wrapper -->

@endsection