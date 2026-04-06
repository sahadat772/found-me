<!DOCTYPE html>
<html>

<head>
    <title>Found Me — Search</title>
</head>

<body>
    <h1>Found Me Jobs</h1>

    <input type="text" id="search" placeholder="Job search করো...">
    <div id="results"></div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#search').keyup(function() {
                let keyword = $(this).val()

                if (keyword.length > 2) {
                    $.ajax({
                        url: '/search/jobs',
                        method: 'GET',
                        data: {
                            keyword: keyword
                        },
                        success: function(response) {
                            $('#results').html(response)
                        },
                        error: function() {
                            $('#results').html('<p>Error!</p>')
                        }
                    })
                } else {
                    $('#results').html('')
                }
            })
        })
    </script>
</body>

</html>