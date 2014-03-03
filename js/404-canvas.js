$(document).ready(function() {
  /*
  ------ VARIABLES -----
  */
	var canvas = $("#game-404-canvas");
	var context = canvas.get(0).getContext("2d");
	
  var gameStarted = false;
  
  // position variables
	var canvasWidth = canvas.width();
	var canvasHeight = canvas.height();
  var player = {
    x: canvasWidth/2,
    y: canvasHeight/2,
    size: 5,
    speed: 2,
    color: "#333333",
    secondColor: "#666666",
    draw: function() {
      context.beginPath();
      context.arc(this.x + 1, this.y, this.size, 0, Math.PI*2, true);
      context.closePath();
      context.fillStyle = this.secondColor;
      context.fill();
      
      context.beginPath();
      context.arc(this.x, this.y, this.size, 0, Math.PI*2, true);
      context.closePath();
      context.fillStyle = this.color;
      context.fill();
    }
  };
	
  // inputs
  var keysDown = {};

  /*
  ------ FUNCTIONS -----
  */
  // Resize Canvas
	function resizeCanvas() {
    canvas.attr("width", canvas.width());
    canvas.attr("height", canvas.height());

    canvasWidth = canvas.width();
    canvasHeight = canvas.height();
    
    if ( !gameStarted ) {
      start();
    }
	}
	
	resizeCanvas();
	
	$(window).resize(resizeCanvas);
  
  // start function
	function start(){
    // Rectangle
		context.beginPath(); // rectangle
		context.lineWidth = 3;
		context.strokeRect(2, 2, canvasWidth - 4, canvasHeight - 4);
    
    // Giant 404
    context.font = "140px Source Sans Pro";
    context.textAlign = 'center';
    context.fillStyle = '#EF4B6D';
    context.fillText("404", canvasWidth/2, 180);

    // Sorry Text
    context.font = "24px Source Sans Pro";
    context.fillStyle = '#000000';
    context.fillText("The page you're looking for is currently on a secret mission.", canvasWidth/2, 240);

    // Game Hint Text
    context.font = "14px Source Sans Pro";
    context.fillStyle = '#666666';
    context.fillText("Why not play a little game in the meantime?", canvasWidth/2, 290);
    
    // Game hint BG
		context.beginPath(); // rectangle
    context.fillStyle = '#FACAD5';
		context.fillRect(canvasWidth/3 + 40, 350, canvasWidth/3 - 80, 40);
    
    // Game Hint Text
    context.font = "14px Source Sans Pro";
    context.fillStyle = '#EF4B6D';
    context.textAlign = 'center';
    context.fillText("Play now", canvasWidth/2, 375);
	}
  
  
  // draw function
	function draw() {
    // Game hint BG
		context.beginPath(); // rectangle
    context.fillStyle = '#666666';
		context.fillRect(0, 0, canvasWidth, 40);
    
    // Game Hint Text
    context.font = "14px Source Sans Pro";
    context.fillStyle = '#CCCCCC';
    context.textAlign = 'center';
    context.fillText("Draw something using your keyboard arrows!", canvasWidth/2, 25);
    
    // Rectangle
		context.beginPath(); // rectangle
		context.lineWidth = 3;
		context.strokeRect(2, 2, canvasWidth - 4, canvasHeight - 4);
    
    player.draw();
  }
	
	function update() {
    
    // keyboard inputs
    if ( 38 in keysDown && player.y > (player.size + 40 ) ) {
      player.y = player.y - player.speed;
    }

    if ( 40 in keysDown && player.y < (canvasHeight - player.size) ) {
      player.y = player.y + player.speed;
    }

    if ( 37 in keysDown && player.x > (player.size) ) {
      player.x = player.x - player.speed;
    }

    if ( 39 in keysDown && player.x < (canvasWidth - player.size) ) {
      player.x = player.x + player.speed;
    }
	}
  
  canvas.on("click", function() {
    if ( !gameStarted ) {
      gameStarted = true;
      context.clearRect(0,0,canvasWidth,canvasHeight);
      setInterval( runGame, 30 );
    }
  });
  
  function runGame() {
    update();
    draw();
  }
  
  addEventListener("keydown", function(key) {
    keysDown[key.keyCode] = true;
  }); // If a key is pressed, add it to the keysDown list

  addEventListener("keyup", function(key) {
    delete keysDown[key.keyCode];
  }); // If the key is no longer being pressed, delete it from the list
  
  start();
});