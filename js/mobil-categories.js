var BackName = new Array();
var BackId  = new Array();
var BackRandomId  = new Array();
var CurrentDivID;

$(document).on("click",".nav-link-mobil",function (event){
	 
	 event.preventDefault();
     var inputHolder = $(this).parent().find("a");
	 
	 if (CurrentDivID)
		$("#appand_"+CurrentDivID).css("display","none");
	  
	 var headerName = $('#category-name-header').text();
	 var headerId = $("#current-cat-id").val();
	 
	 BackName.push(headerName); 
	 BackId.push(headerId); 
	 
	 
     var dataId = $(this).attr("data-id");
	 var dataName = $(this).attr("data-name");
	  
	 if (!dataId)
		 return false;
	 
	 $(".default-categories").css("display","none");
	 $("#button-back").css("display","block");
	 //$("#append_categories").empty();
	 
	 $("#category-name-header").html(dataName);
	 $("#current-cat-id").val(dataId);
	 
	 var divId = Math.floor(Math.random() * 1000);
	 
	 CurrentDivID = divId;
	 BackRandomId.push(divId);
	 
	 $("#append_categories").append("<div id='appand_"+divId+"'></div>");
	 
	 $.get("get_category_id.php?id="+dataId, function( data ) {
		 var obj = JSON.parse(JSON.stringify(data));
		 
		 Object.keys(obj).forEach(function(key) {

			 $("#appand_"+divId).append(MakeSubcategory(obj[key]));
		});
		
	});

});



$(document).on("click",".mobil-nav-header #button-back",function (event){
	
	 LastName = BackName.pop();
	 LastId = BackId.pop();
	 LastDivId = BackRandomId.pop();

	 $("#category-name-header").html(LastName);
	 $("#current-cat-id").val(LastId);
	 
	 if (LastId==0|| !LastDivId){
		$("#append_categories").empty();
		$(".default-categories").css("display","block");
	 }else{
		 $("#appand_"+CurrentDivID).remove();
		 
		 var last_element = BackRandomId[BackRandomId.length-1 ];
		 $("#appand_"+last_element).css("display","block");
		 CurrentDivID = last_element;
		 
	 }
});

function MakeSubcategory(data){

	if (data.child){
		$SubCategory = '<a class="nav-link-mobil" data-id = "'+data.child+'" data-name = "'+data.name+'" href="#"><li class="nav-item-mobil  d-flex"><img src="'+data.image+'"><div class="mobil-menu-text">'+data.name+'</div><div class="ml-auto mr-3"><i class="fa fa-chevron-right bg-transparent icon-mobil" aria-hidden="true"></i></div></li></a>';
	}else{		
		$SubCategory = '<li class="nav-item-mobil  d-flex"><img src="'+data.image+'"><a class="sub-categories" data-id = "'+data.child+'" data-name = "'+data.name+'" href="/product-list">'+data.name+'</a>';

	}

  return $SubCategory;
}

$('#button-close').click(function() {
	 $("#append_categories").empty();
	 $(".default-categories").css("display","block");
});
