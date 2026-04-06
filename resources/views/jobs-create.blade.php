<!DOCTYPE html>
<html>

<head>
    <title>Add New Job</title>
</head>

<body>
    <h1>নতুন Job Add করো</h1>

    <form method="POST" action="/jobs">
        @csrf

        <p>
            <label>Job Title:</label>
            <input type="text" name="title">
        </p>

        <p>
            <label>Company:</label>
            <input type="text" name="company">
        </p>

        <p>
            <label>Location:</label>
            <input type="text" name="location">
        </p>

        <p>
            <label>Salary:</label>
            <input type="text" name="salary">
        </p>

        <p>
            <label>Email:</label>
            <input type="email" name="email">
        </p>

        <p>
            <label>Type:</label>
            <select name="type">
                <option value="full-time">Full Time</option>
                <option value="part-time">Part Time</option>
            </select>
        </p>

        <p>
            <label>Description:</label>
            <textarea name="description"></textarea>
        </p>

        <button type="submit">Job Add করো</button>
    </form>

    <a href="/jobs">← Back to Jobs</a>
</body>

</html>