
function fun1() {
    var chkbox=document.getElementById('one');

    if(chkbox.checked) {
        alert('checked');
    }

    else{
        alert('not checked');
    }
}

function fun2() {
  var radi = document.getElementsByName("r1");
  for (var index = 0; index < radi.length; index++) {
    if (radi[index].checked) {
      alert("Выбран " + index + " элемент");
    }
  }
}

function fun3() {
  var sel = document.getElementById("mySelect").selectedIndex;
  var options = document.getElementById("mySelect").options;
  alert("selected " + options[sel].text);
}

function fun4() {
  var rng = document.getElementById("r2");
  var p = document.getElementById("two");
  p.innerHTML = rng.value;
}

function fun5() {
  var rng = document.getElementById("r3");
  var i1 = document.getElementById("i1");
  i1.value = rng.value;
}

function fun6() {
  var rng = document.getElementById("r4");
  var div = document.getElementById("test");
  div.style.width = rng.value + "px";
}

var modalwind = document.getElementById("myModal-wind");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("modal-close")[0];

btn.onclick = function(){
    modalwind.style.display = "block";

}

span.onclick = function(){  
    modalwind.style.display = "none";

}

window.onclick = function(event){
    if(event.target == modalwind)
{
    modalwind.style.display = "none";
}}


