<?php if(Session::has('toastr')): ?>
    <script>

        const toast = swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 6000
        });

        toast({
            type: "<?php echo e(Session::get('toastr.0')); ?>",
            title: "<?php echo e(Session::get('toastr.1')); ?>"
        })

        var msg = new SpeechSynthesisUtterance();
        msg.text = "<?php echo e(Session::get('toastr.1')); ?>";
        window.speechSynthesis.speak(msg);

    </script>
<?php endif; ?>
