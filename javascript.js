
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
        }).then((json) => {
            console.log(json)
        }).catch((err)=>{    
        console.log("you should write your birthday date: ", err)
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
        if(body ==''){
            let contant = document.getElementById("outPUt");
            contant.innerText = "it is empty";
        }else{
           let contant = document.getElementById("outPUt");
           contant.innerText = body;
        }
    }).catch((err)=>{
       console.log(err);
    })
}; 


function deleteData(){
  
    let url = "./server/deleteHoroscope.php"
    let method ="DELETE"
  
    fetch(url, {
        method: method,
       
    }).then((Response)=> {
        return Response.json()
    }).then((body)=> {
        if(body !==''){
            let contant = document.getElementById("outPUt");
            contant.innerText = "Every thing is bye bye";
        }else{
            if(body ==''){
            let contant = document.getElementById("outPUt");
            contant.innerText = "here is nothing to delete WTF!!!";
            }
        }
    }).catch((err)=>{
        console.error(err)
    })
};  

