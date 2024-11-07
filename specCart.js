function addCart(n, q)
{
    var iteminfo = {id : n, quantity : q};

    $.ajax(
        {
            type: "POST",
            url: "specCart.php",
            data: iteminfo,
            success: function(response) {window.location.href = "cart.php";},
            error: function() {alert("Could not add item to cart.");}
        }
    );
}