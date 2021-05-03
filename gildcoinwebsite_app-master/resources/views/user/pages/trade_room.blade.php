@extends('user/layouts/layout_inner')

@section('content')

<div class="col-md-10 col_chart">

    <div class="row row_above_canvas">

        <div class="col">
            <div class="d-flex align-items-center justify-content-end">

                <div>
                    <h4 class="text-success">Ksh +798.50</h4>
                    <p>Current Profit</p>
                </div>

                <div class="ms-3">
                    <h4 class="text-light">
                        <span class="text-secondary"><i class="fal fa-stopwatch"></i></span> 
                        <span id="txt"></span>
                    </h4>
                    <p>Purchase Time</p>
                </div>

                <div class="ms-3">
                    <div class="btn-group">
                        <a href="#none" data-bs-toggle="modal" data-bs-target="#closePositionModal" class="btn btn-outline-secondary px-4">Close All (2)</a>
                        <a href="#none" class="btn btn-outline-secondary">
                            <i class="fal fa-cog"></i>
                        </a>
                    </div>
                </div>
                
            </div>
            <!-- /d-flex -->
        </div>
        <!-- /col -->
        
    </div>
    <!-- /row -->
    
    <canvas id="tradeRoomChart" class="canvas_world"></canvas>

    <div class="btn-group btn-group_intervals mt-2" role="group">
        
        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
        <label class="btn btn-outline-secondary" for="btnradio1">30 days</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
        <label class="btn btn-outline-secondary" for="btnradio2">7 days</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
        <label class="btn btn-outline-secondary" for="btnradio3">1 day</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
        <label class="btn btn-outline-secondary" for="btnradio4">12 hours</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
        <label class="btn btn-outline-secondary" for="btnradio5">3 hours</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off">
        <label class="btn btn-outline-secondary" for="btnradio6">1 hour</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio7" autocomplete="off" checked>
        <label class="btn btn-outline-secondary" for="btnradio7">30 mins</label>
        
    </div>
    <!-- /btn-group -->
    
</div>
<!-- /middle col -->

<div class="col-md-1">

    <div class="row row_amount mb-3 gy-1 gx-1">

        <div class="col-12">
            <div class="px-3 py-2">
                <p class="m-0">Amount</p>
                <span><h6 class="m-0">$ 200.00</h6></span>
            </div>
        </div>
        <!-- /col -->

        <div class="col-6 text-center">
            <a href="#none"><i class="fas fa-minus"></i></a>
        </div>
        <!-- /col -->

        <div class="col-6 text-center">
            <a href="#none"><i class="fas fa-plus"></i></a>
        </div>
        <!-- /col -->

    </div>
    <!-- /row_amount -->

    <div class="d-grid gap-2 mb-2">
    
        <a href="#none" class="btn btn_buy btn-lg btn-success py-4 text-light position-relative">
            <h2 class="mb-0">
                <i class="fas fa-chart-line"></i>
            </h2>
            <span>BUY</span>

            <div class="details position-absolute text-light">
                <h6>DETAILS</h6>
                <table class="table text-secondary table-sm">
                    <tbody>
                        <tr>
                            <td>Open Price</td>
                            <td>$40.00</td>
                        </tr>
                        <tr>
                            <td>Gildcoins</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>Investment</td>
                            <td>
                                <span class="text-success">
                                    <i class="fas fa-caret-up"></i>
                                </span> 
                                $200.00
                            </td>
                        </tr>
                        <tr>
                            <td class="text-white">Total</td>
                            <td class="text-white">$200.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /details  -->
        </a>

        <a href="#none" class="btn btn_sell btn-lg btn-danger py-4 position-relative">
            <h2 class="mb-0">
                <i class="fas fa-chart-line-down"></i>
            </h2>
            <span>SELL</span>

            <div class="details position-absolute text-light">
                <h6>DETAILS</h6>
                <table class="table text-secondary table-sm">
                    <tbody>
                        <tr>
                            <td>Open Price</td>
                            <td>$40.00</td>
                        </tr>
                        <tr>
                            <td>Gildcoins</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>Investment</td>
                            <td>
                                <span class="text-danger">
                                    <i class="fas fa-caret-down"></i>
                                </span> 
                                $200.00
                            </td>
                        </tr>
                        <tr>
                            <td class="text-white">Total</td>
                            <td class="text-white">$200.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /details  -->
        </a>
    </div>
    <!-- /d-grid -->

    <div class="spread text-center">
        Spread <span>112.456</span>
    </div>

</div>
<!-- /right col -->

@endsection

@section('modals')

	@include('user/modals/leaderboard')
	
	@include('user/modals/close_position')

@endsection

@section('scripts')

<!-- load ChartJS dist files -->
<script src="user_inner/assets/js/Chart.min.js"></script>

<!-- Trade Room Chart JS file -->
<script src="user_inner/assets/js/tradeRoomChart.js"></script>

<script>
    
     // Get current time 
    function startTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById("txt").innerHTML =
      h + ":" + m + ":" + s;
      var t = setTimeout(startTime, 500);
    }

    function checkTime(i) {
      if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
      return i;
    }

</script>

@endsection