@extends('placeholder')
@section('title', 'Add Project')
@section('content')

<section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Add Project</h3>

    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Project Information</h4>
                <!--<form class="form-horizontal style-form" method="get">-->
                    {!! Form::open(['url' => '/add-project', 'class' => 'form-horizontal style-form', 'method' => 'post', 'id' => 'mwbd_form', 'files'=>true]) !!}
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Project Title</label>
                        <div class="col-sm-10">
                            <input name="pjttl" type="text" id="pjttl" class="form-control round-form" placeholder="Project Title">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Project Description</label>
                        <div class="col-sm-10">
                            <textarea name="pjdtl" id="pjdtl" class="form-control" placeholder="Project Description"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Project Image</label>
                        <div class="col-sm-10">
                            <!--{!!Form::file('pjimg', ['id'=>'pjimg'])!!}-->
                            <label class="btn btn-facebook btn-file">
                                Choose Project Image <input name="pjimg" id="pjimg" type="file" style="display: none;">
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input type="submit" name="smtaddpjt" value="Add Project" class="btn btn-theme" />
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div><!-- col-lg-12-->      	
    </div><!-- /row -->
</section><!--/wrapper -->

@endsection