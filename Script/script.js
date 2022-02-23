//randomImg is a function that will generate a random background from the array. 
// The images are made in CSS through classes will be selected via a random number and be sent to the image container div
// Note: All backgrounds MUST be pixel arts and gifs ideally cyberpunked themed. That is a design choice and a gameplay decision  
function randomImg() {
    let backgroundCycle=['imageAllships', 'image75lf','imageDesktop','imageGlass','imageGlitchCity','imageVA','imagePixel','imageRain','imageRainCyber','imageGalaxxy'];
    console.log(backgroundCycle);
    let randomBackground = Math.random() * backgroundCycle.length;
    console.log(randomBackground);

    let addBackground = backgroundCycle[parseInt(randomBackground)];
    console.log(addBackground);
    
    document.getElementById('imageContainer').classList.add(addBackground);
    document.getElementById('Endingimg').classList.add(addBackground);
    
};
// I needed a way to execute the function upon page load, this is the way i came up with
randomImg();
 



var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
console.log(date);
let timeScore;
let finalscore;
let backface = document.querySelectorAll(".back-face");
let backface2 = document.querySelectorAll(".back-face2");

let cardFlipped = false;
let boardlock = false;
let firstCard;
let secondCard = null;
let counter= 0;


// For a flip animation to happen assigning the flip class on add to the cards was a way to do it
let cards= document.querySelectorAll(".cards");

// Loop to assign click event to all the cards for the flip to happen
cards.forEach(card => card.addEventListener('click', flipCard));

function flipCard(){
    //This fixes the bug where rifle clickling will let the previous cards flip 
    if(boardlock) return;
    // this will fix a bug where clicking twice the card will remove the flip class and remain unflip
    if( this === firstCard) return;
    if(secondCard !== null) return; 
    this.classList.add('flip');
    if(!cardFlipped){
        // first click
        cardFlipped = true;
        firstCard=this; 
        

        return;
    }
        //second click
        secondCard=this;
        checkForMatch();
  }

  function checkForMatch(){
    //   this will check for match
      let isMatch = firstCard.dataset.framework === secondCard.dataset.framework;
        isMatch ? disable() : unflipCards();     

        timeScore=time;
       console.log(timeScore);
          }
    
function disable(){
    //This will stop cards from being clickable again 
    firstCard.removeEventListener('click', flipCard);
    secondCard.removeEventListener('click', flipCard);    
    pairCounter();
    console.log(counter);
    win();
    
   setTimeout(()=>{hideCard(); resetBoard();}, 1000);   
    }    

    // Function Hides Cards by adding a class
function hideCard(){    
    firstCard.classList.add("hideMatch");
    secondCard.classList.add("hideMatch");  
}
    
function unflipCards(){
        // This will unflip cards after timer runs out by removing a class
        boardlock =true;
        setTimeout(() =>{
            firstCard.classList.remove('flip');
            secondCard.classList.remove('flip');
            resetBoard();
        }, 2500);
    }

    // This fixes a bug where clicking twice would remove 
function resetBoard(){
    [cardFlipped, boardlock] = [false, false];
    [firstCard, secondCard] = [null, null];
}

(function shuffle(){
    cards.forEach(card =>{
        let randomPos = Math.floor(Math.random()*36);
        card.style.order = randomPos;
      
    })
})();

// start button will remove the startoverlay and start the countdown timer 
//function for timer
const startingMinutes =5;
let time =startingMinutes*100;
let countdownEl = document.getElementById("Timer");
let startGame = document.getElementById("starNewGame");
let resetGame = document.getElementById("resetGame");
let intervalId;
let timerpause = false;
let pausebutton = document.getElementById("pause");


function updateCountdown(){
    const minutes = Math.floor(time/100);
    let seconds= time % 100;
    seconds = seconds < 10 ? '0' + seconds : seconds;
    countdownEl.innerHTML = `${minutes}${seconds}`; 
    if (timerpause === true) {
        return;
    }else{
    if (seconds > -1) {
     time--;
     
    }
    if (time === 0) {
        let GameOver= document.getElementById("Gameover");
        GameOver.classList.remove("overlayOff");
        

    }
}
};

function finalCountdown(){ 
    
        intervalId= setInterval(updateCountdown, 1000);
          
        
}


function turnOffStart(){ 
    document.getElementById('startMenu').classList.remove('startOverlay');
    document.getElementById('startMenu').classList.add('startOverlayOff');
   
    
}
;
function barcountdown(){
    document.getElementById('countdownBar').classList.remove('timeprogress');
    document.getElementById('countdownBar').classList.add('timeprogress-countdown')
}
    
function pairCounter(){ 
   firstPair= firstCard.dataset.framework ;
   secondPair = secondCard.dataset.framework;
    if (firstPair === secondPair) {
        counter++;
        console.log(counter);
    }
}


function win(){
    let endTrigger= document.getElementById("containwin")
    console.log(endTrigger)
    if (counter === 2) {
       var body =new FormData();
       body.append("score", timeScore);
       body.append("date", date);
        fetch("./php/score.php", {
           method: 'POST',
           body
       })
       endTrigger.classList.remove("overlayOff");
       timeScore= document.getElementById("record");
       timeScore= document.getElementById("date")
        
     }
}

function reset(){
    location.reload();
}

function colorswitchAlpha(){
    backface.forEach( (b) => {
        b.classList.toggle("back-face2-on");
        b.classList.toggle("back-face-off");
    })
    backface2.forEach( (b) => {
        b.classList.toggle("back-face2-on");
    })
    progressBar.classList.toggle("timeprogress2")
}



function colorswitchBravo(){
    backface2.forEach( (b) => {
        b.classList.toggle("back-face-2");
        b.classList.toggle("back-face2-on");
    })
    progressBar.classList.toggle("timeprogress2")
}

function pauseAnimation(){
    
    var barCountdown = document.getElementById("countdownBar");
    barCountdown.classList.toggle("timeprogress-pause");
   
}

let colorswitchA = document.getElementById("colorAlpha");
let colorswitchB = document.getElementById("colorBravo");
let progressBar = document.getElementById("countdownBar")

// All events on buttons goes here 
startGame.addEventListener("click", finalCountdown);
startGame.addEventListener("click", turnOffStart);
startGame.addEventListener("click", barcountdown);

resetGame.addEventListener("click",reset);
resetGameOver.addEventListener("click",reset);
 
colorswitchA.addEventListener("click", colorswitchAlpha);
colorswitchB.addEventListener("click", colorswitchBravo);


pausebutton.addEventListener("click", pauseAnimation);

