<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marksheet</title>
    <link rel="stylesheet" href="public/css/style01.css">
</head>
<body>
    <div id="page">
        <form action="#" method="POST">
        <table>
            <tr>
                <td><label for="Name">Name : </label></td>
                <td><input type="text" id="Name" name="Student_Name"></td>
            </tr>
            <tr>
                <td><label for="fName">Father's Name : </label></td>
                <td><input type="text" id="fName" name="Student_FName"></td>
            </tr>
            <tr>
                <td colspan = "2">Student Marks Details:</td>
            </tr>
            <tr>
                <th>Subject </th>
                <th>Marks Obtained</th>
            </tr>
            <tr>
                <td><label for="sindhi">Sindhi : </label></td>
                <td><input type="Number" id="sindhi" name="Sindhi"></td>
            </tr>
            <tr>
                <td><label for="computer">Computer Science : </label></td>
                <td><input type="Number" id="computer" name="Computer"></td>
            </tr>
            <tr>
                <td><label for="eng">English : </label></td>
                <td><input type="Number" id="eng" name="English"></td>
            </tr>
            <tr>
                <td><label for="Chem">Chemistry : </label></td>
                <td><input type="Number" id="Chem" name="Chemistry"></td>
            </tr>
            <tr>
                <td><label for="pst">Pakistan Studies : </label></td>
                <td><input type="Number" id="pst" name="Pakistan_studies"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="Submit" id="submit" name="Submit" value="Save"></td>
            </tr>
        </table>
        </form>
    </div>
</body>
</html>