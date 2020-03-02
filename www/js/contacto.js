(function (){
	var form = document.getElementsByTagName('form')[0];
	var send_btn = document.getElementsByTagName('button')[0];
	
	send_btn.onclick = function addSubmittedClassToForm(){
		form.classList.add('submitted');
	}
})();