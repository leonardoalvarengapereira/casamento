function enviarRecado() {
    let recadoValido = recadoEhValido();
    if (!recadoValido) {
        $("#alert-recado").html("Informe todos os campos acima, por favor.");
        $("#alert-recado").removeClass("alert-success");
        $("#alert-recado").addClass("alert-danger");
        $("#alert-recado").show();
    } else {
        $.ajax({
			type: "POST",
			data: JSON.stringify({
				nome:$("#inputNome").val(),
				mensagem:$("#inputMensagem").val()
			}),
			url: "/recados",
			headers: {
				"X-CSRF-TOKEN": $("meta[name='csrf-token']").attr("content")
			},
			dataType: "json",
			contentType: "application/json",

			success: function(result) {
				$("#alert-recado").html("O seu recado foi enviado com sucesso!");
                $("#alert-recado").removeClass("alert-danger");
                $("#alert-recado").addClass("alert-success");
                $("#inputNome").val("");
                $("#inputMensagem").val("");
                $("#alert-recado").show();
                setTimeout(function() {
                    window.location.reload();
                }, 2000);
			},

			error: function(result) {
				$("#alert-recado").html("Infelizmente não foi possível enviar seu recado, tente novamente.");
                $("#alert-recado").removeClass("alert-success");
                $("#alert-recado").addClass("alert-danger");
                $("#alert-recado").show();
			}
		});
    }
}

function recadoEhValido() {
    let recadoValido = true;
    if ($("#inputNome").val() == "" || $("#inputNome").val().length == 0) {
        $("#inputNome").addClass("is-invalid");
        recadoValido = false;
    } else {
        $("#inputNome").removeClass("is-invalid");
    }

    if ($("#inputMensagem").val() == "" || $("#inputMensagem").val().length == 0) {
        $("#inputMensagem").addClass("is-invalid");
        recadoValido = false;
    } else {
        $("#inputMensagem").removeClass("is-invalid");
    }

    return recadoValido;
}

