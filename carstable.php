<?php
require_once('');
$yaml = file_get_contents("cars.yml");
$parser = new YamlToArray();
$data = $parser->fileParseToArray($yaml);

?>
<html>
<style>
    * {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        margin: 0 auto;
    }
    h1 {
        color: #b0935f;
        font-size: 2em;
        margin-bottom: 0;
        text-align: center;
        padding-top: 20px;
    }
    .zigzag-table {
        border-collapse: separate;
        border-spacing: 0.25em 1em;
    }
    th,
    td {
        padding: 0.25em 0.5em;
        text-align: left;
    }
    td:nth-child(3) {
        text-align: center;
    }
    td {
        background-color: #d6e9ff;
    }
    th {
        background-color: #718eb0;
        color: #fff;
    }
    tbody tr:nth-child(even) {
        transform: rotate(1.5deg);
    }
    tbody tr:nth-child(odd) {
        transform: rotate(-1.5deg);
    }

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toote lisamine</title>
</head>
<body>
<h2>Toote sisestamine</h2>
<table>
    <form action="" method="post" name="vorm1">
        <tr>
            <td><label for="Title">Title:</label></td>
            <td><input type="text" name="Title" id="Title" autofocus></td>
        </tr>
        <tr>
            <td><label for="Nimetus">Nimetus:</label></td>
            <td><input type="text" name="Nimetus" id="Nimetus"></td>
        </tr>
        <tr>
            <td><label for="Mudel">Mudel:</label></td>
            <td><input type="text" name="Mudel" id="Mudel"></td>
        </tr>
        <tr>
            <td><label for="Year">Year:</label></td>
            <td><input type="text" name="Year" id="Year"></td>
        </tr>
        <tr>
            <td><label for="Kaigukast">Year:</label></td>
            <td><input type="text" name="Kaigukast" id="Kaigukast"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" id="submit" value="Sisesta"></td>
            <td></td>
        </tr>
    </form>
</table>
<table class="zigzag-table">
    <tr>
        <th>Title</th>
        <th>Nimetus</th>
        <th>Mudel</th>
        <th>Year</th>
        <th>Kaigukast</th>
    </tr>
    <?php
    foreach($data as $voti=>$vartus){
        $title=$vartus['Title'];
        $nimetus=$vartus['Nimetus'];
        $mudel=$vartus['Mudel'];
        $year=$vartus['Year'];
        $kaigukast=$vartus['Kaigukast'];
        echo"<tr><td>".$title."</td><td>".$nimetus."</td><td>".$mudel."</td><td>".$year."</td><td>".$kaigukast."</td></tr>";
    }
    ?>

</table>
<a href="cars.yml"> YAML fail</a>
</body>
</html>