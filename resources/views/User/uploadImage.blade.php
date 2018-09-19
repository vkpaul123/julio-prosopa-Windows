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
    <strong class="text-success">Upload Image</strong>
    <small>this is where you Upload your Image</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route('home') }}"><i class="fa fa-cloud-upload"></i> Upload Image</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  @if (Session::has('messageFail'))
  <div class="alert alert-danger">{!! Session::get('messageFail') !!}
    <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
  </div>
  @endif
  @if(count($errors) > 0)
  <center>
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
      <strong>
        You Have Errors while submitting. Please Fill up the information in the Fields that are Highlighted in Red.
      </strong>
      <hr>
      @foreach ($errors->all() as $error)
      {{ $error }} <br>
      @endforeach
    </div>
  </center>
  @endif

  {{-- form moved to vue --}}
  <div id="app">
    <upload-form></upload-form>
  </div>

</section>
<!-- /.content -->
@endsection

@section('pageSpecificLoadScripts')
{{-- EXTRA SCRIPTS --}}
@endsection