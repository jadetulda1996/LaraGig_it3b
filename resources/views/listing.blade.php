<h1>SINGLE LISTING</h1>

{{-- @foreach ($listings as $listing) --}}
<h4>{{ $listing['title'] }}</h4>
<p>{{ $listing['description'] }}</p>
{{-- @endforeach --}}

<h3>
    <a href="/listings" style="text-decoration: none;"> &lt; Back </a>
</h3>

