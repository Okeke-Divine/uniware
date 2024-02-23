<script type="text/javascript">
function alert_error(text){
	return "<div class='alert alert-danger'>"+text+"</div>";
}
function load_page(page){
    	_('loading_machine').style.display = "block";
       	_('ogkfofgdgd').style.opacity = "0.5";
	var url = "?page="+page;
	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
    	_('loading_machine').style.display = "none";
       	_('ogkfofgdgd').style.opacity = "1";
       	_('ogkfofgdgd').innerHTML = this.responseText;
		window.history.pushState({page: url}, url, url);
	}
	};
	xhttp.open("GET","inct/"+page+".php", true);
	xhttp.send();

}
function ajax_me(page,result){
    	_('loading_machine').style.display = "block";
       	_('ogkfofgdgd').style.opacity = "0.5";
	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
    	_('loading_machine').style.display = "none";
    	  _('ogkfofgdgd').style.opacity = "1";
    	  if(result == "success"){
    	  	_('success').innerHTML = this.responseText;
    	  }else{
	    	  console.log(this.responseText);
    	  }
	}
	};
	xhttp.open("POST","helpers/"+page, true);
	xhttp.send();

}		
function viewer_password(){
	var x = _('psw');
	var eye = _('eye');
	if (x.type === "password"){
        x.type = "text";
        eye.classList.add("fa-eye-slash");
    } else {
        eye.classList.remove("fa-eye-slash");
        x.type = "password";
    }
}	
function show_view_password(){
	var eye = _('eye');
	var x = _('psw').value;
	if(x.length > 0){
		eye.style.display = "block";
	}else{
		eye.style.display = "none";
	}
}
function register(who){
	var uname = _('uname').value;
	var psw = _('psw').value;
	var reg = _('reg');
	var errors = _('errors');
	let ready = 0;
	if(uname == ""){ready = 0;}else{ready = 1;}
	if(psw == ""){ready = 0;}else{ready = 1;}
	if(ready == 1){
		if(who == "student"){
			ajax_me('add-student.php?uname='+uname+"&&psw="+psw,'success');
			_('uname').value = "";
			_('psw').value = "";
		}
		else if(who == "teacher"){
			ajax_me('add-teacher.php?uname='+uname+"&&psw="+psw,'success');
			_('uname').value = "";
			_('psw').value = "";
		}
		errors.innerHTML = "";
	}else{
		errors.innerHTML = "<div class='wd100 alert alert-danger'>All fields are required!<div>";
	}
}
function create_class(){
	var cname = _('cname');
	var errors = _('errors');
	let ready = 0;
	var create = _('create');
	if(cname.value == ""){
		ready = 0;errors.innerHTML = alert_error('Class name is required.');
	}else if(cname.value.length < 3){
		ready = 0;errors.innerHTML = alert_error('Class name must be more than 3 characters.');
	}
	else{
		ready = 1;errors.innerHTML = "";
		ajax_me('create-class.php?cname='+cname.value,'success');
		cname.disabled = "disabled";
		create.disabled = "disabled";
	}
}
</script>