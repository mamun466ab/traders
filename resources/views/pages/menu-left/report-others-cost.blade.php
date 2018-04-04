@extends('placeholder')
@section('title', 'Others Cost Report')
@section('content')

<section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Others Cost Report</h3>
    <hr />
    <div class="container-fluid">
    {!! Form::open(['url' => '/others-cost-report', 'class' => 'style-form', 'method' => 'post', 'id' => 'gwbd_form']) !!}
    <div class="col-md-8">
        <input type="text" name="datepicker" id="datepicker" class="col-md-4" placeholder="Click here for calander." required="required" style="height: 35px; border: 1px solid #ccc; border-radius: 5px;">
        <select name="cstNm" required="required" class="col-md-4" style="height: 35px; border: 1px solid #ccc; border-radius: 5px;">
            <option value="">Select Cost</option>
            @foreach($cstNm as $nm)
            <option value="{{$nm->id}}">{{$nm->orscstnm}}</option>
            @endforeach
        </select>
        <input type="submit" name="wbdsmt" value="Submit" class="btn btn-theme" />
    </div>
    {!! Form::close() !!}
    </div>
   
    
    <div class="row mt">
        <div class="col-lg-12">
            <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i>Others Cost Report<span class="pull-right" style="padding-right: 5px;">Date : {{$date }}</span></h4>
                <section id="unseen">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th>Ser No</th>
                                <th>Cost</th>
                                <th>Cost Amount</th>
                                <th>Detail</th>
                                <th>Date</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach($orsCst as $Rprt)
                            <tr>
                                <td>{{$i}}</td>
                                <td class="numeric">{{$Rprt->orscstnm}}</td>
                                <td class="numeric">{{$Rprt->cst_mnt}}</td>
                                <td>{{$Rprt->cst_dtl}}</td>
                                <td>{{$Rprt->created_at}}</td>
                                <td></td>
                            </tr>
                            <?php $i++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </section>
            </div><!-- /content-panel -->
        </div><!-- /col-lg-4 -->			
    </div><!-- /row -->

</section><! --/wrapper -->

@endsection