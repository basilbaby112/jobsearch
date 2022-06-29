{{$heading}}

@if(count($listings)==0)

<h2>No blogs Found</h2>
@else

@foreach ($listings as $listing)
    <h1><a href="/{{$listing['id']}}">{{$listing['title']}}</a></h1>
    <p>{{$listing['description']}}</p>
@endforeach

@endif