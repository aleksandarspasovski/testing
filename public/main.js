window.addEventListener('load', () => {
	ajaxRequest('get', 'http://localhost/test/home/res', showResult);
});
function ajaxRequest(method, url){
	var xhr = new XMLHttpRequest();
	console.log(xhr);
	xhr.open(method, url);
	xhr.onreadystatechange = () =>{
		if (xhr.readyState === 4 && xhr.status === 200) {
			if (!(xhr.responseText) == '') {
				var response = JSON.parse(xhr.responseText);
				showResult(response);
			}
		}
	}
	xhr.send();
};
function showResult(data){
	console.log(data);
	document.querySelector('tbody').innerHTML = '';
	for (var i = 0; i < data.length; i++) {
		var create_el = `
			<tr class="table-row">
				<td>${data[i].id}</td>
				<td>${data[i].model_number}</td>
				<td>${data[i].category_name}</td>
				<td>${data[i].deparment_name}</td>
				<td>${data[i].manufacturer_name}</td>
				<td>${data[i].upc}</td>
				<td>${data[i].sku}</td>
				<td>${data[i].regular_price}</td>
				<td>${data[i].sale_price}</td>
				<td>${data[i].description}</td>
				<td>${data[i].url}</td>
			</tr>
		`;
		document.querySelector('tbody').innerHTML += create_el;
	}

}