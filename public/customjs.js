/* Index Of Pages.

  1=>Function of Check Login Detail OF Supper Admin, Admin,User.
	2=>Function is written for all type of Insert and Update Record.
  3=>

*/


//[2][START]=> This Function is written for all type of Insert and Update Record
function save_update_data(formid,url,relpage)
{  
    console.log("url:", url);
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
  // if(action=='getdata_admin')
  // {
  //   $("#password_section").hide();
  // }
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
      if(r[0]=='getdata_center')
      {
        //alert(r[0]);
        $("#center_id").val(r[1].trim()).attr('readonly','true');
        $("#center_name").val(r[2]).focus();
        $("#customer_name").val(r[3]);       
        $("#user_name").val(r[4]).attr('readonly','true');
         $("#email").val(r[5]).attr('readonly','true');
        $("#np").val(r[6]);
        $("#cnp").val(r[6]);
        $("#main_mno").val(r[7]);
        $("#alt_mno").val(r[8]);
        $("#city").val(r[9]);
        $("#state").val(r[10]);
        $("#address").val(r[11]);
        $("#validity").val(r[12]);
        $("#c_id").val(r[13]);
        $("#login_id").val(r[14]);
        
      }
      else if(r[0]=='getdata_student')
      {
        $("#std_id").val(r[1].trim());
        $("#enroll_no").val(r[2]).attr('readonly','true');
        $("#std_name").val(r[3]).focus();
        $("#email").val(r[4]);
        $("#main_mno").val(r[5]).attr('readonly','true');;
        
        $("#guadian_name").val(r[6]);
        $("#qualification").val(r[7]);
        $("#alt_mno").val(r[8]);
        $("#dob").val(r[9]);
        if(r[10]=='male')
          $("#male").prop('checked','checked');
        else
        $("#female").prop('checked','checked');
        $("#address").val(r[11]);   
      }
  
      else if(r[0]=='getdata_test')
      {
        $("#test_id").val(r[1].trim());
        $("#test_name").val(r[2]).focus();
        $("#duration").val(r[3]);
        $("#no_of_que").val(r[4]);
        $("#mark_per_que").val(r[5]);
        CKEDITOR.instances['editor'].setData(r[6]);
        //$("#instruction").val(r[6]);
      }
      else if(r[0]=='getdata_question')
      {
        $("#q_id").val(r[1].trim());
        $("#test_id").val(r[2]);
        CKEDITOR.instances['editor1'].setData(r[3]);
        CKEDITOR.instances['editor2'].setData(r[4]);
        CKEDITOR.instances['editor3'].setData(r[5]);
        CKEDITOR.instances['editor4'].setData(r[6]);
        CKEDITOR.instances['editor5'].setData(r[7]);
        if(r[8]=='A')
          $("#A").attr('checked','checked');
        else if(r[8]=='B')
          $("#B").attr('checked','checked');
        else if(r[8]=='C')
          $("#C").attr('checked','checked');
        else if(r[8]=='D')
          $("#D").attr('checked','checked');
        
        $("#test_id").val(r[2]).focus();
      }
      else if(r[0]=='getdata_assign_test')
      {
        $("#at_id").val(r[1]);
        $("#test_id").val(r[2]);
        $("#std_id").val(r[3]);
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