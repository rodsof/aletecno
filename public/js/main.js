
(function ($) {
    "use strict";

    /*==================================================================
    [ Focus Contact2 ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })


    /*==================================================================
    [ Validate after type ]*/
    $('.validate-input .input100').each(function(){
        $(this).on('blur', function(){
            if(validate(this) == false){
                showValidate(this);
            }
            else {
                $(this).parent().addClass('true-validate');
            }
        })    
    })

    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
           $(this).parent().removeClass('true-validate');
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    

})(jQuery);

$(function() {
$('#enviar').click(function() {
  if ($(this).is(':checked')) {
    $('#comprar').removeAttr('disabled');
  } else {
    $('#comprar').attr('disabled', 'disabled');
  }
});
});

/*
$(document).ready(function(){
  var show_btn=$('.show-modal');
  var show_btn=$('.show-modal');
  //$("#testmodal").modal('show');
  
    show_btn.click(function(){
      $("#testmodal").modal('show');
  })
});*/
 /* Funcion para enviar mail a aletecno*/
 /*
$(function() {
        $('#comprar').on('click', function(e) {
            e.preventDefault();
                console.log("entra");
                   $.ajax({
                  type: "POST",
                  url: "https://mandrillapp.com/api/1.0/messages/send.json",
                  data: {
                    "key": '9e02e710e6173c13f398346d77b9112d-us19',
                    'message': {
                      'from_email': 'rodriguezsofiaf@gmail.com',
                      'to': [
                          {
                            'email': 'rodriguezsofiaf@gmail.com',
                            'name': 'Sofia',
                            'type': 'to'
                          }
                        ],
                      'autotext': 'true',
                      'subject': 'Consulta sobre termómetro',
                      'html': 'YOUR EMAIL CONTENT HERE! YOU CAN USE HTML!'
                    }
                  }
                 }).done(function(response) {
                   console.log(response); // if you're into that sorta thing
                 });
        });
    });
*/
/* Esta funcion hacia aparece el modal */
/*$(function() {
        $('#comprar').on('click', function( e ) {
            e.preventDefault();
            Custombox.open({
                target: '#testmodal',
                effect: 'fadein'
            });

        });
    });*/

/* Esta funcion copiaba el cbu y datos */
/*
function copyFull() {
  //copys inner html of target div. 

  //event button
  var copyBtn = $('.copy-btn');
  copyBtn.on('click', function(event) {
    var $this = $(this);

    //find the element that has the text you want.
    var content = $this.prev('.copy-content');
    //creates new range object and sets text as boundaries.
    var range = document.createRange();
    range.selectNode(content[0]);
    window.getSelection().addRange(range);

    try {
      // Now that we've selected the text, execute the copy command  
      var successful = document.execCommand('copy');
      /*var msg = successful ? 'successful' : 'unsuccessful';
      console.log('Copy email command was ' + msg);//

      //handle success
      $(this).after('<span class="success"></span>');
      setTimeout(function() {
        $('.success').addClass('show');
        setTimeout(function() {
          $('.success').fadeOut(function() {
            $('.success').remove();
          });
        }, 1000);
      }, 0);
    } catch (err) {
      //console.log('Oops, unable to copy');
    }
    //clear out range for next event.
    window.getSelection().removeAllRanges();

  });
}
function copyCBU() {
  // same principle. Set a copyBtn, and a target element. In this case they are the same.
  var copyBtn = $('.cbu');
  copyBtn.on('click', function(event) {
    var content = $(this);
    var range = document.createRange();
    range.selectNode(content[0]);
    window.getSelection().addRange(range);

    try {
      var successful = document.execCommand('copy');
      $(this).addClass('p-success');
      setTimeout(function() {
        $('.cbu').removeClass('p-success');
      }, 1000);
    } catch (err) {
      // console.log('Oops, unable to copy');  
    }

    window.getSelection().removeAllRanges();

  });
}
$(function() {
  copyFull();
  copyCBU();
});
*/