//Проверка на совпадение паролей с помощью получения данных через id элемента.
function checkPass () 
{ 
with (document) 
getElementById ('info').innerHTML = (getElementById ('pass').value != getElementById ('passch').value) ? 
   'PASSWORDS MISMACH' : ''; 
} 