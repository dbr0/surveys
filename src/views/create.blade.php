<form action="{{ route('dbr0_surveys/store') }}" method="POST">
    Parent:<br>
    <select name="parent">
        <option value="1">Volvo</option>
        <option value="2">Saab</option>
        <option value="3">Mercedes</option>
        <option value="4">Audi</option>
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