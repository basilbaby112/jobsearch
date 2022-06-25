{{$heading}}

@foreach ($blogs as $blog)
    <h1><a href="/blog/{{$blog['id']}}">{{$blog['title']}}</a></h1>
    <p>{{$blog['description']}}</p>
@endforeach