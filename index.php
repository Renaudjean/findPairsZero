<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Orbitron&display=swap" rel="stylesheet">
    <title>Find a Pair Zero</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php
    require_once './php/connect.php';?>
  <header id="topBar">
  <h1  class="score">SCORE: <span id="Timer"> </span> </h1>
  <button id="colorAlpha" type="button"> </button>
  <button id="colorBravo" type="button"> </button>
  <h1 id="findPair">Find a Pair <span id="ZERO"> ZERO </span></h1>
  <button id="pause" type="button"> </button>
  </header>
  
  <div id="playingField">
   <div id="imageContainer">
      <div id="gameOverlay">
  <section class="gameBoard">
     
      <div class="cards" data-framework="apple">
        <img class="front-face" src="./CardsAssets/Apple-1.png" alt="Flipped apple card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
      
      <div class="cards" data-framework="apple">
        <img class="front-face" src="./CardsAssets/Apple-1.png" alt="Flipped apple card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
      
      <div class="cards" data-framework="Banana">
        <img class="front-face" src="./CardsAssets/Banana-2.png" alt="Flipped Banana card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
      
      <div class="cards" data-framework="Banana">
        <img class="front-face" src="./CardsAssets/Banana-2.png" alt="Flipped Banana card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
      
      <div class="cards" data-framework="Cherry">
        <img class="front-face" src="./CardsAssets/Cherry-3.png" alt="Flipped cherry card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
      
      <div class="cards" data-framework="Cherry">
        <img class="front-face" src="./CardsAssets/Cherry-3.png" alt="Flipped cherry card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
      
      <div class="cards" data-framework="Glow-Berry">
        <img class="front-face" src="./CardsAssets/Glow-Berry-4.png" alt="Flipped Glow Berry card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
      
      <div class="cards" data-framework="Glow-Berry">
        <img class="front-face" src="./CardsAssets/Glow-Berry-4.png" alt="Flipped Glow Berry card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
      
      <div class="cards" data-framework="Grape">
        <img class="front-face" src="./CardsAssets/Grape-5.png" alt="Flipped Grape card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
    
      <div class="cards" data-framework="Grape">
        <img class="front-face" src="./CardsAssets/Grape-5.png" alt="Flipped Grape card">  
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
      
      <div class="cards" data-framework="Green-Grape">
        <img class="front-face" src="./CardsAssets/Green-Grape-6.png" alt="Flipped green grape card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
      
      <div class="cards" data-framework="Green-Grape">
        <img class="front-face" src="./CardsAssets/Green-Grape-6.png" alt="Flipped green grape card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
      
      <div class="cards" data-framework="Green-Apple">
        <img class="front-face" src="./CardsAssets/Green-Apple-7.png" alt="Flipped Green apple card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
      
      <div class="cards" data-framework="Green-Apple">
        <img class="front-face" src="./CardsAssets/Green-Apple-7.png" alt="Flipped Green apple card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
      
      <div class="cards" data-framework="Lemon">
        <img class="front-face" src="./CardsAssets/Lemon-8.png" alt="Flipped Lemon card"> 
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
      
      <div class="cards" data-framework="Lemon">
        <img class="front-face" src="./CardsAssets/Lemon-8.png" alt="Flipped Lemon card">
         <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
      
      <div class="cards" data-framework="Lime">
        <img class="front-face" src="./CardsAssets/Lime-9.png" alt="Flipped Lime card"> 
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
      
      <div class="cards" data-framework="Lime">
        <img class="front-face" src="./CardsAssets/Lime-9.png" alt="Flipped Lime card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>

      <div class="cards" data-framework="Mango">
        <img class="front-face" src="./CardsAssets/Mango-10.png" alt="Flipped Mango card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
     
      <div class="cards" data-framework="Mango">
        <img class="front-face" src="./CardsAssets/Mango-10.png" alt="Flipped Mango card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
   
      <div class="cards" data-framework="Orange">
        <img class="front-face" src="./CardsAssets/Orange-the-color-11.png" alt="Flipped Orange card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
    
      <div class="cards" data-framework="Orange">
        <img class="front-face" src="./CardsAssets/Orange-the-color-11.png" alt="Flipped Orange card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
     
      <div class="cards" data-framework="Peach">
        <img class="front-face" src="./CardsAssets/Peach-12.png" alt="Flipped Peach card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
    
      <div class="cards" data-framework="Peach">
        <img class="front-face" src="./CardsAssets/Peach-12.png" alt="Flipped Peach card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
    
      <div class="cards" data-framework="Peach-light">
        <img class="front-face" src="./CardsAssets/Peach-light-13.png" alt="Flipped Peach light card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
    
      <div class="cards" data-framework="Peach-light">
        <img class="front-face" src="./CardsAssets/Peach-light-13.png" alt="Flipped Peach light card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
  
      <div class="cards" data-framework="Pear">
        <img class="front-face" src="./CardsAssets/Pear-14.png" alt="Flipped Pear card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>

      <div class="cards" data-framework="Pear">
        <img class="front-face" src="./CardsAssets/Pear-14.png" alt="Flipped Pear card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
    
      <div class="cards" data-framework="Strawberry">
        <img class="front-face" src="./CardsAssets/Strawberry-15.png" alt="Flipped strawberry card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
    
      <div class="cards" data-framework="Strawberry">
        <img class="front-face" src="./CardsAssets/Strawberry-15.png" alt="Flipped strawberry card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
   
      <div class="cards" data-framework="Grenade">
        <img class="front-face" src="./CardsAssets/Grenade-16.png" alt="Flipped Grenade card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
    
      <div class="cards" data-framework="Grenade">
        <img class="front-face" src="./CardsAssets/Grenade-16.png" alt="Flipped Grenade card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
    
      <div class="cards" data-framework="Mangoustan">
        <img class="front-face" src="./CardsAssets/Mangoustan-17.png" alt="Flipped Mangoustan card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
    
      <div class="cards" data-framework="Mangoustan">
        <img class="front-face" src="./CardsAssets/Mangoustan-17.png" alt="Flipped Mangoustan card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
    
      <div class="cards" data-framework="Watermelon">
        <img class="front-face" src="./CardsAssets/Watermelon-18.png" alt="Flipped Watermelon card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
    
      <div class="cards" data-framework="Watermelon">
        <img class="front-face" src="./CardsAssets/Watermelon-18.png" alt="Flipped Watermelon card">
        <img class="back-face" src="./CardsAssets/BackofCard.png" alt="Unflipped card">
      </div>
    
  </section>  
     </div>
   </div>
  </div>
  
  <footer id="bottomBar">

  <div id="timecontainer">
    <div id="countdownBar"class="timeprogress">

    </div>
  </div>

  </footer>

  <!--This is the overlay sections for all the menu screens
     need to be here so in the load order they will be show on top of other elements it will avoid using Z-index -->
  


  <!-- startOverlay is the main container of all overlays it will be use as the background and the first parent -->
  <div id="startMenu" class="startOverlay">   
  <!-- Starting is the menu container all of the menu elements should be placed inside ²-->
    <div class="starting">
      <h1 id="startTitle"> Find a Pair <span class="ZERO"> ZERO </span></h1>
    
      <div id="hi-scores" name="hi-scores">
       <h2 id="record"> Record  </h2>

        <!--  Request for DATABASE-->
        <?php $req = $DB->query('SELECT * FROM `highscore` ORDER BY `highscore`.`Score` DESC LIMIT 5 ');
        $highscore = $req->fetchAll(PDO::FETCH_ASSOC); 
        foreach($highscore as $hs){
        ?>

        <h3 class="highScore"><?=$hs['Score']. " / ". $hs['Dates']; ?></h3>

        <?php } ?>
      </div>
      <button type="button" name="NewGameButton" id="starNewGame"> START NEW GAME</button>
    </div>
  </div>


   <!-- WINNING OVERLAY -->
   <div id="containwin" class="overlayOff">   

  <!-- Starting is the menu container all of the menu elements should be placed inside -->
  <div id="win">
    <div class="winner">
    
      <div id="Endingimg"></div>
      <div id="won" name="won">
      
       <h2 id="congratulations" > Well Done! You Won! </h2>        
      </div>
       
      <button type="button" name="resetGame" id="resetGame"  href="#"> Continue?</button>
    </div>
    </div>
  </div>





  <!-- If time runs out screen here -->
   <div id="Gameover" class="overlayOff">   
  <!-- Starting is the menu container all of the menu elements should be placed inside -->
    <div class="starting">
      <h1 id="Game"> GAME  OVER <span id="Over"><br> TRY AGAIN? </span></h1>
    
      <div id="hi-scores" name="hi-scores">
        <!--  Request for DATABASE-->
        <?php $req = $DB->query('SELECT * FROM `highscore` ORDER BY `highscore`.`Score` DESC LIMIT 5 ');
        $highscore = $req->fetchAll(PDO::FETCH_ASSOC); 
        foreach($highscore as $hs){
        ?>

        <h3 class="highScore"><?=$hs['Score']. " / ". $hs['Dates']; ?></h3>

        <?php } ?>
      </div>
       
      <button type="button" name="resetGame" id="resetGameOver"  >Continue?</button>
    </div>
  </div>

  <form method="post" >
    <input type="hidden" name="data" id="record" />
    <input type="hidden" name="data" id="date" />
  </form>

<script src="./Script/script.js"></script>

</body>
</html>