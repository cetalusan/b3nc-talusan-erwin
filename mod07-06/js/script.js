// function generateTable() {
// 	var num = parseInt(document.inputForm.num.value);
// 	// console.log(num);

// 	var step = parseInt(document.inputForm.step.value);
// 	// console.log(step);

// 	var row = num / step;
// 	var element = "";
// 	var boxClass = "";
// 	var classBox = "";

// 	/* calculation of cell height relative to number of rows */
// 	var boxHeight = row / 4;
// 	boxHeight = Math.round(boxHeight);
// 	boxHeight = 100 / boxHeight;

// 	var z = step;
// 	for (var x = 0; x <= (row / 4); x++) {
// 		for (var y = 0; y < 4; y++) {
// 			if (z <= num) {
// 				if ((x % 2 == 0) && (y % 2 == 0)) {
// 					boxClass = "black";
// 				}

// 				if ((x % 2 == 0) && (y % 2 == 1)) {
// 					boxClass = "white"
// 				}

// 				if ((x % 2 == 1) && (y % 2 == 0)) {
// 					boxClass = "white"
// 				}

// 				if ((x % 2 == 1) && (y % 2 == 1)) {
// 					boxClass = "black"
// 				}

// 				element += "<div class='box " + boxClass + "'><h2>" + z + "</h2></div>";

// 				z = z + step;
// 			}
// 		}
// 	}

// 	document.getElementById("mainWrapper").innerHTML = element;
// 	classBox = document.getElementByClassName("box"); /* array of elements */

// 	for (var i = 0; i < classBox.length; i++){
// 		classBox[i].style.height = boxHeight + "vh";
// 		classBox[i].style.lineHeight = boxHeight + "vh";
// 	}
// }
// var yourName = "Juan Dela Cruz";
// var counter = 0;
// var markup = "";
// while (counter < 10) {
// 	markup = markup + "<p>" + yourName + "</p>";
// 	counter = counter + 1;
// }
// document.getElementById("yourMessage").innerHTML = markup;


var expression = "";

function updateDisplay(val) {
	// console.log(val);
	expression = expression + val;
	document.getElementById("display").innerHTML = expression;

	// return expression;
}

function computeExpression() {
	// console.log(expression);
	var result = eval(expression);
	document.getElementById("display").innerHTML = result;
	expression = "";
}

function clearDisplay() {
	expression = "";
	document.getElementById("display").innerHTML = 0;
}

function deleteLastChar() {
	expression = expression.substr(0, expression.length-1);

	if (expression == "") {
		document.getElementById("display").innerHTML = 0;
	} else {
		document.getElementById("display").innerHTML = expression

	}	
}