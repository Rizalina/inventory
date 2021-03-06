function addRow() {
    var t = document.getElementById('table');
    var lastRow = t.rows.length;

    var iteration = lastRow;
    var row = t.insertRow(lastRow);

    //Generate Code Input
    var code = row.insertCell(0);
    var a = document.createElement('select')
    a.options[0] = new Option('01', '01')
    a.options[1] = new Option('02', '02')
    a.options[2] = new Option('03', '03')
    a.options[3] = new Option('04', '04')
    a.name = 'code[]'
    a.style = 'width:40px;'
    code.appendChild(a);


    //Generate Generate Description Input
    var des = row.insertCell(1);
    var b = document.createElement('input');
    b.type = "text";
    b.name = 'des[]'
    des.appendChild(b);

    //Generate Unit Input
    var unit = row.insertCell(2);
    var c = document.createElement('select');
    c.name = 'unit'
    c.id = 'uni'
    c.onload = 'showUnitsPPMP()'
    unit.appendChild(c);

    //Generate Quantity/Size Input
    var quan = row.insertCell(3);
    var d = document.createElement('input');
    d.type = "text";
    d.name = 'quan' + iteration;
    d.style = 'width:80px;'
    quan.appendChild(d);

    //Generate cost Input
    var cost = row.insertCell(4);
    var e = document.createElement('input');
    e.type = "number";
    e.name = 'des' + iteration;
    e.style = 'width:80px;';
    cost.appendChild(e);

    //Generate budget Input
    var budget = row.insertCell(5);
    var f = document.createElement('input');
    f.type = "number";
    f.name = 'budget' + iteration;
    f.style = 'width:80px;';
    budget.appendChild(f);

    //Generate Q1 Input
    var q1 = row.insertCell(6);
    var g = document.createElement('input');
    g.type = "number";
    g.name = 'q1' + iteration;
    g.style = 'width:80px;';
    q1.appendChild(g);

    //Generate Q2 Input
    var q2 = row.insertCell(7);
    var h = document.createElement('input');
    h.type = "number";
    h.name = 'q2' + iteration;
    h.style = 'width:80px;';
    q2.appendChild(h);

    //Generate Q3 Input
    var q3 = row.insertCell(8);
    var i = document.createElement('input');
    i.type = "number";
    i.name = 'q3' + iteration;
    i.style = 'width:80px;';
    q3.appendChild(i);

    //Generate q4 Input
    var q4 = row.insertCell(9);
    var j = document.createElement('input');
    j.type = "number";
    j.name = 'q4' + iteration;
    j.style = 'width:80px;';
    q4.appendChild(j);


}

function addRowIssuance() {
    var t = document.getElementById('tabb');
    var lastRow = t.rows.length;

    var iteration = lastRow;
    var row = t.insertRow(lastRow);

    //Generate Code Input
    var code = row.insertCell(0);
    var a = document.createElement('select')
    a.options[0] = new Option('01', '01')
    a.options[1] = new Option('02', '02')
    a.options[2] = new Option('03', '03')
    a.options[3] = new Option('04', '04')
    a.name = 'category[]'
    a.style = 'width:50px;'
    code.appendChild(a);

    //Generate Description Input
    var des = row.insertCell(1)
    var d = document.createElement('input')
    d.type = "text"
    d.name = 'description[]'
    d.size = '50'
    des.appendChild(d);



    //Generate Unit Input
    var unit = row.insertCell(2)
    var c = document.createElement('input')
    c.type = "text"
    c.name = 'units[]'
    c.size = '6.5'
    unit.appendChild(c);


    //Generate Quantity Input
    var quan = row.insertCell(3)
    var e = document.createElement('input')
    e.type = "number"
    e.name = 'qRequested[]'
    e.style = 'width:60px;'
    quan.appendChild(e);

    //Generate Quantity2 Input
    var quan2 = row.insertCell(4)
    var f = document.createElement('input')
    f.type = "number"
    f.name = 'qIssued[]'
    f.style = 'width:60px;'
    quan2.appendChild(f);

    //Generate Remarks Input
    var remarks = row.insertCell(5)
    var g = document.createElement('input')
    g.type = "text"
    g.name = 'remarks[]' + iteration
    g.size = '30'
    remarks.appendChild(g);




}

