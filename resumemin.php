<!DOCTYPE html>
<html>
<head>
<title>Resume Builder</title>

<style>
.error{color:red;}
body{
font-family:Arial;
background:#f2f2f2;
}

.resume{
width:900px;
margin:30px auto;
background:white;
padding:30px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

.container{
display:flex;
gap:30px;
}

.left{width:60%;}
.right{width:40%;}

h2{
border-bottom:2px solid black;
}

</style>
</head>

<body>

<?php
$name=$email=$department=$summary=$gender=$skills="";
$education=$cert=$experience=$lang=$project="";

$nameErr=$emailErr=$genderErr="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=test_input($_POST["name"]);
$email=test_input($_POST["email"]);
$department=test_input($_POST["department"]);
$summary=test_input($_POST["summary"]);
$gender=test_input($_POST["gender"]);
$skills=test_input($_POST["skills"]);
$education=test_input($_POST["education"]);
$cert=test_input($_POST["cert"]);
$experience=test_input($_POST["experience"]);
$lang=test_input($_POST["lang"]);
$project=test_input($_POST["project"]);
}

function test_input($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
?>

<h2>Resume Form</h2>

<form method="post">

Name:
<input type="text" name="name" required><br><br>

Email:
<input type="email" name="email" required><br><br>

Website / Department:
<input type="text" name="department"><br><br>

Summary:
<input type="text" name="summary" required><br><br>

Gender:
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Other">Other
<br><br>

Skills:
<input type="text" name="skills" required><br><br>

Education:
<input type="text" name="education" required><br><br>

Project:
<input type="text" name="project" required><br><br>

Certification:
<input type="text" name="cert"><br><br>

Experience:
<input type="text" name="experience" required><br><br>

Languages Known:
<input type="text" name="lang"><br><br>

<input type="submit" value="Generate Resume">

</form>

<hr>

<?php if($_SERVER["REQUEST_METHOD"]=="POST"){ ?>

<div class="resume">

<header>
<h1><?php echo $name; ?></h1>
<h3 style="color:#2a7be4;">Job Applicant</h3>

<p>
<?php echo $email; ?> |
<?php echo $department; ?>
</p>
</header>

<div class="container">
<div class="left">

<section>
<h2>SUMMARY</h2>
<p><?php echo $summary; ?></p>
</section>

<section>
<h2>EXPERIENCE</h2>
<ul>
<li><?php echo $experience; ?></li>
</ul>
</section>

<section>
<h2>PROJECT</h2>
<ul>
<li><?php echo $project; ?></li>
</ul>
</section>

<section>
<h2>LANGUAGES</h2>
<p><?php echo $lang; ?></p>
</section>

</div>

<div class="right">

<section>
<h2>SKILLS</h2>
<p><?php echo $skills; ?></p>
</section>

<section>
<h2>EDUCATION</h2>
<p><?php echo $education; ?></p>
</section>

<section>
<h2>CERTIFICATION</h2>
<p><?php echo $cert; ?></p>
</section>

<section>
<h2>GENDER</h2>
<p><?php echo $gender; ?></p>
</section>

</div>

</div>

</div>

<?php } ?>

</body>
</html>