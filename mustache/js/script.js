$(document).ready(function () {
	contenido.load();
	contenido02.load();
	contenido03.load();
});
var contenido03 = {
	load : function () {
		var producto, template, output;
		producto = {
			marca : "lacoste",
			nombre : "Tess",
			precio : "123",
			descipcion : "prenda muy buena para la creacion",
		};

		$().load("comentario.html#informacion", function  () {
			template = $("informacion");
			output = Mustache.render(template, producto),
			$("#contenido03").html(output);
		});

	}
};

var contenido02 = {
	load : function () {
		producto = {
			productos : [
				{titulo: "prod. uno"},
				{titulo: "prod. dos"},
				{titulo: "prod. tres"},
			]
		};
		template = "{{#productos}}" +
			"Lista de productos {{titulo}}!<br>" +
			"{{/productos}}" +
			"{{^productos}}" +
			"No encontramos ningun producto" +
			"{{/productos}}<br>";
		var output = Mustache.render(template, producto);
		$('#contenido02').append(output);
	}
};

var contenido = {

	load : function () {
		var producto = {
			marca : "lacoste",
			nombre : "Tess",
			precio : "123",
			descipcion : "prenda muy buena para la creacion",
		};
		var template = "Marca : {{marca}}"+
		 "nombre : {{nombre}}" +
		 "precio : {{precio}}" + 
		 "descipcion : {{descipcion}}";
		var output = Mustache.render(template, producto);
		$('#contenido').append(output);
	}
};