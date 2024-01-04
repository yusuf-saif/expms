<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Password Input with Toggle</title>
</head>
<body>

<div class="container mt-5">
    <form>
        <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="password" placeholder="Enter your password" aria-describedby="passwordToggle">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="passwordToggle">Show</button>
                </div>
            </div>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        $('#passwordToggle').on('click', function () {
            const passwordInput = $('#password');
            const passwordFieldType = passwordInput.attr('type');
            
            if (passwordFieldType === 'password') {
                passwordInput.attr('type', 'text');
                $(this).text('Hide');
            } else {
                passwordInput.attr('type', 'password');
                $(this).text('Show');
            }
        });
    });
</script>

</body>
</html>
