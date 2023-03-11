



<!-- translate -->
<h1> the template in English  : {{__('message.welcome')}}</h1>

<!-- Data by array -->

<h1>Passing Data by array </h1>

<p> Id Is : {{$id}} </p>
<p> My Name Is : {{$name}} </p>
<p> Age Is : {{$age}} </p>




<!-- Data by object -->
<h1>Passing Data by Objecct </h1>

<p> Id Is : {{$obj -> id}} </p>
<p> My Name Is : {{$obj -> name}} </p>
<p> Age Is : {{$obj -> age}} </p>




<!-- Directives -->
<h1>if Condition</h1>
@if($obj -> name === 'Rabie')
    <P>Yes, i am Rabie</p>
    @elseif($obj -> name === 'Ahmed')
    <P>Yes, i am Ahmed</p>
    @elseif($obj -> name === 'Ali')
    <P>Yes, i am Ali</p>
    @elseif($obj -> name === 'Mohamed')
    <P>Yes, i am Mohamed</p>
    @else
    <P>No, he does not Rabie</p>
    @endif



<!-- Comment
<h1>Foreach</h1>
-->
{{--
    @foreach($arr as $item)
    <p>{{$item}}</p>
    @endforeach
    --}}

{{--
@forelse($arr as $item)
    <p>{{$item}}</p>
    @empty
    <p>Empty Array</p>
    @endforelse
--}}
