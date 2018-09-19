@extends('User.layouts.app')
@section('title', 'ImageDetails')
@section('sideBarActivator_Home', 'class=active')

@section('pageSpecificHeadContent')
  {{-- EXTRA HEAD CONTENT --}}
@endsection

@section('body')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <strong class="text-success">Image Details</strong>
      <small>this is one of your uploaded images</small>
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
        <h3 class="box-title">Image type: <strong class="text-success">{{ $featuresetVals['imageClassType'] }}</strong></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="box-body">
        <div class="col-md-4">
          <a href="{{ asset($imageToShow['path']) }}" target="_blank">
            <img src="{{ asset($imageToShow['path']) }}" alt="" class="img img-responsive img-thumbnail">
          </a>
        </div>
        <div class="col-md-8">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title"><strong>Feature Set Values</strong></h3>
            </div>
            <div class="box-body">
              <div class="table-responsive no-padding">
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="3"><span class="text-success">GLCM Texture Values</span></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <th>Autocorrelation</th>
                      <td>{{ $featuresetVals['autoc'] }}</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <th>Contrast</th>
                      <td>{{ $featuresetVals['contr'] }}</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <th>Correlation (MATLAB)</th>
                      <td>{{ $featuresetVals['corrm'] }}</td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <th>Correlation</th>
                      <td>{{ $featuresetVals['corrp'] }}</td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <th>Cluster Prominence</th>
                      <td>{{ $featuresetVals['cprom'] }}</td>
                    </tr>
                    <tr>
                      <td>6.</td>
                      <th>Cluster Shade</th>
                      <td>{{ $featuresetVals['cshad'] }}</td>
                    </tr>
                    <tr>
                      <td>7.</td>
                      <th>Dissimilarity</th>
                      <td>{{ $featuresetVals['dissi'] }}</td>
                    </tr>
                    <tr>
                      <td>8.</td>
                      <th>Energy (MATLAB)</th>
                      <td>{{ $featuresetVals['energ'] }}</td>
                    </tr>
                    <tr>
                      <td>9.</td>
                      <th>Entropy</th>
                      <td>{{ $featuresetVals['entro'] }}</td>
                    </tr>
                    <tr>
                      <td>10.</td>
                      <th>Homogeneity (MATLAB)</th>
                      <td>{{ $featuresetVals['homom'] }}</td>
                    </tr>
                    <tr>
                      <td>11.</td>
                      <th>Homogeneity</th>
                      <td>{{ $featuresetVals['homop'] }}</td>
                    </tr>
                    <tr>
                      <td>12.</td>
                      <th>Maximum Probability</th>
                      <td>{{ $featuresetVals['maxpr'] }}</td>
                    </tr>
                    <tr>
                      <td>13.</td>
                      <th>Sum of Sqaures: Variance</th>
                      <td>{{ $featuresetVals['sosvh'] }}</td>
                    </tr>
                    <tr>
                      <td>14.</td>
                      <th>Sum Average</th>
                      <td>{{ $featuresetVals['savgh'] }}</td>
                    </tr>
                    <tr>
                      <td>15.</td>
                      <th>Sum Variance</th>
                      <td>{{ $featuresetVals['svarh'] }}</td>
                    </tr>
                    <tr>
                      <td>16.</td>
                      <th>Sum Entropy</th>
                      <td>{{ $featuresetVals['senth'] }}</td>
                    </tr>
                    <tr>
                      <td>17.</td>
                      <th>Difference Variance</th>
                      <td>{{ $featuresetVals['dvarh'] }}</td>
                    </tr>
                    <tr>
                      <td>18.</td>
                      <th>Difference Entropy</th>
                      <td>{{ $featuresetVals['denth'] }}</td>
                    </tr>
                    <tr>
                      <td>19.</td>
                      <th>Information Measure of Correlation1</th>
                      <td>{{ $featuresetVals['inf1h'] }}</td>
                    </tr>
                    <tr>
                      <td>20.</td>
                      <th>Information Measure of Correlation2</th>
                      <td>{{ $featuresetVals['inf2h'] }}</td>
                    </tr>
                    <tr>
                      <td>21.</td>
                      <th>Inverse Difference Normalized (INN)</th>
                      <td>{{ $featuresetVals['indnc'] }}</td>
                    </tr>
                    <tr>
                      <td>22.</td>
                      <th>Inverse Difference Moment Normalized</th>
                      <td>{{ $featuresetVals['idmnc'] }}</td>
                    </tr>
                  </tbody>
                  <thead>
                    <tr>
                      <th colspan="3">&nbsp;</th>
                    </tr>
                    <tr>
                      <th colspan="3"><span class="text-success">Geometrical Feature Values</span></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>23.</td>
                      <th>Area</th>
                      <td>{{ $featuresetVals['area'] }}</td>
                    </tr>
                    <tr>
                      <td>24.</td>
                      <th>Major Axis Length</th>
                      <td>{{ $featuresetVals['majorAxixLength'] }}</td>
                    </tr>
                    <tr>
                      <td>25.</td>
                      <th>Minor Axis Length</th>
                      <td>{{ $featuresetVals['minorAxixLength'] }}</td>
                    </tr>
                    <tr>
                      <td>26.</td>
                      <th>Eccentricity</th>
                      <td>{{ $featuresetVals['eccentricity'] }}</td>
                    </tr>
                    <tr>
                      <td>27.</td>
                      <th>Orientation</th>
                      <td>{{ $featuresetVals['orientation'] }}</td>
                    </tr>
                    <tr>
                      <td>28.</td>
                      <th>Convex Area</th>
                      <td>{{ $featuresetVals['convexArea'] }}</td>
                    </tr>
                    <tr>
                      <td>29.</td>
                      <th>Filled Area</th>
                      <td>{{ $featuresetVals['filledArea'] }}</td>
                    </tr>
                    <tr>
                      <td>30.</td>
                      <th>Equivalent Diameter</th>
                      <td>{{ $featuresetVals['equivDiameter'] }}</td>
                    </tr>
                    <tr>
                      <td>31.</td>
                      <th>Solidity</th>
                      <td>{{ $featuresetVals['solidity'] }}</td>
                    </tr>
                    <tr>
                      <td>32.</td>
                      <th>Extent</th>
                      <td>{{ $featuresetVals['extent'] }}</td>
                    </tr>
                    <tr>
                      <td>33.</td>
                      <th>Perimeter</th>
                      <td>{{ $featuresetVals['perimeter'] }}</td>
                    </tr>
                    <tr>
                      <td>34.</td>
                      <th>Perimeter (Old)</th>
                      <td>{{ $featuresetVals['perimeterOld'] }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <br>
        </div>
        <div class="container-fluid">
          <div class="row">
            <h1><strong class="text-success">Image Processing</strong></h1>
            <hr>
          </div>
          <div class="row">
            <div class="col-md-6">
              <h2><strong>Normalized</strong></h2>
              <a href="{{ asset('storage/'.Auth::user()->id.'/'.$featuresetVals['image_id'].'_norm.jpg') }}" target="_blank">
                <img src="{{ asset('storage/'.Auth::user()->id.'/'.$featuresetVals['image_id'].'_norm.jpg') }}" alt="" class="img img-responsive img-thumbnail">
              </a>
            </div>
            <div class="col-md-6">
              <h2><strong>Binary</strong></h2>
              <a href="{{ asset('storage/'.Auth::user()->id.'/'.$featuresetVals['image_id'].'_bin.jpg') }}" target="_blank">
                <img src="{{ asset('storage/'.Auth::user()->id.'/'.$featuresetVals['image_id'].'_bin.jpg') }}" alt="" class="img img-responsive img-thumbnail">
              </a>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6">
              <h2><strong>Segmented</strong></h2>
              <a href="{{ asset('storage/'.Auth::user()->id.'/'.$featuresetVals['image_id'].'_seg.jpg') }}" target="_blank">
                <img src="{{ asset('storage/'.Auth::user()->id.'/'.$featuresetVals['image_id'].'_seg.jpg') }}" alt="" class="img img-responsive img-thumbnail">
              </a>
            </div>
            <div class="col-md-6">
              <h2><strong>Gray Scale</strong></h2>
              <a href="{{ asset('storage/'.Auth::user()->id.'/'.$featuresetVals['image_id'].'_grayScale.jpg') }}" target="_blank">
                <img src="{{ asset('storage/'.Auth::user()->id.'/'.$featuresetVals['image_id'].'_grayScale.jpg') }}" alt="" class="img img-responsive img-thumbnail">
              </a>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6">
              <h2><strong>Histogram Equalized</strong></h2>
              <a href="{{ asset('storage/'.Auth::user()->id.'/'.$featuresetVals['image_id'].'_histEq.jpg') }}" target="_blank">
                <img src="{{ asset('storage/'.Auth::user()->id.'/'.$featuresetVals['image_id'].'_histEq.jpg') }}" alt="" class="img img-responsive img-thumbnail">
              </a>
            </div>
            <div class="col-md-6">
              <h2><strong>Largest Blob</strong></h2>
              <a href="{{ asset('storage/'.Auth::user()->id.'/'.$featuresetVals['image_id'].'_largestBlob.jpg') }}" target="_blank">
                <img src="{{ asset('storage/'.Auth::user()->id.'/'.$featuresetVals['image_id'].'_largestBlob.jpg') }}" alt="" class="img img-responsive img-thumbnail">
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="jumbotron">
          <center>
            <h4><span class="text-success">Perform Classification Testing</span></h4>
            <br>
            <a href="{{ route('uploadImage-classify', $featuresetVals['image_id']) }}" class="btn btn-success btn-lg"><strong><i class="fa fa-gear"></i> Predict Class</strong></a>
          </center>
        </div>
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