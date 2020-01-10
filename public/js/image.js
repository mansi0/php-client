async function imageValue(url){
    try{
        alert('in imagevalue');
        var fileInput = document.getElementById("image");
        var image = new SimpleImage(fileInput);
        console.log(image);


      /*  console.log(input);
        if (input.files && input.files[0]) {
            var filePath = document.getElementsByName("image").values;
            var reader = new FileReader();
           /* reader.onload = function (e) {
                $('#imgs').attr('src',e.target.result);
            };*/
           /* reader.onload = function (e) {
              $('#blah')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
            };*/
           /* reader.readAsDataURL(input.files[0]);*/
          
          alert('after if');
          
        
        /*
        var l=localStorage;
        var image=document.getElementById("image").value;
        l.setItem('im',image);
        console.log(l.getItem('im'));
        /*const image = document.getElementById("image")
        console.log(image);
       
        const imageObject = {
            image : image
            };*/

   /* var blobFile = $('#image').files[0];
    var formData = new FormData();
    formData.append("fileToUpload", blobFile);
    console.log(blobFile, formData);*/

   /* $.ajax({
       url: url1+"/image/addimage",
       type: "POST",
       data: formData,
       processData: false,
       contentType: false,
       success: function(response) {
           // .. do something
       },
       error: function(jqXHR, textStatus, errorMessage) {
           console.log(errorMessage); // Optional
       }
    });*/
    /*
    const imageObject = {
        image : reader
        };
        console.log(imageObject);

        alert('after object');
            const promiseResponse = await fetch(url1+"/image/addimage", {
               method: 'POST',
               headers: {
                   'Content-Type': 'application/json;charset=utf-8'
               },
               body: JSON.stringify(imageObject),
           });
   
           alert('___________');

           if(promiseResponse.status===200)
           {
               window.location.replace("../public/home.php");``
           }
         /*  if(promiseResponse.status===400)
           {
                alert('invalid');
            document.getElementById("msg").innerHTML="**Invalid Password!!!";
           }
           
            if(promiseResponse.status===404)
            {
                document.getElementById("msg").innerHTML="**Customer Not Found!!";
            }
*/
        /*    if(promiseResponse.status===500)
            {
                alert('Exception');
            }
          console.log(promiseResponse);
        }*/
    }
        catch(error){
            console.log(error);

     
        }
    }
