<form action="{{ route('dbr0_surveys/store') }}" method="POST">
    Parent:<br>
    <select name="parent">
        @foreach($parents as $parent)
            <option value="{{ $parent->id }}">{{ $parent->name ?: $parent->id }}</option>
        @endforeach
    </select><br>

    First name:<br>
    <input type="text" name="name" value="Test survey"><br>

    Last name:<br>
    <input type="text" name="description" value="This is a survey used for testing"><br><br>

    <input type="submit" value="Submit">
</form>

<p>
    <a href="{{ route('dbr0_surveys/index') }}">See full list</a>
</p>