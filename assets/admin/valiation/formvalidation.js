var l = window.location;

//var baseurl = l.protocol + "//" + l.host + "/" + l.pathname.split('/')[1];

var baseurl = l.protocol + "//" + l.host ;



(function (c, a, d) {



	var b = {};



	b.UTIL = {



		setupValidation: function () {


			
			
			
			$("#smart-form").validate({

				rules: {

					name: {

						required: true

					},
					
					phone: {

						required: true,

						number: true,

						minlength: 10,

						maxlength: 10

					},
					
					
					email: {

						required: true,

						email: true

					},

				},
				
				
				

				submitHandler: function (form)



				{

					form.submit();



				}



			});

		



			

		}

	};

	



	c(d).ready(function (e) {



		b.UTIL.setupValidation()



	})



})(jQuery, window, document);



