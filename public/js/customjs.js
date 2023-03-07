/* Index Of Pages.

  1=>Function of Check Login Detail OF Supper Admin, Admin,User.
	2=>Function is written for all type of Insert and Update Record.
  3=>

*/
//[1][START]=> Check Login Detail OF Supper Admin, Admin,User
function check_login(formid,url){
	//alert("Form ID="+formid+", URL="+url);
	var data = new FormData($('#'+formid)[0]);
    //alert(data);
    $.ajax({
      url: url,
      type: "POST",
      data: data,
      mimeType: "multipart/form-data",
      cache:false,
      contentType: false,
      processData: false,
      success: function(data) 
      {
        var r = data.split("#");
        //alert("R="+r);
        if(r[0]==1)
        {  
        	new PNotify({text:r[2],type:'success',icon:'ti ti-info-alt',styling:'fontawesome'});
        	$('#'+formid)[0].reset();
	        setTimeout(function ()
	        {
	        	window.location=r[1]; 
	        }, 2000);
        }
        if(r[0]==0)
        {
          new PNotify({text:r[2],type:'error',icon:'ti ti-info-alt',styling:'fontawesome'});
        	$('#'+formid)[0].reset();
        }              
      }
    });
	
}
// [1][END]=> Check Login Detail OF Supper Admin, Admin,User

//[2][START]=> This Function is written for all type of Insert and Update Record
function save_update_data(formid,url,relpage)
{  
  //alert("Form Id="+formid+",URL="+url+", Reload Page="+relpage);    
  var data = new FormData($('#'+formid)[0]);
  //alert(data);
  $.ajax({
    url: url,
    type: "POST",
    data: data,
    mimeType: "multipart/form-data",
    cache:false,
    contentType: false,
    processData: false,
    success: function(data) 
    {
      //alert(data);
      var r = data.split("#");
      //alert("R="+r);
      if(r[1]==1)
      {
        //alert("R[1]="+r[1]);
        new PNotify({text:r[2],type:'success',icon:'ti ti-info-alt',styling:'fontawesome'});
        $('#'+formid)[0].reset();
        setTimeout(function(){
          window.location=relpage; 
        },2000);
      }
      else
      {
        new PNotify({text:r[2],type:'error',icon:'ti ti-info-alt',styling:'fontawesome'});
      }
    }
  });  
}
//[END]==> This Function is written for all type of Insert and Update Record

//[START]==> This Function is written for getdataAjax
function getedit_data(id,action)
{
  //alert(id+action);
  $.ajax({
    url:"action_getdata.php",
    type:"POST",
    datatype:"json",
    data:
    {
      'id':id,
      'action':action
    },
    success:function(data)
    {
      $("#btn_update").show();
      $("#btn_submit").hide();
      //alert(data);
      var r = data.split("#");
      if(r[0]=='getdata_mobile_shop')
      {
        $("#login_id").val(r[1].trim());
        $("#shop_id").val(r[2].trim()).attr('readonly','true');
        $("#shop_name").val(r[3]);  
        $("#owner_name").val(r[4]).focus();
        $("#username").val(r[5]).attr('readonly','true');
         $("#email").val(r[6]).attr('readonly','true');
        $("#np").val(r[7]);
        $("#cnp").val(r[7]);
        $("#main_mno").val(r[8]);
        $("#validity").val(r[9]);       
      }
      else if(r[0]=='getdata_user')
      {
        $("#user_id").val(r[1].trim());
        $("#user_name").val(r[2]).focus();;
        $("#email").val(r[3]).attr('readonly','true');
        $("#username").val(r[4]).attr('readonly','true');
        $("#main_mno").val(r[5]).attr('readonly','true');
        $("#dob").val(r[6]);
        if(r[7]=='male')
          $("#male").prop('checked','checked');
        else
          $("#female").prop('checked','checked');
        $("#np").val(r[8]);
        $("#cnp").val(r[8]);
       }
      else if(r[0]=='getdata_customer')
      {
        $("#cust_id").val(r[1].trim());
        $("#cust_name").val(r[2]).focus();
        $("#email").val(r[3]);
        $("#main_mno").val(r[4]).attr('readonly','true');
        $("#alt_mno").val(r[5]);
        $("#remark").val(r[6]);
        $("#address").val(r[7]);
      }
      else if(r[0]=='getdata_brand')
      {
        $("#brand_id").val(r[1].trim());
        $("#brand_name").val(r[2]).focus();
      }
      else if(r[0]=='getdata_product_category')
      {
        $("#pc_id").val(r[1].trim());
        $("#product_category").val(r[2]).focus();
      }
      else if(r[0]=='getdata_purchase_master')
      {
        $("#pm_id").val(r[1].trim());
        $("#purchase_from").val(r[2]).focus();
        $("#purchase_date").val(r[3])
        $("#bill_no").val(r[4]);
        $("#total_amount").val(r[5]);
        $("#description").val(r[6]);
        
      }
      else if(r[0]=='getdata_product')
      {
        //echo $action."#".$row['p_id']."#".$row['brand_id']."#".$row['pc_id']."#".$row['product_code']."#".$row['product_name']."#".$row['total_quantity']."#".$row['product_mrp']."#".$row['product_price']."#".$row['description'];
        alert(r[5]);
        $("#p_id").val(r[1]);
        $("#brand_id").val(r[2]);
        $("#pc_id").val(r[3]);
        $("#product_code").val(r[4]).prop('disabled','true');
        $("#product_name").val(r[5]).focus();
        $("#total_quantity").val(r[6]).prop('disabled','true');
        $("#product_mrp").val(r[7]);
        $("#product_price").val(r[8]);
        $("#description").val(r[9]);
      }
    }
  });
}
  //[END]==> This Function is written for getdataAjax


