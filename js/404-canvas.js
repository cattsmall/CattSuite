$(document).ready(function() {
	var canvas = $("#game-404-canvas");
	var context = canvas.get(0).getContext("2d");
	
	var canvasWidth = canvas.width();
	var canvasHeight = canvas.height();
	
	function resizeCanvas() {
		canvas.attr("width", canvas.width());
		canvas.attr("height", canvas.height());
	}
	
	resizeCanvas();
	
	$(window).resize(resizeCanvas);
	
	function redrawCanvas() {
		context.beginPath(); // Start the path
		context.moveTo(25, canvasHeight - 100); // Set the path origin
		context.lineTo(canvasWidth - 25, canvasHeight - 100); // Set the path destination
		context.closePath(); // Close the path
		context.stroke(); // Outline the path
	
		context.beginPath(); // rectangle
		context.lineWidth = 3;
		context.strokeRect(25, 25, canvasWidth - 50, canvasHeight - 50);
	
		context.font = "24px Quicksand";
		context.fillText("Hello, World!", 40, 100);
		context.fillText("Press here to play.", 40, 150);
	}
	
	var imageReady = false;
	
	function onload(){
		var catt = new Image();
		catt.src = "wp-content/themes/CATT6-2013_theme/img/canvas/catt/catt-standing.png";
		context.drawImage(catt, canvasWidth/2 - 125, 40);
		catt.onload = loaded();
		redrawCanvas();
	}
	
	function loaded() {
		imageReady = true; setTimeout( update, 1000 / 60 );
		setTimeout( update, 1000 / 60 );
		redrawCanvas();
	}
	var frame = 0;
	
	function update() {
		redraw();
		frame++;
		if (frame >= 6) {
			frame = 0;
			setTimeout( update, 1000 / 60 );
		}
	}
	function redraw() {
		context.fillStyle = '#000000';
		context.fillRect(0, 0, canvas.width, canvas.height);
		if (imageReady) {
			context.drawImage(catt, frame*96, 0, 96, 54, canvas.width/2 - 48, canvas.height/2 - 48, 96, 54);
		}
	}
});