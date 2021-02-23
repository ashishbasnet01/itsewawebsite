// <!-- -----------------js for product image toggle--------- -->
 // <script type="text/javascript" >

		
 		var  productImg = document.getElementById("product-img");
 		var smallImg = document.getElementsByClassName("small-img");

 		smallImg[0].onclick = function () 
 		{
 			productImg.src = smallImg[0].src;
  		}


 		smallImg[1].onclick = function () 
 		{
 			productImg.src = smallImg[1].src;
 		}

 		smallImg[2].onclick = function () 
 		{
 			productImg.src = smallImg[2].src;
 		}
	

// </script>