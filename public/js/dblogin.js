async function setValue(url){
    try{
        const emailId = document.getElementById("emailid").value;
        const password = document.getElementById("password").value;
       
        const deliveryboy= {
            deliveryboyEmailId: emailId,
            deliveryboyPassword:password
            };

            console.log(deliveryboy)
        
            const promiseResponse = await fetch(url+"/deliveryboy/logindeliveryboy", {
               method: 'POST',
               headers: {
                   'Content-Type': 'application/json;charset=utf-8'
               },
               body: JSON.stringify(deliveryboy),
           });
   

           if(promiseResponse.status===200)
           {
               window.location.replace("../public/home.php");``
           }
           if(promiseResponse.status===400)
           {

            document.getElementById("bodydblogin").innerHTML="**Invalid Password!!!";
           }
           
            if(promiseResponse.status===404)
            {
                document.getElementById("bodydblogin").innerHTML="**Deliveryboy Not Found!!";
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
   
