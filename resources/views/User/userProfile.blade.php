@extends('User.layouts.app')
@section('title', 'Profile')
@section('sideBarActivator_Profile', 'class=active')

@section('pageSpecificHeadContent')
{{-- EXTRA HEAD CONTENT --}}
@endsection

@section('body')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <strong class="text-success">User Profile</strong>
    <small>this is your User Profile</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route('userProfile') }}"><i class="fa fa-user"></i> Profile</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">Your Profile Details</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
        title="Collapse">
        <i class="fa fa-minus"></i>
      </button>
    </div>
  </div>
  <div class="box-body">
    <div class="row">
      <div class="col-md-3">
        <h5 class="text-success">Name</h5>
      </div>
      <div class="col-md-3">
        {{ Auth::user()->name }}
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        <h5 class="text-success">E-mail</h5>
      </div>
      <div class="col-md-3">
        {{ Auth::user()->email }}
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        <h5 class="text-success">User Type</h5>
      </div>
      <div class="col-md-3">
        {{ Auth::user()->usertype }}
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        <h5 class="text-success">Member Since</h5>
      </div>
      <div class="col-md-3">
        {{ Auth::user()->created_at->diffForHumans() }}
      </div>
    </div>
  </div>
  <!-- /.box-body -->

  <div class="box-footer">
  </div>
  <!-- /.box-footer-->
</div>
<!-- /.box -->
<h4><strong>Uploaded Images</strong></h4> <br>
@isset(Auth::user()->images)
@foreach(Auth::user()->images as $image)
<div class="row">
  <div class="col-md-12">
    <div class="box box-success">
      <div class="box-header with-border">
        <h4 class="box-title text-success"><strong>{{ $loop->iteration }}. &nbsp; <span class="text-info">{{ ucfirst($image['imageType']) }}</span></strong> &nbsp; <small>{{ $image['image_id'] }}</small></h4>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
          title="Collapse">
          <i class="fa fa-minus"></i>
        </button>
      </div>
    </div>

    <div class="box-body">
      <div class="col-md-4">
        <a href="{{ asset($image['path']) }}" target="_black">
          <img src="{{ asset($image['path']) }}" alt="" class="img img-responsive img-thumbnail" alt="images">
        </a>
      </div>
      <div class="col-md-8">
        <div class="box">
          <div class="box-header with-border">
            <h4><strong>Address</strong></h4>
          </div>
          <div class="box-body">
            <div class="col-md-6">
              {{ $image['address'] }},<br>{{ $image['districtName'] }},<br>{{ $image['stateName'] }}
            </div>
            <div class="col-md-6">
              <div class="pull-right">
                <a href="{{ route('uploadImage-values', $image['image_id']) }}" class="btn btn-lg btn-success">
                  <strong><i class="fa fa-eye"></i> &nbsp; View Image Details</strong>
                </a>
              </div>
            </div>
            {{-- <div class="col-md-7">
              <div class="jumbotron">
                <h4>Add Map</h4>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<br>
@endforeach
@endisset



</section>
<!-- /.content -->
@endsection

@section('pageSpecificLoadScripts')
{{-- EXTRA SCRIPTS --}}
@endsection