function enableEdit(){
    let input = document.getElementsByTagName("input");
    for(let i = 0;i < input.length;i++){
        input[i].disabled= false;
    }
}