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

function checkGender(){
	var z = document.getElementsByName('toggle');
	for (var i = 0; i < z.length; i++)  {
		if  (z[i].checked) {
			if (z[i].value == 'Male'){
				document.getElementById('genderInfo').innerHTML = '<img src="../image/male.png">';
			}
			else {
				document.getElementById('genderInfo').innerHTML = '<img src="../image/female.png">';
			}
		}
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

function HideShowContent(id, id2){
    display = document.getElementById(id).style.display;
    if(display=='none'){
       document.getElementById(id).style.display='block';
	   document.getElementById(id2).style.display='none';
	   
    }
}