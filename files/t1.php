<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="images/ic.jpg" sizes="300x400 ">

<meta charset="UTF-8">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

</head>
<body class="w3-light-grey">    
<style>
  form-style-10{
    width: 45%;
	padding:30px;
	margin:40px auto;
	background: #FFF;
	border-radius: 10px;
	-webkit-border-radius:10px;
	-moz-border-radius: 10px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
	-moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
	-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
  background-color: #888;
  justify-content: center;
}
@media only screen and (max-width: 750px) {
    .form-style-10{
        width: 90%;
    }
}

.form-style-10 .inner-wrap{
	padding: 30px;
	background: #F8F8F8;
	border-radius: 15px;
	margin-bottom: 15px;
}
.form-style-10 h1{
	background: black;
	padding: 20px 30px 15px 30px;
	margin: -30px -30px 30px -30px;
	border-radius: 10px 10px 0 0;
	-webkit-border-radius: 10px 10px 0 0;
	-moz-border-radius: 10px 10px 0 0;
	color: #fff;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
	font: normal 30px 'Bitter', serif;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	border: 1px solid black;
}
.form-style-10 h1 > span{
	display: block;
	margin-top: 2px;
	font: 13px Arial, Helvetica, sans-serif;
}
.form-style-10 label{
	display: block;
	font: 13px Arial, Helvetica, sans-serif;
	color: #888;
	margin-bottom: 15px;
}
.form-style-10 input[type="text"],
.form-style-10 input[type="date"],
.form-style-10 input[type="tel"],
.form-style-10 input[type="email"],
.form-style-10 input[type="number"],
.form-style-10 input[type="search"],
.form-style-10 input[type="time"],
.form-style-10 input[type="url"],
.form-style-10 input[type="password"],
.form-style-10 textarea,
.form-style-10 select{
	display: block;
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	padding: 8px;
	border-radius: 6px;
	-webkit-border-radius:6px;
	-moz-border-radius:6px;
	border: 2px solid #fff;
	box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
	-moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
	-webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.form-style-10 .section{
	font: normal 20px 'Bitter', serif;
	color: black;
	margin-bottom: 5px;
}
.form-style-10 .section span {
	background: black;
	padding: 5px 10px 5px 10px;
	position: absolute;
	border-radius: 50%;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border: 4px solid #fff;
	font-size: 14px;
	margin-left: 2px;
	color: #fff;
	margin-top: -3px;
}
.form-style-10 input[type="button"], 
.form-style-10 input[type="submit"],
.form-style-10 button{
	background: black;
	padding: 8px 20px 8px 20px;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	color: #fff;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
	font: normal 30px 'Bitter', serif;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	border: 1px solid black;
	font-size: 15px;
}

/* latin-ext */
@font-face {
	font-family: 'Bitter';
	font-style: normal;
	font-weight: 400;
	src: local('Bitter Regular'), local('Bitter-Regular'), url(https://fonts.gstatic.com/s/bitter/v15/rax8HiqOu8IVPmn7cYxpPDk.woff2) format('woff2');
	unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  /* latin */
  @font-face {
	font-family: 'Bitter';
	font-style: normal;
	font-weight: 400;
	src: local('Bitter Regular'), local('Bitter-Regular'), url(https://fonts.gstatic.com/s/bitter/v15/rax8HiqOu8IVPmn7f4xp.woff2) format('woff2');
	unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
 </style> 
 
<div class="form-style-10">

    <h1><br>Add Criminal Records <span>Enter the Details of the Criminal</span></h1>
    <form id="addCriminal">
        <div class="section">Personal Information</div>
        <div class="inner-wrap">
            <label>Full Name* <input type="text" id="cName" required></label>
            <label>Gender*<br>
                <input type="radio" id="cGender" name="gender" value="Male" required>Male
                <input type="radio" id="cGender" name="gender" value="Female" required>Female
                <input type="radio" id="cGender" name="gender" value="Other" required>Other
            </label>
            <label>Education <textarea id="cEducation"></textarea></label>
            <label>Date of Birth* <input type="date" id="cDOB" required></label>
            <label>Address<textarea id="cAdd"></textarea></label>
            <label>Address of Hometown<textarea id="cHomeAdd"></textarea></label>
            <label>Phone Number* <input type="tel" id="cPhone" pattern="[0-9]{10}" placeholder="10 Digits Phone Number Only" required></label>
            <label>E-Mail Id <input type="email" id="cMail"></label>
            <label>Father's Name <input type="text" id="cFather"></label>
            <label>Mother's Name <input type="text" id="cMother"></label>
            <label>Spouse's Name (if applicable) <input type="text" id="cSpouse"></label>
        </div>
  
        <div class="section">Identification Details</div>
        <div class="inner-wrap">
            <label>Height (in cms) <input type="number" id="cHeight" min="0"></label>
            <label>Weight (in kgs) <input type="number" id="cWeight" min="0"></label>
            <label>Skin Colour <select id="cSkin">
                <option value="" disabled selected hidden> Select </option>
                <option value="Very Fair"> Very Fair </option>
                <option value="Fair"> Fair </option>
                <option value="Medium"> Medium </option>
                <option value="Olive">Olive </option>
                <option value="Brown">Brown </option>
                <option value="Dark Brown"> Dark Brown </option>
                </select>
            </label>
            <label>Body Type 
                <select id="cBody">
                <option value="" disabled selected hidden> Select </option>
                <option value="Skinny"> Skinny </option>
                <option value="Athletic"> Athletic </option>
                <option value="Bulky"> Bulky </option>
                </select>
            </label>
            <label>Birth Mark (if any) <input type="text" id="cMark"></label>  
        </div>
    
        <div class="section">Past History</div>
        <div class="inner-wrap">
            <label>History of Crimes<textarea id="cCrimes"></textarea></label>
            <label>Awards Announced by Various Agencies (if caught) <textarea id="cAwards"></textarea></label>
        </div>
        <div class="section">Contact Persons</div>
        <div class="inner-wrap">
            <label>Format: Name & Relation (with Mobile Number) <textarea id="cContact"></textarea></label>
        </div>

        <div class="button-section">
         <button id="submitForm" onclick="added()" style="background-color:antiquewhite; color:black;"> Add Record</button>         
        </div>
    </form>
    </div>
</div>

</form>
