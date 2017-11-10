<!DOCTYPE html>
<html><head>
	<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
	<?php echo View::make('navbar') ?>
	<div>
		<div style="clear: unset;float: right;display: inline;margin-right: 10%;margin-top: 27px;">	
		{{Form::open(['url'=>asset('address/filter/')],['class'=>'form-control'])}}
		{{Form::label('filter','Search: ',['class'=>'form-group'])	}}
		{{Form::text('filter',null,['class'=>'input form-group'])}}
		{{Form::close()}}
		</div>
	
	</div>
	
	<script>
	$(document).ready(function() {
	// fade out flash 'success' messages
	$('.alert.alert-success').delay(500).hide(1500);
	});
	</script>


</head>

<body>

	@if(Session::has('flash_message'))
		<div class="alert alert-success withfadeout">
			{{ Session::get('flash_message') }}
		</div>
	@endif


	<table class="table table-hover table-responsive table-striped" style="max-width:90%;">
	<thead>
	    <tr class="info">
		<th></th>
        <th><a href="{{asset('address/sort/name')}}">Name</a></th>
        <th><a href="{{asset('address/sort/addrs1')}}">Add1</a></th>
        <th><a href="{{asset('address/sort/addrs2')}}">Add2</a></th>
        <th><a href="{{asset('address/sort/zip')}}">Zip</a></th>
        <th><a href="{{asset('address/sort/city')}}">City</a></th>
        <th><a href="{{asset('address/sort/state')}}">state</a></th>
        <th><a href="#">Tel</a></th>
        </tr>
	</thead>
	
	<tbody class="">
	@foreach($address as $address1)
        <tr>
        <td>
            <a href="{{asset('address/edit/'.$address1->id)}}">
            <center><div class='btn btn-lg btn-primary'><i class="fa fa-address-card" aria-hidden="true"></i>
            </div></center>
            </a>
		</td>
        <td>{{$address1->name}}</td>
        <td>{{$address1->addrs1}}</td>
        <td>{{$address1->addrs2 }}</td>
        <td>{{$address1->zip}}</td>
        <td>{{$address1->city}}</td>
        <td>{{$address1->state }}</td>
        <td>{{$address1->tel }}</td>
        </tr>
	@endforeach
	</tbody>
	
	</table>

	<center>
	{{ $address->links() }}
	</center>

</body>
</html>
