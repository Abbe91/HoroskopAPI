

function add() {

    let url = "./server/addhoroscope.php"
    let method = "POST"
    
    let formData = new FormData()
    let varde = document.getElementById('type').value;
  
    formData.set("date", varde)
    makeRequest("./server/addhoroscope.php", "POST", formData, (result) => {
        console.log(result)
       // console.log($fromMonthAndDay)
     })
}

function makeRequest(url, method, formData, callback){

    fetch(url, {
        method: 'post',
        body: formData
        }).then((response) => {
        console.log(response)
        return response.json()
        }).then((result) => {
        callback(result)
        }).catch((err)=>{
        console.log("Error: ", err)
        })

       
    };

function showData(){
    let url = "./server/viewHoroscope.php"
    let method ="GET"
    fetch(url, {
        method: method,

    }).then((Response)=> {
        return Response.json()
    }).then((body)=> {
        if(body){
           echo ("hej");
        }else{
            echo ("hej");
        }
        let contant = document.getElementById("outPUT");
        contant.innerText = body;
    }).catch((err)=>{

    })
};  

