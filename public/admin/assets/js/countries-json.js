$(document).ready(function () {
	var $select = $('#source');

	$.getJSON('admin/assets/js/json/countries.json', function (data) {
		$select.html('');
		//iterate over the data and append a select option
		$.each(data, function (key, val) {
			$select.append('<option id="' + val.code + '">' + val.name + '</option>');
		})

	});
});