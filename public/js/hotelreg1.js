function setValue(url)
{
        var l=localStorage;
        var name=document.getElementById("name").value;
        l.setItem('nm',name);
        var contNo=document.getElementById("contno").value;
        l.setItem('cn',contNo);
        var emailId=document.getElementById("emailid").value;
        l.setItem('ei',emailId);
        var emailId=document.getElementById("address").value;
        l.setItem('ad',emailId);
        var emailId=document.getElementById("locality").value;
        l.setItem('lc',emailId);
        var emailId=document.getElementById("landmark").value;
        l.setItem('lm',emailId);
        var emailId=document.getElementById("city").value;
        l.setItem('ct',emailId);
        var emailId=document.getElementById("state").value;
        l.setItem('st',emailId);
        var password=document.getElementById("password").value;
        l.setItem('pw',password);
        var confirmPassword=document.getElementById("confirmpassword").value;
        l.setItem('cp',confirmPassword);

        if(password != confirmPassword)
        {   
            document.getElementById('msg').innerHTML="*Password and confirm password should be matched";
            document.getElementById('password').value=null;
            document.getElementById('confirmpassword').value=null;
        }
        else
        {
            window.location.replace("../public/hotelreg2.php");
        }
}