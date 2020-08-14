$(document).ready(function(){
	$('.row').on('click','.view-detail',function(){
		var id=$(this).data('id');
		var name=$(this).data('name');
		var photo=$(this).data('photo');
		var price=$(this).data('price');
		var discount=$(this).data('discount');
		var brand=$(this).data('brand');
		var subcategory=$(this).data('subcategory');
		var description=$(this).data('description');
		$(".pimg").attr('src',"backend/"+photo);
		$(".pname").text(name);
		$(".pprice").html(price);
		$(".pdiscount").html(discount);

	})
})

function count(){
	var shopString=localStorage.getItem("product");
	if(shopString){
		var shopArray=JSON.parse(shopString);
		if(shopArray!=0){
			var count=shopArray.length;
			// console.log(count);
			$("#item_count").text('('+count+')')
		}
	}else{
		$("#item_count").text('()')
	}
}
