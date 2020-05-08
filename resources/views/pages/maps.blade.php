@extends('layouts.app', [
    'namePage' => 'Monitor Mesin',
    'class' => 'sidebar-mini',
    'activePage' => 'maps',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card dte-banner">
          <div class="card-header ">
            DTE-3
          </div>
          <div class="card-body ">
          <div class="col-md-6">
                			<div class="row d-flex justify-content-center">
                				<h2>Control System</h2>
                			</div>
                			<br>
                			<center>
                			<table>
                        
                			<tr>
                				<td><h3>Machine</h3></td>
                				<td><h3 style="padding-left: 10px">:</h3></td>
                				<td><label class="switch" style="margin-top: 10px; margin-left: 10px"><input type="checkbox" id="button"><div class="slider round"></div></label></td>
                			</tr>
                			<tr>
                				<td><h3>Extruder</h3></td>
                				<td><h3 style="padding-left: 10px">:</h3></td>
                				<td><input type="button" name="ON" style="background-color: blue; color: #fff; width: 90px; height: 34px; margin-left: 10px;" value="FILL"></td>
                			</tr>
                			<tr>
                				<td><h3 style="margin-top: 10px;">Conveyor 1</h3></td>
                				<td style="padding-left: 10px; padding-top: 10px;"><h3>:</h3></td>
                				<td><div class="lingkaran" style="margin-left: 10px; margin-top: 10px;"></div></td>
                			</tr>	
                			<tr>
                				<td><h3 style="margin-top: 10px;">conveyor 2</h3></td>
                				<td style="padding-left: 10px; padding-top: 10px;"><h3>:</h3></td>
                				<td><div class="lingkaran" style="margin-left: 10px; margin-top: 10px;"></div></td>
                			</tr>
                			<tr>
                				<td><h3 style="margin-top: 10px;">conveyor atas1</h3></td>
                				<td style="padding-left: 10px; padding-top: 10px;"><h3>:</h3></td>
                				<td><div class="lingkaran" style="margin-left: 10px; margin-top: 10px;"></div></td>
                			</tr>
                			<tr>
                				<td><h3 style="margin-top: 10px;">conveypr atas2 </h3></td>
                				<td style="padding-left: 10px; padding-top: 10px;"><h3>:</h3></td>
                				<td><div class="lingkaran" style="margin-left: 10px; margin-top: 10px;"></div></td>
                      </tr>

                			</table>
                			</center>
                		</div>
                	</div>
					</div>
          
          <style type="text/css">
			.speed {
	          width: 100%;
	          height: 100%;
      		}
      		.lingkaran {
    			width:30px;
    			height:30px;
    			background-color:#f00;
    			border-radius:50%;
    			overflow:hidden;
			}
			</style>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
          // Javascript method's body can be found in assets/js/demos.js
          demo.initGoogleMaps();
        });
    </script>
@endpush