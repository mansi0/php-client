async function imageReg(url) {

    try {
        const form = document.querySelector('form')
        var fileName;

        form.addEventListener('submit', e =>  {
            e.preventDefault()

            const files = document.querySelector('[type=file]').files
            const formData = new FormData()

            for (let i = 0; i < files.length; i++) {
                let file = files[i];

                formData.append('files[]', file);
            }
            console.log(files[0]);
            console.log(files[0].name);
             fileName = files[0].name;
             funfile(fileName);

        });
    } catch (error) {
        console.log(error);
    }
}

async function funfile(fileName)
{
    console.log(fileName);

    var h=localStorage;
    h.setItem('hotelImage',fileName);
}
       /* const image = {
            imagePath: fileName

        };

        const promiseResponse = fetch(url + "/image/addimage", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(image),
        });

        console.log(promiseResponse);
        if (promiseResponse.status === 200) {
            window.location.replace("../public/login.php");
        }

        if (promiseResponse.status === 500) {
            document.getElementById("body").innerHTML = "Internal server error!!";
        }

    */

    

