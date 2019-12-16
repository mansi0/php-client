async function reg() {
    try {
       
        const name = document.getElementById("name").value;
        
        const contNo = document.getElementById("contno").value;
        
        const emailId = document.getElementById("emailid").value;
        
        const password = document.getElementById("password").value;
        const address = document.getElementById("address").value;
        const locality = document.getElementById("locality").value;
        const landmark = document.getElementById("landmark").value;
        const city = document.getElementById("city").value;
        const state = document.getElementById("state").value;
       
        alert('in try22');
        const customer = {
            name: name,
            contNo: contNo,
            emailId: emailId,
            password: password, 
            address: address,           
            locality: locality,
            landmark: landmark,
            city: city,
            state: state
        };
        console.log(customer)
        
         const promiseResponse = await fetch("http://localhost:5000/customer/add", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(customer),
        });

        const addUserResponse = await promiseResponse.json();
        if(addUserResponse.status === 200) {
            window.location.replace("../view/reg.php");
        }
        if(addUserResponse.status === 400) {
            window.location.replace("../view/reg.php");
        }
        
      /* const promiseResponse = await fetch("http://localhost:5000/customer/details")
            
        
       const response = await promiseResponse.json();

       console.log(response);
   */
   
   console.log(promiseResponse);

} catch (error) {
   console.log(error);
}
}

