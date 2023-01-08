   /* product select starts */
   let size = document.getElementById("size"),
   weight = document.getElementById("weight"),
   height = document.getElementById("height"),
   width = document.getElementById("width"),
   length = document.getElementById("length"),
   select = document.getElementById("product-type");

function productSelect() {
   "dvd-disc" == select.value ? (size.style.visibility = "visible",
           weight.style.visibility = "hidden",
           height.style.visibility = "hidden",
           width.style.visibility = "hidden",
           length.style.visibility = "hidden") :
       "book" == select.value ? (weight.style.visibility = "visible",
           size.style.visibility = "hidden",
           height.style.visibility = "hidden",
           width.style.visibility = "hidden",
           length.style.visibility = "hidden") :
       "furniture" == select.value ? (height.style.visibility = "visible",
           width.style.visibility = "visible",
           length.style.visibility = "visible",
           size.style.visibility = "hidden",
           weight.style.visibility = "hidden") :
       "type" == select.value ? (size.style.visibility = "hidden",
           weight.style.visibility = "hidden",
           height.style.visibility = "hidden",
           width.style.visibility = "hidden",
           length.style.visibility = "hidden") :
       document.write("<h3>Something went wrong </h3>")
}
size.style.visibility = "hidden",
   weight.style.visibility = "hidden",
   height.style.visibility = "hidden",
   width.style.visibility = "hidden",
   length.style.visibility = "hidden";

   // =================== unminified code =================

      /*  select = document.getElementById("product-type");
size = document.getElementById("size");
weight = document.getElementById("weight");
height = document.getElementById("height");
width = document.getElementById("width");
length = document.getElementById("length");

size.style.visibility = "hidden";
weight.style.visibility = "hidden";
height.style.visibility = "hidden";
width.style.visibility = "hidden";
length.style.visibility = "hidden";
   

function productSelect() {

  if(select.value == "dvd-disc"){
      size.style.visibility = "visible";
           weight.style.visibility = "hidden";
           height.style.visibility = "hidden";
           width.style.visibility = "hidden";
           length.style.visibility = "hidden";
  }


  else if(select.value == "book"){
           weight.style.visibility = "visible";
           size.style.visibility = "hidden";
           height.style.visibility = "hidden";
           width.style.visibility = "hidden";
           length.style.visibility = "hidden";
  }

  else if(select.value == "furniture"){
      height.style.visibility = "visible";
           width.style.visibility = "visible";
           length.style.visibility = "visible";
           size.style.visibility = "hidden";
           weight.style.visibility = "hidden";
  }

  else if(select.value == "type"){
           size.style.visibility = "hidden";
           weight.style.visibility = "hidden";
           height.style.visibility = "hidden";
           width.style.visibility = "hidden";
           length.style.visibility = "hidden";
  }

  else{
      document.write("<h3>Something went wrong </h3>");
  }
} */


/*product select ends */

/* ============= ajax section starts ============ */

 $(document).ready(function () {

    $("#sku").on('keyup', function(){ 

    var sku = $("#sku").val();

    $.ajax({
        url: 'fetch.php',
        type: "POST",
        data: {sku: sku},
        success: function(data) {

          if (data == 'exists') {
            // show an error message if the username already exists
            $('#availability').html('<p style = "color:red" >SKU id already exists</p>');
            $("#btn-save").attr("disabled", true);
            $("$btn-save").on("mouseOver", function(){

                $("$btn-save").css("cursor", "not-allowed");

            })
            

          }
          
          else {
          
            $('#availability').html('<p style = "color:green">SKU id available</p>');
            $("#btn-save").attr("disabled", false);

          }
        }
      });
    
    });
 
    
 });

/* ========== ajax section ends ============*/