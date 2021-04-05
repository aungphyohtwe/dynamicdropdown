$(function() {

	$('#select-service').on('change',function() {

		var selectedVal = $(this).find('option:selected').val();
		console.log(selectedVal);
		$('#select-access').find('option').remove();

		$.ajax({
	      type: "POST",
	      url: "serive.php",
	      data: {reqData:selectedVal},
	      //Ajax通信が成功した場合に呼び出されるメソッド
	      success: function(data, dataType){
	        //デバッグ用 アラートとコンソール
	        console.log(data);
	     	$.each(JSON.parse(data), function(index, value) {
				$('#select-access').append('<option value="' + index + '">' + value + '</option>');
			});
	        
	      },
	      //Ajax通信が失敗した場合に呼び出されるメソッド
	      error: function(XMLHttpRequest, textStatus, errorThrown){
	        console.log('Error : ' + errorThrown);
	        console.log("XMLHttpRequest : " + XMLHttpRequest.status);
	        console.log("textStatus : " + textStatus);
	        console.log("errorThrown : " + errorThrown);
	      }
	    });
	});

	$('#select-access').on('change',function() {

		var selectedVal = $(this).find('option:selected').val();
		console.log(selectedVal);
		$('#select-unol').find('option').remove();

		$.ajax({
	      type: "POST",
	      url: "serive.php",
	      data: {reqData:selectedVal},
	      //Ajax通信が成功した場合に呼び出されるメソッド
	      success: function(data, dataType){
	        //デバッグ用 アラートとコンソール
	        console.log(data);
	     	$.each(JSON.parse(data), function(index, value) {
				$('#select-unol').append('<option value="' + index + '">' + value + '</option>');
			});
	        
	      },
	      //Ajax通信が失敗した場合に呼び出されるメソッド
	      error: function(XMLHttpRequest, textStatus, errorThrown){
	        console.log('Error : ' + errorThrown);
	        console.log("XMLHttpRequest : " + XMLHttpRequest.status);
	        console.log("textStatus : " + textStatus);
	        console.log("errorThrown : " + errorThrown);
	      }
	    });
	});
});