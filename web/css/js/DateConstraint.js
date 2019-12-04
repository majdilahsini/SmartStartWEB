let today = new Date(),
    day = today.getDate(),
    month = today.getMonth()+1, //January is 0
    year = today.getFullYear();
if(day<10){
    day='0'+day
}
if(month<10){
    month='0'+month
}
today = year+'-'+month+'-'+day;

document.getElementById("date").setAttribute("min", today);
document.getElementById("date").setAttribute("value", today);