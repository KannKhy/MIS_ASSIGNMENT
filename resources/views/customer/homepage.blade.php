@extends('masterFront')
@section('cafe_content')

    <div class="header">
        <div class="container">
            <p class="header_LR"><i class="fa fa-cart-plus"></i> Cart</p>
            <p class="header_LR">Login/Register</p>
            <p class="header_LR">My Accoount</p>
        </div>
    </div>

    <div class="main_header">
        <div class="container">
            <div class="col-md-2 no-effect">
                <img src="images/logo.png" class="logo">
            </div>

            <div class="col-md-10 no-effect">
                <a href="#" class="home_list_menu"> CONTACT </a>
                <a href="#" class="home_list_menu"> ABOUT US </a>
                <a href="#" class="home_list_menu"> PROMOTION </a>
                <a href="#" class="home_list_menu"> COFFEE </a>
                <a href="#" class="home_list_menu list_menu_active"> HOME </a>
            </div>
        </div>
    </div>

        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/slide1.jpg" alt="Los Angeles" style="width:100%;height: 400px">
                    </div>

                    <div class="item">
                        <img src="images/slide2.jpg" alt="Chicago" style="width:100%;height: 400px">
                    </div>

                    <div class="item">
                        <img src="images/slide3.jpg" alt="New york" style="width:100%;height: 400px">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control center_auto" href="#myCarousel" data-slide="prev">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </a>
                <a class="right carousel-control center_auto" href="#myCarousel" data-slide="next">
                    <i class="fa fa-chevron-right"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>


            <div class="col-md-12 no-effect">
                <div class="col-md-4 cafe_poster">
                    <div class="col-md-2 cafe_poster_img">
                         <img src="images/logo.png" style="width: 60px;">
                    </div>
                    <div class="col-md-10">
                        <p class="no-effect"><b>Espresso Coffee</b></p>
                        <small>Espresso (ess-PRESS-oh) is a full-flavored, concentrated form of coffee that is served in “shots.”</small>
                    </div>
                </div>

                <div class="col-md-4 cafe_poster">
                    <div class="col-md-2 cafe_poster_img">
                        <img src="images/logo.png" style="width: 60px;">
                    </div>
                    <div class="col-md-10">
                        <p class="no-effect"><b>Espresso Coffee</b></p>
                        <small>Espresso (ess-PRESS-oh) is a full-flavored, concentrated form of coffee that is served in “shots.”</small>
                    </div>
                </div>

                <div class="col-md-4 cafe_poster">
                    <div class="col-md-2 cafe_poster_img">
                        <img src="images/logo.png" style="width: 60px;">
                    </div>
                    <div class="col-md-10">
                        <p class="no-effect"><b>Espresso Coffee</b></p>
                        <small>Espresso (ess-PRESS-oh) is a full-flavored, concentrated form of coffee that is served in “shots.”</small>
                    </div>
                </div>
            </div>

            <div class="col-md-12 no-effect" style="border-bottom: 3px solid #d59999">
                <p style="padding: 0px;margin: 5px;font-size: 16px;font-weight: bold;">Featured Products</p>
            </div>

            <div class="col-md-12 no-effect">

                <div class="col-md-3 margin-top">
                  <div class="cafe_con_img">
                        <img src="images/item1.png" style="width: 100%;height: 170px;">

                        <div class="cafe_hover">
                            <p class="cafe_price">2.25$</p>
                        </div>
                  </div>
                    <div class="card-product">
                        <div class="pull-left">
                            <p><b>Mocha Cafe</b></p>
                            <small>Description</small>
                        </div>
                        <div class="pull-right">
                            <img class="more_icon" src="icon/more.png">
                        </div>
                    </div>
                </div>

                <div class="col-md-3 margin-top">
                  <div class="cafe_con_img">
                        <img src="images/item2.png" style="width: 100%;height: 170px;">

                        <div class="cafe_hover">
                            <p class="cafe_price">2.25$</p>
                        </div>
                  </div>
                    <div class="card-product">
                        <div class="pull-left">
                            <p><b>Mocha Cafe</b></p>
                            <small>Description</small>
                        </div>
                        <div class="pull-right">
                            <img class="more_icon" src="icon/more.png">
                        </div>
                    </div>
                </div>

                <div class="col-md-3 margin-top">
                  <div class="cafe_con_img">
                        <img src="images/item3.png" style="width: 100%;height: 170px;">

                        <div class="cafe_hover">
                            <p class="cafe_price">2.25$</p>
                        </div>
                  </div>
                    <div class="card-product">
                        <div class="pull-left">
                            <p><b>Mocha Cafe</b></p>
                            <small>Description</small>
                        </div>
                        <div class="pull-right">
                            <img class="more_icon" src="icon/more.png">
                        </div>
                    </div>
                </div>

                <div class="col-md-3 margin-top">
                  <div class="cafe_con_img">
                        <img src="images/item4.png" style="width: 100%;height: 170px;">

                        <div class="cafe_hover">
                            <p class="cafe_price">2.25$</p>
                        </div>
                  </div>
                    <div class="card-product">
                        <div class="pull-left">
                            <p><b>Mocha Cafe</b></p>
                            <small>Description</small>
                        </div>
                        <div class="pull-right">
                            <img class="more_icon" src="icon/more.png">
                        </div>
                    </div>
                </div>

                <div class="col-md-3 margin-top">
                  <div class="cafe_con_img">
                        <img src="images/item5.png" style="width: 100%;height: 170px;">

                        <div class="cafe_hover">
                            <p class="cafe_price">2.25$</p>
                        </div>
                  </div>
                    <div class="card-product">
                        <div class="pull-left">
                            <p><b>Mocha Cafe</b></p>
                            <small>Description</small>
                        </div>
                        <div class="pull-right">
                            <img class="more_icon" src="icon/more.png">
                        </div>
                    </div>
                </div>

                <div class="col-md-3 margin-top">
                  <div class="cafe_con_img">
                        <img src="images/item6.png" style="width: 100%;height: 170px;">

                        <div class="cafe_hover">
                            <p class="cafe_price">2.25$</p>
                        </div>
                  </div>
                    <div class="card-product">
                        <div class="pull-left">
                            <p><b>Mocha Cafe</b></p>
                            <small>Description</small>
                        </div>
                        <div class="pull-right">
                            <img class="more_icon" src="icon/more.png">
                        </div>
                    </div>
                </div>

                <div class="col-md-3 margin-top">
                  <div class="cafe_con_img">
                        <img src="images/item7.png" style="width: 100%;height: 170px;">

                        <div class="cafe_hover">
                            <p class="cafe_price">2.25$</p>
                        </div>
                  </div>
                    <div class="card-product">
                        <div class="pull-left">
                            <p><b>Mocha Cafe</b></p>
                            <small>Description</small>
                        </div>
                        <div class="pull-right">
                            <img class="more_icon" src="icon/more.png">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 margin-top">
                  <div class="cafe_con_img">
                        <img src="images/item8.png" style="width: 100%;height: 170px;">

                        <div class="cafe_hover">
                            <p class="cafe_price">2.25$</p>
                        </div>
                  </div>
                    <div class="card-product">
                        <div class="pull-left">
                            <p><b>Mocha Cafe</b></p>
                            <small>Description</small>
                        </div>
                        <div class="pull-right">
                            <img class="more_icon" src="icon/more.png">
                        </div>
                    </div>
                </div>

                <div class="col-md-3 margin-top">
                  <div class="cafe_con_img">
                        <img src="images/item9.png" style="width: 100%;height: 170px;">

                        <div class="cafe_hover">
                            <p class="cafe_price">2.25$</p>
                        </div>
                  </div>
                    <div class="card-product">
                        <div class="pull-left">
                            <p><b>Mocha Cafe</b></p>
                            <small>Description</small>
                        </div>
                        <div class="pull-right">
                            <img class="more_icon" src="icon/more.png">
                        </div>
                    </div>
                </div>

                <div class="col-md-3 margin-top">
                  <div class="cafe_con_img">
                        <img src="images/item8.png" style="width: 100%;height: 170px;">

                        <div class="cafe_hover">
                            <p class="cafe_price">2.25$</p>
                        </div>
                  </div>
                    <div class="card-product">
                        <div class="pull-left">
                            <p><b>Mocha Cafe</b></p>
                            <small>Description</small>
                        </div>
                        <div class="pull-right">
                            <img class="more_icon" src="icon/more.png">
                        </div>
                    </div>
                </div>

                <div class="col-md-3 margin-top">
                  <div class="cafe_con_img">
                        <img src="images/item7.png" style="width: 100%;height: 170px;">

                        <div class="cafe_hover">
                            <p class="cafe_price">2.25$</p>
                        </div>
                  </div>
                    <div class="card-product">
                        <div class="pull-left">
                            <p><b>Mocha Cafe</b></p>
                            <small>Description</small>
                        </div>
                        <div class="pull-right">
                            <img class="more_icon" src="icon/more.png">
                        </div>
                    </div>
                </div>

                <div class="col-md-3 margin-top">
                  <div class="cafe_con_img">
                        <img src="images/item5.png" style="width: 100%;height: 170px;">

                        <div class="cafe_hover">
                            <p class="cafe_price">2.25$</p>
                        </div>
                  </div>
                    <div class="card-product">
                        <div class="pull-left">
                            <p><b>Mocha Cafe</b></p>
                            <small>Description</small>
                        </div>
                        <div class="pull-right">
                            <img class="more_icon" src="icon/more.png">
                        </div>
                    </div>
                </div>

                <div class="col-md-3 margin-top">
                  <div class="cafe_con_img">
                        <img src="images/item4.png" style="width: 100%;height: 170px;">

                        <div class="cafe_hover">
                            <p class="cafe_price">2.25$</p>
                        </div>
                  </div>
                    <div class="card-product">
                        <div class="pull-left">
                            <p><b>Mocha Cafe</b></p>
                            <small>Description</small>
                        </div>
                        <div class="pull-right">
                            <img class="more_icon" src="icon/more.png">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 margin-top">
                  <div class="cafe_con_img">
                        <img src="images/item3.png" style="width: 100%;height: 170px;">

                        <div class="cafe_hover">
                            <p class="cafe_price">2.25$</p>
                        </div>
                  </div>
                    <div class="card-product">
                        <div class="pull-left">
                            <p><b>Mocha Cafe</b></p>
                            <small>Description</small>
                        </div>
                        <div class="pull-right">
                            <img class="more_icon" src="icon/more.png">
                        </div>
                    </div>
                </div>

                <div class="col-md-3 margin-top">
                  <div class="cafe_con_img">
                        <img src="images/item2.png" style="width: 100%;height: 170px;">

                        <div class="cafe_hover">
                            <p class="cafe_price">2.25$</p>
                        </div>
                  </div>
                    <div class="card-product">
                        <div class="pull-left">
                            <p><b>Mocha Cafe</b></p>
                            <small>Description</small>
                        </div>
                        <div class="pull-right">
                            <img class="more_icon" src="icon/more.png">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 margin-top">
                  <div class="cafe_con_img">
                        <img src="images/item1.png" style="width: 100%;height: 170px;">

                        <div class="cafe_hover">
                            <p class="cafe_price">2.25$</p>
                        </div>
                  </div>
                  <div class="card-product">
                      <div class="pull-left">
                          <p><b>Mocha Cafe</b></p>
                          <small>Description</small>
                      </div>
                      <div class="pull-right">
                          <img class="more_icon" src="icon/more.png">
                      </div>
                  </div>
                </div>





              
            </div>

            <div class="col-md-12 no-effect">
              <div class="col-md-6 no-effect">
                  <p style="padding: 5px;margin: 5px;font-size: 16px;font-weight: bold;border-bottom: 3px solid #9f7791">Hot Cafe</p>

                  <div class="col-md-12 no-effect" style="padding: 5px;">
                    <div style="width: 100%;height:85px;padding: 10px;">
                      <div class="col-md-2 no-effect">
                        <img src="images/item2.png" style="width: 100%;">
                      </div>

                      <div class="col-md-10">
                        <p><b>Espresso Cafe</b></p>
                        <small>WrapBootstrap is a marketplace for premium Bootstrap templates and themes. Choose from our wide selection of Bootstrap admin and site templates!</small>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 no-effect" style="padding: 5px;">
                    <div style="width: 100%;height:85px;padding: 10px;">
                      <div class="col-md-2 no-effect">
                        <img src="images/item3.png" style="width: 100%;">
                      </div>

                      <div class="col-md-10">
                        <p><b>Espresso Cafe</b></p>
                        <small>WrapBootstrap is a marketplace for premium Bootstrap templates and themes. Choose from our wide selection of Bootstrap admin and site templates!</small>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 no-effect" style="padding: 5px;">
                    <div style="width: 100%;height:85px;padding: 10px;">
                      <div class="col-md-2 no-effect">
                        <img src="images/item4.png" style="width: 100%;">
                      </div>

                      <div class="col-md-10">
                        <p><b>Espresso Cafe</b></p>
                        <small>WrapBootstrap is a marketplace for premium Bootstrap templates and themes. Choose from our wide selection of Bootstrap admin and site templates!</small>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 no-effect" style="padding: 5px;">
                    <div style="width: 100%;height:85px;padding: 10px;">
                      <div class="col-md-2 no-effect">
                        <img src="images/item5.png" style="width: 100%;">
                      </div>

                      <div class="col-md-10">
                        <p><b>Espresso Cafe</b></p>
                        <small>WrapBootstrap is a marketplace for premium Bootstrap templates and themes. Choose from our wide selection of Bootstrap admin and site templates!</small>
                      </div>
                    </div>
                  </div>
                  
              </div>
              <div class="col-md-6 no-effect">
                  <p style="padding: 5px;margin: 5px;font-size: 16px;font-weight: bold;border-bottom: 3px solid #dfabad">Ice Cafe</p>
                  <div class="col-md-12 no-effect" style="padding: 5px;">
                    <div style="width: 100%;height:85px;padding: 10px;">
                      <div class="col-md-2 no-effect">
                        <img src="images/item9.png" style="width: 100%;">
                      </div>

                      <div class="col-md-10">
                        <p><b>Espresso Cafe</b></p>
                        <small>WrapBootstrap is a marketplace for premium Bootstrap templates and themes. Choose from our wide selection of Bootstrap admin and site templates!</small>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 no-effect" style="padding: 5px;">
                    <div style="width: 100%;height:85px;padding: 10px;">
                      <div class="col-md-2 no-effect">
                        <img src="images/item1.png" style="width: 100%;">
                      </div>

                      <div class="col-md-10">
                        <p><b>Espresso Cafe</b></p>
                        <small>WrapBootstrap is a marketplace for premium Bootstrap templates and themes. Choose from our wide selection of Bootstrap admin and site templates!</small>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 no-effect" style="padding: 5px;">
                    <div style="width: 100%;height:85px;padding: 10px;">
                      <div class="col-md-2 no-effect">
                        <img src="images/item2.png" style="width: 100%;">
                      </div>

                      <div class="col-md-10">
                        <p><b>Espresso Cafe</b></p>
                        <small>WrapBootstrap is a marketplace for premium Bootstrap templates and themes. Choose from our wide selection of Bootstrap admin and site templates!</small>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 no-effect" style="padding: 5px;">
                    <div style="width: 100%;height:85px;padding: 10px;">
                      <div class="col-md-2 no-effect">
                        <img src="images/item3.png" style="width: 100%;">
                      </div>

                      <div class="col-md-10">
                        <p><b>Espresso Cafe</b></p>
                        <small>WrapBootstrap is a marketplace for premium Bootstrap templates and themes. Choose from our wide selection of Bootstrap admin and site templates!</small>
                      </div>
                    </div>
                  </div>


              </div>
            </div>

        </div>



@endsection