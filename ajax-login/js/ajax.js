
$("#username").blur(function () {
	if($(this).val()=="")
	{
		
	$("#usertest").html("<font color=red>请输入用户名</font>")	
	}
	else
	{
	 $.ajax({  
                type:"POST",  
                url:"lg1.php",  
                dataType:"JSON",  
                data:{  
                    "username":$("#username").val()                    
                },  
                success:function(data){  
                 $("#usertest").html(data)   
                }  
            }); 
     }
	
	});
	



$('#sub').click(function(){  
        var username=$('#username').val();  
        var mima=$("#mima").val();  
        var codes=$("#codes").val();  
        if(username!=""&&mima!=""&&codes.length==4){  
            $.ajax({  
                type:"POST",  
                url:"lg.php",  
                dataType:"JSON",  
                data:{  
                    "username":username,  
                    "mima":mima,  
					"codes":codes                   
                },  
                success:function(data){  
                    switch(data){  
                        case 1://用户已存在  
                           alert("用户已存在！");    
                            break;  
                        case 2://注册成功  
						       alert("注册成功！");  
                            break;  
                        case 0://验证码错误  
                          alert("验证码错误！");  
                            break;  
                    }  
                      
                }  
            }); 
        }else{  
            alert("请检查您的输入！");  
        }  
    });
    	


