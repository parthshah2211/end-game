@extends('layouts.app')

@section('content')
@endsection


<section class="page-top-section set-bg" data-setbg="img/page-top-bg/3.jpg">
    <div class="page-info">
        <h2>Comingsoon</h2>
        <div class="site-breadcrumb">

            <span></span>
        </div>
    </div>
</section>

<section class="blog-page">
    <div class="site-wrapper-inner">
        <div class="cover-container">
            <div class="masthead clearfix">
                <div class="inner">

                </div>
            </div><br>      <div class="inner cover">
                <h1 class="cover-heading"style="color:white;">The adventure Begins</h1>
                <p class="lead cover-copy" style="color:#4c4c4c;">Hold tight as we get our working robots together and produce the most astonishing product ever.</p>
                <p class="lead"><button type="button" class="btn btn-lg btn-default btn-notify" data-toggle="modal" data-target="#subscribeModal"
                                        style="color:white;">Notify Me</button></p>
            </div>
            <div class="mastfoot">
                <div class="inner">
                  </div>
            </div>
            <div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="subscribeModalLabel">Get Notified on Launch:</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="form-control-label">Enter you e-mail to get notified when we launch</label>
                                    <input type="text" class="form-control" id="recipient-name" placeholder="your-name@example.com">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


