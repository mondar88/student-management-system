<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <style media="screen">
            html,
            body,
            header,
            #intro {
              height: 100%;
            }

            #intro {
              background: url("https://mdbootstrap.com/img/Photos/Horizontal/Nature/full%20page/img%20%283%29.jpg")no-repeat center center fixed;
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;
            }
        </style>

    </head>
    <body>

      <!--Mask-->
<div id="intro" class="view">

    <div class="mask rgba-black-strong">



                <div class="col-md-10">

                    <!-- Heading -->
                    <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">Travel</h2>

                    <!-- Divider -->
                    <hr class="hr-light">

                    <!-- Description -->
                    <h4 class="white-text my-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Deleniti
                        consequuntur.</h4>
                    <button type="button" class="btn btn-outline-white">Read more<i class="fa fa-book ml-2"></i></button>

                </div>

      

    </div>

</div>
<!--/.Mask-->

    </body>
</html>
