$(document).ready(function() {

    /*Flash message*/
    setTimeout(function() {
        $('#flash-message').fadeOut('fast');
        
    }, 1400); 

    // to add more input field for company phone in(companies.create)
    $('#add-more').click(function () {
        $('#dynamic-field').append('<div class="form-group  col-md-6 alert"> <label>Phone</label> <button type="button" class="close" data-dismiss="alert">×</button> <input type="tel" class="form-control " minlength="8" maxlength="11" id="phone" name="phone[]" pattern="[0-9]{11}" >  </div>')
    });
});

