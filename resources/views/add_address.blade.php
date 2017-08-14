<!doctype html>
<html lang="{{ app()->getLocale() }}">
<?php echo View::make('navbar') ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">


    <!-- Styles -->

</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif

    <div class="content container">
        <div class="form-group col-sm-auto ">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            @if(!isset($address))
                <h1>Add Address</h1>
                {{ Form::open(['url'=>'add_address', 'class'=>'']) }}
            @elseif(isset($address))
                <h1>Edit Mode</h1>
                {{ Form::model($address,['url'=>'address/edit/'.$address->id, $address->id] ) }}

            @endif

            {{ Form::label('name','Name: ')}}
            {{ Form::text('name', null, ['class'=>'form-control input', 'required','maxlength'=>'20']) }}<br>

            {{ Form::label('tel','Telephone: ')}}
            {{ Form::text('tel',null, ['class'=>'form-control input','required', 'maxlength'=>'10']) }}<br>

            {{ Form::label('addrs1','Address 1: ') }}
            {{ Form::text('addrs1', null, ['class'=>'form-control input', 'required', 'maxlength'=>'80']) }}<br>

            {{ Form::label('addrs2','Address 2: ') }}
            {{ Form::text('addrs2', null, ['class'=>'input form-control', 'maxlength'=>'80']) }}<br>


            {{ Form::label('zip','Zip Code: ') }}
            {{ Form::text('zip', null, ['class'=>'input form-control', 'required','maxlength'=>'8']) }}<br>

            {{ Form::label('city','City: ') }}
            {{ Form::text('city', null, ['class'=>'input form-control', 'required', 'maxlength'=>'20']) }}<br>

            {{ Form::label('state','State: ') }}
            {{ Form::text('state',null, ['class'=>'input form-control', 'required', 'maxlength'=>'20']) }}

            <br>
                <center>
            {{Form::submit('Submit',['class'=>'btn btn-large btn-primary']) }}
            {{Form::reset('Clear',['class' => 'btn btn-large btn-danger']) }}
                </center>
            {{ Form::close() }}

        </div>
    </div>
</div>
</body>
</html>
