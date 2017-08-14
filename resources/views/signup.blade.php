<!doctype html>
<html lang="{{ app()->getLocale() }}">
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

    <div class="content">
        <div class="title m-b-md">


        {{ Form::open(['url'=>'signup', 'class'=>'']) }}
        {{ Form::label('name','Name: ')}}
        {{ Form::text('name', null, ['class'=>'input column']) }}<br>
<br>
        {{ Form::label('address','Address 1: ') }}
        {{ Form::text('address', null, ['class'=>'input column']) }}<br>

        {{ Form::label('address2','Address 2: ') }}
        {{ Form::text('address2', null, ['class'=>'input column']) }}<br>

        {{ Form::label('city','City: ') }}
        {{ Form::text('city', null, ['class'=>'input column']) }}<br>

        {{ Form::label('state','State: ') }}
        {{ Form::select('state', ['florida' => 'Florida','georgia' => 'Georgia','alabama' => 'Alabama','Lousiana' => 'Lousiana']) }}

<br>
        {{Form::checkbox('agree','yes',false)}}
        {{Form::label('agree','I agree to your terms of service') }}
        {{Form::submit('Submit',['class'=>'btn btn-large btn-primary']) }}
        {{Form::reset('Clear',['class' => 'secondary']) }}
        {{ Form::close() }}

        </div>
    </div>
</div>
</body>
</html>
