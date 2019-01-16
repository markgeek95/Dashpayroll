/* JQUERY*/		

$(function(){
	$('#TaxTables').dataTable({
		"lengthChange": false,
	});

	$('#generateData').submit(function(){
		var form = $(this).serialize();
		$.post(URL+'main/sortTable',form)
		.done(function(returnData){   
        // alert(returnData);
        $('#tableSort').html(returnData);
        return false;
    })
		return false;
	})

	$('#AnnualTable').dataTable({
		"lengthChange": false,
	});
	
	$('#generateData').submit(function(){
		var form = $(this).serialize();
		$.post(URL+'main/sortTable',form)
		.done(function(returnData){   
        // alert(returnData);
        $('#tableSort').html(returnData);
        return false;
    })
		return false;
	})

	$('#StatutoryTable').dataTable({
		"lengthChange": false,
	});

	$('#generateData').submit(function(){
		var form = $(this).serialize();
		$.post(URL+'main/sortTable',form)
		.done(function(returnData){   
        // alert(returnData);
        $('#tableSort').html(returnData);
        return false;
    })
		return false;
	})

	$('#EmployeeTable').dataTable({
		"lengthChange": false,
	});

	$('#generateData').submit(function(){
		var form = $(this).serialize();
		$.post(URL+'main/sortTable',form)
		.done(function(returnData){   
        // alert(returnData);
        $('#tableSort').html(returnData);
        return false;
    })
		return false;
	})

	$('#ShiftTable').dataTable({
		"lengthChange": false,
	});

	$('#generateData').submit(function(){
		var form = $(this).serialize();
		$.post(URL+'main/sortTable',form)
		.done(function(returnData){   
        // alert(returnData);
        $('#tableSort').html(returnData);
        return false;
    })
		return false;
	})

	$('#BanksTable').dataTable({
		"lengthChange": false,
	});

	$('#generateData').submit(function(){
		var form = $(this).serialize();
		$.post(URL+'main/sortTable',form)
		.done(function(returnData){   
        // alert(returnData);
        $('#tableSort').html(returnData);
        return false;
    })
		return false;
	})
	$('#LeaveTable').dataTable({
		"lengthChange": false,
	});

	$('#generateData').submit(function(){
		var form = $(this).serialize();
		$.post(URL+'main/sortTable',form)
		.done(function(returnData){   
        // alert(returnData);
        $('#tableSort').html(returnData);
        return false;
    })
		return false;
	})
	
})		
$(document).ready(function(){
	/* modals */
	$("#btn-tax").click(function(){
		$("#withholding-tax").modal({show: true});
	});

	$("#btn-tax").click(function(){
		$("#annualtax").modal({show: true});

	});
	$("#btn-witholding-taxupdate").click(function(){
		$("#withholding-taxupdate").modal({show: true});

	});
	$("#btn-taxupdate").click(function(){
		$("#annualtaxupdate").modal({show: true});

	});


	$("#btn-statutory").click(function(){
		$("#statutorydeduction").modal({show: true});

	});
	$("#btn-statutoryupdate").click(function(){
		$("#statutorydeductionupdate").modal({show: true});

	});
	$("#btn-emp").click(function(){
		$("#addemployee").modal({show: true});

	});
	$("#btn-emp-update").click(function(){
		$("#update-employee").modal({show: true});

	});

	$("#btn-leave").click(function(){
		$("#leavemodal").modal({show: true});

	});
	$("#btn-leaveupdate").click(function(){
		$("#leaveupdate").modal({show: true});

	});

	$("#btn-delete").click(function(){
		$("#deletemodal").modal({show: true});

	});
	$("#btn-shiftupdate").click(function(){
		$("#UpdateShiftModal").modal({show: true});

	});
	$("#btn-bankupdate").click(function(){
		$("#UpdateBankModal").modal({show: true});
	});
	$("#btn-deptadd").click(function(){
		$("#DepartmentModal").modal({show: true});
	});
	$("#btn-posadd").click(function(){
		$("#PositionModal").modal({show: true});
	});
	/* tooltips */

	$('[data-toggle="update"]').tooltip();  
	$('[data-toggle="add"]').tooltip(); 
	$('[data-toggle="delete"]').tooltip();



	/* incre and decrement */
	var quantitiy=0;
	var qty=0;
	$('.quantity-right-plus').click(function(e){

        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined

        $('#quantity').val(quantity + 1);

            // Increment

        });

	$('.quantity-right-plus-update').click(function(e){

        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var qty = parseInt($('#quantityupdate').val());
        
        // If is not undefined

        $('#quantityupdate').val(qty + 1);

            // Increment

        });
	$('.spinner-plus').click(function(e){

        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var qty1 = parseInt($('#spinner').val());
        
        // If is not undefined

        $('#spinner').val(qty1 + 1);

            // Increment

        });

	$('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined

            // Increment
            if(quantity>0){
            	$('#quantity').val(quantity - 1);
            }
        });
	$('.quantity-left-minus-update').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var qty = parseInt($('#quantityupdate').val());
        
        // If is not undefined

            // Increment
            if(qty>0){
            	$('#quantityupdate').val(qty - 1);
            }
        });
	$('.spinner-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var qty = parseInt($('#spinner').val());
        
        // If is not undefined

            // Increment
            if(qty>0){
            	$('#spinner').val(qty - 1);
            }
        });
});

