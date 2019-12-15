try {
    async function login (){

    const name = document.getElementById("name").value;
    const address = document.getElementById("address").value;
    const locality = document.getElementById("locality").value;
    const landmark = document.getElementById("landmark").value;
    const city = document.getElementById("city").value;
    const state = document.getElementById("state").value;
    const emailId = document.getElementById("emailid").value;
    const contNo = document.getElementById("contno").value;
    const password = document.getElementById("password").value;

    const customer = {
        name:name,
        address:address,
        locality:locality,
        landmark:landmark,
        city:city,
        state:state,
        emailId:emailId,
        contNo:contNo,
        password:password

    };
    console.log(customer)

    const promiceresponce =  await fetch("http://localhost:5000/customer/add",{
        method:'post',
        headers :{
            'content-type':'application/JSON;charset=utf-8'
        },
        body: JSON.stringify(customer), 
    });
    
    const addCustomerResponce = await promiceresponce.json();
    if(addCustomerResponce.status === 200)
    {
        window.location.replace("../view/login.php")
    
    }
    if(addCustomerResponce.status === 400)
    {
        window.location.replace("../view/login.php")
    }
}
}
catch(error)
 {
     console.log(error);

}