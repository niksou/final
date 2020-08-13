<head>
    <meta charset="UTF-8">

    <title>The Gun Show</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


    <script src="myScript.js" async>
    </script>


</head>

<header>
    <div class="navigation-bar">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav-bar">
            <a class="navbar-brand" href="index.php">
                <img class="logo"  img src="https://static.spotapps.co/web/gunshowatl--com/custom/gunshow_logo.png"
                     alt="site-logo"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <button type="button" class="cart1" id="cart"><i class="fa fa-shopping-cart"></i><span
                    id="cartcount"></span></button>
            <div id="popup" class="cartPopup">
                <form method="get" action="/cart.php?" >
                    <ul id="cart-list">
                        <li id="cloneItem" style="display: none;" data-item-id="0">
                            <label>name: </label>
                            <input name="name" type="text" value="" disabled>
                            <br>
                            <label>amount: </label>
                            <input name="amount" type="text" value="" disabled>
                            <br>
                            <label>price: </label>
                            <input name="price" type="text" value="" disabled>
                            <hr>
                        </li>
                    </ul>
                    Total : <span id="sum">0  </span>$
                    <input type="submit" value="Place Order">
                </form>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="https://gunshowatl.com/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://gunshowatl.com/atlanta-glenwood-park-gunshow-about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://gunshowatl.com/#contact_v3">Contact</a>
                    </li>

                </ul>

            </div>
        </nav>

    </div>
    <br>
    <br>
    <br>
    <br>
</header>