function checkPassB() {
    //Store the password field objects into variables ...
    var pass = document.getElementById('passA');
    var pass2 = document.getElementById('pass2A');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessageA');
    //Set the colors we will be using ...
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    //Compare the values in the password field
    //and the confirmation field
    if (pass.value == pass2.value) {
        //The passwords match.
        //Set the color to the good color and inform
        //the user that they have entered the correct password
        document.getElementById('submitB').disabled = false;
        message.style.color = goodColor;
        message.innerHTML = 'Passwords Match!'
    } else {
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        document.getElementById('submitB').disabled = true;
        message.style.color = badColor;
        message.innerHTML = 'Passwords Do Not Match!'
    }
}

function checkPass() {
    //Store the password field objects into variables ...
    var pass = document.getElementById('pass');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field
    //and the confirmation field
    if (pass.value == pass2.value) {
        //The passwords match.
        //Set the color to the good color and inform
        //the user that they have entered the correct password
        document.getElementById('submit').disabled = false;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    } else {
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        document.getElementById('submit').disabled = true;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}

function checkNumber() {
    //Store the password field objects into variables ...
    var quan = document.getElementById('quantity');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessageAA');
    //Set the colors we will be using ...
    var badColor = '#ff6666';
    var goodColor = '#66cc66';
    //Compare the values in the password field
    //and the confirmation field
    if (quan.value <= 0) {
        //The passwords match.
        //Set the color to the good color and inform
        //the user that they have entered the correct password
        document.getElementById('submitD').disabled = true;
        message.style.color = badColor;
        message.innerHTML = 'Negative Numbers Not allowed!'
    } else if (quan.value >= 0) {
        document.getElementById('submitD').disabled = false;
        message.style.color = goodColor;
        message.innerHTML = '   '
    }
}

function checkNumber2() {
    //Store the password field objects into variables ...
    var quan = document.getElementById('quantity2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessageBB');
    //Set the colors we will be using ...
    var badColor = '#ff6666';
    var goodColor = '#66cc66';
    //Compare the values in the password field
    //and the confirmation field
    if (quan.value <= 0) {
        //The passwords match.
        //Set the color to the good color and inform
        //the user that they have entered the correct password
        document.getElementById('submitD').disabled = true;
        message.style.color = badColor;
        message.innerHTML = 'Negative Numbers Not allowed!'
    } else if (quan.value >= 0) {
        document.getElementById('submitD').disabled = false;
        message.style.color = goodColor;
        message.innerHTML = '   '
    }
}

function checkNumber3() {
    //Store the password field objects into variables ...
    var quan = document.getElementById('quantity3');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessageCC');
    //Set the colors we will be using ...
    var badColor = '#ff6666';
    var goodColor = '#66cc66';
    //Compare the values in the password field
    //and the confirmation field
    if (quan.value <= 0) {
        //The passwords match.
        //Set the color to the good color and inform
        //the user that they have entered the correct password
        document.getElementById('submitD').disabled = true;
        message.style.color = badColor;
        message.innerHTML = 'Negative Numbers Not allowed!'
    } else if (quan.value >= 0) {
        document.getElementById('submitD').disabled = false;
        message.style.color = goodColor;
        message.innerHTML = '   '
    }
}

function getUnits() {
    document.getElementById('file').onchange = function (e) {
        debugger;

        var file = this.files[0];
        var reader = new FileReader();
        reader.onload = function (progressEvent) {
            console.log(this.result);

            var lines = this.result.splice('\n');
            var list = [];
            for (var line = 0; line < lines.length; line++) {
                list.push(lines[line]);
            }
        };

        reader.readAsText(units.txt);
    }
}


function showUnitsPPMP() {
    var o =document.getElementById('uni');

    var oo = document.createElement('option');
    oo.innerHTML = "Yeah"

    o.appendChild(oo);
}


function autoFill() {
    var a = document.getElementById("office").val();

    alert("yeah");
}