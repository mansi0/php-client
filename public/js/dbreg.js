async function reg(url) {
    try {
        const name=document.getElementById('nm').value;
        const address = document.getElementById("address").value;
        const emailId = document.getElementById('ei').value;
        const contNo = document.getElementById('cn').value;
        const deliveryArea = document.getElementById("da").value;
        const password = document.getElementById('pw').value;
        const confirmPassword=document.getElementById('cp').value;
        
       
        
        
        const deliveryboy = {
            deliveryboyName: name,
            deliveryboyAddress: address,  
            deliveryboyEmailId: emailId,
            deliveryboyContNo: contNo,
            deliveryboyPassword: password, 
        };
        console.log(deliveryboy)
        
         const promiseResponse = await fetch(url+"/deliveryboy/adddeliveryboy", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(deliveryboy),
        });

        console.log(promiseResponse);
        if(promiseResponse.status===200)
        {
            window.location.replace("../public/dblogin.php");
        }

        if(promiseResponse.status===400){
            document.getElementById("body").innerHTML="Deliveryboy Alreday Exist!!";
        }

       /* const addUserResponse = await promiseResponse.json();
        if(addUserResponse.status === 200) {
            window.location.replace("../public/lohin.html");
        }
        if(addUserResponse.status === 400) {
            window.location.replace("../public/login.html");
        }*/
        
      /* const promiseResponse = await fetch("http://localhost:5000/customer/details")
            
        
       const response = await promiseResponse.json();

       console.log(response);
   */
   
   console.log(promiseResponse);

} catch (error) {
   console.log(error);
}
}

