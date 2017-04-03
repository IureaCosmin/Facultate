
    function verificaNota(){
    var n = document.getElementById('grade');
    if (isNaN(n.value) || n.value < 1 || n.value > 10){
    alert('Nota gresita');
    n.style.backgroundColor = '#ff9999';
    n.style.color = '#ff0000';
    return false;
}
    return true;
}
    function curataNota(){
    var n = document.getElementById('grade');
    n.style.backgroundColor = '#ffffff';
    n.style.color = '#000000';
}
    function verNume(){
    var n=document.getElementById('name');
    document.getElementById('mesaj').style.visibility="visible";
    if(n.value.length>2)
    document.getElementById('mesaj').style.visibility="hidden";
}

    function verSistem(){
    var n=document.getElementById('sistemnotare');
    if(!n.value){
    alert("Nu a fost selectata o optiune!");
    return false;
}
    return true;
}
