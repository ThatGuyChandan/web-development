var money=prompt("enter the total money you have");
var i=prompt("enter the price of phone");
var a=prompt("enter the accessories price");
const tax=0.2;
const threshold=500;
var count1=0;
var count2=0;
while(i<money){
    money=money-i;
    if(a<threshold){
        money=money-a;
        count2++;
    }
count1++;
}
function taxCalc(x){
   return(x*tax);
}
var amount= count2*a + count1*i ;
console.log("total amount is"+ amount+taxCalc(amount));