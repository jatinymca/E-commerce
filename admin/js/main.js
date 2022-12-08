


$("#main_category_post").on('submit',function(event){
    event.preventDefault(); 
    var data_html=$('#main_category_post').serialize()+'&action=main_category_post';
    var url="php/data_insert.php"; 
    insert_record(data_html,url,'main_category_post')

});


$("#sub_category_post").on('submit',function(event){
    event.preventDefault(); 
    var data_html=$('#sub_category_post').serialize()+'&action=sub_category_post';
    var url="php/data_insert.php"; 
    insert_record(data_html,url,'sub_category_post')

});

$("#product_add_post").on('submit',function(event){
    event.preventDefault(); 
    $.ajax({
       url: "php/add_product.php",
       type: "POST",
       data:  new FormData(this),
       contentType: false,
       cache: false,
       processData:false,
       success:function(data){
          record_responce(data,roll);

      }
  }); 
});

function insert_record(data_html,url,roll){

    $.ajax({
     type:'POST',
     url:url,
     data:data_html,
     dataType: "json",
     success:function(data){
     alert("Successfully Inserted"); 
  }
});
} 


function record_responce(data,roll){
    console.log(data);
    console.log(roll); 

    if(roll=='main_category_post'){
        if(data.response=='200'){
            alert(data.message); 
        }
        else{
           alert(data.message);
       }
   }

   if(roll=='sub_category_post'){
    if(data.response=='200'){
        alert(data.message); 
    }
    else{
       alert(data.message);
   }
}

if(roll=='product_add_post'){
    if(data.response=='200'){
        alert(data.message); 
    }
    else{
       alert(data.message);
   }
}
}