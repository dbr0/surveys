<p>
    Listing surveys!
</p>

<ul>
    @foreach($surveys as $survey)
        <li>{{ $survey->id }} | {{ $survey->name }} - {{ $survey->slug }} - {{ $survey->description }} - Parent: {{ $survey->parent_id }}</li>
    @endforeach
</ul>

<p>
    <a href="{{ route('dbr0_surveys/create') }}">Create another survey</a>
</p>