@extends('placeholder')
@section('title', 'Boat Report')
@section('content')

<section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Boat Report</h3>
    <hr />
    <div class="container-fluid">
    {!! Form::open(['url' => '/bank-report', 'class' => 'style-form', 'method' => 'post', 'id' => 'gwbd_form']) !!}
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
                                <th>Status</th>
                                <th>Bank In (Tk.)</th>
                                <th>Bank Out (Tk.)</th>
                                <th>Bank Cash (Tk.)</th>
                                <th>Detail</th>
                                <th>Date</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach($bnkRpt as $rprt)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$rprt->inout}}</td>
                                <td class="numeric" align='right'>{{number_format($rprt->in, 2)}}</td>
                                <td class="numeric" align='right'>{{number_format($rprt->out, 2)}}</td>
                                <td class="numeric" align='right'>{{number_format(($rprt->csh), 2)}}</td>
                                <td>{{$rprt->dtl}}</td>
                                <td>{{$rprt->created_at}}</td>
                                <td></td>
                            </tr>
                            <?php $i++; ?>
                            @endforeach
                            <tr style="font-weight: bold;">
                                <td colspan="2" align='center'>Total</td>
                                <td align='right'></td>
                                <td align='right'></td>
                                <td align='right'></td>
                                <td colspan="3"></td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div><!-- /content-panel -->
        </div><!-- /col-lg-4 -->			
    </div><!-- /row -->

</section><! --/wrapper -->

@endsection