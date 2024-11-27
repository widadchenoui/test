<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title> hotelbenouda.com </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
     body {
        font-size: 40px;
        margin: 0px;
        padding: 0px;
      }
.r-es {
    margin: 0px;
    padding-top: 20px;
    height: 60px;
    color: white;
    font-size: 25px;
    background-color: darkgoldenrod;
}
.c-res {
    padding-bottom: 10px;
    padding-left: 10px;
}
.r-ess {
    margin-left: 500px;
}
.e-nl {
    color: darkgoldenrod;
}
.r-esss {
    font-size: 15px;
    padding-left: 500px;

}
.r-res {
    font-size: 20px;
    padding-left: 50px;
}
.form {
     margin: 0px;
     padding: 0px;
     position: absolute;
     top: 140%;
     left: 55%;
          transform: translate(-50%, -50%);
         background-color: beige;
          border-radius: 10px;
          padding: 30px;
          font-size: 20px;
          width: 700px;
          text-align: center;
          height: 700px;
          margin-top: 20px;
      
        }
        form .corps-formulaire .gauche .form-group i{
position: absolute;
left: 0;
top: 25px;
padding: 13px 8px;
color: darkgoldenrod;
        }
        form .corps-formulaire .droite .form-group i{
position: absolute;
left: 0;
top: 25px;
padding: 13px 8px;
color: darkgoldenrod;
        }
        form .corps-formulaire .gauche .form-group input{
          margin-top: 10px; 
          padding: 10px 5px 10px 30px;
          border:1PX solid black;
outline-color: darkgoldenrod;
border-radius: 5px;
        }
        form .corps-formulaire .droite .form-group input{
          margin-top: 10px; 
          padding: 10px 5px 10px 30px;
          border:1PX solid black;
outline-color: darkgoldenrod;
border-radius: 5px;
        }
        form .corps-formulaire .gauche .form-group select{
          margin-top: 10px; 
          padding: 10px 5px 10px 30px;
          border:1PX solid black;
outline-color: darkgoldenrod;
border-radius: 5px;
        }
        form .corps-formulaire .form-group{
          position: relative;
          margin-top: 20px;
          display: flex;
          flex-direction: column;
        }
        form .corps-formulaire{
          display: flex;
          flex-wrap: wrap;
          margin-bottom: 50px;
        }
        form .corps-formulaire .droite{
          margin-left: 150px;
          width: 250px;
        }
        form .corps-formulaire .gauche{
          width: 250px;
        }
        form .corps-formulaire .droite .form-group select{
          margin-top: 10px; 
          padding: 10px 5px 10px 30px;
          border:1PX solid black;
outline-color: darkgoldenrod;
border-radius: 5px;
        }
        form .corps-formulaire .droite .form-group textarea{
          margin-top: 5px;
          padding: 10px;
          background-color: #f8f8f8;
          border: 1px solid black;
          border-radius: 2px;
          resize: none;
          height: 200px;
          outline-color: darkgoldenrod;
          border-radius: 5px;
        }
        input:focus,
      textarea:focus{
        autline:none;
        box-shadow: 0 0 8px #bbb;
      }
        button{
        margin-top: 50px;
        display: inline-block;
        padding: 12px 24px;
        background-color: darkgoldenrod;
        color: #fff;
        border: none;
        cursor: pointer;
        transition: 0,3 ease;
        margin-left: 280px;
        border-radius: 5px;
        transition: transform 0.5s;
           }
           button:hover{
            transform: scale(1.05);
           }


  </style>
</head>
<body>
  <?php


  ?>
<footer class="r-es"><span class="c-res" align="center"> Reservation </span>
</footer>
<br>
<br>
<br>
<span class="r-ess"> Réservation <span class="e-nl"> En ligne   </span></span>
<br>
<span class="r-esss"> Faites vos réservations rapidement et en toute simplicité</span>
<br>
<br>
<span class="r-res"> Poussés par notre passion pour l’hospitalité, nous travaillons dur pour vous offrir les meilleurs prix pour vos séjours, évènements, mariages et autres.</span>
<br>
<br>
<br>
<form  class="form" align="center">
    <div  class="corps-formulaire"> 
        <div class="gauche">
            <div class="form-group">
                <label> Votre Nom *</label>
                <input type="text" name="nom">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="form-group">
                <label> Votre Téléphone</label>
                <input type="tel" name="telephone">
                <i class="fa-solid fa-phone-volume"></i>
        </div>
        <div class="form-group">
            <label> Votre Email</label>
            <input type="email" name="email">
            <i class="fa-solid fa-envelope"></i>
        </div>
        <div class="form-group">
            <label> Room type</label>
           <select id="type" name="type">
            <option value="Single">Single</option>
            <option value="Chambre Standard Grand Lit">Chambre Standard Grand Lit</option>
            <option value="Chambre Standard Twin">Chambre Standard Twin</option>
            <option value="Swite">Swite</option>
           </select>
    </div>
    <div class="form-group">
        <label> Adultes</label>
       <select id="adultes" name="adultes">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
       </select>
</div>
<div class="form-group">
    <label> Enfants</label>
    <select id="enfants" name="enfants">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
       </select>
</div>

    </div>
    <div class="droite">
        <div class="form-group">
            <label> Arrivée</label>
            <input type="date" name="arrivée">
        </div>
        <div class="form-group">
            <label> Depart</label>
            <input type="date" name="départ">
        </div>
        <div class="form-group">
            <label> Service Extras ?</label>
            <select id="se" name="service extras">
                <option value="Non">Non</option>
                <option value="Oui Merci">Oui Merci</option>
               </select> 
        </div>
        <div class="form-group">
            <label> Information Supplémentaire</label>
            <textarea placeholder="saisissez ici..."  name="le Message"  cols="30" rows="10"></textarea>
        </div>
      
    </div> 
    <div class="button" align="center">
        <button type="submit"> Envoyer</button>
        </div>

</form>
<br>
<br>
<br>
</body>
</html>