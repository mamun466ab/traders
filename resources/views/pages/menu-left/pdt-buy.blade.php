@extends('placeholder')
@section('title', 'Buy Product')
@section('content')

<section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Buy Product</h3>
    <hr />
    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Product Information</h4>
                <div class="alert alert-success print-success-msg text-center" style="display: none;"></div>
                {!! Form::open(['url' => '/buy-product', 'class' => 'form-horizontal style-form', 'method' => 'post', 'id' => 'wbd_form']) !!}
                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Selected Project</label>
                    <div class="col-sm-9">
                        <span class="label label-default" style="font-size: 19px;">{{$pjName}}</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Product Name</label>
                    <div class="col-sm-9">
                        <select name="pdtnm" id="pdtnm" class="form-control">
                            <option value="">Select Product</option>
                            @foreach($wbdPdt as $pdt)
                            <option value="{{$pdt->id}}">{{$pdt->pdt_nm}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Product Amount</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-addon">Tk.</span>
                            <input name="pdtamnt" type="text" id="pdtamnt" class="form-control" placeholder="Product Amount">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Product Unit</label>
                    <div class="col-sm-9">
                        <select name="pdtunt" id="pdtunt" class="form-control">
                            <option value="">Select Product Unit</option>
                            @foreach($wbdUnt as $unt)
                            <option value="{{$unt->id}}">{{$unt->unt_nm}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Total Price</label>
                    <div class="col-sm-9">
                        <input name="ttlprc" type="text" id="ttlprc" class="form-control" placeholder="Total Price">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Vat</label>
                    <div class="col-sm-9">
                        <input name="vat" type="text" id="vat" class="form-control" placeholder="Vat">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Tax</label>
                    <div class="col-sm-9">
                        <input name="tax" type="text" id="tax" class="form-control" placeholder="Tax">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">River Toll</label>
                    <div class="col-sm-9">
                        <input name="rvrtol" type="text" id="rvrtol" class="form-control" placeholder="River Toll">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Donation</label>
                    <div class="col-sm-9">
                        <input name="dnt" type="text" id="dnt" class="form-control" placeholder="Donation">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Product Description (Optional)</label>
                    <div class="col-sm-9">
                        <textarea name="pdtdtl" id="pdtdtl" class="form-control" placeholder="Product Description"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Purchase Date</label>
                    <div class="col-sm-9">
                        <input name="pdtdt" type="date" id="pdtdt" class="form-control" placeholder="Product Price" style="padding-top: 1px;">
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