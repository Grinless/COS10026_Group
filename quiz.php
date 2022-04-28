<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="JSON quiz"/>
<?php
	include('header.inc');
?>
</head>
<body class="quiz">
	<?php
	include('menu.inc')
	?>
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
        <?php
include('footer.inc')
?>
    </footer>
    <!--Footer and references. END.-->
</body>
</html>
