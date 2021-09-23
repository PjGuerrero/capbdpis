


var btnUpload = $("#upload_file"),
		btnOuter = $(".button_outer");
	btnUpload.on("change", function(e){
		var ext = btnUpload.val().split('.').pop().toLowerCase();
		if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
			$(".error_msg").text("Not an Image...");
		} else {
			$(".error_msg").text("");
			btnOuter.addClass("file_uploading");
			setTimeout(function(){
				btnOuter.addClass("file_uploaded");
			},3000);
			var uploadedFile = URL.createObjectURL(e.target.files[0]);
			setTimeout(function(){
				$("#uploaded_view").append('<img src="'+uploadedFile+'" />').addClass("show");
			},3500);
		}
	});
	$(".file_remove").on("click", function(e){
		$("#uploaded_view").removeClass("show");
		$("#uploaded_view").find("img").remove();
		btnOuter.removeClass("file_uploading");
		btnOuter.removeClass("file_uploaded");
	});






// $(document).ready(function()
// {
//   $(document).on('click', '.editMod', function()
//   {
//     var id= $(this).attr('id');
//     $.ajax({
//       url:"<?= base_url('imageupload')?>"
//     });
//   });
// });


// $(document).on('click', '#editmodal', function() {
//     $('.modal-body #idx').val($(this).data('id'));
//   })
 

$(document).on('change', '.file-input', function() {


    var filesCount = $(this)[0].files.length;
    
    var textbox = $(this).prev();
    
    if (filesCount === 1) {
    var fileName = $(this).val().split('\\').pop();
    textbox.text(fileName);
    } else {
    textbox.text(filesCount + ' files selected');
    }
    
    
    
    if (typeof (FileReader) != "undefined") {
    var dvPreview = $("#divImageMediaPreview");
    dvPreview.html("");
    $($(this)[0].files).each(function () {
    var file = $(this);
    var reader = new FileReader();
    reader.onload = function (e) {
    var img = $("<img />");
    img.attr("style", "width: 150px; height:100px; padding: 10px");
    img.attr("src", e.target.result);
    dvPreview.append(img);
    }
    reader.readAsDataURL(file[0]);
    });
    } else {
    alert("This browser does not support HTML5 FileReader.");
    }
    
    
    });

    // $(document).ready(function() {
    //     $(document).on('click', '#editmodal', function() {
        
    //       var number = $(this).data('number');
    //       var question = $(this).data('question');
    //       var answer = $(this).data('answer');
         
    //       $('#number').text(number);
    //       $('#question').text(question);
    //       $('#answer').text(answer);
    //     })
    //   })