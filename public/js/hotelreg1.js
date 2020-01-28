function setValue(url)
{
        var h=localStorage;
        var name=document.getElementById("name").value;
        h.setItem('nm',name);
        var contNo=document.getElementById("contno").value;
        h.setItem('cn',contNo);
        var emailId=document.getElementById("emailid").value;
        h.setItem('ei',emailId);
        var emailId=document.getElementById("address").value;
        h.setItem('ad',emailId);
        var emailId=document.getElementById("locality").value;
        h.setItem('lc',emailId);
        var emailId=document.getElementById("landmark").value;
        h.setItem('lm',emailId);
        var emailId=document.getElementById("city").value;
        h.setItem('ct',emailId);
        var emailId=document.getElementById("state").value;
        h.setItem('st',emailId);
        var password=document.getElementById("password").value;
        h.setItem('pw',password);
        var confirmPassword=document.getElementById("confirmpassword").value;
        h.setItem('cp',confirmPassword);

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