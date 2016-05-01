var queryGenerator = (function() {
  function queryGenerator(str, str2, str3) {
      if (str == "") {
          document.getElementById("txtHint").innerHTML = "";
          return;
      } else {
          if (window.XMLHttpRequest) {
              // code for IE7+, Firefox, Chrome, Opera, Safari
              xmlhttp = new XMLHttpRequest();
          } else {
              // code for IE6, IE5
              xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange = function() {
              if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                  if (str2 && !str3) {
                    document.getElementById("sr_subcat").innerHTML = xmlhttp.responseText;
                  }
                  else {
                    if (str3) {
                      document.getElementById("incident-building").innerHTML = xmlhttp.responseText;
                    }
                    else {
                      document.getElementById("sr_cat").innerHTML = xmlhttp.responseText;
                    }
                  }
              }
          };
          
          if (str2 && !str3) {
              xmlhttp.open("GET","/modules/service_record/ajax/sr_test.php?q="+str+"&k="+str2,true);
          } else if (str3) {
            xmlhttp.open("GET","/modules/service_record/ajax/sr_test.php?q="+str+"&k2="+str3,true);
            displayExtraInfo(str3);
          } else {
            xmlhttp.open("GET","/modules/service_record/ajax/sr_test.php?q="+str,true);
          }
          xmlhttp.send();
      }
    }
    function displayExtraInfo($type) {
        if(str3 === "")
    }
    var publicAPI = {
      init : queryGenerator
    };
    return publicAPI;
})();
