<?php

/////////////////////////////////////////Faculty
$person["Link"] = "http://ele.aut.ac.ir/ahadi";
$person["Name"] = "Dr. Seyed Mohammad Ahadi";
$person["Designation"] = "Director";
$person["E-Mail"] = "sma [at] aut.ac.ir";
$faculty[] = $person;

/////////////////////////////////////////Students
$person["Link"] = "http://www.nmahmoudi.ir";
$person["Name"] = "Nima Mahmoudi";
$person["Designation"] = "M.Sc. (Since Sept. 2014)";
$person["E-Mail"] = "nima_mahmoudi [at] aut.ac.ir";
$students[] = $person;

$person["Link"] = "";
$person["Name"] = "Amin Amiri";
$person["Designation"] = "M.Sc. (Since Sept. 2015)";
$person["E-Mail"] = "amiri.amin1993 [at] gmail.com";
$students[] = $person;

$person["Link"] = "";
$person["Name"] = "Sina Alisamir";
$person["Designation"] = "M.Sc. (Since Sept. 2015)";
$person["E-Mail"] = "sina.alisamir [at] aut.ac.ir";
$students[] = $person;

$person["Link"] = "";
$person["Name"] = "Ebrahim Mahmoudian";
$person["Designation"] = "Ph.D. (Since Sept. 2013)";
$person["E-Mail"] = "e.mahmoudian [at] aut.ac.ir";
$students[] = $person;

$person["Link"] = "";
$person["Name"] = "Neda Karamian";
$person["Designation"] = "M.Sc. (Since Sept. 2013)";
$person["E-Mail"] = "nedakaramian [at] aut.ac.ir";
$students[] = $person;

$person["Link"] = "";
$person["Name"] = "Habibeh Ghaheri";
$person["Designation"] = "Ph.D. (Since Sept. 2013)";
$person["E-Mail"] = "ghaheri_h [at] aut.ac.ir";
$students[] = $person;

/////////////////////////////////////////Alumni
$person["Link"] = "http://www.nmahmoudi.ir";
$person["Name"] = "Nima Mahmoudi";
$person["Designation"] = "M.Sc. (Since Sept. 2015)";
$person["E-Mail"] = "nima_mahmoudi [at] aut.ac.ir";
$alumni[] = $person;

$person["Link"] = "http://www.nmahmoudi.ir";
$person["Name"] = "Nima Mahmoudi";
$person["Designation"] = "M.Sc. (Since Sept. 2015)";
$person["E-Mail"] = "nima_mahmoudi [at] aut.ac.ir";
$alumni[] = $person;

//echo "<pre style='text-align: left'>";
//print_r($students);
//echo "</pre>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>SPRL</title>
    <?php
        define("pageName","People");
        include("all_header.php");
    ?>
    <link href="cover.css" media="all" rel="Stylesheet" type="text/css" />
</head>
<body>
<?php include("header.php");?>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="row post-title">
            <h2>
                People
            </h2>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>

<br/>
<br/>

<div class="row people-table">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <table class="table table-hover left-right-margin">
            <thead>
            <tr>
                <th>Name</th>
                <th>Designation</th>
                <th>Contact Info</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="3" class="table-section">Faculty</td>
            </tr>
            <?php foreach ($faculty as $student) { ?>
                <tr>
                    <td><a href="<?php echo $student["Link"]; ?>"><?php echo $student["Name"]; ?></a></td>
                    <td><?php echo $student["Designation"]; ?></td>
                    <td><?php echo $student["E-Mail"]; ?></td>
                </tr>
            <?php } ?>
            <tr>
                <td colspan="3" class="table-section">Students</td>
            </tr>
            <?php foreach ($students as $student) { ?>
                <tr>
                    <td><a href="<?php echo $student["Link"]; ?>"><?php echo $student["Name"]; ?></a></td>
                    <td><?php echo $student["Designation"]; ?></td>
                    <td><?php echo $student["E-Mail"]; ?></td>
                </tr>
            <?php } ?>
            <tr>
                <td colspan="3" class="table-section">Alumni</td>
            </tr>
            <?php foreach ($alumni as $student) { ?>
                <tr>
                    <td><a href="<?php echo $student["Link"]; ?>"><?php echo $student["Name"]; ?></a></td>
                    <td><?php echo $student["Designation"]; ?></td>
                    <td><?php echo $student["E-Mail"]; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-3"></div>
</div>

<?php
include("footer.php");
?>

</body>
</html>