<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

<?php echo View::make('navbar');?>


{{$address2->id}}
{{Form::model($address2, ['url'=>'edit/'.$address2->id])}}

{{ Form::label('id','Id: ') }}
{{ Form::text('id')}}<br>

{{ Form::label('name','Name: ') }}
{{ Form::text('name')}}<br>

{{ Form::label('tel','Tel: ') }}
{{ Form::text('tel') }}<br>

{{ Form::label('addrs1','Addrs1: ') }}
{{ Form::text('addrs1') }}<br>

{{ Form::label('addrs2','Addrs2: ') }}
{{ Form::text('addrs2') }}<br>

{{ Form::label('zip','Zip: ') }}
{{ Form::text('zip') }}<br>

{{ Form::label('city','City: ') }}
{{ Form::text('city') }}<br>

{{ Form::label('state','State: ') }}
{{ Form::text('state') }}<br>

{{Form::submit('Submit Edit')}}
{{Form::close()}}