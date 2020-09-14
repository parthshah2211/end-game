@extends('layouts.app')

@section('content')
    <style>
        table#kurosawa {
            height:auto0;
            width: fit-content;
            background-image: url('{{ asset('C:\xampp\htdocs\endgame\public\img\free fire.jpg')}}');
            border-collapse: collapse;
        }
        table#kurosawa caption
{

font-size: larger;
padding: 1em;
    margin-top: 300px;
}
table#kurosawa td {
padding: .7em;
}
table#kurosawa thead tr {
background: #000;
color: #fff;
}
table#kurosawa tbody tr:nth-child(odd) {
background: rgba(0,0,0,0.3);
}
table#kurosawa tbody tr:hover {
background: rgba(0,0,0,0.8);
color: #fff;
cursor: pointer;
}
text-decoration: none;
color: #fff;
background: #000;
padding: .7em;
display: block;

}
table#kurosawa thead tr th a:hover {
background: #777;
}
table#kurosawa col:target {
background: rgba(255,0,0,0.5);
color: #0a0a0a;
}





</style>
    <section class="page-top-section set-bg" data-setbg="{{asset('img/page-top-bg/3.jpg')}}">
        <div class="page-info">
            <h2>GIVE-WAY</h2>
            <div class="site-breadcrumb">
                <a>GIVE -WAY</a>
                <span></span>
            </div>
        </div>
    </section>

    <table id="kurosawa" STYLE="margin-top:40px;margin-bottom:40px;  ">
        <col><col><col>
        <caption style="color:blue; background-color:aquamarine; ">The Masterworks of Akira Kurosawa</caption>
        <thead>
        <tr>
            <th>Title
            <th>Year of Release
            <th>Run Time
            <th>1
            <th>2
        </thead>
        <tbody>
        <tr>
            <td>Rashomon
            <td>1950
            <td>88 minutes
            <td>23
            <td>23
        <tr>
            <td>Ikuru
            <td>1952
            <td>143 minutes
            <td>123
            <td>2112121
        <tr>
            <td>Seven Samurai
            <td>1954
            <td>207 minutes
            <td>1212
            <td>1232
        </tbody>
    </table>
