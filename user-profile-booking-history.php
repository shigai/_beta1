<!DOCTYPE HTML>
<html>

<body>
	    
<?php include_once("_header.php"); ?>
        



        <div class="container">
            <h1 class="page-title">Booking History</h1>
        </div>




        <div class="container">
            <div class="row">
                
<?php include_once("_user-menu.php"); ?>

                <div class="col-md-9">
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />Show only current trip</label>
                    </div>
                    <table class="table table-bordered table-striped table-booking-history">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Order Date</th>
                                <th>Execution Date</th>
                                <th>Cost</th>
                                <th>Current</th>
                                <th>Cancel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-plane"></i><small>flight</small>
                                </td>
                                <td class="booking-history-title">London to New York City</td>
                                <td>New york City</td>
                                <td>4/12/2014</td>
                                <td>4/25/2014</td>
                                <td>$350</td>
                                <td class="text-center"><i class="fa fa-check"></i>
                                </td>
                                <td class="text-center"><a class="btn btn-default btn-sm" href="#">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-building-o"></i><small>hotel</small>
                                </td>
                                <td class="booking-history-title">InterContinental New York Barclay</td>
                                <td>New york City</td>
                                <td>4/12/2014</td>
                                <td>4/25/2014 <i class="fa fa-long-arrow-right"></i> 4/30/2014</td>
                                <td>$1200</td>
                                <td class="text-center"><i class="fa fa-check"></i>
                                </td>
                                <td class="text-center"><a class="btn btn-default btn-sm" href="#">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-dashboard"></i><small>car</small>
                                </td>
                                <td class="booking-history-title">Maserati GranTurismo</td>
                                <td>New york City</td>
                                <td>4/12/2014</td>
                                <td>4/25/2014 <i class="fa fa-long-arrow-right"></i> 4/30/2014</td>
                                <td>$500</td>
                                <td class="text-center"><i class="fa fa-check"></i>
                                </td>
                                <td class="text-center"><a class="btn btn-default btn-sm" href="#">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-bolt"></i><small>activity</small>
                                </td>
                                <td class="booking-history-title">Central Park Trip</td>
                                <td>New york City</td>
                                <td>4/12/2014</td>
                                <td>4/27/2014</td>
                                <td>$0</td>
                                <td class="text-center"><i class="fa fa-check"></i>
                                </td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-bolt"></i><small>activity</small>
                                </td>
                                <td class="booking-history-title">Music Festival</td>
                                <td>New york City</td>
                                <td>4/12/2014</td>
                                <td>4/28/2014</td>
                                <td>$100</td>
                                <td class="text-center"><i class="fa fa-check"></i>
                                </td>
                                <td class="text-center"><a class="btn btn-default btn-sm" href="#">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-bolt"></i><small>activity</small>
                                </td>
                                <td class="booking-history-title">Adrenaline Madness</td>
                                <td>New york City</td>
                                <td>4/12/2014</td>
                                <td>4/29/2014</td>
                                <td>$210</td>
                                <td class="text-center"><i class="fa fa-check"></i>
                                </td>
                                <td class="text-center"><a class="btn btn-default btn-sm" href="#">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-plane"></i><small>flight</small>
                                </td>
                                <td class="booking-history-title">London to Bali</td>
                                <td>Bali</td>
                                <td>2/12/2014</td>
                                <td>2/20/2014</td>
                                <td>$500</td>
                                <td class="text-center"><i class="fa fa-times"></i>
                                </td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-home"></i><small>rental</small>
                                </td>
                                <td class="booking-history-title">Modern Chic 3BR Villa Fanisa</td>
                                <td>Bali</td>
                                <td>2/12/2014</td>
                                <td>2/20/2014 <i class="fa fa-long-arrow-right"></i> 2/23/2014</td>
                                <td>$800</td>
                                <td class="text-center"><i class="fa fa-times"></i>
                                </td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-plane"></i><small>flight</small>
                                </td>
                                <td class="booking-history-title">London to San Fancisco</td>
                                <td>San Fancisco</td>
                                <td>1/01/2014</td>
                                <td>1/05/2014</td>
                                <td>$423</td>
                                <td class="text-center"><i class="fa fa-times"></i>
                                </td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-building-o"></i><small>hotel</small>
                                </td>
                                <td class="booking-history-title">Wellington Hotel</td>
                                <td>San Fancisco</td>
                                <td>1/01/2014</td>
                                <td>1/05/2014 <i class="fa fa-long-arrow-right"></i> 1/15/2014</td>
                                <td>$850</td>
                                <td class="text-center"><i class="fa fa-times"></i>
                                </td>
                                <td class="text-center"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        <div class="gap"></div>


<?php include_once ("_footer.php"); ?>





        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/slimmenu.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/bootstrap-timepicker.js"></script>
        <script src="js/nicescroll.js"></script>
        <script src="js/dropit.js"></script>
        <script src="js/ionrangeslider.js"></script>
        <script src="js/icheck.js"></script>
        <script src="js/fotorama.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="js/typeahead.js"></script>
        <script src="js/card-payment.js"></script>
        <script src="js/magnific.js"></script>
        <script src="js/owl-carousel.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/tweet.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/gridrotator.js"></script>
        <script src="js/custom.js"></script>
    </div>
</body>

</html>


