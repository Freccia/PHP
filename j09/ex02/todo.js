function todo() {
	var ft_list = document.getElementById('ft_list');
	var todo = prompt("New Todo", "");

	if (todo != null) {
		var new_div = document.createElement("div");
		var text = document.createTextNode(todo);
		new_div.appendChild(text);
		ft_list.insertBefore(new_div, ft_list.childNodes[0]);
	}
}

function delete_div() {

}
