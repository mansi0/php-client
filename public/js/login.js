async function setValue(url){
    try{
        const emailId = document.getElementById("emailid").value;
        const password = document.getElementById("password").value;
       
        const customer = {
            emailId: emailId,
            password:password
            };

            console.log(customer)
        
            const promiseResponse = await fetch(url+"/customer/logincustomer", {
               method: 'POST',
               headers: {
                   'Content-Type': 'application/json;charset=utf-8'
               },
               body: JSON.stringify(customer),
           });
   

           if(promiseResponse.status===200)
           {
               window.location.replace("../public/home.php");``
           }
           if(promiseResponse.status===400)
           {
                alert('invalid');
            document.getElementById("msg").innerHTML="**Invalid Password!!!";
           }
           
            if(promiseResponse.status===404)
            {
                document.getElementById("msg").innerHTML="**Customer Not Found!!";
            }

            if(promiseResponse.status===500)
            {
                alert('Exception');
            }
          console.log(promiseResponse);
        }catch(error){
            console.log(error);

     
        }
    }
   
