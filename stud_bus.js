var Kottayam = ["26 Mile","Kanjirapally","Ponkunnam","18 Mile","Kodungur","14 Mile","12 Milel","Alampally","Pampady","8 Mile","Annadivayal","Kanjikuzhi","Kottayam"];
var Changassery = ["Koratty","Vizhikathodu","Kallarakav","Chirakadav","Pazhayidam","Cheruvally","Manimalla","8 Mile","Karukachal","Mammoodu","Thengana","Changanasserry"];
var Cherthala = ["Barpeta","Biswanath","Bongaigaon","Cachar","Charaideo","Chirang","Darrang"];
var Kannur = ["Araria","Arwal","Aurangabad","Banka","Begusarai","Bhagalpur","Bhojpur","Buxar"];




$("#inputState").change(function(){
  var StateSelected = $(this).val();
  var optionsList;
  var htmlString = "";

  switch (StateSelected) {
    case "Kottayam":
        optionsList = Kottayam;
        break;
    case "Changassery":
        optionsList = Changassery;
        break;
    case "Cherthala":
        optionsList = Cherthala;
        break;
    case "Kannur":
        optionsList = Kannur;
        break;
    
}


  for(var i = 0; i < optionsList.length; i++){
    htmlString = htmlString+"<option value='"+ optionsList[i] +"'>"+ optionsList[i] +"</option>";
  }
  $("#inputDistrict").html(htmlString);

});