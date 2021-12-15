function goBack() {
    window.history.back();
}

function remove(btn) {
    var row = confirm("Bạn có chắc muốn xoá không");
    var row1 = btn.parentNode.parentNode;
    if (row == true) {
        row1.parentNode.removeChild(row1);
    }
    return row;
}

// function myCreateFunction() {
//     var table = document.getElementById("myTable");
//     var row = table.insertRow(0);
//     var cell1 = row.insertCell(0);
//     var cell2 = row.insertCell(1);
//     cell1.innerHTML = "NEW CELL1";
//     cell2.innerHTML = "NEW CELL2";
// }

function fnselect() {
    var table = document.getElementById('table'),
        selected = table.getElementsByClassName('selected');
    table.onclick = highlight;

    function highlight(e) {
        if (selected[0]) selected[0].className = '';
        e.target.parentNode.className = 'selected';
    }

    function fnselect() {
        var $row = $(this).parent().find('td');
        var clickeedID = $row.eq(0).text();
        alert(clickeedID);
    }
}

function Saimatkhau() {
    alert("Hello! I am an alert box!");
}

function check() {
    if (document.getElementById("victory").value == "victory")
        return true;
    else
        document.getElementById("error").innerHTML = "Wrong keyword entry."
    return false;
}
// function remove(btn) {
//     var row = btn.parentNode.parentNode;
//     row.parentNode.removeChild(row);
// }