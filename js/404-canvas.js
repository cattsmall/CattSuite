$(document).ready(function() {
	var canvas = $("#game-404-canvas");
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
	
	context.strokeRect(25, 25, canvasWidth - 50, canvasHeight - 50);
	
	var text = "Hello, World!";
	context.fillText(text, 40, 40);
	context.font = "italic 30px serif";
});