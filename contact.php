<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Contact</title>

  <meta name="description" content="Source code generated using layoutit.com">
  <meta name="author" content="LayoutIt!">

  <link href="css/contact.css" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <style>

  body {
    background: url(images/montagne1.jpg); 
  }

</style>

</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">JNAK - CPIR</a>
      </div>
      <ul class="nav navbar-nav" style="font-size:15px">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="challenge.php">Challenge</a></li>
        <li><a href="profil.php">Profil</a></li>
        <li class="active"><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-3">
            <div class="thumbnail">
              <img src="images/jeremie.jpg" style="width: 70%; height: 70%">
              <div class="caption">
                <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                  Jeremie Sema
                </font></font></h3>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                  <FONT size="2">Gestion infrastructure. </FONT><td>
                  </font></font></p>

                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="thumbnail">
                <img alt="Bootstrap Vignette Deuxième" style="width: 70%; height: 70%" src="images/nathan.jpg">
                <div class="caption">
                  <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    Nathan Da Costa
                  </font></font></h3>
                  <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    <FONT >Gestion d'infrastrure et développement web.</FONT>
                  </font></font></p>

                </div>
              </div>
            </div>
            
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="well well-sm">
                    <form class="form-horizontal" action="" method="post">
                      <fieldset>
                        <legend class="text-center">Contact us</legend>

                        <!-- Name input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="name">Name</label>
                          <div class="col-md-9">
                            <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                          </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="email">Your E-mail</label>
                          <div class="col-md-9">
                            <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                          </div>
                        </div>

                        <!-- Message body -->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="message">Your message</label>
                          <div class="col-md-9">
                            <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                          </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group">
                          <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-primary btn-lg">Envoyé</button>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-3">
              <div class="thumbnail">
                <img alt="Bootstrap Vignette Deuxième" style="width: 70%; height: 70%" src="images/kentin.jpg">
                <div class="caption">
                  <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    Kentin Rodrigues
                  </font></font></h3>
                  <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    <FONT size="2">Dévoloppement Web.</FONT>
                  </font></font></p>

                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="thumbnail">
                <img alt="Bootstrap Vignette Troisième" style="width: 70%; height: 70%" src="images/alexis.jpg">
                <div class="caption">
                  <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    Alexis Dubourguais--Amy
                  </font></font></h3>
                  <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                   <FONT size="2">Développement Web et gestion base de donnée.</FONT>
                 </font></font></p>

               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>


   <!------ Include the above in your HEAD tag ---------->



   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/scripts.js"></script>

   <div  style="background-color: white;" class="container-fluid">
    <?php include 'footer.php'; ?>
  </div>
</body>
</html>