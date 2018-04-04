@extends('sadmin-master')
@section('title', 'Super Admin | Home')
@section('content')


<h3><i class="fa fa-angle-right"></i> Add Organization</h3>
<hr />


            <div class="alert alert-success print-success-msg text-center" style="display: none;"></div>
            <!--<form class="form-horizontal style-form" method="get">-->
            {!! Form::open(['url' => '/add-company', 'class' => 'form-horizontal style-form', 'method' => 'post', 'id' => 'wbd_form']) !!}
            <h4 class="text-center"><u>Managing Director Information</u></h4>
            <div class="form-group">
                {!! Form::label('md_nm', 'M.D. Name*',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('md_nm', null, ['class' => 'form-control', 'placeholder' => 'Managing Director Name', 'id' => 'md_nm'])!!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('adn_eml', 'M.D. Email*',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('adn_eml', null, ['class' => 'form-control', 'placeholder' => 'Admin Email'])!!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('adn_usr', 'M.D. Username*',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('adn_usr', null, ['class' => 'form-control', 'placeholder' => 'Admin Username'])!!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('adn_psd', 'M.D. Password*',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('adn_psd', str_random('8'), ['class' => 'form-control'])!!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('adn_adrs', 'M.D. Address*',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::textarea('adn_adrs', null, ['class' => 'form-control fixed-textarea', 'placeholder'=>'Admin Address', 'rows'=>'3']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('adn_cnt', 'M.D. Country*',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    <select name="adn_cnt" class="form-control" id="adn_cnt" onchange="ajaxGET('adn_dvn','{{URL::to('/division/')}}/'+this.value)">
                        @foreach($country as $key => $cnty)
                        <option value="{{$key}}">{{$cnty}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('adn_dvn', 'M.D. Division/state*',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    <select name="adn_dvn" class="form-control" id="adn_dvn" onchange="ajaxGET('adn_cty','{{URL::to('/city/')}}/'+this.value)">
                        <option value="">Select Country First</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('adn_cty', 'M.D. City*',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    <select name="adn_cty" class="form-control" id="adn_cty">
                        <option value="">Select Division/state First</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('adn_rnk', 'Act as*',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    <select name="adn_rnk" id="adn_rnk" class="form-control">
                        <option value="">Select Rank</option>
                        <option value="Head Teacher">Managing Director</option>
                        <option value="Assistant Head Teacher">Manager</option>
                        <option value="Assistant Teacher">Admin</option>
                        <option value="Teacher">Accountant</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                {!! Form::label('act_as', 'Act as*',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('act_as', 'Admin', ['class' => 'form-control'])!!}
                </div>
            </div>

            <h4 class="text-center"><u>Company Information</u></h4>
            <!--
            *
            *Company information
            *
            -->

            <div class="form-group">
                {!! Form::label('org_name', 'Company Name*',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('org_name', null, ['class' => 'form-control', 'placeholder' => 'Company Name'])!!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('org_code', 'Company Code*',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('org_code', null, ['class' => 'form-control', 'placeholder' => 'Company Code'])!!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('org_psd', 'Company Password*',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('org_psd', str_random('8'), ['class' => 'form-control'])!!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('org_email', 'Company Email*',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('org_email', null, ['class' => 'form-control', 'placeholder' => 'Company Email'])!!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('org_adrs', 'Company Address*',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::textarea('org_adrs', null, ['class' => 'form-control fixed-textarea', 'placeholder'=>'Company Address', 'rows'=>'3', 'cols'=>'']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('org_cnt', 'Company Country*',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    <select name="org_cnt" class="form-control" id="org_cnt" onchange="ajaxGET('org_dvn','{{URL::to('/division/')}}/'+this.value)">
                        @foreach($country as $key => $cnty)
                        <option value="{{$key}}">{{$cnty}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('org_dvn', 'Company Division/state*',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    <select name="org_dvn" class="form-control" id="org_dvn" onchange="ajaxGET('org_cty','{{URL::to('/city/')}}/'+this.value)">
                        <option value="">Select Country First</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('org_cty', 'Company City*',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    <select name="org_cty" class="form-control" id="org_cty">
                        <option value="">Select Division First</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('org_jdt', 'Join Date*',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('org_jdt', null, ['class' => 'form-control', 'placeholder' => 'Company Join Date'])!!}
                </div>
            </div>
            
            <div class="form-group">
                {!! Form::label('exp_dt', 'Expire Date*',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('exp_dt', null, ['class' => 'form-control', 'placeholder' => 'Company Expire Date'])!!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    {!! Form::submit('Add Organization', ['class'=>'btn btn-theme', 'name'=>'smtaddorg', 'id'=>'smtaddorg'])!!}
                </div>
            </div>

            {!! Form::close() !!}


<script type="text/javascript">
    function ajaxGET(div, url, data) {
        var xmlhttp;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.onreadystatechange = function () {
            $('#' + div).html("").css('color', '#000');
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                $('#' + div).append(xmlhttp.responseText);
//                document.getElementById(div).innerHTML = xmlhttp.responseText;
            } else {
                if (div == 'adn_dvn') {
                    document.getElementById(div).innerHTML = '<option value="">Select Country First</option>';
                    $('#' + div).css('color', 'red');
                }else if(div == 'adn_cty'){
                    document.getElementById(div).innerHTML = '<option value="">Select Division/State First</option>';
                    $('#' + div).css('color', 'red');
                }else if(div == 'org_cty'){
                    document.getElementById(div).innerHTML = '<option value="">Select Division/State First</option>';
                    $('#' + div).css('color', 'red');
                }
            }
        };
        xmlhttp.open("GET", url, true);
        xmlhttp.send(data);
    }
</script>
@endsection()