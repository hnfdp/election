<html>

    <head>
        <title>ELECTION</title>
         <link href="css/bootstrap.min.css" rel="stylesheet">
         <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <img src="img/bemun.png">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Home</a></li>
              <li><a href="index.php">About</a></li>
              <li><a href="auth.php">Login</a></li>
              <li><a href="contact.php">Contact</a></li>
              
            </ul>
            <ul class="collapse nav navbar-nav nav-collapse" id="nav-collapse1">
              <li><a href="#">Web design</a></li>
              <li><a href="#">Development</a></li>
              <li><a href="#">Graphic design</a></li>
              <li><a href="#">Print</a></li>
              <li><a href="#">Motion</a></li>
              <li><a href="#">Mobile apps</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
      <div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us <small>If you have a question, Just ask us!</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our Location</legend>
            <address>
                <strong>Bem UNJ.</strong><br>
                Rawamangun, Jakarta Timur<br>
                Indonesia, 13220<br>
                <abbr title="Phone">
                    P:</abbr>
                (+62)21 2926 60 06
            </address>
            <address>
                <strong>Email</strong><br>
                <a href="mailto:#">bemunjmail@gmail.com</a>
            </address>
            <twitter>
                <strong>Twitter</strong><br>
                <a href="mailto:#">https://twitter.com/bemunj_official</a>
            </twitter>
            </form>
        </div>
    </div>
</div>

    

    
      <div class="footer" style="color: #fff; background: rgb(70,130,180)">
    <div>
      <ul>
      <p>
        <b>&#169; Hanifa Dian P & Syafira Dwi Herliana PTIK UNJ 2014</b>
      </p>
      </ul>
    </div>
  </div>
    </body>
     



</html>














