var diretorioTemplate;
function InitQuatroRodas(_diretorioTemplate){
	diretorioTemplate = _diretorioTemplate;
	$(window).bind('scroll', function () {
		if ($(window).scrollTop() > 50)
			$('#MenuTopo').addClass("scrollDownMenu");
		 else
			$('#MenuTopo').removeClass("scrollDownMenu");
	});
	
	$(".boxCarros").mouseenter(function () {
		$(this).find("img").hide();
		$(this).find("p").show();
	})
		.mouseleave(function () {
			$(this).find("img").show();
			$(this).find("p").hide();
		});

	$("#OpenCloseMenu a").click(function (e) {
		e.preventDefault();
		if ($("#MenuPrincipal").is(':visible')) {
			$("#MenuPrincipal").slideUp('fast');
			$(this).removeClass('FecharMenu').addClass('AbrirMenu')
		}
		else {
			$("#MenuPrincipal").slideDown('fast');
			$(this).removeClass('AbrirMenu').addClass('FecharMenu')
		}
	})
	if($("#MainContent article").first().hasClass("boxDestaqueSmall"))
		$("#MainContent article").first().removeClass("boxDestaqueSmall").addClass("boxDestaqueBig");
	
	if($('#MainContent article').length > 7)
		$("#MainContent").css("overflow-y","hidden");
	
	$('#MainContent > article > figure > img').each(function () { 
		if($(this).attr("src") == ""){
			$(this).attr("src", diretorioTemplate+"/img/noImage.jpg");
		}
	});
}