async function setValue(){
    try{
        const emailId = document.getElementById("emailId").value;
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
               window.location.replace("../public/home.html");``
           }
           if(promiseResponse,status===400)
           {

            document.getElementById("msg").innerHTML="**Invalid Password!!!";
           }
           
            if(promiseResponse.status===404)
            {
                document.getElementById("msg").innerHTML="**Deliveryboy Not Found!!";
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
   
