$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

function excluir(url) {
	Swal.fire({
		title: 'Tem certeza que deseja excluir',
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#30885d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Sim!',
		cancelButtonText: 'Não'
	}).then((result) => {
		if (result.value) {
			$.ajax({
				url: url,
				method: 'POST',
				success: function (response) {
					if (response.sucesso == 'true') {
						Swal.fire(
							'Sucesso',
							response.retorno,
							'success'
						);

						setTimeout(function () {
							window.location.reload();
						}, 2000);
					} else {
						Swal.fire(
							'Desculpe',
							response.retorno,
							'error'
						);						
					}
				}
			});
		}
	})
}

function ajax(url, method, formId, redirect) {
	var form = $(formId);
	var data = new FormData(form[0]);

	$.ajax({
		url: url, 
		method: method,
		data: data,
		async: false,
		cache: false,
		contentType: false,
		encType: 'multipart/form-data',
		processData: false,
		success: function (response) {
			if (response.sucesso == 'true') {
				Swal.fire(
					'Sucesso',
					response.retorno,
					'success'
				);

				setTimeout(function () {
					window.location.href = redirect;
				}, 2000);
			} else {
				Swal.fire(
					'Desculpe',
					response.retorno,
					'error'
				);						
			}
		},
		error: function (response, status, error) {
			$("#errors").html('');
			$.each(response.responseJSON.errors, function (key, item) {
				$("#errors").append("<li class='alert alert-danger'>"+ item + "</li>");
			});
		}
	})	

}