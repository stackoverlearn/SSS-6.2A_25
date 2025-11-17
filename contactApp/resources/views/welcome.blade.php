<html>
    <title>SSS Laravel</title>

    <div>
        <li><a href="{{ route('contacts.index') }}">All Contacts</a></li>
        <li><a href="{{ route('contacts.create') }}">Add Contact</a></li>
        <li><a href="{{ route('contacts.show', 1) }}">Show a Contact</a></li>
    </div>
</html>