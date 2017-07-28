<p>
    Survey id: {{ $survey->id }}
</p>

<p>{{ $survey->id }} | {{ $survey->name }} - {{ $survey->slug }} - {{ $survey->description }} - Parent: {{ $survey->parent_id }}</p>

<p>
    <a href="{{ route('dbr0_surveys/index') }}">List all surveys</a>
    <a href="{{ route('dbr0_surveys/create') }}">Create another survey</a>
</p>