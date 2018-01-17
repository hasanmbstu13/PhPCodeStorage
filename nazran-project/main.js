$(document).ready(function(){
      $("#country").val('{{$selected_country}}');

      function ajax_setup(){
       $.ajaxSetup({
          headers: {
             'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
          }
       });
      }

      function get_data(url='', id=''){
       jQuery.ajax({
          async: true,
          cache: false,
          dataType: 'text',
          url: url,
          success: function(response) 
          {
             $(id).html(response) ;
             $(id).selectpicker('refresh');
             return false; 
          }
       });
      }

      function change_country(){
         var country_id = $("#country").val();

         var url = "{{ route('getstate',':country_id') }}";
         url = url.replace(':country_id', country_id);

        ajax_setup();
        get_data(url, '#state');

         
      }

      function change_state(){
         var state_id = $("#state").val();

         if(isNaN(state_id) && state_id == 'other'){ 
            if(!($('.state').find('.other_state').length > 0)) {               
               $('.state').append("<input name='other_state' type='text' class='form-control other_state' placeholder = 'Enter a state' />"); 
            
            }else if($('.state').find('.other_state').length > 0){
               $('.state').find('.other_state').remove();
            }
            // return;

         }

        

         var url = "{{ route('getcity',':state_id') }}";
         url = url.replace(':state_id', state_id);

         ajax_setup();
         get_data(url, '#city');

      }

      function change_city(){
         var city_id = $("#city").val();

         if(isNaN(city_id) && city_id == 'other'){ 
             if(!($('.city').find('.other_city').length > 0)) {              
               $('.city').append("<input name='other_city' type='text' class='form-control other_city' placeholder = 'Enter a City' />"); 
              
              }else if($('.city').find('.other_city').length > 0){
                  $('.city').find('.other_city').remove();
               }
            // return;

         }

        

         var url = "{{ route('getsuburb',':city_id') }}";
         url = url.replace(':city_id', city_id);

         ajax_setup();
         get_data(url, '#suburb');

      }

      
      function change_suburb(){
         var suburb_id = $("#suburb").val();

         if(isNaN(suburb_id) && suburb_id == 'other'){  
            if(!($('.suburb').find('.other_suburb').length > 0)) {            
               $('.suburb').append("<input name='other_suburb' type='text' class='form-control other_suburb' placeholder = 'Enter a suburb' />"); 
            }
            return;

         }

         if($('.suburb').find('.other_suburb').length > 0){
            $('.suburb').find('.other_suburb').remove();
         }

      }


      $( "#country" ).change(change_country);
      $( "#state" ).change(change_state);
      $( "#city" ).change(change_city);
      $("#suburb").change(change_suburb);
});
