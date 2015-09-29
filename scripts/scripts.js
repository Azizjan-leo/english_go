function checkPass() {  
with(document)
	//Проверка полей ввода пароля на соответствие
	if (getElementById('pass').value.length != 0 || getElementById('passch').value.length != 0){
		if(getElementById('pass').value.length == getElementById('passch').value.length){
		getElementById('info').innerHTML = (getElementById('pass').value != getElementById('passch').value) ?
		'<img src="../image/no.png">' : (document.getElementById("pass").value.length==document.getElementById("passch").value.length) ?
		'<img src="../image/ok.png">' : '<img src="../image/no.png">';}
		else{
			getElementById('info').innerHTML = '';
		}
	}
	else {
		getElementById('info').innerHTML = '';
	}
}

function HideShow(id){
    display = document.getElementById(id).style.display;

    if(display=='none'){
       document.getElementById(id).style.display='block';
    }else{
       document.getElementById(id).style.display='none';
    }
}

function HideShowContent(id, id2, listID, listID2){
    display = document.getElementById(id).style.display;
    if(display=='none'){
       document.getElementById(id).style.display='block';
	   document.getElementById(id2).style.display='none';
	   document.getElementById(listID).style.backgroundColor='rgba(255, 255, 255, 1)';
	   document.getElementById(listID2).style.backgroundColor='rgba(230, 230, 230, 1)';
    }
}