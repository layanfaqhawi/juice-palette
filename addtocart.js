function addCart(n)
{
    var iteminfo = {id : n};

    $.ajax(
        {
            type: "POST",
            url: "addtocart.php",
            data: iteminfo,
            success: function(response) {window.location.href = 'cart.php';},
            error: function() {alert("Could not add item to cart.");}
        }
    );
}