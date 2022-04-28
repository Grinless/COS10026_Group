<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="description" content="JSON quiz"/>
<meta name="keyword" content="HTML, CSS, JSON, data, markup"/>
<meta name="author" content="Error 404 JSON not found"/>
<title>JSON Quiz</title>
<link rel="stylesheet" href="styles/style.css"/>
<link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body class="quiz">
    <!--Header START.-->
    <header>
        <!-- Navigation bar and title-->
        <h1> {JSON} </h1>
        <figure>
            <a href="https://json.org"> <img class="logo" src="images/JSON_logo.png" alt="JSON logo"> </a>
            <figcaption class="logo"><a href="https://json.org">Click to go to json.org</a></figcaption>
        </figure>
        <nav>
            <a href="index.html">Home</a>|
            <a href="topic.html">More info</a>|
            <a href="quiz.html">Quiz</a>|
            <a href="enhancements.html">Enhancements</a>|
			<a href="Management.php">Management</a>
        </nav>
    </header>
    <!--Header END.-->

    <form method="post" action="http://mercury.swin.edu.au/it000000/formtest.php">
        <!-- Questions.-->
        <!--Student information area.-->
        <fieldset class="quiz">
            <legend class="quiz"> Student Information. </legend>
            <label class="quiz" for="firstname"> First Name: &emsp;&emsp;</label>
            <input class="quiz" type="text" id="firstname" name="firstname" required="required" pattern="^[a-zA-Z -]+$" maxlength="30">
            <br />
            <label class="quiz" for="lastname"> Last Name: &emsp;&emsp;</label>
            <input class="quiz" type="text" id="lastname" name="lastname" required="required" pattern="^[a-zA-Z -]+$" maxlength="30">
            <br />
            <label class="quiz" for="studentid"> Student Number: </label>
            <input class="quiz" type="text" id="studentid" name="studentid" required="required" pattern="^\d+$" maxlength="10" minlength="7">
            <br />
            <br />
            <label class="quiz" for="jsonusecase">What is your intended use case for JSON:</label>
            <input class="quiz" type="text" id="jsonusecase" name="jsonusecase" required="required">
            <br />
        </fieldset>

        <!-- Radio buttons (What does JSON stand for?) -->
        <fieldset class="quiz">
            <legend class="quiz">What does JSON stand for</legend>
            
            <input class="quiz" type="radio" id="jackstandsonned" name="acroselected" value="1" required="required" /> 
			<label class="quiz" for="jackstandsonned">Jack Stands On Ned: </label><br>
            
            <input class="quiz" type="radio" id="jargonsysopnull" name="acroselected" value="2">
			<label class="quiz" for="jargonsysopnull">Jargon System Operation Nullifier: </label>			<br>
            
            <input class="quiz" type="radio" id="javasptObjNote" name="acroselected" value="3">
			<label class="quiz" for="javasptObjNote"> JavaScript Object Notiation: </label>
            <br>
        </fieldset>

        <!--Check box question-->
        <fieldset class="quiz">
            <legend class="quiz">Who were the creators of JSON</legend>
            <input class="quiz" type="checkbox" id="fredmuffintop" name="jsoncreator" value="Fred Muffintop">
			<label class="quiz" for="fredmuffintop">Fred Muffintop</label>

            <br>
			<input class="quiz" type="checkbox" id="chipmorningstar" name="jsoncreator" value="Chip Morningstar">
            <label class="quiz" for="chipmorningstar">Chip Morningstar</label>
            
            <br>
			<input class="quiz" type="checkbox" id="lucifermorningstar" name="jsoncreator" value="Lucifer Morningstar">
            <label class="quiz" for="lucifermorningstar">Lucifer Morningstar</label>
            
            <br>
			<input class="quiz" type="checkbox" id="douglascrockford" name="jsoncreator" value="Douglas Crockford">
            <label class="quiz" for="douglascrockford">Douglas Crockford</label>
            
            <br>
			<input class="quiz" type="checkbox" id="zachsummersby" name="jsoncreator" value="Zach Summersby">
            <label class="quiz" for="zachsummersby">Zach Summersby</label>
            
            <br>
			<input class="quiz" type="checkbox" id="jimmyneutron" name="jsoncreator" value="Jimmy Neutron">
            <label class="quiz" for="jimmyneutron">Jimmy Neutron</label>
            
            <br>
        </fieldset>

        <!--Drop down-->
        <fieldset class="quiz">
            <legend class="quiz">Is JSON Object Orientated?</legend>
            <label class="quiz" for="jasonOO">Select an option.</label>
            <select id="jasonOO" name="jasonOO" required="required">
                <option value="">Select answer</option>
                <option value="jasonOO1">JSON is object orientated. </option>
                <option value="jasonOO2">JSON is not object orientated. </option>
                <option value="jasonOO3">Jason is a person. </option>
                <option value="jasonOO4">JASONNNNNN....... </option>
            </select>
        </fieldset>

        <!--Date time.-->
        <fieldset class="quiz">
            <legend class="quiz">Date and time of quiz submission</legend>
            <label class="quiz" for="datetimesubmission">Date</label>
            <input type="datetime-local" id="datetimesubmission" name="datetimesubmission">
        </fieldset>
        <br/>
        <br/>

        <!--Submission/Reset buttons.-->
        <input class="submit" type="submit" value="Submit Form" />
        <input class="reset" type="reset" value="Reset Form" />
    </form>
    <br>
    <!--Footer and references. START.-->
    <footer>
        <!--Leave any references for your page as footnotes in the ordered list below
        Should use CSS to format the list as superscript numbers as well as adding them throughout the text
        This information is mostly only relevant to the topic page-->
        <ol>	    
            <li>JSON logo credit: Wikimedia photo by Douglas Crawford. To view the original image: 
                <a href="https://commons.wikimedia.org/wiki/File:JSON_vector_logo.svg">https://commons.wikimedia.org/wiki/File:JSON_vector_logo.svg</a>
                </li>
            </ol>
        <br>
        Authors:
        <a href="mailto:103865794@student.swin.edu.au">Nathan Hoorbakht,</a>
        <a href="mailto:103993239@student.swin.edu.au">Luke Batchelor,</a>
        <a href="mailto:103842975@student.swin.edu.au">Md Ahnaf Islam,</a>
        <a href="mailto:103862724@student.swin.edu.au">Cat Ater, </a>
        <a href="mailto:103951761@student.swin.edu.au">Jay Stephan,</a>
    </footer>
    <!--Footer and references. END.-->
</body>
</html>