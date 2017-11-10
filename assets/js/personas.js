var Personas = {
		Init: function(){
			Personas.Widget.Banner.Init()
		},
		Widget: {
			Banner: {
				Init: function(){
					Personas.Widget.Banner.Sections.PersonaOne()
				},
				Reset: function(){
					$('.persona-info-wrapper').hide()
				},
				Swith: function(e){
					switch(e){
						case "persona-1":
							Personas.Widget.Banner.Sections.PersonaOne();
							break;
						case "persona-2":
							Personas.Widget.Banner.Sections.PersonaTwo();
							break;
						case "persona-3":
							Personas.Widget.Banner.Sections.PersonaThree();
							break;
						case "persona-4":
							Personas.Widget.Banner.Sections.PersonaFour();
							break;
						case "persona-5":
							Personas.Widget.Banner.Sections.PersonaFive();
							break;
						default:
							Personas.Widget.Banner.PersonaOne()
					}
				},
				Sections:{
					PersonaOne: function(){
						Personas.Widget.Banner.Reset(), $('#persona-1').show(), $('#persona-1-content').show()

					},
					PersonaTwo: function(){
						Personas.Widget.Banner.Reset(), $('#persona-2').show(), $('#persona-2-content').show()
					},
					PersonaThree: function(){
						Personas.Widget.Banner.Reset(), $('#persona-3').show(), $('#persona-3-content').show()
					},
					PersonaFour: function(){
						Personas.Widget.Banner.Reset(), $('#persona-4').show(), $('#persona-4-content').show()
					},
					PersonaFive: function(){
						Personas.Widget.Banner.Reset(), $('#persona-5').show(), $('#persona-5-content').show()
					}
				}
			}
		}
	}
	$(document).ready(function(){
		
		
		$('#persona-img-1').addClass('persona-img-active');
		

		$('#persona-img-1').click(function(){
			$('#persona-img-1').addClass('persona-img-active');
			$('#persona-img-2').removeClass('persona-img-active');
			$('#persona-img-3').removeClass('persona-img-active');
			$('#persona-img-4').removeClass('persona-img-active');
		});
		
		$('#persona-img-2').click(function(){
			$('#persona-img-2').addClass('persona-img-active');
			$('#persona-img-1').removeClass('persona-img-active');
			$('#persona-img-3').removeClass('persona-img-active');
			$('#persona-img-4').removeClass('persona-img-active');
		});
		
		$('#persona-img-3').click(function(){
			$('#persona-img-3').addClass('persona-img-active');
			$('#persona-img-2').removeClass('persona-img-active');
			$('#persona-img-1').removeClass('persona-img-active');
			$('#persona-img-4').removeClass('persona-img-active');
		});
		
		$('#persona-img-4').click(function(){
			$('#persona-img-4').addClass('persona-img-active');
			$('#persona-img-2').removeClass('persona-img-active');
			$('#persona-img-3').removeClass('persona-img-active');
			$('#persona-img-1').removeClass('persona-img-active');
		});
		
		
		Personas.Init(), $('.personaBtn').click(function(e){
			Personas.Widget.Banner.Swith(e.currentTarget.id)
		});
		
	});