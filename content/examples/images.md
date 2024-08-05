---
title: Images
name: Images
parent: "Examples"
---
<ul class="breadcrumbs">
	<li><a href="/dewey-design/" tabindex="-1">Home</a></li>
	<li><a href="" tabindex="-1">Assessments</a></li>
	<li><a href="" tabindex="-1">Getting started with assignments</a></li>
	<li><a href="" tabindex="-1">Develop your search strategy</a></li>
	<li><a href="" tabindex="-1">Choose valid sources</a></li>
</ul>
<a id="main-content"></a>
<h1 class="margin-top-zero">Images</h1>
<p class="lead">The design system offers various options in displaying images including  borders, alignment, sizing and adding captions and transcript accordions.
</p>
<ul class="link-list">
	<li><a href="#options">Image options</a></li>
	<li><a href="#sizing">Sizing</a></li>
	<li><a href="#captions">Captions and transcripts</a></li>
	<li><a href="#portrait">Portrait images</a></li>
</ul>
<h2>Markup</h2>
<p>For images used in page content, wrap all <code>&lt;img&gt;</code> tags in a <code>&lt;figure&gt;</code> tag. Remember to include an alt tag.</p>
<figure>
    <img src="http://localhost:1313/images/landscape.jpg" alt="An example image" />
</figure>
<div class="highlight">
<pre class="chroma">
<code class="language-html">&lt;figure&gt;
   &lt;img src=&rdquo;my-image.jpg&rdquo; alt=&rdquo;An example image&rdquo; / &gt;
&lt;/figure&gt;</code>
</pre></div>
<h2>Defaults</h2>
<ul>
	<li>Each image has a margin of <strong>space-large</strong> applied top and bottom</li>
	<li>The default max width for images is <strong>640px</strong></li>
	<li>Images are aligned to the left by default</li>
</ul>
<a id="options"></a>
<h2>Image options</h2>
<ul>
	<li>Use the class <code>my-border</code> to add a border. This can be useful for diagram images on a white background. The border colour used is interface-grey.</li>
	<li>Use the <code>centre</code> class to centre the image.</li>
	<li>Use the <code>drop-shadow</code> class to add a drop shadow. Use sparingly.</li>
	<li>Use the <code>round-corners</code> class to add rounded corners. Use sparingly.</li>
	<li>Multiple classes can be added</li>
</ul>
<figure class="my-border drop-shadow round-corners centre">
    <img src="http://localhost:1313/images/1364-structure-atom-drawing.png" alt="An example image" />
</figure>
<div class="highlight">
<pre class="chroma">
<code class="language-html">&lt;figure class=&rdquo;my-border drop-shadow round-corners centre&rdquo;&gt;
   &lt;img src=&rdquo;my-image.jpg&rdquo; alt=&rdquo;An example image&rdquo; / &gt;
&lt;/figure&gt;</code>
</pre></div>
<a id="sizing"></a>
<h2>Sizing</h2>
<p>By default the max-width is set to <strong class="nowrap">640px</strong>.</p>
<p>A range of attributes can override this max-width value:</p>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Attribute</th>
      <th>max-width</th>
      <th>Suggested use</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><code>size="wide"</code></td>
      <td>100%</td>
      <td>Very wide images that aren’t too tall</td>
    </tr>
    <tr>
      <td><code>img-width-md</code></td>
      <td>400px</td>
      <td>Portrait and square images</td>
    </tr>
    <tr>
      <td><code>img-width-sm</code></td>
      <td>296px</td>
      <td>Really tall portrait images</td>
    </tr>
  </tbody>
</table>
<figure class="img-width-md">
    <img src="http://localhost:1313/images/landscape.jpg" alt="An example image" />
	<figcaption>A medium image with class "img-width-md" applied.</figcaption>
</figure>
<figure class="wide">
    <img src="http://localhost:1313/images/landscape.jpg" alt="" />
	<figcaption>A wide image with class "wide" applied.</figcaption>
</figure>
<div class="highlight">
<pre class="chroma">
<code class="language-html">&lt;!-- full width image --&gt;
&lt;figure class=&quot;wide&quot;&gt;
    &lt;img src=&quot;my-image.jpg&quot; alt=&quot;An example image&quot; /&gt;
&lt;/figure&gt;
&lt;!-- large width image --&gt;
&lt;figure class=&quot;img-width-lg&quot;&gt;
    &lt;img src=&quot;my-image.jpg&quot; alt=&quot;An example image&quot; /&gt;
