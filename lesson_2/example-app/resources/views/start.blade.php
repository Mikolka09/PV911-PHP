<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if(false)
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
    </p><br>
@elseif(false)
    <p>Hello!</p>
@else(true)
    {{--<p>Else!</p>--}}
@endif
@unless(true)
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
    </p><br>
@endunless
@isset($a)
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
        <br>
@endisset

{{--@for ($i=0; $i<$x->count; $i++)
    {{$i}} <br>
@endfor--}}
{{--@foreach($x as $iter)
    @foreach($users as $user)
        {{$loop->iteration}}
        <span>{{$user->name}}</span>
    @endforeach
    <br><br>
@endforeach--}}


{{--@forelse($x as $user)
    --}}{{--<p>{{$user->name}}</p>--}}{{--
@empty
   Here
@endforelse--}}

@while(true)
    <p>-------</p>
@break
@endwhile
</body>
</html>
