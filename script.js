function indexValidate(){
    var error = false;
    var row = document.getElementById("row1").value;
    var column = document.getElementById("column1").value;
    var errorElement = document.getElementById("error");
    var messages=[];
    if(row == '' || column == ''){
        messages.push("Fill All Details");
        error = true;
    }
    else if (row < 1 || column < 1) {
        messages.push("Dimension must be greater than 0");
        error = true;
    }else if(row > 5 || column > 5){
        messages.push("Dimension must be less than 6");
        error = true;
    }
    if(messages.length>0){
        errorElement.innerText = messages.join(', ');
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
    var errorElement = document.getElementById("testerror");
    var messages=[];
    for(i=0;i<row;i++){
        for(j=0;j<column;j++){
            var m = i+1;
            var n = j+1;
            var k = ''+m+n;
            var id1 = "matrix"+k;
            var id2 = "matrixx"+k;
            var field1 = document.getElementById(id1).value;
            var field2 = document.getElementById(id2).value;
            if(field1==''){
                error = true;
            }
            if(field2==''){
                error = true;
            }
        }
    }
    if(error == true){
        messages.push("Fill All Details");
        if(messages.length>0){
            errorElement.innerText = messages.join(', ');
        }
        return false;
    }else{
        return true;
    }
}