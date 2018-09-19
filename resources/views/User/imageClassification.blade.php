@extends('User.layouts.app')
@section('title', 'ImageClassification')
@section('sideBarActivator_Home', 'class=active')

@section('pageSpecificHeadContent')
  {{-- EXTRA HEAD CONTENT --}}
@endsection

@section('body')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <strong class="text-success">Image Classification Results</strong>
      <small>prediction values of classification</small>
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
        <h3 class="box-title">Classification</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-md-5">
            <img src="{{ asset($imageToShow['path']) }}" alt="" class="img img-responsive img-thumbnail">
          </div>
          <div class="col-md-7">
            @php
              $sumVote = 0;
              for ($i=0; $i < 5; $i++) { 
                $sumVote = $sumVote + $contentsArr[$i];
              }
            @endphp

            @if ($sumVote > 2)
              <div class="jumbotron">
                <h1><i class="fa fa-check text-success"></i><br>
                  <small class="text-info">Given image belongs to <i>Prosopis Juliflora</i> species.</small>
                </h1>
            </div>
            @else
              <div class="jumbotron">
                <h1><i class="fa fa-times text-danger"></i><br>
                  <small class="text-danger">Given image does NOT belong to <i>Prosopis Juliflora</i> species.</small>
                </h1>
              </div>
            @endif
          </div>
          
        </div>
        <hr>
        <div class="container-fluid">
          <div class="row">
          <div class="panel panel-success">
          <div class="panel-heading" data-toggle="collapse" data-target="#analysis">
            <h3>Analysis

            <div class="pull-right">
                <i class="caret"></i>
            </div>
            </h3>
          </div>
          <div class="panel-body @if (Auth::user()->usertype=='General')
            collapse
          @endif" id="analysis">
              <div class="table-responsive no-padding">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Algorithm</th>
                      <th>Accuracy</th>
                      <th>Accuracy (with 10-fold Cross-Validation)</th>
                      <th><span class="text-success">Prediction</span></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Naive Bayes</td>
                      <td>{{ $contentsArr[5] }} %</td>
                      <td>{{ $contentsArr[10] }} %</td>
                      <td>
                        @if ($contentsArr[0] == 1)
                          <span class="text-info"><strong>True</strong></span>
                        @else
                          <span class="text-danger"><strong>False</strong></span>
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <td>K-Nearest Neighbours</td>
                      <td>{{ $contentsArr[6] }} %</td>
                      <td>{{ $contentsArr[11] }} %</td>
                      <td>
                        @if ($contentsArr[1] == 1)
                          <span class="text-info"><strong>True</strong></span>
                        @else
                          <span class="text-danger"><strong>False</strong></span>
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <td>Support Vector Machine</td>
                      <td>{{ $contentsArr[7] }} %</td>
                      <td>{{ $contentsArr[12] }} %</td>
                      <td>
                        @if ($contentsArr[2] == 1)
                          <span class="text-info"><strong>True</strong></span>
                        @else
                          <span class="text-danger"><strong>False</strong></span>
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <td>Decision Tree</td>
                      <td>{{ $contentsArr[8] }} %</td>
                      <td>{{ $contentsArr[13] }} %</td>
                      <td>
                        @if ($contentsArr[3] == 1)
                          <span class="text-info"><strong>True</strong></span>
                        @else
                          <span class="text-danger"><strong>False</strong></span>
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <td>Discriminant Analysis</td>
                      <td>{{ $contentsArr[9] }} %</td>
                      <td>{{ $contentsArr[14] }} %</td>
                      <td>
                        @if ($contentsArr[4] == 1)
                          <span class="text-info"><strong>True</strong></span>
                        @else
                          <span class="text-danger"><strong>False</strong></span>
                        @endif
                      </td>
                    </tr>  
                  </tbody>
                </table>
              </div>
              <hr>
              <h3><strong class="text-success">Average Accuracy</strong></h3>
              @php
                $sum = 0;
                for ($i=5; $i < 10; $i++) { 
                  $sum = $sum + $contentsArr[$i];
                }
                $avg1 = $sum/5;
              @endphp
              {{ $avg1 }} %
              <hr>
              <h3><strong class="text-success">Average Accuracy</strong> &nbsp;<small>(with 10-fold Cross-Validation)</small></h3>
              @php
                $sum = 0;
                for ($i=10; $i < 15; $i++) { 
                  $sum = $sum + $contentsArr[$i];
                }
                $avg1 = $sum/5;
              @endphp
              {{ $avg1 }} %
              <hr>
              
              <h3><strong class="text-primary">Voted Prediction</strong></h3>
              @if ($sumVote > 2)
                <strong class="text-info">True</strong>
              @else
                <strong class="text-danger">False</strong>
              @endif
          </div>
        </div>  
        </div>
        </div>
      </div>
      <!-- /.box-body -->
      {{-- <div class="box-footer">
        
      </div> --}}
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
@endsection

@section('pageSpecificLoadScripts')
  {{-- EXTRA SCRIPTS --}}
@endsection