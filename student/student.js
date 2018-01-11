function del_child_node()
{
    var elem = document.getElementById("show");  
    while(elem.hasChildNodes()) //当elem下还存在子节点时 循环继续  
    {  
        elem.removeChild(elem.firstChild);  
    } 
}

function inquire_score()
{
	del_child_node();
	var para = document.createElement("form");
	var sel = document.createElement("select");
	var opt_1 = document.createElement("option");
	var opt_2 = document.createElement("option");
	var opt_3 = document.createElement("option");
	var opt_4 = document.createElement("option");
	var id_node = document.createTextNode("成绩: ");

	para.appendChild(id_node);
	para.appendChild(sel);
	sel.appendChild(opt_1);
	sel.appendChild(opt_2);
	sel.appendChild(opt_3);
	sel.appendChild(opt_4);
	var element = document.getElementById("show");

	para.action = "inquire_score.php";
	para.method = "post";
	para.id = "form_id";

	sel.name = "select";
	opt_1.text = "all";
	opt_2.text = "math";
	opt_3.text = "chinese";
	opt_4.text = "English";

	element.appendChild(para);

	var c_submit= document.createElement("input");
	var p_form = document.getElementById("form_id");

	c_submit.id = "submit_id"
	c_submit.type = "submit";
	c_submit.value = "查询";
	c_submit.setAttribute("style", "margin-left:5px");

	p_form.appendChild(c_submit);
}

function count_score()
{
	del_child_node();
	var para = document.createElement("form");
	var sel = document.createElement("select");
	var opt_1 = document.createElement("option");
	var opt_2 = document.createElement("option");
	var id_node = document.createTextNode("成绩: ");

	para.appendChild(id_node);
	para.appendChild(sel);
	sel.appendChild(opt_1);
	sel.appendChild(opt_2);
	var element = document.getElementById("show");

	para.action = "count_score.php";
	para.method = "post";
	para.id = "form_id";

	sel.name = "select";
	opt_1.text = "合格";
	opt_2.text = "不合格";

	element.appendChild(para);

	var c_submit= document.createElement("input");
	var p_form = document.getElementById("form_id");

	c_submit.id = "submit_id"
	c_submit.type = "submit";
	c_submit.value = "统计";
	c_submit.setAttribute("style", "margin-left:5px");

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
	para.action = "student_change_password.php";
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