<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <button id="create">Create board</button>
        <button id="find">Find a board</button>

        <form name="form" id="form" action="create.php" method="POST">
            <label>Name:</label>
            <input type="text" name="name">
            <br/>
            <label>Password:</label>
            <input type="text" name="password">
        </form>

        <script>
            var create = document.getElementById('create');
            var form = document.getElementById('form');

            create.onclick = function() {
                form.submit();
            }
        </script>
    </body>
</html>