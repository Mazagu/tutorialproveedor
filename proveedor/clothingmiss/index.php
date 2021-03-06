<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/png">
    <!-- Favicon image: https://favicon.io/ -->
    <title>Clothing Miss</title>
    <style>
        #container {
            width: 240px;
            margin: 10px auto;
        }

        h1 {
            font-size: 2em;
            color: #ff647f;
            text-align: center;
            font-family: Arial;
            text-shadow: 1px 1px 0px black;
        }

        select {
            display: block;
            width: 100%;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
    </style>
</head>

<body>
    <div id="container">
        <h1>Miss T-Shirt</h1>
        <img src="https://loremflickr.com/240/320/t-shirt">
        <div id="product-options"></div>
    </div>

    <script>
        function productOptions(data) {
            var select = document.createElement("select");
            var container = document.querySelector("#product-options");

            for (attribute in data.sizes) {
                let option = document.createElement("option");
                option.value = attribute;
                option.innerHTML = attribute;
                if (data.sizes[attribute].qty == 0) {
                    option.disabled = true;
                    option.innerHTML = attribute + " out of stock";
                }
                select.appendChild(option)
            }

            container.appendChild(select);
        }

        function loadOptions() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    productOptions(JSON.parse(this.responseText));
                }
            };
            xhttp.open("GET", "info.php", true);
            xhttp.send();
        }

        loadOptions();
    </script>
</body>

</html>