&lt;/figure&gt;
&lt;!-- medium width image --&gt;
&lt;figure class=&quot;img-width-md&quot;&gt;
    &lt;img src=&quot;my-image.jpg&quot; alt=&quot;An example image&quot; /&gt;
&lt;/figure&gt;
&lt;!-- small width image --&gt;
&lt;figure class=&quot;img-width-sm&quot;&gt;
    &lt;img src=&quot;my-image.jpg&quot; alt=&quot;An example image&quot; /&gt;
&lt;/figure&gt;</code>
</pre></div>
<a id="captions"></a>
<h2>Captions and transcripts</h2>
<p>Captions can provide context for the use of an image and provide a place to attribute and credit the source of an image. A caption can be added using <code>caption="Insert caption here"</code></p>
<p>Transcripts are a way to provide an accessible alternative to an image, where a longer description is required that can be provided by an alt tag. To add a transcript, place a <code>&lbrack;transcript&rbrack;</code> shortcode in between the <code>&lbrack;ll-image&rbrack;</code> shortcode. <a href="insert-link.html">Find ut more information about the transcript shortcode.</a></p>
<!-- START figure caption and transcript -->
<figure>
    <img src="http://localhost:1313/images/landscape.jpg" alt="" />
	<figcaption>An example caption for this image.</figcaption>
	<!-- START accordion item -->
	<div class="accordion-item transcript">
		<p class="accordion-header" id="Transcript-headingOne">
		  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Transcript-collapseOne" aria-expanded="false" aria-controls="Transcript-collapseOne">
			Transcript
		  </button>
		</p>
		<div id="Transcript-collapseOne" class="accordion-collapse collapse" aria-labelledby="Transcript-headingOne" style="">
		  <div class="accordion-body">
			<p>How do I structure an essay? Essays have three parts: A beginning... A middle... and an end. That is, the introduction, body, and conclusion. It’s important to have structure in your essay, or you will lose the flow of your argument.</p>
			<p>How do I write an essay introduction? Writing an essay introduction can sometimes be quite challenging. It helps to break down your introduction into three important parts: First, start by introducing your topic. Then, state your argument. And finally, outline your main points.</p>
			</div>
		  </div>
	</div>
	<!-- END accordion item -->
</figure>
<!-- END figure caption and transcript -->
<!-- START code example -->
<div class="highlight">
<pre class="chroma">
<code class="language-html">&lt;figure class=&quot;img-transcript&quot;&gt;
	&lt;img src=&quot;my-image.jpg&quot; alt=&quot;An example image&quot; /&gt;
	&lt;figcaption&gt;An example caption for this image.&lt;/figcaption&gt;
	&lt;div class=&quot;accordion-item transcript&quot;&gt; 
		&lt;!-- lots of additional accordion code goes here --&gt;	
	&lt;/div&gt;
&lt;/figure&gt;</code>
</pre></div>
<!-- END code example -->
<p>Caption and transcript can be used independently with no issue.</p>
<!-- START code example -->
<div class="highlight">
<pre class="chroma">
<code class="language-html">&lt;figure class=&quot;img-transcript&quot;&gt;
	&lt;img src=&quot;my-image.jpg&quot; alt=&quot;An example image&quot; /&gt;
	&lt;figcaption&gt;An example caption for this image.&lt;/figcaption&gt;
&lt;/figure&gt;</code>
</pre></div>
<!-- END code example -->
<!-- START code example -->
<div class="highlight">
<pre class="chroma">
<code class="language-html">&lt;figure class=&quot;img-transcript&quot;&gt;
	&lt;img src=&quot;my-image.jpg&quot; alt=&quot;An example image&quot; /&gt;
	&lt;div class=&quot;accordion-item transcript&quot;&gt; 
		&lt;!-- lots of additional accordion code goes here --&gt;	
	&lt;/div&gt;
&lt;/figure&gt;</code>
</pre></div>
<!-- END code example -->
<a id="portrait"></a>
<h2>Portrait image (25rem)</h2>
<p>When using a portrait, the default width of <strong>640px</strong> might make the image too tall. You can use <code>portrait="true"</code> to both limit the width to <strong>400px</strong> and place the caption to the right of the image.</p>


<p>Using <code>portrait="true"</code> in conjunction with <code>size="sm"</code> further limits the width to <strong>296px</strong>. This is useful for really tall images. Note that other size parameters and centring do not work with <code>portrait="true"</code></p>

