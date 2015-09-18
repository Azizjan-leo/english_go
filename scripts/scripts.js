function checkPass() {  
with(document)
	//Проверка полей ввода пароля на соответствие
	if (getElementById('pass').value.length != 0 || getElementById('passch').value.length != 0){
		if(getElementById('pass').value.length == getElementById('passch').value.length){
		getElementById('info').innerHTML = (getElementById('pass').value != getElementById('passch').value) ?
		'<img src="../image/no.png">' : (document.getElementById("pass").value.length==document.getElementById("passch").value.length) ?
		'<img src="../image/ok.png">' : '<img src="../image/no.png">';}
	}
	else {
		getElementById('info').innerHTML = ''
	}
} 