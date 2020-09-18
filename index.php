<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Management </title>
    <!-- css -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="header " >
                <h1>Credit Management </h1>
                <h2>Project For Sparks Foundation</h2>
            </div>
            <div class="block ">
                <div class="button">
                    <button type="button" onclick="myFunction()" class="btn btn-warning  col-sm-12 mt-5">View Users
                    </button>
                    <button type="button" onclick="myfunction()" class="btn btn-dark col-sm-12 mt-5">Credit
                        Transfer</button>
                </div>
            </div>

        </div>
    </div>



    <!-- js for bootstarp -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script>
        function myFunction() {
            location.replace("getdetail.php")
        }
        function myfunction(){
            location.replace("selectuser.php")
        }
    </script>

</body>

</html>