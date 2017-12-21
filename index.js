var choose_who = 0;
function click_admin()
{
	choose_who = 0;
}

function click_teacher()
{
	choose_who = 1;
}

function click_student()
{
	choose_who = 2;
}

function login_in()
{
	if (choose_who == 0)
		window.location.href="admin/admin.html";
	else if (choose_who == 1)
		window.location.href="teacher/teacher.html";
	else if (choose_who == 2)
		window.location.href="student/student.html";
}