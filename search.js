function searchFunction() {
// Declare starting variables
var input = document.getElementById("search");
var filter = input.value.toUpperCase();
var table = document.getElementById("myTable");
var tr = table.tBodies[0].getElementsByTagName("tr");
// Loop through rows
for (var i = 0; i < tr.length; i++) {
// Define the cells
var td = tr[i].getElementsByTagName("td")[0];

if (td) {
    var txtValue = td.textContent || td.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      tr[i].style.display = "";
    } else {
      tr[i].style.display = "none";
    }
  }
}
}

