<?php
include("connection.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $getmessage = $_POST['shortmessage'];
    $getday = $_POST['txtday'];
    $getmonth = $_POST['txtmonth'];
    $getyear = $_POST['txtyear'];
    $fulldate = $getyear . '-' . $getmonth . '-' . $getday;
    $current_time = date('H:i:s');

    if (strlen($name) > 0 && strlen($getmessage) > 0 && strlen($fulldate) > 0) {
        $stmt = $db->prepare("INSERT INTO message (name, content, entrydate, sent_time) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $getmessage, $fulldate, $current_time);

        if ($stmt->execute()) {
            header("Location: messageu.php?msg=Your message has been sent");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Add Message</title>
    <link href="adminstyle.css" type="text/css" rel="stylesheet" media="screen" />
    <script type="text/javascript" src="ckeditor.js"></script>
</head>
<body>
<?php include("headeru.php");?>
<form method="post" action="messageu.php">
    <br />
    <br />
    <br />
    <br />

    <legend><h1><span class="id">Add Your Message</span></h1></legend>
    <?php
    if(isset($_GET['msg'])){
        echo "<p>" . $_GET['msg'] . "</p>";
    }
    ?>
    <br/>
    <br/>
    <table background="">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" /></td>
        </tr>
        <tr>
            <td valign="top">Message</td>
            <td>
                <textarea cols="40" id="editor1" name="shortmessage" rows="10"></textarea>
                <script type="text/javascript">
                    //<![CDATA[
                    CKEDITOR.replace('editor1',
                        {
                            extraPlugins: 'uicolor',
                            toolbar:
                                [
                                    ['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink'],
                                    ['UIColor']
                                ]
                        });
                    //]]>
                </script>
            </td>
        </tr>


        <tr>
            <td valign="top">Entry Date</td>

            <td>
                <select name="txtday">
                    <option>Day</option>
                    <?php
                    for($i=1; $i<=32; $i++) {
                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                    ?>
                </select>

                <select name="txtmonth">
                    <option>Month</option>
                    <?php
                    for($i=1; $i<=12; $i++) {
                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                    ?>
                </select>

                <select name="txtyear">
                    <option>Year</option>
                    <?php
                    for($i=2023; $i<=2024; $i++) {
                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Send" name="submit" /></td>
        </tr>
    </table>

</form>
</body>
</html>