//[START]==> This Function is written for all type of Delete 
function deleteconfirm(id,url,action)
{
  //alert("ID="+id+", URL="+url+", action="+action);
  $.ajax({
    url: url,
    type: "POST",
    data : {'id' : id, 'action' : action },
    success: function(data) 
    {
      //alert(data);
      //document.write(data);
      var r = data.split("#");
      if(r[1]==1)
      {  
        new PNotify({text:r[2],type:'success',icon:'ti ti-info-alt',styling:'fontawesome'});
        setTimeout(function()
        {
          window.location.reload();
        }, 2000);
      }
      else
      {
        new PNotify({text:r[2],type:'error',icon:'ti ti-info-alt',styling:'fontawesome'});
      }
      
    }             
  });
}
//[END]==> This Function is written for all type of Delete 




//[START]==> This Function is written for Change all type of Status 
function change_status(id,current_status,action,url)
{
  //alert(new_status);
  //alert("Id="+id+",current_status="+current_status+",Action On="+action+",URL="+url);
  $.ajax({
    url: url,
    type: "POST",
    data :
    {
      'id' : id,
      'action': action,
      'current_status':current_status
    },
    success: function(data) 
    {
      //alert(data);
      var r = data.split("#");
      if(r[1]==1)
        {
          //alert("R[1]="+r[1]);
          new PNotify({text:r[2],type:'success',icon:'ti ti-info-alt',styling:'fontawesome'});
          setTimeout(function(){
            window.location.reload();
          },2000);
        }
        else
        {
          new PNotify({text:r[2],type:'error',icon:'ti ti-info-alt',styling:'fontawesome'});
        }
      
    }
  });
}
//[END]==> This Function is written for Change all type of Status 

//[START]==> This Function is written for Check the value is existing Or not. 
function check_value_exist(action,value)
        {
          //alert("Action on="+action+", Value="+value);
          $.ajax({
            type:"POST",
            url:"action_getdata.php",
            data:{
              "value":value,
              "action":action
            },
            success:function(res)
            {
              //alert(res);
              var r = res.split("#");
              if(r[0]=='check_enroll_no')
              {
                if (r[1]=='1'){
                  $("#enroll_no").css("border",'1px solid green');
                  $("#eno_res").html('*');
                }
                else if(r[1]=='0'){
                  $("#eno_res").html(r[2]);
                  $("#enroll_no").css("border",'1px solid red').focus();
                }
              }
              else if(r[0]=='check_email')
              {
                if (r[1]=='1'){
                  $("#email").css("border",'1px solid green');
                  $("#email_res").html('*');
                }
                else if(r[1]=='0'){
                  $("#email_res").html(r[2]);
                  $("#email").css("border",'1px solid red').focus();
                }
              }
              else if(r[0]=='check_user_name')
              {
                if (r[1]=='1'){
                  $("#user_name").css("border",'1px solid green');
                  $("#username_res").html('*');
                }
                else if(r[1]=='0'){
                  $("#username_res").html(r[2]);
                  $("#user_name").css("border",'1px solid red').focus();
                }
              }
             
          }
          })
        }
//[END]==> This Function is written for Check the value is existing Or not. 