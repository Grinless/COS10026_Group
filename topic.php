<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="description" content="creating web applications" />
	<?php
	require('header.inc');
?>
</head>
<body class="topic">
	<?php
	include('menu.inc');
	?>
<section class="topic">
	<h2> JSON History </h2>
	<h3>Who developed JSON</h3>
	<p>
		JSON was created by Douglas Crockford and Chip Morningstar between 2001 and 2002.
		“If XML were a superior document format, XHTML should easily have won over HTML, and it hasn't. HTML is still dominant, XHTML is failing.
		So, XML in the first place isn't a very good document format, and it's an even worse data interchange format.” - Douglas Crockford<span class="reference"><a href="#ref1">[1]</a></span><br>
		In contrast, JSON was designed as a data serialisation format in light of XML’s deficits
	</p>

	<h3>Who is responsible for managing it?</h3>
	<p>
		ECMA controls the JSON specification used to standardise the use of JSON through all computer systems.
		ECMA published the specification and also has the patent policy for it.
	</p>

	<h2>What is JSON?</h2>
	<h3>Purpose </h3>
	<p>
		JSON is a data interchange format, a text format used to exchange data between platforms. <span class="reference"><a href="#ref2">[2]</a></span>
		which may be used to communicate between largely different systems.
	</p>

	<h3>Creators Notes</h3>
	<p>Things to keep in mind when dealing with JSON syntax:</p>

	<ol>
		<li>Double quotes (“) on either side of all strings is recommended over single quotes for interoperability</li>
		<li>JSON is object oriented, so all declarations should appear between curly brackets ( ‘{‘ and ‘}’ ), defining an object.</li>
		<li>Additional attributes of an object must be delineated with commas (‘,’)</li>
		<li>Arrays of values are delineated with commas and appear between square braces ( ‘[‘ and ‘]’ )</li>
	</ol>

	<h3>What IS JSON's Future </h3>

	<figure>
		<a href="https://insights.stackoverflow.com/trends?tags=json%2Cxml%2Ccsv">
			<img id="graph" src=images/graph.png alt="Graph Representing Number of Times Each XML, CSV and JSON Was Searched in Stack Overflow Since 2008">
		</a>
		<figcaption>Graph Representing Number of Times Each XML, CSV and JSON Was Searched in Stack Overflow Since 2008</figcaption>
	</figure>

	<p>
		“JSON (JavaScript Object Notation) is a lightweight data-interchange format. It is easy for humans to read and write. It is easy for machines to parse and generate. It is based on a subset of the JavaScript Programming Language Standard ECMA-262 3rd Edition - December 1999. JSON is a text format that is completely language independent but uses conventions that are familiar to programmers of the C-family of languages, including C, C++, C#, Java, JavaScript, Perl, Python, and many others. These properties make JSON an ideal data-interchange language.” <span class="reference"><a href="#ref3">[3]</a></span> <br>
		While these are words from the creators of JSON, they remain credible and are clearly demonstrated while not only using JSON, but also in its evident popularity due to frequent searches on Stack overflow..
	</p>

	<section class="topicterms2">
		<h3>How does JSON compare</h3>
		<h4>XML (Extensible Markup Language) </h4>
		<aside>
			XML was originally made by the World Wide Web Consortium who also made HTML prior.
			However, HTML is now under the development of the Web Hypertext Application Technology Working Group.
		</aside>
		<p>
			XML is a markup language, used for data interchange. <br />
			It is the default choice as it’s fundamental format is standardised, allowing the recipient to parse the data.<br />
			Additionally tags are defined by the user, allowing for easier readability of data.
		</p>
	</section>

	<section class="topicterms2">
		<h4>JSON (JavaScript Object Notation)</h4>
		<p>
			JSON is an object notation, a text-based data interchange format.
			It is primarily used in Web browser-based code to represent simple data structures and objects.
			Which became popularised with programming using APIs code and web services.
			As it requires no additional code to parse, JSON is able to execute faster data interchanges.
		</p>
	</section>

	
	<!--Table starts here, 2 colums, 2 rows (1 head, 1 data with unordered list)-->
	<table>
		<tbody>
			<tr>
				<th>
					<p><span style="font-weight: bold;">XML</span></p>
				</th>
				<th>
					<p><span style="font-weight: bold;">JSON</span></p>
				</th>
			</tr>
			<tr>
				<td>
					<ul>
						<li>Is able to perform processing and formatting of documents and objects.</li>
						<li>Parsing is often bulky and slow, causing slower data transmission.</li>
						<li>Supports comments, namespaces and metadata.</li>
						<li>Files size is bulky and is more difficult to read as the tag structure adds unnecessary data.</li>
						<li>Can support more complex data structures including images, charts, and other non-primitive data types.</li>
						<li>XML supports Unicode Transformation Format (UTF) 8 and 16 encodings.</li>
					</ul>
				</td>
				<td>
					<ul>
						<li>It is not able to perform processing or computation</li>
						<li>The JavaScript engine is able to parse faster, thus allowing for faster transmission of data.</li>
						<li>There is no provision for comments, namespace nor writing metadata.</li>
						<li>Files are easy to read, as there are no redundant tags or data.</li>
						<li>Only supports numbers, strings, arrays, objects and Boolean. Additionally objects can only contain primitive types.</li>
						<li>JSON supports Unicode Transformation Format (UTF) as well as ASCII encodings.</li>
					</ul>
				</td>
			</tr>
		</tbody>
	</table>
	<!--Terminology section start. START.-->
	<section class="topicterms">
		<h3>Some important terms used are:</h3>
		<dl>
			<dt>
				<span style="font-weight:bold; text-decoration:underline;">JSON:</span>
			</dt>
			<dd>
				<p>&emsp;JavaScript Object Notation, a data interchange format.</p>
			</dd>
			<dt>
				<span style="font-weight: bold; text-decoration: underline; ">Data Interchange Format:</span> 
			</dt>
			<dd>
				<p>&emsp;A format for data that must be mutually intelligible between organisations exchanging data.</p> 
			<dd>
			<dt>
				<span style="font-weight: bold; text-decoration: underline;">CSV:</span> 
			</dt>
			<dd>
				<p>&emsp;Comma-Separated Values.</p>
			<dd>
			<dt>
				<span style="font-weight: bold; text-decoration: underline;">XML:</span> 
			</dt>
			<dd>
				<p>&emsp; Extensible Markup Language.</p>
			<dd>
			<dt>
				<span style="font-weight: bold; text-decoration: underline;">Superset:</span>
			</dt>
			<dd>
				<p>&emsp; A programming language that contains all the features of a given language and has been expanded or enhanced to include other features as well.</p>
			<dd>
			<dt>
				<span style="font-weight: bold; text-decoration: underline;">Parse:</span>
			</dt>
			<dd>
				<p>&emsp;The use of the syntax of a text to extract usable computer data, such as the delineation of a CSV separating the various values within it.</p>
			<dd>
		</dl>
	</section>
	</section>
	<!--Terminology section END.-->
	<!--Footer and references. START.-->
	<footer>
		<!--Leave any references for your page as footnotes in the ordered list below
		Should use CSS to format the list as superscript numbers as well as adding them throughout the text
		This information is mostly only relevant to the topic page-->
		<ol>
			<!--IDs used for in page hyperlinks, unused in CSS-->
			<li id="ref1">YUI Library, 2011, Douglas Crockford: The JSON Saga, 29 August, viewed 10 March 2022, &lt;https&colon;&sol;&sol;youtu.be&sol;-C-JoyNuQJs&gt;</li>
			<li id="ref2">Bassett, L, Foley, M, Brown, K, Kwityn, J, Roumelioties, C, Troutman, E, Futato, D, Montgomery, K & Demarest, R 2015, Introduction to JavaScript object notation: a to-the-point guide to JSON, O'Reilly, Beijing.</li>
			<li id="ref3">Introducing JSON, 2002, IONOS SE, viewed 10 March 2022, &lt;https&colon;&sol;&sol;www.json.org&sol;&gt;</li>
			<li>JSON logo credit: Wikimedia photo by Douglas Crawford. To view the original image: <a href="https://commons.wikimedia.org/wiki/File:JSON_vector_logo.svg">https://commons.wikimedia.org/wiki/File:JSON_vector_logo.svg</a></li>
		</ol>
		<br>
		<?php
include('footer.inc');
	?>
	</footer>
	<!--Footer and references. END.-->
</body>
</html>
