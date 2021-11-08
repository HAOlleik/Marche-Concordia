



function myFunction() {
  var x = document.querySelector(".line_text");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function totalCost() {
  var x = document.getElementById("quantity").value;
  var num = (x * y).toFixed(2);
  document.getElementById("total").innerHTML = "Total cost will be $" + num + " for " + x + " item(s).";
  localStorage.setItem(key, x)
}



function resubmit() {

  var x = localStorage.getItem(key);
  document.getElementById("quantity").value = x
  console.log("z: " + x)
  var num = (x * y).toFixed(2);
  if (x == null) {
    document.getElementById("total").innerHTML = "";
  }
  else {
    document.getElementById("total").innerHTML = "Total cost will be $" + num + " for " + x + " item(s).";
  }

}
