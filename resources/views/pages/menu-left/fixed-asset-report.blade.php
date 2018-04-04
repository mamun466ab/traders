@extends('placeholder')
@section('title', 'Fixed Asset Report')
@section('content')

<section class="wrapper">
    <h3><i class="fa fa-angle-right"></i>Fixed Asset Report</h3>
    <hr />
    
    <div class="row mt">
        <div class="col-lg-12">
            <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i>Fixed Asset Report</h4>
                <section id="unseen">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead align="center">
                            <tr>
                                <th>Ser No</th>
                                <th>Asset</th>
                                <th>Asset Price (Tk.)</th>
                                <th>Detail</th>
                                <th>Date</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach($fxdAst as $astRprt)
                            <tr>
                                <td align="center">{{$i.'.'}}</td>
                                <td>{{$astRprt->fxdastnm}}</td>
                                <td class="numeric" align='right'>{{number_format($astRprt->astprc, 2)}}</td>
                                <td>{{$astRprt->astdtl}}</td>
                                <td>{{$astRprt->created_at}}</td>
                                <td></td>
                            </tr>
                            <?php $i++; ?>
                            @endforeach
                            <tr>
                                <td colspan="2" align="center">Total</td>
                                <td align="right">{{number_format($ttlPrc->ttlprc, 2)}}</td>
                                <td colspan="2"></td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div><!-- /content-panel -->
        </div><!-- /col-lg-4 -->			
    </div><!-- /row -->

</section><! --/wrapper -->

@endsection