<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding Two Matrices</title>
    <script src="script.js"></script>
</head>
<body>
    <div id="mainform">
        <div class="innerdiv">
            <h2>Addition of 2 Matrices</h2>
            <!-- Form For Getting the number of rows and columns for the matrix -->
            <form action="test.php" method='POST' name="rowcolForm" onsubmit="return indexValidate()">
                <table>
                    <p>
                    <tr>
                        <td>Number Of Rows:</td>
                        <td><input id='row1' name='row' type='number'></td>
                    </tr>
                </p>
                <p>
                    <tr>
                        <td>Number Of Columns:</td>
                        <td><input id='column1' name='column' type='number'></td>
                    </tr>
                </p>
                </table>
            <input type='submit' name='submit' value='Submit'>
            </form>
        </div>
    </div>
</body>
</html>
