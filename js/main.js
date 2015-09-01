// Load all js sources
$( document ).ready(function() {
    $('.radios-bx').on('click',function(event) {
    	var $selected = $('input:checked').val();
    	/* Act on the event */
    	if ($selected == 'wages') {
    		$('#ifWages,#signatory1Check,#signatory2Check').show('slow');
    		$('#ifReimbursement').hide('slow');
    	}else if ($selected == 'reimbursement') {
    		$('#ifWages,#signatory1Check,#signatory2Check').hide('slow');
    		$('#ifReimbursement').show('slow');
    	};
    });
});
