$(document).ready(function() {
	var canvas = $("#game-404-canvas");
	function resizeCanvas() {
		canvas.attr("width", canvas.width());
		canvas.attr("height", canvas.height());
		
		var canvasWidth = canvas.width();
		var canvasHeight = canvas.height();

		var context = canvas.get(0).getContext("2d");
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
		
		var catt = new Image();
		catt.src = "wp-content/themes/CATT6-2013_theme/img/canvas/catt/catt-standing.png";
		catt.onload = function(){
			context.drawImage(catt, canvasWidth/2 - 125, 40);
		};
	}
	
	resizeCanvas();
	
	$(window).resize(resizeCanvas);
});