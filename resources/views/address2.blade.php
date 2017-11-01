<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

<?php echo View::make('navbar');?>

<br>
<table style="margin-top:10px;">
    <tr>
    <td><a href="{{asset('sort/id')}}">ID</a></td>
    <td><a href="{{asset('sort/name')}}">name</a></td>
    <td><a href="{{  asset('sort/tel') }}">tel</a></td>
    <td><a href="{{ asset('sort/addrs1') }}">addrs1</a></td>
    <td><a href="{{ asset('sort/addrs2') }}">addrs2</a></td>
    <td><a href="{{ asset('sort/zip')}}">zip</a></td>
    <td><a href="{{ asset('sort/city')}}">city</a></td>
    <td><a href="{{ asset('sort/state')}}">state</a></td>
    <td>    </td>
    </tr>
@foreach($address2 as $addr2)
    <tr>
        <td>{{$addr2->id}}</td>
        <td>{{$addr2->name}}</td>
        <td>{{$addr2->tel}}</td>
        <td>{{$addr2->addrs1}}</td>
        <td>{{$addr2->addrs2}}</td>
        <td>{{$addr2->zip}}</td>
        <td>{{$addr2->city}}</td>
        <td>{{$addr2->state}}</td>
        <TD>
        <a>
            <a href="{{asset('edit/'.$addr2->id)}}">
            EDIT
            </a>
            <a href="{{asset('delete/'.$addr2->id)}}">
            DELETE
            </a>

        </td>

    </tr>
@endforeach

</table>