$(document).ready(function(){

	$("#btnDelete").click(function(){
		$("#sssdelete").modal({show: true});

	});
	$("#btn-newphil").click(function(){
		$("#addphil").modal({show: true});

	});
	$("#btn-newsss").click(function(){
		$("#addsss").modal({show: true});

	});
	$("#btn-selectemp").click(function(){
		$("#selectemp").modal({show: true});

	});

	$('[data-toggle="tooltip"]').tooltip();   

	$("#logout").click(function(){
				const toast = swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000
		});
		toast({
			type: 'warning',
			title: 'Signing out successfully'
		})
		$('#loader-modal').modal('show');
		setTimeout(function() {
			window.location.href = URL + 'home/logout';
		}, 2400);
	} )
	$("#logout2").click(function(){
				const toast = swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000
		});
		toast({
			type: 'warning',
			title: 'Signing out successfully'
		})
		$('#loader-modal').modal('show');
		setTimeout(function() {
			window.location.href = URL + 'home/logout';
		}, 2400);
	} )

	$("#EmployeeMastersave").click(function(){
		const toast = swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000
		});
		toast({
			type: 'success',
			title: 'Successfully added'
		})
		$('#loader-modal').modal('show');
		setTimeout(function() {
			window.location.href = URL + 'dashboard/EmployeeFile';
		}, 700);
	} )
	$("#Companysave").click(function(){
		const toast = swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000
		});
		toast({
			type: 'success',
			title: 'Settings saved'
		})
		
		$('#loader-modal').modal('show');
		setTimeout(function() {
			window.location.href = URL + 'dashboard';
		}, 2000);
	} )
	$("#PayrollEmployeeDetails").click(function(){
		$('#loader-modal').modal('show');
		setTimeout(function() {
			window.location.href = URL + 'payroll/payrolltimesheet';
		}, 400);
	} )
});

