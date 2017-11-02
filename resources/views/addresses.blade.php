<!DOCTYPE html>
<html><head>
	<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
	<?php echo View::make('navbar') ?>
	<div>
		<div style="width: 27%;float: left;">
			<h1>Address Book</h1>
		</div>
		
		<div style="clear: unset;float: right;display: inline;margin-right: 55%;margin-top: 27px;">	
		{{Form::open(['url'=>asset('address/filter/')],['class'=>'form-control'])}}
		{{Form::label('filter','Search: ',['class'=>'form-group'])	}}
		{{Form::text('filter',null,['class'=>'input form-group'])}}
		{{Form::close()}}
		</div>
	
	</div>
	
	@if(Session::has('flash_message'))
		<div class="alert alert-success">
			{{ Session::get('flash_message') }}
		</div>
	@endif


</head>

<body>




<table class='table' style="max-width:90%;">
    <tr style="background-color: smoke; color: black;">
   <thead> <td>Actions</td>
        <td><a href="{{asset('address/sort/name')}}">Name</a></td>
        <td><a href="{{asset('address/sort/addrs1')}}">Add1</a></td>
        <td><a href="{{asset('address/sort/addrs2')}}">Add2</a></td>
        <td><a href="{{asset('address/sort/zip')}}">Zip</a></td>
        <td><a href="{{asset('address/sort/city')}}">City</a></td>
        <td><a href="{{asset('address/sort/state')}}">state</a></td>
        <td><a href="#">Tel</a></td></thead>
</tr><tbody>
@foreach($address as $address1)
        <tr>
        <td>
            <a href="{{asset('address/edit/'.$address1->id)}}"><button class='btn btn-xs btn-primary'>Edit</button></a>
            <a href="{{asset('address/delete/'.$address1->id)}}"><button style="margin-left:2px;" class='btn btn-xs btn-danger'>X</button></a>

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
</tbody>
</table>
</body>
</html>
