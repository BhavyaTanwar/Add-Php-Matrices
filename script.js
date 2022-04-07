function checkForm() {
    // Fetching values for rows and columns
    var row = document.getElementById("row1").value;
    var column = document.getElementById("column1").value;
    //input should not be blank.
    if (row == '' || column == '' ) {
        alert("Fill All Fields");
    } else {
        //For displaying error msgs
        var row1 = document.getElementById("row");
        var column1 = document.getElementById("column");
        // display error if any
        if (row1.innerHTML == '<p>Dimension must be greater than 0</p>' ||row1.innerHTML == '<p>Dimension must be less than 6</p>' || column1.innerHTML == '<p>Dimension must be greater than 0</p>' || column1.innerHTML == '<p>Dimension must be less than 6</p>' ) {
            alert("Fill Valid Information");
        } else {
            //Submit Form if no error
            document.getElementById("rowcolForm").submit();
        }
    }
}

// validation when onblur.
function validate(field, query) {
    var xmlhttp = new XMLHttpRequest();
    // xmlhttp.readyState == 4  => for complete operation         xmlhttp.status == 200  => OK (no error...)
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
            document.getElementById(field).innerHTML = "Validating..";
        } else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(field).innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById(field).innerHTML = "Error Occurred. <a href='index.html'>Reload Or Try Again</a> the page.";
        }
    }
    // sendng the field and query for validation... 
    xmlhttp.open("GET", "validation.php?field=" + field + "&query=" + query, false);
    xmlhttp.send();
}