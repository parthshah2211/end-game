@extends('layouts.app')
@section('content')

    <section class="page-top-section set-bg" style="height: 480px" data-setbg="{{asset('img/page-top-bg/3.jpg')}}">
        <div class="page-info">
            <h2>tournament name</h2>
            <div class="site-breadcrumb">
                <a>Date: 22/11/2000</a>
                <span></span>
                <a>Price-Pool:5000</a>
            </div>
        </div>
        <div> <a></a></div>
        <div class="page-info">
            <p class="lead"><button type="button" class="btn btn-lg btn-default btn-notify" data-toggle="modal" data-target="#subscribeModal"
                                    style="color:white;">    join tournamnet</button></p>
        </div>
    </section>


    <!-- Games section -->
    <section class="games-single-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-7 game-single-content">
                    <h4>Price Distributio</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquamet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vestibulum posuere porttitor justo id pellentesque. Proin id lacus feugiat, posuere erat sit amet, commodo ipsum. Donec pellentesque vestibulum metus.</p>
                    <h4>Rules</h4>
                    <p>Nulla ut maximus mauris. Sed malesuada at sapien sed euismod. Vestibulum pharetra in sem id laoreet. Cras metus ex, placerat nec justo quis, luctus posuere ex. Vivamus volutpat nibh ac sollicitudin imperdiet. Donec scelerisque lorem sodales odio ultricies, nec rhoncus ex lobortis. Vivamus tincidunt sit amet sem id varius. Donec ele-mentum aliquet tortor. Curabitur justo mi, efficitur sed eros aliquet, dictum molestie eros. Nullam scelerisque convallis gravida. Morbi id lorem accumsan, scelerisque enim laoreet, sollicitudin neque. Vivamus volutpat nibh ac sollicitudin imperdiet. Donec scelerisque lorem sodales odio ultricies, nec rhoncus ex lobortis. Vivamus tincidunt sit amet sem id varius. Donec ele-mentum aliquet tortor. Curabitur justo mi, efficitur sed eros aliqueDonec vitae tellus sodales, congue augue at, biben-dum justo. Pellentesque non dolor et magna volutpat pharetra eget vel ligula. Maecenas facilisis vestibulum mattis. Sed sagittis gravida urna. Cras nec mi risus.
                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Games end-->

    <section class="game-author-section">
        <div class="container">
            <div class="game-author-pic set-bg" data-setbg="img/author.jpg"></div>
            <div class="game-author-info">
                <h4>
                    organize by: Michael Williams</h4>
                <p>Vivamus volutpat nibh ac sollicitudin imperdiet. Donec scelerisque lorem sodales odio ultricies, nec rhoncus ex lobortis. Vivamus tincid-unt sit amet sem id varius. Donec elementum aliquet tortor. Curabitur justo mi, efficitur sed eros alique.</p>
            </div>
        </div>
    </section>
    <div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color:white;" id="subscribeModalLabel">Fill the details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Enter your & your team mate phone number</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Team Head Phone Number">
                            <input type="text" class="form-control" id="recipient-name" placeholder=" Phone Number">
                            <input type="text" class="form-control" id="recipient-name" placeholder=" Phone Number">
                            <input type="text" class="form-control" id="recipient-name" placeholder=" Phone Number">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" style="color:WHITE;">Join</button>
                </div>
            </div>
        </div>
    </div>






