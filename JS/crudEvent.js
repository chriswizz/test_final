$(document).ready(function(){

	$(document).on('click' , '.showBtn' ,function(){
		var id = this.id;
		console.log(id);
		$.ajax({
			url: 'read_course_detail.php',
			type: 'POST',
			dataType: 'JSON',
			data: {"id":id,"type":"single"},
			success:function(response){
				console.log(id);
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


	//search by course title in admin
	$('.search-box input[type="text"]').on("keyup input", function(){
        var inputVal = $(this).val();
        if(inputVal.length){
            $.get("search_course_title.php", {term: inputVal}).done(function(data){
                $(".display").html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
});

function loadData() {
	$.ajax({
		url: 'read.php',
		type: 'POST',
		data: {"type":"all"},
		success:function(response){
			$("#container").html(response);
		}
	});
}
		
