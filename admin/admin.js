function del_child_node()
{
    var elem = document.getElementById("show");  
    while(elem.hasChildNodes()) //当elem下还存在子节点时 循环继续  
    {  
        elem.removeChild(elem.firstChild);  
    } 
}
function add_test()
{
	// var para = document.createElement("p");
	// var node = document.createTextNode("这是一个新段落。");
	// para.appendChild(node);
	// var element = document.getElementById("show");
	// element.appendChild(para);
	del_child_node();
	var para = document.createElement("form");
	var node = document.createTextNode("考试科目: ");
	para.appendChild(node);
	var element = document.getElementById("show");
	para.action = "add_score.php";
	para.method = "post";
	para.id = "form_id";
	element.appendChild(para);

	var c_input = document.createElement("input");
	var c_submit= document.createElement("input");
	var p_form = document.getElementById("form_id");
	c_input.id = "form_id";
	c_input.type = "text";
	c_input.name= "score";
	c_submit.id = "submit_id"
	c_submit.type = "submit";
	c_submit.value = "添加";
	c_submit.setAttribute("style", "margin-left:5px");
	p_form.appendChild(c_input);
	p_form.appendChild(c_submit);
}

function change_password()
{
	del_child_node();
	var para = document.createElement("form");
	var id_node = document.createTextNode("ID: ");
	var pw_node = document.createTextNode(" new password: ");
	para.appendChild(id_node);
	var element = document.getElementById("show");
	para.action = "change_password.php";
	para.method = "post";
	para.id = "form_id";
	element.appendChild(para);

	var id_input = document.createElement("input");
	var pw_input = document.createElement("input");
	var c_submit= document.createElement("input");
	var p_form = document.getElementById("form_id");

	id_input.id = "form_id";
	id_input.type = "text";
	id_input.name= "id_input";

	pw_input.id = "form_id";
	pw_input.type = "text";
	pw_input.name= "pw";

	c_submit.id = "submit_id"
	c_submit.type = "submit";
	c_submit.value = "修改";
	c_submit.setAttribute("style", "margin-left:5px");

	p_form.appendChild(id_input);
	para.appendChild(pw_node);
	p_form.appendChild(pw_input);
	p_form.appendChild(c_submit);
}

function del_score()
{
	del_child_node();
	var para = document.createElement("form");
	var name_node = document.createTextNode("姓名: ");
	var subject_node = document.createTextNode(" 科目: ");
	var element = document.getElementById("show");
	para.action = "del_score.php";
	para.method = "post";
	para.id = "form_id";
	element.appendChild(para);

	var name_input = document.createElement("input");
	var subject_input = document.createElement("input");
	var c_submit= document.createElement("input");
	var p_form = document.getElementById("form_id");

	name_input.id = "name_id";
	name_input.type = "text";
	name_input.name= "name";

	subject_input.id = "subject_id";
	subject_input.type = "text";
	subject_input.name= "subject";

	c_submit.id = "submit_id"
	c_submit.type = "submit";
	c_submit.value = "删除";
	c_submit.setAttribute("style", "margin-left:5px");

	para.appendChild(name_node);
	p_form.appendChild(name_input);
	para.appendChild(subject_node);
	p_form.appendChild(subject_input);
	p_form.appendChild(c_submit);
}

function change_score()
{
	del_child_node();
	var para = document.createElement("form");
	var name_node = document.createTextNode("姓名: ");
	var subject_node = document.createTextNode(" 科目: ");
	var score_node = document.createTextNode(" 新成绩: ");
	var element = document.getElementById("show");
	para.action = "change_score.php";
	para.method = "post";
	para.id = "form_id";
	element.appendChild(para);

	var name_input = document.createElement("input");
	var subject_input = document.createElement("input");
	var score_input = document.createElement("input");
	var c_submit= document.createElement("input");
	var p_form = document.getElementById("form_id");

	name_input.id = "name_id";
	name_input.type = "text";
	name_input.name= "name";

	subject_input.id = "subject_id";
	subject_input.type = "text";
	subject_input.name= "subject";

	score_input.id = "score_id";
	score_input.type = "text";
	score_input.name= "score";

	c_submit.id = "submit_id"
	c_submit.type = "submit";
	c_submit.value = "修改";
	c_submit.setAttribute("style", "margin-left:5px");

	para.appendChild(name_node);
	p_form.appendChild(name_input);
	para.appendChild(subject_node);
	p_form.appendChild(subject_input);
	para.appendChild(score_node);
	p_form.appendChild(score_input);
	p_form.appendChild(c_submit);
}