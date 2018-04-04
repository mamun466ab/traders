@extends('placeholder')
@section('title', 'Boat Report')
@section('content')

<section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Boat Report</h3>
    <hr />
    <div class="container-fluid">
    {!! Form::open(['url' => '/boat-report', 'class' => 'style-form', 'method' => 'post', 'id' => 'gwbd_form']) !!}
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
                                <th>Boat</th>
                                <th>Diesel (Ltr.)</th>
                                <th>Price/Ltr (Tk.)</th>
                                <th>Total Price (Tk.)</th>
                                <th>Charge (Tk.)</th>
                                <th>Parts (Tk.)</th>
                                <th>Detail</th>
                                <th>Date</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach($boatRprt as $botRprt)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$botRprt->botnm}}</td>
                                <td class="numeric" align='right'>{{number_format($botRprt->dsl_mnt, 2)}}</td>
                                <td class="numeric" align='right'>{{number_format($botRprt->dsl_prc/$botRprt->dsl_mnt, 2)}}</td>
                                <td class="numeric" align='right'>{{number_format(($botRprt->dsl_prc), 2)}}</td>
                                <td class="numeric" align='right'>{{number_format($botRprt->mntcrg, 2)}}</td>
                                <td class="numeric" align='right'>{{number_format($botRprt->pts, 2)}}</td>
                                <td>{{$botRprt->cstdtl}}</td>
                                <td>{{$botRprt->created_at}}</td>
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