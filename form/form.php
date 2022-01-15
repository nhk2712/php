<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body style="background-image:url('doc_icon_50.jpg')">
    <div class="center" id="form">    
    <form name="form1" action="form3.php" method="POST">
            <label name="label">Text: </label>
            <input type="text" name="text" id="text">
            <input type="submit">
    </form>
    </div>

        <style type="text/css">
            div[id="form"]
            {
                background-color: white;
                text-align: center;
                border: 1px solid gray;
                border-radius:10px;
                width: fit-content;
                margin: auto;
            }

            label[name="label"]
            {
                color:red;
            }

            form[name="form1"]
            {
                text-align: center;
                padding:50px;
            }

            input[type="text"]
            {
                border: 1px solid gray;
                outline: none;
                background: none;

            }
        </style>
    </body>
</html>
