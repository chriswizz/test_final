$(document).ready(function(){

	$(document).on('click' , '.showBtn' ,function(){
		var id = this.id;
		$.ajax({
			url: 'read_course_detail.php',
			type: 'POST',
			dataType: 'JSON',
			data: {"id":id,"type":"single"},
			success:function(response){
				$("#detail-modal").modal('show');
				$('#title').text(response.title);
				$('#description').text(response.description);
				$("#id").text(id);
			}
		});
	});

	$(document).on('click' , '#upsertBtn' ,function(){
		$.ajax({
				url: 'upsert.php',
				type: 'POST',
				dataType: 'JSON',
				data: $("#frmEdit").serialize(),
				success:function(response){
					$("#messageModal").modal('show');
					$("#msg").html(response);
					loadData();
				},
				// error: (jqXHR, errorMessage, error) => {
				// 	$("#sucMsg").html("error");
				// }
				
			});
		$("#messageModal").modal('show');
	});



});
		
