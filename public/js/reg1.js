function setValue()
{
        var l=localStorage;
        var name=document.getElementById("name").value;
        l.setItem('nm',name);
        var contNo=document.getElementById("contno").value;
        l.setItem('cn',contNo);
        var emailId=document.getElementById("emailid").value;
        l.setItem('ei',emailId);
        var password=document.getElementById("password").value;
        l.setItem('pw',password);
        var confirmPassword=document.getElementById("confirmpassword").value;
        l.setItem('cp',confirmPassword);

        if(password != confirmPassword)
        {   
            alert('Password Not Matched!!');
            document.getElementById('password').value=null;
            document.getElementById('confirmpassword').value=null;
        }
        else
        {
            window.location.replace("../public/reg2.html");
        }
}