@extends('placeholder')
@section('title', 'Fixed Asset')
@section('content')

<section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Fixed Asset</h3>
    <hr />
    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Fixed Asset Info</h4>
                <div class="alert alert-success print-success-msg text-center" style="display: none;"></div>
                {!! Form::open(['url' => '/fixed-asset', 'class' => 'form-horizontal style-form', 'method' => 'post', 'id' => 'wbd_form']) !!}
                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Selected Project</label>
                    <div class="col-sm-9">
                        <span class="label label-default" style="font-size: 19px;">{{$pjName}}</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Asset Title</label>
                    <div class="col-sm-9">
                        <select name="asstid" id="asstid" class="form-control">
                            <option value="">Select Cost Title</option>
                            @foreach($fxdTtl as $ttl)
                            <option value="{{$ttl->id}}">
                                {{$ttl->fxdastnm}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Asset Price</label>
                    <div class="col-sm-9">
                        <div id="astprc">
                            <div class="input-group">
                                <span class="input-group-addon">Tk.</span>
                                <input name="astprc" type="text" id="astprc" class="form-control" placeholder="Asset Price">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Asset Description (Optional)</label>
                    <div class="col-sm-9">
                        <textarea name="astdtl" id="astdtl" class="form-control" placeholder="Asset Description (Optional)"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Asset Date</label>
                    <div class="col-sm-9">
                        <input name="astdt" type="date" id="astdt" class="form-control" style="padding-top: 1px;">
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