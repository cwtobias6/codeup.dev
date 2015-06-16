// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'blue'; // TODO: change this to your favorite color from the list

// TODO: Create a block of if/else statements to check for every color except indigo and violet.

if(color === "red") {	
	console.log("red")
};
	else if (color === "orange") {
		console.log("orange")
	};
	else if (color === "yellow") {
		console.log("yellow")
	};
	else if (color === "green") {
		console.log("green")
	};
	else if (color === "blue") {
		console.log("blue")
	};
		else{
			console.log("the computer selected indigo or violet")
		};


// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

if(color === "red") {	
	console.log("Red rover red rover.")
};
	else if (color === "orange") {
		console.log("Orange you glad you got me?!")
	};
	else if (color === "yellow") {
		console.log("Mellow Yellow")
	};
	else if (color === "green") {
		console.log("The grass is always greener on the other side")
	};
	else if (color === "blue") {
		console.log("Sunday Blues")
	};
		else{
			console.log("the computer selected indigo or violet")
		};


// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

if(color === "red") {	
	console.log("Red rover red rover.")
};
	else if (color === "orange") {
		console.log("Orange you glad you got me?!")
	};
	else if (color === "yellow") {
		console.log("Mellow Yellow")
	};
	else if (color === "green") {
		console.log("The grass is always greener on the other side")
	};
	else if (color === "blue") {
		console.log("Sunday Blues")
	};
		else{
			console.log("I do not know anything by that color")
		};



// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.

var colours = (color === favorite) ? "That's my favorite!!!" : "Ouch! That hurts my eyes";


