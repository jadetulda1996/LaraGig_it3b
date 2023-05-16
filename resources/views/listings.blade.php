<h1>LISTINGS</h1>

@foreach ($listings as $listing)
<h4><a href="/listings/{{ $listing['id'] }}">{{ $listing['title'] }}</a></h4>
<p>{{ $listing['description'] }}</p>
@endforeach

