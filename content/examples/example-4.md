---
title: Example 4
name: Example 4
parent: "Examples"
---
<!-- START Blockquote nav shortcode -->
<section>
	<h2>Blockquote Navigation Shortcode</h2>
	<p>Creates a linked blockquote with options for category, extra-info and icon</p>
	<h3>Arguments:</h3>
	<ul>
		<li><strong>$content</strong> - text in the blockquote (optional)</li>
		<li><strong>$atts</strong> - attributes as follows:
			<ul>
				<li><strong>title</strong> - Title of the blockquote</li>
				<li><strong>link</strong> - URL to link to (rmith.edu.au is the default)</li>
				<li><strong>category</strong> - Small text shown above title (optional)</li>
				<li><strong>extra-info</strong> - Small text shown below content (optional)</li>
				<li><strong>icon</strong> - Absolute path to icon (optional - svg preferred)</li>
			</ul>
		</li>
	</ul>
<div class="highlight">
<pre class="chroma">
<code class="language-html">&lt;button class=&quot;btn btn-primary&quot; &gt;Primary button&lt;/button&gt;</code>
</pre></div>
<div class="highlight"><pre class="chroma"><pre><code>[blockquote-nav category='Category' link='/cohesion' title='This is the title' extra-info='Extra information' icon='https://path.to/icon.svg']This is the blockquote content.[/blockquote-nav]</code></pre></div>
	<h3>Expected Output:</h3>
	<blockquote class="complex">
		<a href="mylink">
			<div class="content">
				<p class="category">Category</p>
				<h3>This is a title</h3>
				<p>This is the blockquote content.</p>
				<small>Extra information</small>
			</div>
			<div class="icon-wrap">
				<img src="my-icon.png" alt="" />
			</div>
		</a>
	</blockquote>
</section>
<!-- END Blockquote nav shortcode -->