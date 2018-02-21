
<header>

    <style>


    .box {
      width: 40%;
      margin: 0 auto;
      background: rgba(255,255,255,0.2);
      padding: 35px;
      border: 2px solid #fff;
      border-radius: 20px/50px;
      background-clip: padding-box;
      text-align: center;
  }

  .button {
      font-size: 1em;
      padding: 10px;
      border: 2px solid ;
      border-radius: 20px/50px;
      text-decoration: none;
      cursor: pointer;
      transition: all 0.3s ease-out;
  }
  .button:hover {
      background: #06D85F;
  }

  .overlay {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgba(0, 0, 0, 0.7);
      transition: opacity 500ms;
      visibility: hidden;
      opacity: 0;
  }
  .overlay:target {
      visibility: visible;
      opacity: 1;
  }

  .popup {
      margin: 70px auto;
      padding: 20px;
      background: #fff;
      border-radius: 5px;
      width: 30%;
      position: relative;
      transition: all 5s ease-in-out;
  }

  .popup h2 {
      margin-top: 0;
      color: #333;
      font-family: Tahoma, Arial, sans-serif;
  }
  .popup .close {
      position: absolute;
      top: 20px;
      right: 30px;
      transition: all 200ms;
      font-size: 30px;
      font-weight: bold;
      text-decoration: none;
      color: #333;
  }
  .popup .close:hover {
      color: #06D85F;
  }
  .popup .content {
      max-height: 30%;
      overflow: auto;
  }

  @media screen and (max-width: 700px){
      .box{
        width: 70%;
    }
    .popup{
        width: 70%;
    }
    }.a9 {margin-top:300px; margin-left:300px; float:left;}
</style>
</header>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="a9">

   <div clas="a9"></div> <a class="button" href="#popup1">Inscrire </a>


   <div id="popup1" class="overlay">
    <div class="popup"><br />
        <h3>Inscription Administrateur</h3>

        <a class="close" href="#">×</a><br>
        <a class="close" href="#">×</a><br>

        Prénom: <br/> <input name="prenom" value="" name="prenom" placeholder="prenom"/><br/>
        User:<br /> <input name="user" value="" name="name" placeholder="user" /><br />
        Password:<br /> <input name="email" type="Password" value="" name="name" placeholder="*******" /><br /><br />
        
        <button class="btn btn-success">submit </button> 
             
    </div>
</div>
</div>

</div>
</div>