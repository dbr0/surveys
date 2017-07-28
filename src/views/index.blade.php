<p>
    Listing surveys!
</p>

<ul>
    @foreach($surveys as $survey)
        <li><a href="{{ route('dbr0_surveys/show',$survey->id) }}">{{ $survey->id }} | {{ $survey->name }} - {{ $survey->slug }} - {{ $survey->description }} - Owner: {{ $survey->parent_id }}</a></li>
    @endforeach
</ul>

<p>
    <a href="{{ route('dbr0_surveys/create') }}">Create another survey</a>
</p>