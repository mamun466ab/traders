@extends('placeholder')
@section('title', 'Unloading Machin Report')
@section('content')

<section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Unloading Machin Report</h3>
    <hr />
    <div class="container-fluid">
    {!! Form::open(['url' => '/unloading-machin-report', 'class' => 'style-form', 'method' => 'post', 'id' => 'gwbd_form']) !!}
    <div class="col-md-8">
        <input type="text" name="datepicker" id="datepicker" class="col-md-8" placeholder="Click here for calander." required="required" style="height: 35px; border: 1px solid #ccc; border-radius: 5px;">
        <input type="submit" name="wbdsmt" value="Submit" class="btn btn-theme" />
    </div>
    {!! Form::close() !!}
    </div>
   
    
    <div class="row mt">
        <div class="col-lg-12">
            <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i>Boat Report<span class="pull-right" style="padding-right: 5px;">Date : {{$date }}</span></h4>
                <section id="unseen">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th>Ser No</th>
                                <th>Diesel Amount</th>
                                <th>Price</th>
                                <th>Charge</th>
                                <th>parts</th>
                                <th>Detail</th>
                                <th>Date</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach($uldMcnRprt as $Rprt)
                            <tr>
                                <td>{{$i}}</td>
                                <td class="numeric">{{$Rprt->dsl_mnt}}</td>
                                <td class="numeric">{{($Rprt->dsl_mnt*$Rprt->dsl)}}</td>
                                <td class="numeric">{{$Rprt->crg}}</td>
                                <td class="numeric">{{$Rprt->pts}}</td>
                                <td>{{$Rprt->cstdtl}}</td>
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