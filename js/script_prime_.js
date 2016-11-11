$(document).ready(function () {
	
 $('#get-data-prime').click(function () {
    var showData = $('#show-data');
	var $container = $("#container");
	var page_request="result_prime.php";
	//change css style background for result
	 $container.css("background-color","#e3e3e3");
	 $container.css("width","60%");
	 $container.css("margin","0px auto");
	 $container.css("padding","0px auto");
	 $container.css("padding","10px 10px 10px 10px");
	 $container.css("padding","1px solid #737373");
	 $container.css("border","1px solid #c4c4c4");
	
	var theData = {};
	$.ajax ({
    url: page_request,
    dataType: "json",
	data: theData,
    contentType: "application/json",
	// Success callback
    success: function (data) {
				
				//get data from the associative array Prime
				var Prime = data.Prime.map(function (prime) {
				return  prime.value;
				});
	  //clearing  existing datas
	  showData.empty();

		  if (Prime.length) {
			var content = '<li>' + Prime.join('</li><li>') + '</li>';
			var list = $('<ul />').html(content);
			showData.append(list);
		  }
	  
    },
	//Error callback
    error: function() {
			 //any error to be handled	
			 var contentError='Connection Error with the Server. Please Check Your Internet Connection.';
		    showData.text(contentError);
         
    }
 });
	// client message showing the process of the request.
    showData.text('Please wait... While retrieving data from Server.');
  });
});