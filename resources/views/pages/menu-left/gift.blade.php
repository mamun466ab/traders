@extends('placeholder')
@section('title', 'Gift')
@section('content')

<section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Gift</h3>
    <hr />
    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Gift Information</h4>
                <div class="alert alert-success print-success-msg text-center" style="display: none;"></div>
                {!! Form::open(['url' => '/gift', 'class' => 'form-horizontal style-form', 'method' => 'post', 'id' => 'wbd_form']) !!}
                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Selected Project</label>
                    <div class="col-sm-9">
                        <span class="label label-default" style="font-size: 19px;">{{$pjName}}</span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Gift To</label>
                    <div class="col-sm-9">
                        <select name="gfttoid" id="gfttoid" class="form-control">
                            <option value="">Select Product</option>
                            @foreach($gftnm as $gft)
                            <option value="{{$gft->id}}">{{$gft->gftto}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Amount</label>
                    <div class="col-sm-9">
                        <div id="gftmnt">
                            <div class="input-group">
                                <span class="input-group-addon">Tk.</span>
                                <input name="gftmnt" type="text" id="gftmnt" class="form-control" placeholder="Amount of gift.">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Gift Description (Optional)</label>
                    <div class="col-sm-9">
                        <textarea name="gftdtl" id="gftdtl" class="form-control" placeholder="Gift Description (Optional)"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Gift Date</label>
                    <div class="col-sm-9">
                        <input name="gftdt" type="date" id="gftdt" class="form-control" placeholder="Product Price" style="padding-top: 1px;">
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