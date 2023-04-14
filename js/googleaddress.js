  //google.maps.event.addDomListener(window, 'load', initialize);
  window.addEventListener('load', initialize);
  
  function initialize() {
  var input = document.getElementById('buaddress');
  var input2 = document.getElementById('bankaddress');
  var input3 = document.getElementById('ffcbankaddress');
  var options = {
    types: ['address'],
    fields: ["formatted_address", "address_components"]
/*     componentRestrictions: {
      country: ['mx','us']
    } */
  };
  var autocomplete = new google.maps.places.Autocomplete(input,options);
  var autocomplete2 = new google.maps.places.Autocomplete(input2,options);
  var autocomplete3 = new google.maps.places.Autocomplete(input3,options);
  
  autocomplete.addListener('place_changed', function() {
  var place = autocomplete.getPlace();
  $('#buaddress').val(place.formatted_address);
  });

  autocomplete2.addListener('place_changed2', function() {
    var place2 = autocomplete2.getPlace();
    $('#bankaddress').val(place2.formatted_address);
    });

  autocomplete3.addListener('place_changed3', function() {
    var place3 = autocomplete3.getPlace();
    $('#ffcbankaddress').val(place2.formatted_address);
    });


  }

  
