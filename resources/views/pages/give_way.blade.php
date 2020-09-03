@extends('layouts.app')

<style>

    /* width */
    ::-webkit-scrollbar {
        width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
    div.gallery {
        border: 1px solid #ccc;
        margin-top: 20PX;
        margin-left: 20px;
        margin-bottom: 20px;
        margin-right: 20px;
    }
    .img_card{
        margin-top: 20px;
        margin-left: 20px;
        margin-bottom: 20px;
    }
    .img_design{
        width: 184px;
        height: 184px;
        margin-left: 100px;
    }

    div.gallery:hover {
        border: 1px solid #777;
    }

    div.gallery img {
        width: 100%;
        height: 50%;
    }

    div.desc {
        padding: 15px;
        text-align: center;
        background-color: rgba(101,6,126,1);
        height: 250px;
        overflow-y: hidden;
        overflow-x: hidden;


    }
    div.desc:hover{
        overflow-y: auto;
    }

    * {
        box-sizing: border-box;
    }

    .responsive {
        padding: 0 6px;
        float: left;
        width: 24.99999%;
        height: 550px;
    }

    @media only screen and (max-width: 700px) {
        .responsive {
            width: 49.99999%;
            height: 550px;

            margin: 6px 0;
        }
    }

    @media only screen and (max-width: 600px) {
        .responsive {
            width: 100%;
            height: auto;
        }
    }

    .clearfix:after {
        content: "";
        display: table;
        clear: both;
    }

</style>
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
        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="{{asset('uploads/'.$giveway['image'])}}">
                    <img src="{{asset('uploads/'.$giveway['image'])}}" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc"> <h4 style="color:white; size: auto">{{$giveway['title']}}</h4>
                    <h5 style="color:white";> Registration Date:{{$giveway['registration_date']}}</h5>
                    <h5 style="color:white";> Announcement Date:{{$giveway['announcement_date']}}</h5>
                    <p class="desc"style="color:black"; >{{$giveway['description']}}</p>
                    <button type="button" class="btn btn-primary" data-id="{{$giveway['id']}}">Join Now</button>
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


