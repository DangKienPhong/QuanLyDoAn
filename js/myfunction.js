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

function thongbao() {
    var row = confirm("Bạn có chắc muốn xoá không");
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
// function remove(btn) {
//     var row = btn.parentNode.parentNode;
//     row.parentNode.removeChild(row);
// }
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
$(document).ready(function() {
    $('#loginModal').modal('show');
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
});