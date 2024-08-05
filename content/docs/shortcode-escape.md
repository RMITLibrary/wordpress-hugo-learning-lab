---
title: Shortcode escaper
name: Shortcode escaper
nav: type1
---
<ul class="breadcrumbs">
	<li><a href="/dewey-design/" tabindex="-1">Home</a></li>
	<li><a href="" tabindex="-1">Referencing</a></li>
</ul>
<a id="main-content"></a>
<h1>Bracket Escaper</h1>
<p>Paste your code with brackets into the first text area, and the escaped content will appear in the second text area.</p>
<textarea id="inputText" placeholder="Paste your code here..."></textarea>
<textarea id="outputText" placeholder="Escaped content will appear here..." readonly></textarea>
<br>
<button class="btn btn-default" onclick="escapeBrackets()">Escape Brackets</button>

<script>
    function escapeBrackets() {
        const inputText = document.getElementById('inputText').value;
        const escapedText = inputText.replace(/\[/g, '&lbrack;').replace(/\]/g, '&rbrack;');
        document.getElementById('outputText').value = escapedText;
    }
</script>

<style>
textarea {
    width: 100%;
    height: 10rem;
    margin-bottom: 4rem;
}
</style>