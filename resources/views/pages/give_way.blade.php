@extends('layouts.app')

@section('content')

    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="{{asset('img/page-top-bg/3.jpg')}}">
        <div class="page-info">
            <h2>GIVE-WAY</h2>
            <div class="site-breadcrumb">
                <a>GIVE -WAY</a>
                <span></span>
            </div>
        </div>
    </section>
    <!-- Page top end-->



    @if(isset($giveways))
        @foreach($giveways as $giveway)

            <div class="content-wrapper">
                <div class="news-card">
                    <a href="#" class="news-card__card-link"></a>
                    <img src="{{asset('uploads/'.$giveway['image'])}}" >
                    <div class="news-card__text-wrapper">
                        <h2 class="news-card__title">{{$giveway['title']}}</h2>
                        <div class="news-card__post-date"><h5 class="news-card__title"> Registration Date:{{$giveway['registration_date']}}</h5></div>
                        <div class="news-card__details-wrapper">
                            <p class="news-card__excerpt">{{$giveway['description']}}</p>
                            <a href="{{url('/mainnews')}}" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    @else
        <h5 class="text-center">There is No Give-Way Right Now !!!</h5>
    @endif

    <div class="clearfix"></div>

    <!-- Page top end-->

@section('section-js')
    <script type="text/javascript">

        var  host="http://endgame.test/";
        var csrf = $('meta[name="csrf-token"]').attr('content');
        $(function () {
            $(document).on('click', 'button[data-id]', function (e) {
                var givaway_id = $(this).attr('data-id');
                console.log(givaway_id)
                var lecturer_id = '{{auth()->id()}}';
                console.log(lecturer_id);
                if(!lecturer_id){
                    window.location.href = "{{ route('login')}}";
                }else{
                    $.ajax({
                        type: "POST",
                        url: host+'registerUser/giveway',
                        data: { 'givewayid':givaway_id,'_token': csrf},
                    }).done(function( msg ) {
                        $('.alert').alert();
                    });
                }

            });
        });
    </script>
@endsection


