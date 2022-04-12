function indexValidate(){
    var error = false;
    var row = document.getElementById("row1").value;
    var column = document.getElementById("column1").value;
    if(row == '' || column == ''){
        alert("Fill All Details");
        error = true;
    }
    else if (row < 1 || column < 1) {
        alert("Dimension must be greater than 0");
        error = true;
    }else if(row > 5 || column > 5){
        alert("Dimension must be less than 6");
        error = true;
    }
    if(error == true){
        return false;
    }else{
        return true;
    }
}

function testValidate(){
    var error = false;
    var row = document.getElementById("row1").value;
    var column = document.getElementById("column1").value;
    for(i=0;i<row;i++){
        for(j=0;j<column;j++){
            // var a = "matrix";
            // var b = "matrixx";
            var m = i+1;
            var n = j+1;
            var k = ''+m+n;
            var id1 = "matrix"+k;
            var id2 = "matrixx"+k;
            var field1 = document.getElementById(id1).value;
            var field2 = document.getElementById(id2).value;
            if(field1==''){
                alert("Fill "+k+"th element value for matrix 1");
                error = true;
            }
            if(field2==''){
                alert("Fill "+k+"th element value for matrix 2");
                error = true;
            }
        }
    }
    if(error == true){
        return false;
    }else{
        return true;
    }
}