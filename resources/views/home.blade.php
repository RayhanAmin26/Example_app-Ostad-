<h1>{{$num1Key}}</h1>
<h1>{{$num2Key}}</h1>
<h1>{{$sumKey}}</h1>

@if ($sumKey>18)
    <h1>I am adult</h1>
@else
    <h1>I am child</h1>
@endif

@for($i=0;$i<10;$i++)
<button>Submit{{$i}}</button>
@endfor

<ul>
    @foreach($users as $item)
        <li>{{$item['fname']}}</li>


    @endforeach


</ul>

<img src="{{asset('https://images.app.goo.gl/7YHjWG7xcaRLVMLP7')}}"/>

