<h2>Survey</h2>
<p>{{ $survey->id }} | {{ $survey->name }} - {{ $survey->slug }} - {{ $survey->description }}</p>

<h4>Owner</h4>
<p>Owner: {{ $survey->parent_id }} | {{ $survey->owner->name ?: $survey->owner->email }}</p>

<h4>Actions</h4>
<p>
    <a href="#!">Add Question</a><br>
    <a href="#!">Add Checkboxes</a><br>
    <a href="#!">Add Radio</a><br>
</p>

<hr>

<p>
    <a href="{{ route('dbr0_surveys/index') }}">List all surveys</a><br>
    <a href="{{ route('dbr0_surveys/create') }}">Create another survey</a><br>
</p>