---
title: Page templates
name: Page templates
---
<ul class="breadcrumbs">
	<li><a href="/dewey-design/" tabindex="-1">Home</a></li>
	<li><a href="" tabindex="-1">Referencing</a></li>
</ul>
<a id="main-content"></a>
<h1 class="margin-top-zero">Page templates</h1>
<p class="lead"There are a variety of page templates available for use in the Learning lab.  default page template will work for most pages, there are other options available. Page templates can be selected in the Page attributes box.</p>

<h2>Default template</h2>
<p><code>picostrap5-child-base/page.php</code></p>
<p>All content pages will use this template. It contains:</p>
<ul>
    <li>Header</li>
    <li>Breadcrumbs</li>
    <li>Content (including title)</li>
    <li>Right navigation</li>
    <li>Previous and next page buttons</li>
    <li>Additional resources (an html content area for additional links)</li>
    <li>Keywords</li>
    <li>Footer</li>
</ul>
<p>For screens wider than 1400px, the content is 856px wide, and the nav is 392px wide.</p>

<h2>Empty page template</h2>
<p><code>picostrap5-child-base/page-templates/empty.php</code></p>
<p>This template shouldn't be used very often. It's currently being used for the Kitchen Sink. It contains:</p>
<ul>
    <li>Header</li>
    <li>Content (title is excluded, needs to be added manually)</li>
    <li>Footer</li>
</ul>
<p>For screens wider than 1400px, the content is 1296px wide.</p>

<h2>Home page</h2>
<p><code>picostrap5-child-base/page-templates/home-page.php</code></p>
<p>Used for the home page. The html for five home panels is hardcoded in the template. It contains:</p>
<ul>
    <li>Header</li>
    <li>Markup for home panels</li>
    <li>Footer</li>
</ul>

<h2>Landing page</h2>
<p><code>picostrap5-child-base/page-templates/landing.php</code></p>
<p>Used for landing pages. Examples include Writing fundamentals, Maths and statistics and Referencing. It contains:</p>
<ul>
    <li>Header</li>
    <li>Home breadcrumb</li>
    <li>Content (including title)</li>
    <li>Footer</li>
</ul>
<p>For screens wider than 1400px, the content is 1296px wide.</p>

<h2>Last content page</h2>
<p><code>picostrap5-child-base/page-templates/last-content-page.php</code></p>
<p>Used for the last content page in a section. It omits the next button and prevents a transition form one content area (Referencing to Art and Design for instance). It contains:</p>
<ul>
    <li>Header</li>
    <li>Breadcrumbs</li>
    <li>Content (including title)</li>
    <li>Right navigation</li>
    <li>Previous page button</li>
    <li>Additional resources (an html content area for additional links)</li>
    <li>Keywords</li>
    <li>Footer</li>
</ul>
<p>For screens wider than 1400px, the content is 856px wide, and the nav is 392px wide.</p>
<h2>No side nav</h2>
<p><code>picostrap5-child-base/page-templates/no-side-nav.php</code></p>
<p>This template is an alternative to Landing page. It might be used if there's additional text accompanying the list of links provided. While the side nav is omitted, the content retains the same width as the default page template, ensuring a good line length. Art and design is a good example of this.</p>
<p>This template has:</p>
<ul>
    <li>Header</li>
    <li>Breadcrumbs</li>
    <li>Content (including title)</li>
    <li>Additional resources (an html content area for additional links)</li>
    <li>Keywords</li>
    <li>Footer</li>
</ul>
<p>For screens wider than 1400px, the content is 856px wide.</p>