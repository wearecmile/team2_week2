<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decorator | Design Pattern</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/custom.css" />
</head>

<body class="bgimg">
    <div class="container mt-3">
        <h3></h3>
        <form action="javascript:void(0)" method="post">
            <h5 class="form-text text-center" style="color: #1abc9c;">Decorator Design Pattern</h5>
            <h3 class="form-text text-center" style="color: #8e44ad; font-family: 'Oswald', sans-serif;"><b>Thali Menu</b></h3>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th><input type="checkbox" name="thali" value="thali"></th>
                        <td><label class="form-check-label" for="thali"> <b>Thali</b> </label><br>
                            <small>(Rice, Dal, Subji, Roti, Papad, Dahi (Yogurt), small amount of Chutney or Pickle, Sweet Dish and Salad)</small>
                        </td>
                        <td class="text-center">50.00/-</td>
                    </tr>
                    <tr>
                        <th><input type="checkbox" name="naan" value="naan"></th>
                        <td><label class="form-check-label">Butter Naan</label></td>
                        <td class="text-center">10.00/-</td>
                    </tr>
                    <tr>
                        <th><input type="checkbox" name="paratha" value="paratha"></th>
                        <td><label class="form-check-label">Aloo Paratha</label></td>
                        <td class="text-center">12.00/-</td>
                    </tr>
                    <tr>
                        <th><input type="checkbox" name="extraRoti" value="extraRoti"></th>
                        <td><label class="form-check-label">Extra Roti</label></td>
                        <td class="text-center">10.00/-</td>
                    </tr>
                    <tr>
                        <th><input type="checkbox" name="extraSubji" value="extraSubji"></th>
                        <td><label class="form-check-label">Extra Subji</label></td>
                        <td class="text-center">15.00/-</td>
                    </tr>
                    <tr>
                        <th><input type="checkbox" name="extraPapad" value="extraPapad"></th>
                        <td><label class="form-check-label">Extra Papad</label></td>
                        <td class="text-center">05.00/-</td>
                    </tr>
                    <tr>
                        <th><input type="checkbox" name="extraRice" value="extraRice"></th>
                        <td><label class="form-check-label">Extra Rice</label></td>
                        <td class="text-center">15.00/-</td>
                    </tr>
                    <tr>
                        <th><input type="checkbox" name="extraSweet" value="extraSweet"></th>
                        <td><label class="form-check-label">Extra Sweet Dish</label><small> <br> <b>Note :</b> Ice-Cream, Gulab-Jamun, etc.</small></td>
                        <td class="text-center">20.00/-</td>
                    </tr>
                    <tr id="price">
                        <th colspan="2" class="text-center">Total</th>
                        <td class="text-center">RS 00.00</td>
                    </tr>
                </tbody>
            </table>
            <button name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="./assets/js/jquery.min.js"></script>
    <script>
        $(document).on('click', 'button[name="submit"]', function() {
            var result = '';
            if ($('input[name="thali"]').is(":checked") == true) {
                $.ajax({
                    method: "POST",
                    url: "response.php",
                    data: {
                        thali: $('input[name="thali"]').is(":checked"),
                        extraRoti: $('input[name="extraRoti"]').is(":checked"),
                        extraSubji: $('input[name="extraSubji"]').is(":checked"),
                        extraPapad: $('input[name="extraPapad"]').is(":checked"),
                        extraRice: $('input[name="extraRice"]').is(":checked"),
                        extraSweet: $('input[name="extraSweet"]').is(":checked"),
                        paratha: $('input[name="paratha"]').is(":checked"),
                        naan: $('input[name="naan"]').is(":checked")
                    },
                    success: function(response) {
                        var amount = parseFloat(response).toFixed(2);
                        $("#price").html('<th colspan="2" class="text-center">Total</th><th id="price">RS ' + amount + '</th>');
                    }
                });
            } else {
                $("#price").html('<th colspan="3" class="text-center text-danger">Please Select Thali</th>');
            }
        });
    </script>
</body>

</html>