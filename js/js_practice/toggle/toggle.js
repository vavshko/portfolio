function toggleFun(){
    var x = document.getElementById('mytDiv');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    }else{
        x.style.display = 'none';
    }
}

var close = document.getElementsByClassName("closebtn");
var i;
for (i=0; i<close.length; i++){
    close[i].onclick = function(){
        var div=this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){
            div.style.display = "none";
        },600)
    }
}