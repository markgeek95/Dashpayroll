<?php if(Session::has('swal')): ?>
    <script>

        alert( <?php echo e(Session::get('swal.0')); ?> );

        var color = 'success';

        Swal({
            position: 'top-end',
            type: this.color,
            title: 'ewqeqwe',
            showConfirmButton: false,
            timer: 1500
        })

    </script>
<?php endif; ?>