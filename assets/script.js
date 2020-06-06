$(document).ready(function(){
  $(".button-collapse").sideNav()

  // Logic corona indonesia

    $.ajax({url: "https://api.kawalcorona.com/indonesia/", success: function(result){
     $("#terjangkit").html(result[0].positif + " Orang");
     $("#sembuh").html(result[0].sembuh + " Orang");
     $("#meninggal").html(result[0].meninggal + " Orang");
    }});
  
  // End Logic corona indonesia
})

var get = document.getElementById('date')
var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];

var date = new Date();

var day = date.getDate();

var month = date.getMonth();

var thisDay = date.getDay(),

    thisDay = myDays[thisDay];

var yy = date.getYear();

var year = (yy < 1000) ? yy + 1900 : yy;

get.innerHTML = thisDay + ', ' + day + ' ' + months[month] + ' ' + year;