<p>When using portrait images, using sizing classes such as <code>img-width-md</code> or <code>img-width-sm</code> can be helpful in ensuring the image height isn't too tall. When adding captions or transcripts, use the <code>portrait</code> or <code>portrait-small</code> class to allow the caption to be presented to the side of the image.</p> 
<p>Note that using these classes supersede any image sizing classes used. Using <code>portrait</code>, the image has a max width of <strong>25rem (400px)</strong>, for <code>portrait-small</code>, it's <strong>18.5rem (296px)</strong>. An additional wrapper div groups the image an caption together to allow these more complex layouts to function.</p>
<!-- START figure portrait default -->
<figure class="portrait">
	<div class="image-caption-wrapper">
		<img src="http://localhost:1313/images/portrait.jpg" alt="" />
		<figcaption>An example caption for this image.</figcaption>
	</div>
	<!-- START accordion item -->
	<div class="accordion-item transcript">
		<p class="accordion-header" id="Transcript-head1">
		  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Transcript-body3" aria-expanded="false" aria-controls="Transcript-body3">
			Transcript
		  </button>
		</p>
		<div id="Transcript-body3" class="accordion-collapse collapse" aria-labelledby="Transcript-head3">
		  <div class="accordion-body">
			 <!-- content goes here -->
			 <p>This is the transcript content. So complicated. Oh well.</p>
		  </div>
		</div>
	</div>
	<!-- END accordion item -->
</figure>
<!-- END figure portrait default -->
<div class="highlight">
<pre class="chroma">
<code class="language-html">&lt;figure class=&quot;portrait&quot;&gt;
	&lt;div class=&quot;image-caption-wrapper&quot;&gt;
		&lt;img src=&quot;my-image.jpg&quot; alt=&quot;An example image&quot; /&gt;
		&lt;figcaption&gt;An example caption for this image.&lt;/figcaption&gt;
	&lt;/div&gt;
	&lt;!-- START accordion item --&gt;
	&lt;div class=&quot;accordion-item transcript&quot;&gt;
		&lt;!-- lots of additional accordion code goes here --&gt;
	&lt;/div&gt;
	&lt;!-- END accordion item --&gt;
&lt;/figure&gt;</code>
</pre></div>
<h2>Portrait image small (18.5rem)</h2>
<!-- START figure portrait default -->
<figure class="portrait-small">
	<div class="image-caption-wrapper">
		<img src="http://localhost:1313/images/tall-portrait.jpg" alt="" />
		<figcaption>An example caption for this image.</figcaption>
	</div>
	<!-- START accordion item -->
	<div class="accordion-item transcript">
		<p class="accordion-header" id="Transcript-head1">
		  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Transcript-body4" aria-expanded="false" aria-controls="Transcript-body4">
			Transcript
		  </button>
		</p>
		<div id="Transcript-body4" class="accordion-collapse collapse" aria-labelledby="Transcript-head4">
		  <div class="accordion-body">
			 <!-- content goes here -->
			 <p>This is the transcript content. So complicated. Oh well.</p>
		  </div>
		</div>
	</div>
	<!-- END accordion item -->
</figure>
<!-- END figure portrait default -->
<div class="highlight">
<pre>
<code>&lt;figure class=&quot;portrait-small&quot;&gt;
	&lt;div class=&quot;image-caption-wrapper&quot;&gt;
		&lt;img src=&quot;my-image.jpg&quot; alt=&quot;An example image&quot; /&gt;
		&lt;figcaption&gt;An example caption for this image.&lt;/figcaption&gt;
	&lt;/div&gt;
	&lt;!-- START accordion item --&gt;
	&lt;div class=&quot;accordion-item transcript&quot;&gt;
		&lt;!-- lots of additional accordion code goes here --&gt;
	&lt;/div&gt;
	&lt;!-- END accordion item --&gt;
&lt;/figure&gt;</code>
</pre></div>

<!-- START figure portrait default -->
<figure class="portrait-small">
	<div class="image-caption-wrapper">
		<img src="/images/tall-portrait.jpg" alt="" />
		<figcaption>An example caption for this image.</figcaption>
	</div>
</figure>
<!-- END figure portrait default -->

<div class="highlight">
<pre>
<code>&lbrack;SCROLL this long code url="https://path.to/image.jpg" alt="An example image" border="true" rounded="true" shadow="true" align="centre"&rbrack;&lbrack;/ll-image&rbrack;</code>
</pre></div>

<div class="highlight wrap-code">
<pre>
<code>WRAP this long code ll-image url="https://path.to/image.jpg" alt="An example image" border="true" rounded="true" shadow="true" align="centre"&rbrack;&lbrack;/ll-image&rbrack;</code>
</pre></div>



