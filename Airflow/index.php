<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar sticky-top navbar-light bg-light">
        <div class="container-fluid">

            <a class="navbar-brand" herf="#">
                <img src="paper-plane-solid.svg" width="30" height="30" class="d-inline-block align-top"> Airflow
            </a>

        </div>
    </nav>
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <br>
                <div class="card text-white bg-dark mb-3">
                    <div class="card-header">Airflow 1.0 </div>
                    <div class="card-body">
                        <h5 class="card-title">Airflow, a fast way to transfer images and videos, links between Windows and Ios. </h5>
                        <p class="card-text"> Do you have any bugs or problems? send me an <a class="alert-link" href="mailto:junsan@hotmail.de">email</a></p>
                    </div>
                </div>
                <div class="card text-white bg-info mb-6">
                    <div class="card-header">
                        Images and videos to ios
                    </div>
                    <div class="card-body">

                        <div class="input-group">
                            <form action="files/index.php" method="post" enctype="multipart/form-data">
                                <div class="input-group">
                                    <div class="custom-file">

                                        <input type="file" name="file" class="custom-file-input">
                                        <label class="custom-file-label" name="file">Drop here!</label>
                                    </div>
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="submit">Button</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <br>

                <div class="card text-white bg-warning mb-6">
                    <div class="card-header">
                        Link to ios
                    </div>
                    <div class="card-body">
                        <form action="files/url.php" method="get">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder=" URL !?????"  name="url" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="submit" id="button-addon2">Okay</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <BR>

                <script src="/js/bootstrap.min.js"></script>


            </div>
        </div>
    </div>
