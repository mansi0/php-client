async function reg(url) {
    try {
        const name=document.getElementById('name').value;
        //const foodtype = document.getElementById("foodType").value;
        var selectedValue=document.getElementById("list").value;
        console.log(selectedValue);
        const foodcategory = document.getElementById('foodCategory').value;
        const foodspeciality = document.getElementById('foodSpeciality').value;
        const foodsize= document.getElementById("foodSize").value;
        const foodprice = document.getElementById('foodPrice').value;
             
       
        
        
        const food= {
            foodName: name,
            foodType: selectedValue,
            category: foodcategory,
        };

        console.log(food)
        
         const promiseResponse = await fetch(url+"/food/addfood", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(food),
        });

        console.log(promiseResponse);
        if(promiseResponse.status === 200 || promiseResponse.status ===400)
        {
            
            window.location.replace("../public/food.php");
        }

        if(promiseResponse.status === 500)
        {
            //alert('in 400');
            document.getElementById("bodyhtl").innerHTML="Internal Server Error!!";
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

   const foodList=await fetch(url+"/food/getdetail", {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json;charset=utf-8'
    },
    body: JSON.stringify(food),
    });
    
    var response=await foodList.json();
    var count =Object.keys(response).length;

    var j;
    j=response[0].toString();
    console.log(j);


}catch (error) {
   console.log(error);
}
}

