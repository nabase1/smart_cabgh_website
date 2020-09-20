    $(Document).ready(function(){
         
        google.maps.event.addDomListeners(window, 'load', function(){
            
         var from_places = document.getElementById('pickuptown');
         var to_place = document.getElementById('dropofftown');
            
       
             google.maps.event.addListener(from_places, 'place_changed', function () {
                var from_place = from_places.getPlace();
                var from_address = from_place.formatted_address;
                //$('#origin').val(from_address);
            });
            
        var toAutocomplete = new google.maps.places.Autocomlete(to_place);
        
        toAutocomplete.setFields(
        ['address_components', 'geometry', 'icon', 'name']);
        
        toAutocomplete.addListener('Place_changed', function(){
            var place1 = toAutocomplete.getPlace();
        })
                
        });
        
        ('#pickup').keyup(function(){
            alert("ok");
        });
  
    });