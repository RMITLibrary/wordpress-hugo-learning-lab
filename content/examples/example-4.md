---
title: Example 4
name: Example 4
parent: "Examples"
---
<nav aria-label="breadcrumbs"><ul class="breadcrumbs"><li><a href="/">Home</a></li><li><a href="/assessments">Assessments</a></li><li><a href="/reflective-writing-1">Reflective writing</a></li></ul></nav>			            
<a id="main-content"></a>


<h1 class="margin-top-zero">Test Yourself: Sustainable Development Goals quiz</h1>

<p>View the different structural parts of each example across a number of artists working in different mediums and media.</p>
<h2>Short artist statement - 47 words</h2>
<p>A short artist statement which captures the visual style and impact of this creative work in an informal yet bold text.</p>
<div class="frog">
	<blockquote>
		<a id="mark-up-content"></a>
		<p><strong>@gun_shy_design<br />#texturalintercourse</strong><br />Mixed media installation<br />RMIT University Gallery</p>
		<p><span id="what">#texturalintercourse is a magnificent, OTT, tongue in cheek, contemporary, psychedelic, psycho-sexual journey. A pop subversion exploring fetish in the everyday normality of life.</span><a href="#button-group" >Back to buttons</a> <span id="context">It’s a mad world out there&ellipse;. Who knows what’s really on people’s minds or behind closed doors?&ellipse;<a href="#button-group" >Back to buttons</a></span> <span id="intent">Interact with our piece and hashtag #texturalintercourse lovers.</span></p>
		<p><span id="acknowledgements">Thanks to @honchodisko and all the beauties at the 200th Birthday who wrote on our toilet wall lining. We love you!<a href="#button-group" class="visually-hidden">Back to buttons</a></span></p>
		<p class="small">&copy; Copyright @gun_shy_design<br />Melbourne, Australia<br />@gun_shy_design is RMIT alumnus</p>
	</blockquote>
	<div class="button-group" id="button-group">
		<p><strong>Click the buttons</strong> to highlight the structure and different parts of the text above.</p>
		<a class="btn btn-default text-markup-btn" role="button" href="#what">What – description of the installation</a>
		<a class="btn btn-default text-markup-btn" role="button" href="#context">Context – how it links to contemporary culture</a>
		<a class="btn btn-default text-markup-btn" role="button" href="#intent">Artist intent – audience interaction</a>
		<a class="btn btn-default text-markup-btn" role="button" href="#acknowledgements">Acknowledgements</a>
		<a class="btn btn-default" role="button" id="showAll" href="#mark-up-content">Show all</a>
	</div>
</div>

<script>
// Declare array of colours
var colArray = [
"color-teal",
"color-pink",
"color-green",
"color-purple",
"color-brown",
"color-blue",
"color-red",
"color-yellow"
];
// Select all elements with the class "text-markup-btn"
var elements = document.getElementsByClassName("text-markup-btn");
// Iterate over each element and add an event listener
for (let i = 0; i < elements.length; i++) {
    elements[i].addEventListener("click", function(event) {
        handleClick(event.target, i);
    });
}
// Define the event handler function
function handleClick(button, index) {
    resetAllTextHighlights();
	highlightText(button, index);	
}
function resetAllTextHighlights()
{
	//get all the spans in a blockquote,
	var blockquote = document.querySelector('blockquote');
	var spans = blockquote.querySelectorAll('span');
	//remove all classes
	spans.forEach(function(span) {
		removeClasses(span);
	});
	//get all the buttons of type text-markup-btn
	var elements = document.querySelectorAll(".text-markup-btn");
	//remove all classes, except for button ones
	elements.forEach(function(element) {
		removeClasses(element);
	});
}
function highlightText(button, index)
{
	//Get the span tag of the text we wnat to highlight
	var theTextId = button.getAttribute('href').substring(1);
	var theText = document.getElementById(theTextId);
	//grab the next colours in the colourArray
	var colIndex = getColour(index);
	//add the classes to the theTest to show the highlight
	theText.classList.add(colArray[colIndex]);
	button.classList.add(colArray[colIndex]);
	//add in a back to content link at the end
}
//Grab colour class from array, wrap around if required
function getColour(index) {
	if(index >= colArray.length) {
		return (index - colArray.length);
	}
	else {
		return index;
	}
}
function removeClasses(element)
{
	var classesToKeep = ['btn', 'btn-default', 'text-markup-btn'];
    // Iterate over the class list and remove classes that are not in the classesToKeep array
    element.classList.forEach(function(className) {
        if (!classesToKeep.includes(className)) {
            element.classList.remove(className);
        }
    });
}
function highlightAll() {
	var elements = document.getElementsByClassName("text-markup-btn");
	// Iterate over each element and add an event listener
	for (let i = 0; i < elements.length; i++) {
		highlightText(elements[i], i);
	}	
}
//add event listener to showAll button
showAll.addEventListener("click", function(event) {
	highlightAll();
});
</script>







