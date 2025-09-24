var l = window.location;
var baseurl = l.protocol + "//" + l.host + "/" + l.pathname.split('/')[1];
//var baseurl = l.protocol + "//" + l.host ;
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
				submitHandler: function (form) {
					form.submit();
				}
			});
			$("#eventform").validate({
				rules: {
					name: {
						required: true
					},
					education: {
						required: true
					},
					designation: {
						required: true
					},	
					address: {
						required: true
					},	
					pincode: {
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
				submitHandler: function (form) {
					form.submit();
				}
			});
			$("#firstform").validate({
				rules: {
					name: {
						required: true
					},		
					phoneno: {
						required: true,
						number: true,
						minlength: 10,
						maxlength: 10
					},
					email: {
						required: true,
						email: true
					},
					invitation: {
						required: true
					},	
					organization: {
						required: true
					},	
					designation: {
						required: true
					},	
					questionnaire: {
						required: true
					},	
					purposeinterview: {
						required: true
					},	
					modeinterview: {
						required: true
					},
					pincode: {
						required: true,
						number: true,
						minlength: 6,
						maxlength: 6
					}
				},
				submitHandler: function (e) {
			        var form = $('#firstform')[0];
			        var data = new FormData(form);
					$.ajax({
						url: baseurl+"/ajax_post_controller/savefirstform",
						type: "post",
						data: data,
						enctype: 'multipart/form-data',
                      	processData: false,
                        contentType: false,
						cache: false,
						dataType:'json',
						beforeSend: function () {
							$("#firstform").attr("disabled", true);
						},
						complete: function () {
							$("#firstform").attr("disabled", false);
						},
						success: function (f) {
							if (f.error) {
								$(".errormessage").empty();
								$("#firstformsubmit").after("<div class='alert alert-danger errormessage'>"+f.error+"</div>");
							}
							else if (f.sucess) {
								$(".errormessage").empty();
								$('#firstform')[0].reset();
								$("#firstformsubmit").after("<div class='alert alert-success errormessage'>"+f.sucess+"</div>");
							}
						},
						error: function (h, f, g) {
							alert(g + "\r\n" + h.statusText + "\r\n" + h.responseText)
						}
					});
				}
			});

			$("#eventformpayment").validate({
				rules: {
					name: {
						required: true
					}
				},
				submitHandler: function (e) {
					$.ajax({
						url: baseurl+"/ajax_post_controller/eventformpaymentsave",
						type: "post",
						data: $("#eventformpayment").serialize(),
						dataType:'json',
						beforeSend: function () {
							$("#eventformpayment").attr("disabled", true);
						},
						complete: function () {
							$("#eventformpayment").attr("disabled", false);
						},
						success: function (f) {
							if (f.error) {
								$(".errormessage").empty();
								$("#eventformpaymentsubmit").after("<div class='alert alert-danger errormessage'>"+f.error+"</div>");
							}
							else if (f.sucess) {
								$(".errormessage").empty();
								$('#eventformpayment')[0].reset();
								$("#eventformpaymentsubmit").after("<div class='alert alert-success errormessage'>"+f.sucess+"</div>");
							}
						},
						error: function (h, f, g) {
							alert(g + "\r\n" + h.statusText + "\r\n" + h.responseText)
						}
					});
				}
			});

			$("#secondform").validate({
				rules: {
					name: {
						required: true
					},		
					phoneno: {
						required: true,
						number: true,
						minlength: 10,
						maxlength: 10
					},
					email: {
						required: true,
						email: true
					},
					invitation: {
						required: true
					},	
					remunerationrecognitionsdata: {
						required: true
					},	
					topic: {
						required: true
					},	
					organization: {
						required: true
					},	
					designation: {
						required: true
					},	
					mode: {
						required: true
					},	
					participants: {
						required: true
					},	
					remunerationrecognitions: {
						required: true
					}
				},
				submitHandler: function (e) {
			        var form = $('#secondform')[0];
			        var data = new FormData(form);
					$.ajax({
						url: baseurl+"/ajax_post_controller/savesecondform",
						type: "post",
						data: data,
						enctype: 'multipart/form-data',
                      	processData: false,
                        contentType: false,
						cache: false,
						dataType:'json',
						beforeSend: function () {
							$("#secondform").attr("disabled", true);
						},
						complete: function () {
							$("#secondform").attr("disabled", false);
						},
						success: function (f) {
							if (f.error) {
								$(".errormessage").empty();
								$("#secondformsubmit").after("<div class='alert alert-danger errormessage'>"+f.error+"</div>");
							}
							else if (f.sucess) {
								$(".errormessage").empty();
								$('#secondform')[0].reset();
								$("#secondformsubmit").after("<div class='alert alert-success errormessage'>"+f.sucess+"</div>");
							}
						},
						error: function (h, f, g) {
							alert(g + "\r\n" + h.statusText + "\r\n" + h.responseText)
						}
					});
				}
			});

			$("#thirdform").validate({
				rules: {
					name: {
						required: true
					},		
					phoneno: {
						required: true,
						number: true,
						minlength: 10,
						maxlength: 10
					},
					email: {
						required: true,
						email: true
					},
					invitation: {
						required: true
					},	
					remunerationrecognitionsdata: {
						required: true
					},	
					topic: {
						required: true
					},	
					organization: {
						required: true
					},	
					designation: {
						required: true
					},	
					mode: {
						required: true
					},	
					participants: {
						required: true
					},	
					remunerationrecognitions: {
						required: true
					}
				},
				submitHandler: function (e) {
			        var form = $('#thirdform')[0];
			        var data = new FormData(form);
					$.ajax({
						url: baseurl+"/ajax_post_controller/savethirdform",
						type: "post",
						data: data,
						enctype: 'multipart/form-data',
                      	processData: false,
                        contentType: false,
						cache: false,
						dataType:'json',
						beforeSend: function () {
							$("#thirdform").attr("disabled", true);
						},
						complete: function () {
							$("#thirdform").attr("disabled", false);
						},
						success: function (f) {
							if (f.error) {
								$(".errormessage").empty();
								$("#thirdformsubmit").after("<div class='alert alert-danger errormessage'>"+f.error+"</div>");
							}
							else if (f.sucess) {
								$(".errormessage").empty();
								$('#thirdform')[0].reset();
								$("#thirdformsubmit").after("<div class='alert alert-success errormessage'>"+f.sucess+"</div>");
							}
						},
						error: function (h, f, g) {
							alert(g + "\r\n" + h.statusText + "\r\n" + h.responseText)
						}
					});
				}
			});


			$("#fourform").validate({
				rules: {
					name: {
						required: true
					},		
					phoneno: {
						required: true,
						number: true,
						minlength: 10,
						maxlength: 10
					},
					email: {
						required: true,
						email: true
					},
					invitation: {
						required: true
					},	
					designation: {
						required: true
					}
				},
				submitHandler: function (e) {
			        var form = $('#fourform')[0];
			        var data = new FormData(form);
					$.ajax({
						url: baseurl+"/ajax_post_controller/savefourform",
						type: "post",
						data: data,
						enctype: 'multipart/form-data',
                      	processData: false,
                        contentType: false,
						cache: false,
						dataType:'json',
						beforeSend: function () {
							$("#fourform").attr("disabled", true);
						},
						complete: function () {
							$("#fourform").attr("disabled", false);
						},
						success: function (f) {
							if (f.error) {
								$(".errormessage").empty();
								$("#fourformsubmit").after("<div class='alert alert-danger errormessage'>"+f.error+"</div>");
							}
							else if (f.sucess) {
								$(".errormessage").empty();
								$('#fourform')[0].reset();
								$("#fourformsubmit").after("<div class='alert alert-success errormessage'>"+f.sucess+"</div>");
							}
						},
						error: function (h, f, g) {
							alert(g + "\r\n" + h.statusText + "\r\n" + h.responseText)
						}
					});
				}
			});
			$("#smart").validate({
				rules: {
					name: {
						required: true
					},	
					message: {
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
				submitHandler: function (form) {
					form.submit();
				}
			}),
			c("#newsletterform").validate({
				rules: {					
					email: {
						required: true,
						email:true
					}
				},
				submitHandler: function (form) {
					$.ajax({
						url: baseurl+"/ajax_post_controller/subscribenewsletter",
						type: "post",
						data: $("#newsletterform").serialize(),
						dataType: "json",
						beforeSend: function () {
							$("#newsletterform").attr("disabled", true);
						},
						complete: function () {
							$("#newsletterform").attr("disabled", false);
						},
						success: function (f) {
							if (f.sucess) {
								$(".errormessage").empty();
								$('#newsletterform')[0].reset();
								$("#newsletterform").before("<div class='errormessage'>"+f.sucess+"</div>");
							}
						},
						error: function (h, f, g) {
							alert(g + "\r\n" + h.statusText + "\r\n" + h.responseText)
						}
					});
				}
			}),
			c("#homenewsletterform").validate({
				rules: {				
					email: {
						required: true,
						email:true
					}
				},
				submitHandler: function (form) {
					$.ajax({
						url: baseurl+"/ajax_post_controller/subscribenewsletter",
						type: "post",
						data: $("#homenewsletterform").serialize(),
						dataType: "json",
						beforeSend: function () {
							$("#homenewsletterform").attr("disabled", true);	
						},
						complete: function () {
							$("#homenewsletterform").attr("disabled", false);
						},
						success: function (f) {
							if (f.sucess) {
								$(".errormessage").empty();
								$('#homenewsletterform')[0].reset();
								$("#homenewsletterform").before("<div class='errormessage'>"+f.sucess+"</div>");
							}
						},
						error: function (h, f, g) {
							alert(g + "\r\n" + h.statusText + "\r\n" + h.responseText)
						}
					});
				}
			});
		}
	};
	c(d).ready(function (e) {
		b.UTIL.setupValidation()
	})
})(jQuery, window, document);



