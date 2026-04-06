<!DOCTYPE html>
<html>
<head>
    <title>Edit Job</title>
</head>
<body>
    <h1>Job Edit করো</h1>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PUT')

        <p>
            <label>Title:</label>
            <input type="text" name="title" 
                   value="{{ $job->title }}">
        </p>

        <p>
            <label>Company:</label>
            <input type="text" name="company" 
                   value="{{ $job->company }}">
        </p>

        <p>
            <label>Location:</label>
            <input type="text" name="location" 
                   value="{{ $job->location }}">
        </p>

        <p>
            <label>Salary:</label>
            <input type="text" name="salary" 
                   value="{{ $job->salary }}">
        </p>

        <p>
            <label>Email:</label>
            <input type="email" name="email" 
                   value="{{ $job->email }}">
        </p>

        <p>
            <label>Type:</label>
            <select name="type">
                <option value="full-time" 
                    {{ $job->type == 'full-time' ? 'selected' : '' }}>
                    Full Time
                </option>
                <option value="part-time"
                    {{ $job->type == 'part-time' ? 'selected' : '' }}>
                    Part Time
                </option>
            </select>
        </p>

        <p>
            <label>Description:</label>
            <textarea name="description">{{ $job->description }}</textarea>
        </p>

        <button type="submit">Update Job</button>
    </form>

    <a href="/jobs">← Back to Jobs</a>
</body>
</html>