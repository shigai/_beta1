<!DOCTYPE HTML>
<html>

<body>
	    
<?php include_once("_header.php"); ?>
        


        <div class="container">
            <h1 class="page-title">Odyssey Prime</h1>

        </div>
			<div style="text-align: right; margin: auto"><object type="application/x-shockwave-flash" style="width:450px; height:366px;" data="http://www.youtube.com/v/n42TlpDtJ3M?color2=FBE9EC&amp;rel=0&amp;hd=1&amp;autoplay=1&amp;showsearch=0&amp;showinfo=0&amp;controls=0&amp;version=3&amp;modestbranding=1">
			<param name="movie" value="http://www.youtube.com/v/n42TlpDtJ3M?color2=FBE9EC&amp;rel=0&amp;hd=1&amp;autoplay=1&amp;showsearch=0&amp;showinfo=0&amp;controls=0&amp;version=3&amp;modestbranding=1" />
			<param name="allowFullScreen" value="true" />
			<param name="allowscriptaccess" value="always" />
			</object>
		</div>

        <div class="container">
            <form>
                <div class="tabbable">
                    <ul class="nav nav-pills nav-sm nav-no-br mb10" id="myTab">
                        <li class="active"><a href="#flight-search-1" data-toggle="tab">University of Rochester</a>
                        </li>
                        <li><a href="#flight-search-2" data-toggle="tab">More...</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="flight-search-1">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-hightlight"></i>
                                        <label>From</label>
                                        <input class="typeahead form-control" placeholder="City, Hotel Name or U.S. Zip Code" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-hightlight"></i>
                                        <label>To</label>
                                        <input class="typeahead form-control" placeholder="City, Hotel Name or U.S. Zip Code" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-daterange" data-date-format="MM d, D">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-hightlight"></i>
                                                    <label>Departing</label>
                                                    <input class="form-control" name="start" type="text" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-hightlight"></i>
                                                    <label>Returning</label>
                                                    <input class="form-control" name="end" type="text" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group form-group-select-plus">
                                        <label>Passengers</label>
                                        <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                            <label class="btn btn-primary active">
                                                <input type="radio" name="options" />1</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options" />2</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options" />3</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options" />4</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options" />5</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options" />5+</label>
                                        </div>
                                        <select class="form-control hidden">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option selected="selected">6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                            <option>13</option>
                                            <option>14</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="flight-search-2">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-hightlight"></i>
                                        <label>To</label>
                                        <input class="typeahead form-control" placeholder="City, Hotel Name or U.S. Zip Code" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-hightlight"></i>
                                        <label>Departing</label>
                                        <input class="date-pick form-control" data-date-format="MM d, D" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group form-group-select-plus">
                                        <label>Passengers</label>
                                        <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                            <label class="btn btn-primary active">
                                                <input type="radio" name="options" />1</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options" />2</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options" />3</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options" />4</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options" />5</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options" />5+</label>
                                        </div>
                                        <select class="form-control hidden">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option selected="selected">6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                            <option>13</option>
                                            <option>14</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input class="btn btn-primary mt10" type="submit" value="Search for Flights" />
            </form>
            <div class="gap gap-small"></div>
            <h3 class="mb20">Popular Flight Destinations</h3>
            <div class="row row-wrap">
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/800x600.png" alt="Image Alternative text" title="Gaviota en el Top" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>New York City Hotels</h5>
                                    <p>70674 reviews</p>
                                    <p class="mb0">976 offers from $71</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/800x600.png" alt="Image Alternative text" title="Sydney Harbour" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Sydney Hotels</h5>
                                    <p>67274 reviews</p>
                                    <p class="mb0">916 offers from $99</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/800x600.png" alt="Image Alternative text" title="Street" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Disney World Hotels</h5>
                                    <p>64071 reviews</p>
                                    <p class="mb0">970 offers from $98</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/400x300.png" alt="Image Alternative text" title="the journey home" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Seattle Hotels</h5>
                                    <p>67106 reviews</p>
                                    <p class="mb0">906 offers from $66</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/800x600.png" alt="Image Alternative text" title="lack of blue depresses me" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Miami Hotels</h5>
                                    <p>79488 reviews</p>
                                    <p class="mb0">662 offers from $59</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/800x600.png" alt="Image Alternative text" title="waipio valley" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Sydney Hotels</h5>
                                    <p>79819 reviews</p>
                                    <p class="mb0">632 offers from $98</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/800x600.png" alt="Image Alternative text" title="the best mode of transport here in maldives" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Virginia Beach Hotels</h5>
                                    <p>67537 reviews</p>
                                    <p class="mb0">1000 offers from $51</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/800x600.png" alt="Image Alternative text" title="Upper Lake in New York Central Park" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Atlantic City Hotels</h5>
                                    <p>55827 reviews</p>
                                    <p class="mb0">836 offers from $53</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/800x600.png" alt="Image Alternative text" title="Viva Las Vegas" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Las Vegas</h5>
                                    <p>63292 reviews</p>
                                    <p class="mb0">764 offers from $58</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/800x600.png" alt="Image Alternative text" title="El inevitable paso del tiempo" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Budapest</h5>
                                    <p>77463 reviews</p>
                                    <p class="mb0">488 offers from $69</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/800x600.png" alt="Image Alternative text" title="new york at an angle" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Boston</h5>
                                    <p>61154 reviews</p>
                                    <p class="mb0">799 offers from $82</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img/800x600.png" alt="Image Alternative text" title="196_365" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Paris</h5>
                                    <p>61550 reviews</p>
                                    <p class="mb0">813 offers from $68</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </div>




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


