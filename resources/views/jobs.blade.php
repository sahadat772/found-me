<!DOCTYPE html>
<html lang="en">

<head>
    <title>Found Me</title>
</head>

<body>
    <h1>Jobs List</h1>

    @foreach($jobs as $job)
    <h3>{{ $job->title }}</h3>
    <p>Company: {{ $job->company }}</p>
    <p>Location: {{ $job->location }}</p>
    <p>Salary: {{ $job->salary }}</p>
    <p>Description: {{ $job->description }}</p>
    <p>Type: {{ $job->type }}</p>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">🗑️ Delete</button>
    </form>

    <a href="/jobs/{{ $job->id }}/edit">✏️ Edit</a>
    <hr>
    @endforeach
</body>

</html>