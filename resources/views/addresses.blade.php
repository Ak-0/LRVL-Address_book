<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
<?php echo View::make('navbar') ?>
<h1>Address Book</h1>
@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
{{Form::open(['url'=>asset('address/filter/')])}}
{{Form::label('filter', 'Filter By: ')}}
{{Form::text('filter',null,['class'=>'form-control input filter'])}}
{{Form::close()}}<p><br></br></p>
<table>
    <tr style="background-color: lightgrey; color: black;">
    <td>Actions</td>
        <td><a href="{{asset('address/sort/name')}}">Name</a></td>
        <td><a href="{{asset('address/sort/addrs1')}}">Add1</a></td>
        <td><a href="{{asset('address/sort/addrs2')}}">Add2</a></td>
        <td><a href="{{asset('address/sort/zip')}}">Zip</a></td>
        <td><a href="{{asset('address/sort/city')}}">City</a></td>
        <td><a href="{{asset('address/sort/state')}}">state</a></td>
        <td><a href="#">Tel</a></td>
</tr>
@foreach($address as $address1)
        <tr>
        <td>
            <a href="{{asset('address/edit/'.$address1->id)}}"><button class='btn btn-xs btn-primary'>Edit</button></a>
            <a href="{{asset('address/delete/'.$address1->id)}}"><button class='btn btn-xs btn-danger'>Delete</button></a>

            </div>
        <td>
            {{$address1->name}}
        </td>
        <td>
            {{$address1->addrs1}}
        </td>
            <td>
                {{$address1->addrs2 }}
            </td>
            <td>
                {{$address1->zip}}
            </td>

            <td>
                {{$address1->city}}
            </td>
        <td>
            {{$address1->state }}
        </td>
        <td>
            {{$address1->tel }}
        </td>
        </tr>
@endforeach
</table>