<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('/css/style.css')}}">
<script src="{{asset('/js/user.js')}}" type="text/javascript"></script>


<!------ Include the above in your HEAD tag ---------->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">QUESTION TYPE HERE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"></ul>
        <form class="form-inline my-2 my-lg-0">
            <span class="btn btn-outline-success my-2 my-sm-0" id="countdown_timer"></span>
        </form>
    </div>
</nav>
@yield('content')


<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="copyright-text">
                    <p style="text-align: center">CopyRight © Tes Kemampuan 2020</p>
                </div>
            </div> <!-- End Col -->
            <div class="col-sm-6">
                <ul class="social-link pull-right">
                    <li><a href=""><span class="glyphicon glyphicon-heart-empty"></span></a></li>
                    <li><a href=""><span class="glyphicon glyphicon-heart-empty"></span></a></li>
                    <li><a href=""><span class="glyphicon glyphicon-heart-empty"></span></a></li>
                    <li><a href=""><span class="glyphicon glyphicon-heart-empty"></span></a></li>
                    <li><a href=""><span class="glyphicon glyphicon-heart-empty"></span></a></li>
                </ul>
            </div> <!-- End Col -->
        </div>
    </div>
</div>