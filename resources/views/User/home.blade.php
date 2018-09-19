@extends('User.layouts.app')
@section('title', 'Home')
@section('sideBarActivator_Home', 'class=active')

@section('pageSpecificHeadContent')
  {{-- EXTRA HEAD CONTENT --}}
@endsection

@section('body')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <strong class="text-success">User Home</strong>
      <small>this is your Dashboard Home</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">Upload Instructions</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="box-body">
        (Add Instructions for image Upload here)
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="{{ route('showUploadForms') }}" class="btn btn-block btn-success btn-lg"><strong><i class="fa fa-cloud-upload"></i> &nbsp; Go to Uploads Page</strong></a>
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
@endsection

@section('pageSpecificLoadScripts')
  {{-- EXTRA SCRIPTS --}}
@endsection